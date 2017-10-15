<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use App\Rol;
use App\User;


class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  {

		$this->call('RolTableSeeder');
        $this->call('UserTableSeeder');
    }
}



class RolTableSeeder extends Seeder{

    public function run() {

        // DB::table('role')->truncate();

        Rol::create([
            'id_rol'            => 1,
            'nombre'	        => 'Root',
            'descripcion'       => 'Todos los permisos del sistema'
        ]);

        Rol::create([
            'id_rol'            => 4,
            'nombre'	        => 'Administrador General',
            'descripcion'	    => 'Usuario con rol de de super Admin'
        ]);

        Rol::create([
            'id_rol'            => 5,
            'nombre'	        => 'Administrador',
            'descripcion'	    => 'Usuario con rol de admin'
        ]);
	}
}

class UserTableSeeder extends Seeder {

    public function run() {
        
        User::create([
            'id'		    	=> 1,
			'name'			    => 'Manuel Perez Silva',
            'email'       	    => 'ma.sperezsilva@gmail.com',
            'password'       	=> bcrypt('123456'),
            'rol_id'        	=> 1
        ]);
    }

}

