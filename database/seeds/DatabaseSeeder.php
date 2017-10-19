<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use App\Rol;
use App\User;
use App\Carrera;
use App\Sede;
use App\Horario;
use App\Evento;
use App\Actividad;
use App\ActividadEvento;


class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  {

		$this->call('RolTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('SedeTableSeeder');
        $this->call('EventoTableSeeder');
        $this->call('HorarioTableSeeder');
        $this->call('CarreraTableSeeder');       
        $this->call('ActividadTableSeeder');
        $this->call('ActividadEventoTableSeeder');

    }
}



class RolTableSeeder extends Seeder{

    public function run() {

        // DB::table('role')->truncate(),

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
    
         User::create([
            'id'                => 2,
            'name'              => 'Daniela Salinas',
            'email'             => 'daniela.salinas@usm.cl',
            'password'          => bcrypt('123456'),
            'rol_id'            => 1
        ]);

          User::create([
            'id'                => 3,
            'name'              => 'Muguette Lagos',
            'email'             => 'muguette.lagos@usm.cl',
            'password'          => bcrypt('123456'),
            'rol_id'            => 1
        ]);
        
        User::create([
            'id'                => 4,
            'name'              => 'Puertas Abiertas Uno',
            'email'             => 'ppaa1@usm.cl',
            'password'          => bcrypt('123456'),
            'rol_id'            => 1
        ]);

        User::create([
            'id'                => 5,
            'name'              => 'Puertas Abiertas Dos',
            'email'             => 'ppaa2@usm.cl',
            'password'          => bcrypt('123456'),
            'rol_id'            => 1
        ]);

        User::create([
            'id'                => 6,
            'name'              => 'Puertas Abiertas Dos',
            'email'             => 'ppaa3@usm.cl',
            'password'          => bcrypt('123456'),
            'rol_id'            => 1
        ]);
    }

}



class SedeTableSeeder extends Seeder {

    public function run() {
        
        Sede::create([
            'id_sede'           => 1,
            'nombre_sede'       => 'Campus San Joaquín',
            'direccion'         => 'Avda. Vicuña Mackenna 3939, San Joaquín, Santiago',
            'email'             => 'comunicaciones-cs-sj@usm.cl',
            'telefono'          => '+56 2 2303 7000'
        ]);

        Sede::create([
            'id_sede'           => 2,
            'nombre_sede'       => 'Campus Vitacura',
            'direccion'         => 'Avda. Santa María 6400, Vitacura, Santiago',
            'email'             => 'comunicaciones-cs-v@usm.cl',
            'telefono'          => '+56 2 3202 8000'
        ]);
       
        Sede::create([
            'id_sede'           => 3,
            'nombre_sede'       => 'Casa Central',
            'direccion'         => 'Avenida España 1680, Valparaíso',
            'email'             => 'dgc@usm.cl',
            'telefono'          => '+56 32 2654000'
        ]);
       
    }

}


class EventoTableSeeder extends Seeder {

    public function run() {
        
        Evento::create([
            'id_evento'           => 1,
            'nombre_evento'       => 'Puertas Abiertas San Joaquín Día Viernes',
            'sede_id'             => 1
        ]);

        Evento::create([
            'id_evento'           => 2,
            'nombre_evento'       => 'Puertas Abiertas San Joaquín Día Sábado',
            'sede_id'             => 1
        ]);

        Evento::create([
            'id_evento'           => 3,
            'nombre_evento'       => 'Puertas Abiertas Vitacura Día Jueves',
            'sede_id'             => 2
        ]);



    }

}


class HorarioTableSeeder extends Seeder {

    public function run() {
        
        Horario::create([
            'id_horario'          => 1,
            'nombre'              => 'Primer Horario',
            'horario'             => '10:00:00'
        ]);

        Horario::create([
            'id_horario'          => 2,
            'nombre'              => 'Segundo Horario',
            'horario'             => '10:30:00'
        ]);

        Horario::create([
            'id_horario'          => 3,
            'nombre'              => 'Tercer Horario',
            'horario'             => '11:00:00'
        ]);

        Horario::create([
            'id_horario'          => 4,
            'nombre'              => 'Cuarto Horario',
            'horario'             => '11:30:00'
        ]);

        Horario::create([
            'id_horario'          => 5,
            'nombre'              => 'Quinto Horario',
            'horario'             => '12:00:00'
        ]);

        Horario::create([
            'id_horario'          => 6,
            'nombre'              => 'Sexto Horario',
            'horario'             => '12:30:00'
        ]);

        Horario::create([
            'id_horario'          => 7,
            'nombre'              => 'Séptimo Horario',
            'horario'             => '13:00:00'
        ]);

        Horario::create([
            'id_horario'          => 8,
            'nombre'              => 'Octavo Horario',
            'horario'             => '13:30:00'
        ]);

        Horario::create([
            'id_horario'          => 9,
            'nombre'              => 'Noveno Horario',
            'horario'             => '14:00:00'
        ]);

        Horario::create([
            'id_horario'          => 10,
            'nombre'              => 'Décimo Horario',
            'horario'             => '14:30:00'
        ]);

        Horario::create([
            'id_horario'          => 11,
            'nombre'              => 'Undécimo Horario',
            'horario'             => '15:00:00'
        ]);

        Horario::create([
            'id_horario'          => 12,
            'nombre'              => 'Duodécimo Horario',
            'horario'             => '15:30:00'
        ]);

        Horario::create([
            'id_horario'          => 13,
            'nombre'              => 'Decimotercer Horario',
            'horario'             => '16:00:00'
        ]);

        Horario::create([
            'id_horario'          => 14,
            'nombre'              => 'Decimocuarto Horario',
            'horario'             => '16:30:00'
        ]);

        Horario::create([
            'id_horario'          => 15,
            'nombre'              => 'Decimoquinto Horario',
            'horario'             => '17:00:00'
        ]);

        Horario::create([
            'id_horario'          => 16,
            'nombre'              => 'Decimosexto Horario',
            'horario'             => '17:30:00'
        ]);

        Horario::create([
            'id_horario'          => 17,
            'nombre'              => 'Decimosétimo Horario',
            'horario'             => '18:00:00'
        ]);

        Horario::create([
            'id_horario'          => 18,
            'nombre'              => 'Decimooctavo Horario',
            'horario'             => '18:30:00'
        ]);

        Horario::create([
            'id_horario'          => 19,
            'nombre'              => 'Decimonoveno Horario',
            'horario'             => '19:00:00'
        ]);

        Horario::create([
            'id_horario'          => 20,
            'nombre'              => 'Vigésimo Horario',
            'horario'             => '19:30:00'
        ]);

        Horario::create([
            'id_horario'          => 21,
            'nombre'              => 'Vigésimoprimer Horario',
            'horario'             => '20:00:00'
        ]);

        Horario::create([
            'id_horario'          => 22,
            'nombre'              => 'Vigésimosegundo Horario',
            'horario'             => '20:30:00'
        ]);

    }

}


class CarreraTableSeeder extends Seeder {

    public function run() {
        
        Carrera::create([
            'id_carrera'          => 1,
            'nombre_carrera'      => 'Ingeniería Civil',
            'sede_id'             => 1
        ]);


        Carrera::create([
            'id_carrera'          => 2,
            'nombre_carrera'      => 'Ingeniería Civil Eléctrica',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 3,
            'nombre_carrera'      => 'Ingeniería Civil Informática',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 4,
            'nombre_carrera'      => 'Ingeniería Civil Matemática',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 5,
            'nombre_carrera'      => 'Ingeniería Civil Mecánica',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 6,
            'nombre_carrera'      => 'Ingeniería Civil de Minas',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 7,
            'nombre_carrera'      => 'Ingeniería Civil Química',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 8,
            'nombre_carrera'      => 'Ingeniería Civil Plan Común',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 9,
            'nombre_carrera'      => 'Ingeniería en Diseño de Productos',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 10,
            'nombre_carrera'      => 'Ingeniería Civil Industrial',
            'sede_id'             => 2
        ]);

        Carrera::create([
            'id_carrera'          => 11,
            'nombre_carrera'      => 'Ingeniería en Aviación Comercial',
            'sede_id'             => 2
        ]);

        Carrera::create([
            'id_carrera'          => 12,
            'nombre_carrera'      => 'Ingeniería Comercial',
            'sede_id'             => 2
        ]);

        Carrera::create([
            'id_carrera'          => 13,
            'nombre_carrera'      => 'Técnico Universitario en Mantenimiento Aeronáutico',
            'sede_id'             => 2
        ]);


        Carrera::create([
            'id_carrera'          => 14,
            'nombre_carrera'      => 'FabLab USM',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 15,
            'nombre_carrera'      => 'Física USM',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 16,
            'nombre_carrera'      => 'CIAC USM',
            'sede_id'             => 1
        ]);


        Carrera::create([
            'id_carrera'          => 17,
            'nombre_carrera'      => 'Ergon',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 18,
            'nombre_carrera'      => 'Ingeniería Civil Telemática',
            'sede_id'             => 3
        ]);

        Carrera::create([
            'id_carrera'          => 19,
            'nombre_carrera'      => 'Defider',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 20,
            'nombre_carrera'      => 'USM',
            'sede_id'             => 1
        ]);

        Carrera::create([
            'id_carrera'          => 21,
            'nombre_carrera'      => 'Piloto Comercial',
            'sede_id'             => 2
        ]);


        Carrera::create([
            'id_carrera'          => 22,
            'nombre_carrera'      => 'Emprendimiento e Innovación',
            'sede_id'             => 2
        ]);

    }

}


class ActividadTableSeeder extends Seeder {

    public function run() {
        
        Actividad::create([
            'id_actividad'           => 1,
            'nombre_actividad'       => 'Kit Solar',
            'descripcion'            => 'Taller de Kit Solar',
            'tipo_actividad'         => 'Taller', 
            'carrera_id'             => 5           
        ]);
        
        Actividad::create([
            'id_actividad'           => 2,
            'nombre_actividad'       => 'Diseño 3D',
            'descripcion'            => 'Taller de Diseño 3D',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 5            
        ]);

        

        Actividad::create([
            'id_actividad'           => 3,
            'nombre_actividad'       => 'Taller Metalmecánico',
            'descripcion'            => 'Taller Metalmecánico',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 5            
        ]);

        Actividad::create([
            'id_actividad'           => 4,
            'nombre_actividad'       => 'Desarme de bomba',
            'descripcion'            => 'Taller de Desarme de Bomba',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 5            
        ]);

        
        Actividad::create([
            'id_actividad'           => 5,
            'nombre_actividad'       => 'Mi primera página web',
            'descripcion'            => 'Taller de creación de páginas web',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 3            
        ]);

        
        Actividad::create([
            'id_actividad'           => 6,
            'nombre_actividad'       => 'Lego',
            'descripcion'            => 'Taller de Lego',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 3            
        ]);

        
        Actividad::create([
            'id_actividad'           => 7,
            'nombre_actividad'       => 'Taller de Python',
            'descripcion'            => 'Taller de Python',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 3            
        ]);

        
        Actividad::create([
            'id_actividad'           => 8,
            'nombre_actividad'       => 'Taller de adhesivos',
            'descripcion'            => 'Taller de adhesivos',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 7            
        ]);

        Actividad::create([
            'id_actividad'           => 9,
            'nombre_actividad'       => 'Ruta de Química',
            'descripcion'            => 'Taller de Química',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 7            
        ]);

        Actividad::create([
            'id_actividad'           => 10,
            'nombre_actividad'       => 'Preparando Cremas',
            'descripcion'            => 'Taller de preparación de cremas',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 7            
        ]);
        
        Actividad::create([
            'id_actividad'           => 11,
            'nombre_actividad'       => 'Elaborando Shampoo',
            'descripcion'            => 'Taller de preparación de Shampoo',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 7            
        ]);

        Actividad::create([
            'id_actividad'           => 12,
            'nombre_actividad'       => 'Un civil en todas las áreas',
            'descripcion'            => 'Taller de Ing. Civil',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 1            
        ]);

        Actividad::create([
            'id_actividad'           => 13,
            'nombre_actividad'       => 'Rayos y centellas',
            'descripcion'            => 'Taller de Ing. Eléctrica',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 2            
        ]);


        Actividad::create([
            'id_actividad'           => 14,
            'nombre_actividad'       => 'Motores en la red',
            'descripcion'            => 'Taller de Ing. Eléctrica',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 2            
        ]);


        Actividad::create([
            'id_actividad'           => 15,
            'nombre_actividad'       => 'Telarañas en la Red',
            'descripcion'            => 'Taller de Ing. Eléctrica',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 2            
        ]);


        Actividad::create([
            'id_actividad'           => 16,
            'nombre_actividad'       => 'Escalera de Jacob',
            'descripcion'            => 'Taller de Ing. Eléctrica',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 2            
        ]);


        Actividad::create([
            'id_actividad'           => 17,
            'nombre_actividad'       => 'Buscando a Pi',
            'descripcion'            => 'Taller de Ing. Matemática',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 4            
        ]);


        Actividad::create([
            'id_actividad'           => 18,
            'nombre_actividad'       => 'Aquiles y la Tortuga',
            'descripcion'            => 'Taller de Ing. Matemática',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 4            
        ]);

        Actividad::create([
            'id_actividad'           => 19,
            'nombre_actividad'       => 'Extrayendo Minerales ',
            'descripcion'            => 'Taller de Ing. en Minas',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 6            
        ]);


        Actividad::create([
            'id_actividad'           => 20,
            'nombre_actividad'       => 'Masticando Rocas',
            'descripcion'            => 'Taller de Ing. en Minas',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 6            
        ]);


        Actividad::create([
            'id_actividad'           => 21,
            'nombre_actividad'       => 'En busca del cobre',
            'descripcion'            => 'Taller de Ing. en Minas',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 6            
        ]);


        Actividad::create([
            'id_actividad'           => 22,
            'nombre_actividad'       => 'Aplastando la Roca',
            'descripcion'            => 'Taller de Ing. en Minas',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 6            
        ]);


        Actividad::create([
            'id_actividad'           => 23,
            'nombre_actividad'       => 'Capturing fools',
            'descripcion'            => 'Taller de Ing. Comercial',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 12            
        ]);

        Actividad::create([
            'id_actividad'           => 24,
            'nombre_actividad'       => 'Innovación y Emprendimiento en la USM',
            'descripcion'            => 'Taller de Ing. Civil Industrial',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 10            
        ]);

        Actividad::create([
            'id_actividad'           => 25,
            'nombre_actividad'       => 'Fabrica tu avión',
            'descripcion'            => 'Taller de ACA',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 13            
        ]);


        Actividad::create([
            'id_actividad'           => 26,
            'nombre_actividad'       => 'Taller de Arduino',
            'descripcion'            => 'Taller de FabLab',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 14            
        ]);


        Actividad::create([
            'id_actividad'           => 27,
            'nombre_actividad'       => 'Taller de Negocios',
            'descripcion'            => 'Taller de Negocios',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 9            
        ]);


        Actividad::create([
            'id_actividad'           => 28,
            'nombre_actividad'       => 'Taller de Diseño',
            'descripcion'            => 'Taller de Diseño',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 9            
        ]);

        Actividad::create([
            'id_actividad'           => 29,
            'nombre_actividad'       => 'Ingeniero Civil Mecanico: Pasado, presente y futuro',
            'descripcion'            => 'Charla de Mecánica',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 5            
        ]);


        Actividad::create([
            'id_actividad'           => 30,
            'nombre_actividad'       => 'Charla Mitos y verdades sobre la ingeniería Informática',
            'descripcion'            => 'Charla de Informática',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 3            
        ]);


        Actividad::create([
            'id_actividad'           => 31,
            'nombre_actividad'       => 'Mi experiencia en la Universidad',
            'descripcion'            => 'Charla de Química',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 7            
        ]);


        Actividad::create([
            'id_actividad'           => 32,
            'nombre_actividad'       => 'Civil Time',
            'descripcion'            => 'Charla de Civil',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 1            
        ]);

    
        Actividad::create([
            'id_actividad'           => 33,
            'nombre_actividad'       => 'Al infinito y más alla',
            'descripcion'            => 'Charla de Matemática',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 4            
        ]);

        Actividad::create([
            'id_actividad'           => 34,
            'nombre_actividad'       => 'Física de altas energias en la usm',
            'descripcion'            => 'Charla de Física',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 15            
        ]);

        Actividad::create([
            'id_actividad'           => 35,
            'nombre_actividad'       => 'Física de materia condensada',
            'descripcion'            => 'Charla de Física',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 15            
        ]);

        Actividad::create([
            'id_actividad'           => 36,
            'nombre_actividad'       => '¿Qué es el CIAC?',
            'descripcion'            => 'Charla del CIAC',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 16            
        ]);

        Actividad::create([
            'id_actividad'           => 37,
            'nombre_actividad'       => '¿Qué es un Fablab?',
            'descripcion'            => 'Charla del Fablab',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 14            
        ]);

        Actividad::create([
            'id_actividad'           => 38,
            'nombre_actividad'       => 'Mitos de la Ingeniería Civil',
            'descripcion'            => 'Mitos de la Ingeniería Civil',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 1            
        ]);

        Actividad::create([
            'id_actividad'           => 39,
            'nombre_actividad'       => 'El futuro de la Ingeniería Mecánica' ,
            'descripcion'            => 'El futuro de la Ingeniería Mecánica',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 14            
        ]);


        Actividad::create([
            'id_actividad'           => 40,
            'nombre_actividad'       => 'CNC',
            'descripcion'            => 'Muestra de una CNC',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 5            
        ]);

        Actividad::create([
            'id_actividad'           => 41,
            'nombre_actividad'       => 'Cañón de combustión',
            'descripcion'            => 'Muestra de un Cañón de combustión',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 5            
        ]);


        Actividad::create([
            'id_actividad'           => 42,
            'nombre_actividad'       => 'HolSense',
            'descripcion'            => 'Muestra de HolSense',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 3            
        ]);

        Actividad::create([
            'id_actividad'           => 43,
            'nombre_actividad'       => 'Tingo ID',
            'descripcion'            => 'Muestra de Tingo ID',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 3            
        ]);

        Actividad::create([
            'id_actividad'           => 44,
            'nombre_actividad'       => 'Torre de Enfriamineto',
            'descripcion'            => 'Muestra de Torre de enfriamineto',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 7            
        ]);

        Actividad::create([
            'id_actividad'           => 45,
            'nombre_actividad'       => 'Celda de Flotación',
            'descripcion'            => 'Muestra de Celda de flotación  ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 7            
        ]);



        Actividad::create([
            'id_actividad'           => 46,
            'nombre_actividad'       => 'Canal Hidráulico',
            'descripcion'            => 'Muestra de Canal Hidráulico      ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 1            
        ]);

        Actividad::create([
            'id_actividad'           => 47,
            'nombre_actividad'       => 'Licuefacción de Suelos',
            'descripcion'            => 'Muestra de Licuefacción de Suelos ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 1            
        ]);

        Actividad::create([
            'id_actividad'           => 48,
            'nombre_actividad'       => 'Van de Graaff',
            'descripcion'            => 'Muestra de Van de Graaff  ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 2            
        ]);

        Actividad::create([
            'id_actividad'           => 49,
            'nombre_actividad'       => 'Mini Bobina de Tesla',
            'descripcion'            => 'Muestra de Mini Bobina de Tesla  ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 2            
        ]);

        Actividad::create([
            'id_actividad'           => 50,
            'nombre_actividad'       => 'Bicicleta de generación Eléctrica 3.0',
            'descripcion'            => 'Muestra de generación eléctrica  ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 2            
        ]);

        Actividad::create([
            'id_actividad'           => 51,
            'nombre_actividad'       => 'Bobinas Flotantes',
            'descripcion'            => 'Muestra de Bobinas Flotantes  ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 2            
        ]);

        Actividad::create([
            'id_actividad'           => 52,
            'nombre_actividad'       => 'Escalera de jacob',
            'descripcion'            => 'Muestra de Escalera de jacob  ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 2            
        ]);


        Actividad::create([
            'id_actividad'           => 53,
            'nombre_actividad'       => 'Competencia de dados',
            'descripcion'            => 'Muestra de Competencia de dados ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 4            
        ]);

        Actividad::create([
            'id_actividad'           => 54,
            'nombre_actividad'       => 'Pendulo dobles',
            'descripcion'            => 'Muestra de Pendulo doble ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 4            
        ]);

        Actividad::create([
            'id_actividad'           => 55,
            'nombre_actividad'       => 'Maquina de galton' ,
            'descripcion'            => 'Muestra de Maquina de galton ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 4            
        ]);

        Actividad::create([
            'id_actividad'           => 56,
            'nombre_actividad'       => 'Molino de Bolas' ,
            'descripcion'            => 'Muestra de Molino de Bolas ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 6            
        ]);

        Actividad::create([
            'id_actividad'           => 57,
            'nombre_actividad'       => 'Lupa y Muestra de Minerales' ,
            'descripcion'            => 'Muestra de Lupa y Muestra de Minerales ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 6            
        ]);

        Actividad::create([
            'id_actividad'           => 58,
            'nombre_actividad'       => 'El Departamento de Física' ,
            'descripcion'            => 'Muestra del Departamento de Física ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 15            
        ]);


        Actividad::create([
            'id_actividad'           => 59,
            'nombre_actividad'       => 'Líderes de Mañana' ,
            'descripcion'            => 'Muestra de Líderes del Mañana ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 12            
        ]);


        Actividad::create([
            'id_actividad'           => 60,
            'nombre_actividad'       => 'Clasificador Óptico' ,
            'descripcion'            => 'Muestra de Clasificador Óptico ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 10            
        ]);

        Actividad::create([
            'id_actividad'           => 61,
            'nombre_actividad'       => 'Tecnologías Interactivas' ,
            'descripcion'            => 'Muestra de Tecnologías Interactivas ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 18            
        ]);


        Actividad::create([
            'id_actividad'           => 62,
            'nombre_actividad'       => 'Ergon' ,
            'descripcion'            => 'Muestra de Ergon ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 17            
        ]);



        Actividad::create([
            'id_actividad'           => 63,
            'nombre_actividad'       => 'Defider' ,
            'descripcion'            => 'Muestra de Defider ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 19            
        ]);


        Actividad::create([
            'id_actividad'           => 64,
            'nombre_actividad'       => 'Stand Saludable' ,
            'descripcion'            => 'Muestra de Stand Saludable ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 19            
        ]);

        Actividad::create([
            'id_actividad'           => 65,
            'nombre_actividad'       => 'FabLab USM' ,
            'descripcion'            => 'Muestra de Fablab USM ',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 14            
        ]);

        Actividad::create([
            'id_actividad'           => 66,
            'nombre_actividad'       => 'Marketing Digital' ,
            'descripcion'            => 'Taller de Marketing Digital',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 12            
        ]);


        Actividad::create([
            'id_actividad'           => 67,
            'nombre_actividad'       => 'Vuelo Estacionario' ,
            'descripcion'            => 'Taller de Vuelo Estacionario',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 21            
        ]);


        Actividad::create([
            'id_actividad'           => 68,
            'nombre_actividad'       => 'Juego de Emprendimiento' ,
            'descripcion'            => 'Juego de Emprendimiento',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 12            
        ]);


        Actividad::create([
            'id_actividad'           => 69,
            'nombre_actividad'       => 'Electrónica Aeronáutica' ,
            'descripcion'            => 'Taller de Electrónica Aeronáutica',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 13            
        ]);


        Actividad::create([
            'id_actividad'           => 70,
            'nombre_actividad'       => 'Ruta de Física' ,
            'descripcion'            => 'Ruta de Física',
            'tipo_actividad'         => 'Ruta',
            'carrera_id'             => 15            
        ]);


        Actividad::create([
            'id_actividad'           => 71,
            'nombre_actividad'       => 'Zona de Emprendedores' ,
            'descripcion'            => 'Zona de Emprendedores',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 22            
        ]);


        Actividad::create([
            'id_actividad'           => 72,
            'nombre_actividad'       => 'Satélites de Observación' ,
            'descripcion'            => 'Satélites de Observación',
            'tipo_actividad'         => 'Muestra',
            'carrera_id'             => 11            
        ]);


        Actividad::create([
            'id_actividad'           => 73,
            'nombre_actividad'       => 'Cuestión de Talentos' ,
            'descripcion'            => 'Cuestión de Talentos',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 12            
        ]);


        Actividad::create([
            'id_actividad'           => 74,
            'nombre_actividad'       => 'Simulación de Procesos Productivos' ,
            'descripcion'            => 'Simulación de Procesos Productivos',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 10            
        ]);
        

        Actividad::create([
            'id_actividad'           => 75,
            'nombre_actividad'       => 'Autos Solares',
            'descripcion'            => 'Autos Solares',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 10            
        ]);
        
        Actividad::create([
            'id_actividad'           => 76,
            'nombre_actividad'       => 'Juego de la Bolsa',
            'descripcion'            => 'Juego de la Bolsa',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 10            
        ]);


        Actividad::create([
            'id_actividad'           => 77,
            'nombre_actividad'       => 'Desafíos de Física',
            'descripcion'            => 'Desafíos de Física',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 14            
        ]);


        Actividad::create([
            'id_actividad'           => 78,
            'nombre_actividad'       => 'Aerolíneas Low cost',
            'descripcion'            => 'Aerolíneas Low cost',
            'tipo_actividad'         => 'Charla',
            'carrera_id'             => 11            
        ]);

        Actividad::create([
            'id_actividad'           => 79,
            'nombre_actividad'       => 'Planifica tu Vuelo',
            'descripcion'            => 'Planifica tu Vuelo',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 21            
        ]);
       
        Actividad::create([
            'id_actividad'           => 80,
            'nombre_actividad'       => 'Innovación y Emprendimiento en la Red',
            'descripcion'            => 'Innovación y Emprendimiento en la Red',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 10            
        ]);
       
        Actividad::create([
            'id_actividad'           => 81,
            'nombre_actividad'       => 'Taller de Producción',
            'descripcion'            => 'Taller de Producción',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 10            
        ]);
       
        Actividad::create([
            'id_actividad'           => 82,
            'nombre_actividad'       => 'Formación de Piloto',
            'descripcion'            => 'Formación de Piloto',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 21            
        ]);
       
        Actividad::create([
            'id_actividad'           => 83,
            'nombre_actividad'       => 'Aeronáutica y Espacio' ,
            'descripcion'            => 'Aeronáutica y Espacio',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 11            
        ]);

        Actividad::create([
            'id_actividad'           => 84,
            'nombre_actividad'       => 'Taller de Emprendimiento' ,
            'descripcion'            => 'Taller de Emprendimiento',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 22            
        ]);



        Actividad::create([
            'id_actividad'           => 85,
            'nombre_actividad'       => 'Ensayo PSU de Matemáticas' ,
            'descripcion'            => 'Ensayo PSU',
            'tipo_actividad'         => 'Taller',
            'carrera_id'             => 20            
        ]);

  
     }


}




class ActividadEventoTableSeeder extends Seeder{

    public function run() {

        // DB::table('role')->truncate(),

        ActividadEvento::create([

            'id_actividad_evento'    => 1,
            'actividad_id'           => 66,
            'evento_id'              => 3,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 2,
            'actividad_id'           => 67,
            'evento_id'              => 3,

            'cupos'                  => 84,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 3,
            'actividad_id'           => 24,
            'evento_id'              => 3,

            'cupos'                  => 128,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 4,
            'actividad_id'           => 68,
            'evento_id'              => 3,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 5,
            'actividad_id'           => 25,
            'evento_id'              => 3,

            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 6,
            'actividad_id'           => 9,
            'evento_id'              => 3,

            'cupos'                  => 24,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 7,
            'actividad_id'           => 69,
            'evento_id'              => 3,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 8,
            'actividad_id'           => 70,
            'evento_id'              => 3,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 9,
            'actividad_id'           => 71,
            'evento_id'              => 3,

            'cupos'                  => 60,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 4,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 10,
            'actividad_id'           => 72,
            'evento_id'              => 3,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 4,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 11,
            'actividad_id'           => 73,
            'evento_id'              => 3,

            'cupos'                  => 110,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 12,
            'actividad_id'           => 74,
            'evento_id'              => 3,

            'cupos'                  => 90,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 8,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 13,
            'actividad_id'           => 68,
            'evento_id'              => 3,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);




        ActividadEvento::create([

            'id_actividad_evento'    => 14,
            'actividad_id'           => 75,
            'evento_id'              => 3,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 8,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 15,
            'actividad_id'           => 76,
            'evento_id'              => 3,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 16,
            'actividad_id'           => 28,
            'evento_id'              => 3,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 17,
            'actividad_id'           => 78,
            'evento_id'              => 3,

            'cupos'                  => 80,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 18,
            'actividad_id'           => 79,
            'evento_id'              => 3,

            'cupos'                  => 50,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 19,
            'actividad_id'           => 25,
            'evento_id'              => 3,

            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 20,
            'actividad_id'           => 9,
            'evento_id'              => 3,

            'cupos'                  => 24,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 21,
            'actividad_id'           => 69,
            'evento_id'              => 3,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 22,
            'actividad_id'           => 70,
            'evento_id'              => 3,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 23,
            'actividad_id'           => 84,
            'evento_id'              => 3,

            'cupos'                  => 100,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 8,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 24,
            'actividad_id'           => 71,
            'evento_id'              => 3,

            'cupos'                  => 60,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 9,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 25,
            'actividad_id'           => 72,
            'evento_id'              => 3,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 26,
            'actividad_id'           => 80,
            'evento_id'              => 3,

            'cupos'                  => 90,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 12,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 27,
            'actividad_id'           => 68,
            'evento_id'              => 3,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 28,
            'actividad_id'           => 75,
            'evento_id'              => 3,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 12,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 29,
            'actividad_id'           => 81,
            'evento_id'              => 3,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 30,
            'actividad_id'           => 27,
            'evento_id'              => 3,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 31,
            'actividad_id'           => 79,
            'evento_id'              => 3,

            'cupos'                  => 50,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 32,
            'actividad_id'           => 25,
            'evento_id'              => 3,

            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 33,
            'actividad_id'           => 72,
            'evento_id'              => 3,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 34,
            'actividad_id'           => 9,
            'evento_id'              => 3,

            'cupos'                  => 24,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 35,
            'actividad_id'           => 70,
            'evento_id'              => 3,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 36,
            'actividad_id'           => 69,
            'evento_id'              => 3,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 37,
            'actividad_id'           => 84,
            'evento_id'              => 3,

            'cupos'                  => 100,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 12,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 38,
            'actividad_id'           => 71,
            'evento_id'              => 3,

            'cupos'                  => 60,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 13,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 39,
            'actividad_id'           => 82,
            'evento_id'              => 3,

            'cupos'                  => 60,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 12,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 40,
            'actividad_id'           => 83,
            'evento_id'              => 3,

            'cupos'                  => 80,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);

        // SJ

        ActividadEvento::create([

            'id_actividad_evento'    => 41,
            'actividad_id'           => 1,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);

         ActividadEvento::create([

            'id_actividad_evento'    => 42,
            'actividad_id'           => 5,
            'evento_id'              => 1,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 43,
            'actividad_id'           => 7,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 44,
            'actividad_id'           => 9,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 2,
            'hora_termino_id'        => 4,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 45,
            'actividad_id'           => 12,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 46,
            'actividad_id'           => 13,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 2,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 47,
            'actividad_id'           => 14,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 2,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 48,
            'actividad_id'           => 15,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 2,
            'hora_termino_id'        => 4,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 49,
            'actividad_id'           => 33,
            'evento_id'              => 1,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 2,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 50,
            'actividad_id'           => 17,
            'evento_id'              => 1,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 2,
            'hora_termino_id'        => 5,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 51,
            'actividad_id'           => 22,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 2,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 52,
            'actividad_id'           => 19,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 2,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 53,
            'actividad_id'           => 20,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 2,
            'hora_termino_id'        => 4,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 54,
            'actividad_id'           => 70,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 55,
            'actividad_id'           => 28,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 4,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 56,
            'actividad_id'           => 26,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 7,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 57,
            'actividad_id'           => 2,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 3,
            'hora_termino_id'        => 5,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 58,
            'actividad_id'           => 3,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 4,
            'hora_termino_id'        => 6,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 59,
            'actividad_id'           => 6,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 3,
            'hora_termino_id'        => 5,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 60,
            'actividad_id'           => 9,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 3,
            'hora_termino_id'        => 5,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 61,
            'actividad_id'           => 12,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 4,
            'hora_termino_id'        => 6,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 62,
            'actividad_id'           => 13,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 4,
            'hora_termino_id'        => 5,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 63,
            'actividad_id'           => 14,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 4,
            'hora_termino_id'        => 5,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 64,
            'actividad_id'           => 21,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 4,
            'hora_termino_id'        => 5,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 65,
            'actividad_id'           => 22,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 4,
            'hora_termino_id'        => 5,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 66,
            'actividad_id'           => 19,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 4,
            'hora_termino_id'        => 5,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 67,
            'actividad_id'           => 36,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 4,
            'hora_termino_id'        => 5,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 68,
            'actividad_id'           => 68,
            'evento_id'              => 1,

            'cupos'                  => -1,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 3,
            'hora_termino_id'        => 5,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 69,
            'actividad_id'           => 70,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 3,
            'hora_termino_id'        => 5,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 70,
            'actividad_id'           => 27,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 4,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 71,
            'actividad_id'           => 1,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 72,
            'actividad_id'           => 8,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 73,
            'actividad_id'           => 5,
            'evento_id'              => 1,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 74,
            'actividad_id'           => 7,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 75,
            'actividad_id'           => 15,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 76,
            'actividad_id'           => 20,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 77,
            'actividad_id'           => 25,
            'evento_id'              => 1,

            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 78,
            'actividad_id'           => 70,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 79,
            'actividad_id'           => 26,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 13,

        ]);




        ActividadEvento::create([

            'id_actividad_evento'    => 80,
            'actividad_id'           => 2,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 9,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 81,
            'actividad_id'           => 9,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 9,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 82,
            'actividad_id'           => 33,
            'evento_id'              => 1,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 8,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 83,
            'actividad_id'           => 12,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 8,
            'hora_termino_id'        => 10,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 84,
            'actividad_id'           => 13,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 8,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 85,
            'actividad_id'           => 14,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 8,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 86,
            'actividad_id'           => 15,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 8,
            'hora_termino_id'        => 10,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 87,
            'actividad_id'           => 18,
            'evento_id'              => 1,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 8,
            'hora_termino_id'        => 11,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 88,
            'actividad_id'           => 21,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 8,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 89,
            'actividad_id'           => 19,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 8,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 90,
            'actividad_id'           => 20,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 8,
            'hora_termino_id'        => 10,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 91,
            'actividad_id'           => 28,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 10,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 92,
            'actividad_id'           => 1,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 93,
            'actividad_id'           => 5,
            'evento_id'              => 1,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 94,
            'actividad_id'           => 7,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 95,
            'actividad_id'           => 9,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 96,
            'actividad_id'           => 13,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 97,
            'actividad_id'           => 14,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 11,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 98,
            'actividad_id'           => 21,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 99,
            'actividad_id'           => 22,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 100,
            'actividad_id'           => 3,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 101,
            'actividad_id'           => 36,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 102,
            'actividad_id'           => 27,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 13,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 103,
            'actividad_id'           => 25,
            'evento_id'              => 1,

            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 104,
            'actividad_id'           => 70,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 105,
            'actividad_id'           => 68,
            'evento_id'              => 1,

            'cupos'                  => -1,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 106,
            'actividad_id'           => 4,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 107,
            'actividad_id'           => 3,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 108,
            'actividad_id'           => 6,
            'evento_id'              => 1,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 109,
            'actividad_id'           => 12,
            'evento_id'              => 1,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 110,
            'actividad_id'           => 10,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 111,
            'actividad_id'           => 15,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 112,
            'actividad_id'           => 20,
            'evento_id'              => 1,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);


        // SJ 2


        ActividadEvento::create([

            'id_actividad_evento'    => 113,
            'actividad_id'           => 4,
            'evento_id'              => 2,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 114,
            'actividad_id'           => 1,
            'evento_id'              => 2,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 115,
            'actividad_id'           => 5,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);

        
        ActividadEvento::create([

            'id_actividad_evento'    => 116,
            'actividad_id'           => 7,
            'evento_id'              => 2,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);

        
        ActividadEvento::create([

            'id_actividad_evento'    => 117,
            'actividad_id'           => 31,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 118,
            'actividad_id'           => 12,
            'evento_id'              => 2,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);

        
        ActividadEvento::create([

            'id_actividad_evento'    => 119,
            'actividad_id'           => 13,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 6,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 120,
            'actividad_id'           => 14,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 6,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 121,
            'actividad_id'           => 15,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 6,
            'hora_termino_id'        => 8,

        ]);

        
        ActividadEvento::create([

            'id_actividad_evento'    => 122,
            'actividad_id'           => 33,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 6,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 123,
            'actividad_id'           => 17,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 6,
            'hora_termino_id'        => 9,

        ]);

        
        

        ActividadEvento::create([

            'id_actividad_evento'    => 124,
            'actividad_id'           => 22,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 6,

        ]);

        

        ActividadEvento::create([

            'id_actividad_evento'    => 125,
            'actividad_id'           => 19,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 6,

        ]);

        
        ActividadEvento::create([

            'id_actividad_evento'    => 126,
            'actividad_id'           => 20,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 6,
            'hora_termino_id'        => 8,

        ]);

        


        ActividadEvento::create([

            'id_actividad_evento'    => 127,
            'actividad_id'           => 77,
            'evento_id'              => 2,

            'cupos'                  => 50,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 128,
            'actividad_id'           => 68,
            'evento_id'              => 2,

            'cupos'                  => -1,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 6,
            'hora_termino_id'        => 8,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 129,
            'actividad_id'           => 25,
            'evento_id'              => 2,

            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7,

        ]);

        
        ActividadEvento::create([

            'id_actividad_evento'    => 130,
            'actividad_id'           => 37,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 6,

        ]);

    
        ActividadEvento::create([

            'id_actividad_evento'    => 131,
            'actividad_id'           => 2,
            'evento_id'              => 2,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 9,

        ]);

        

        ActividadEvento::create([

            'id_actividad_evento'    => 132,
            'actividad_id'           => 39,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 9,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 133,
            'actividad_id'           => 6,
            'evento_id'              => 2,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 9,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 134,
            'actividad_id'           => 30,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 9,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 135,
            'actividad_id'           => 9,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 9,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 136,
            'actividad_id'           => 32,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 8,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 137,
            'actividad_id'           => 12,
            'evento_id'              => 2,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 10,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 138,
            'actividad_id'           => 22,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 8,
            'hora_termino_id'        => 9,

        ]);


                       
        
        ActividadEvento::create([

            'id_actividad_evento'    => 139,
            'actividad_id'           => 21,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 8,
            'hora_termino_id'        => 9,

        ]);


        
        
        ActividadEvento::create([

            'id_actividad_evento'    => 140,
            'actividad_id'           => 70,
            'evento_id'              => 2,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 8,
            'hora_termino_id'        => 9,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 141,
            'actividad_id'           => 36,
            'evento_id'              => 2,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 8,
            'hora_termino_id'        => 9,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 142,
            'actividad_id'           => 26,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 13,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 143,
            'actividad_id'           => 13,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 8,
            'hora_termino_id'        => 9,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 144,
            'actividad_id'           => 14,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 8,
            'hora_termino_id'        => 10,

        ]);



        ActividadEvento::create([

            'id_actividad_evento'    => 145,
            'actividad_id'           => 28,
            'evento_id'              => 2,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 7,
            'hora_termino_id'        => 10,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 146,
            'actividad_id'           => 4,
            'evento_id'              => 2,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 147,
            'actividad_id'           => 1,
            'evento_id'              => 2,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 148,
            'actividad_id'           => 5,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 149,
            'actividad_id'           => 7,
            'evento_id'              => 2,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 150,
            'actividad_id'           => 9,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        ActividadEvento::create([

            'id_actividad_evento'    => 151,
            'actividad_id'           => 15,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);

        ActividadEvento::create([

            'id_actividad_evento'    => 152,
            'actividad_id'           => 20,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 11,

        ]);


        

        ActividadEvento::create([
            'id_actividad_evento'    => 153,
            'actividad_id'           => 84,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 12,

        ]);

        
        ActividadEvento::create([
            'id_actividad_evento'    => 154,
            'actividad_id'           => 25,
            'evento_id'              => 2,

            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 12,

        ]);

        ActividadEvento::create([
            'id_actividad_evento'    => 155,
            'actividad_id'           => 18,
            'evento_id'              => 2,

            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 9,
            'hora_termino_id'        => 13,

        ]);

        ActividadEvento::create([
            'id_actividad_evento'    => 156,
            'actividad_id'           => 68,
            'evento_id'              => 2,

            'cupos'                  => -1,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 12,

        ]);

        
        ActividadEvento::create([
            'id_actividad_evento'    => 157,
            'actividad_id'           => 27,
            'evento_id'              => 2,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 13,

        ]);


        ActividadEvento::create([
            'id_actividad_evento'    => 158,
            'actividad_id'           => 2,
            'evento_id'              => 2,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);


        ActividadEvento::create([
            'id_actividad_evento'    => 159,
            'actividad_id'           => 6,
            'evento_id'              => 2,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);


        
   
        ActividadEvento::create([
            'id_actividad_evento'    => 160,
            'actividad_id'           => 11,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);



        ActividadEvento::create([
            'id_actividad_evento'    => 161,
            'actividad_id'           => 12,
            'evento_id'              => 2,

            'cupos'                  => 20,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 13,

        ]);



        ActividadEvento::create([
            'id_actividad_evento'    => 162,
            'actividad_id'           => 13,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 12,

        ]);



        ActividadEvento::create([
            'id_actividad_evento'    => 163,
            'actividad_id'           => 14,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 12,

        ]);

        ActividadEvento::create([
            'id_actividad_evento'    => 164,
            'actividad_id'           => 13,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 12,
            'hora_termino_id'        => 13,

        ]);



        ActividadEvento::create([
            'id_actividad_evento'    => 165,
            'actividad_id'           => 14,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 12,
            'hora_termino_id'        => 13,

        ]);

        ActividadEvento::create([
            'id_actividad_evento'    => 166,
            'actividad_id'           => 21,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 12,

        ]);

        ActividadEvento::create([
            'id_actividad_evento'    => 167,
            'actividad_id'           => 19,
            'evento_id'              => 2,

            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 12,

        ]);


        ActividadEvento::create([
            'id_actividad_evento'    => 168,
            'actividad_id'           => 70,
            'evento_id'              => 2,

            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 11,
            'hora_termino_id'        => 12,

        ]);
                                     

        ActividadEvento::create([

            'id_actividad_evento'    => 169,
            'actividad_id'           => 71,
            'evento_id'              => 3,

            'cupos'                  => 60,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 4,
            'hora_termino_id'        => 8,

        ]);

        

        

        
        
                

        
        
        

                       

       

        

        

    }
}
