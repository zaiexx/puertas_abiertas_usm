<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Rol;
use Validator;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


use Illuminate\Http\Request;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware($this->guestMiddleware(), ['except' => ['getRegister','postRegister','getLogout']]);
    }

  
    public function getRegister (Guard $auth) {

        $this->auth = $auth;
        if ($this->auth->check() && $this->auth->user()->rol_id == 1) {


            $salida_roles = array();
            $roles = \App\Rol::all();

            foreach ($roles as $rol) {

                if ($rol->nombre != 'Root')
                    $salida_roles[$rol->id_rol] = $rol->nombre;
            }

            return view('auth.register')->with('roles',$salida_roles);

        }else{
            return "No tienes suficientes permisos";
        }

    }


    public function postRegister(Request $request)  {

        $validator = $this->validator($request->all());

        if ($validator->fails()) {

            $this->throwValidationException(
                $request, $validator
            );
        }



        $this->create($request->all());

        return redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
