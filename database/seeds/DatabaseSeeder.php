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
            'nombre_carrera'      => 'Ingeniería Civil en Minas',
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

        Carrera::create([
            'id_carrera'          => 23,
            'nombre_carrera'      => 'Carreras Indeterminadas Vitacura',
            'sede_id'             => 2,
        ]);

        Carrera::create([
            'id_carrera'          => 24,
            'nombre_carrera'      => 'Carreras Indeterminadas San Joaquín',
            'sede_id'             => 1,
        ]);

        Carrera::create([
            'id_carrera'          => 25,
            'nombre_carrera'      => 'ACA',
            'sede_id'             => 2,
        ]);



    }

}


class ActividadTableSeeder extends Seeder {

    public function run() {


        Actividad::create([
            'id_actividad'           => 1,
            'nombre_actividad'       => '¿Leche y Adhesivos?',
            'descripcion'            => '¿Leche y Adhesivos?',
            'tipo_actividad'         => '¿Leche y Adhesivos?',
            'carrera_id'             => 7
        ]);
        Actividad::create([
            'id_actividad'           => 2,
            'nombre_actividad'       => 'Aquiles y la Tortuga',
            'descripcion'            => 'Aquiles y la Tortuga',
            'tipo_actividad'         => 'Aquiles y la Tortuga',
            'carrera_id'             => 4
        ]);
        Actividad::create([
            'id_actividad'           => 3,
            'nombre_actividad'       => 'Autos Hidráulicos',
            'descripcion'            => 'Autos Hidráulicos',
            'tipo_actividad'         => 'Autos Hidráulicos',
            'carrera_id'             => 10
        ]);
        Actividad::create([
            'id_actividad'           => 4,
            'nombre_actividad'       => 'Balsamo Labial',
            'descripcion'            => 'Balsamo Labial',
            'tipo_actividad'         => 'Balsamo Labial',
            'carrera_id'             => 7
        ]);
        Actividad::create([
            'id_actividad'           => 5,
            'nombre_actividad'       => 'Bobina de Tesla',
            'descripcion'            => 'Bobina de Tesla',
            'tipo_actividad'         => 'Bobina de Tesla',
            'carrera_id'             => 2
        ]);
        Actividad::create([
            'id_actividad'           => 6,
            'nombre_actividad'       => 'Burbujas y minerales',
            'descripcion'            => 'Burbujas y minerales',
            'tipo_actividad'         => 'Burbujas y minerales',
            'carrera_id'             => 6
        ]);
        Actividad::create([
            'id_actividad'           => 7,
            'nombre_actividad'       => 'Capturing Fools',
            'descripcion'            => 'Capturing Fools',
            'tipo_actividad'         => 'Capturing Fools',
            'carrera_id'             => 12
        ]);
        Actividad::create([
            'id_actividad'           => 8,
            'nombre_actividad'       => 'Centro de Control de Operaciones',
            'descripcion'            => 'Centro de Control de Operaciones',
            'tipo_actividad'         => 'Centro de Control de Operaciones',
            'carrera_id'             => 25
        ]);
        Actividad::create([
            'id_actividad'           => 9,
            'nombre_actividad'       => 'Charla al infinito y mas alla',
            'descripcion'            => 'Charla al infinito y mas alla',
            'tipo_actividad'         => 'Charla al infinito y mas alla',
            'carrera_id'             => 4
        ]);
        Actividad::create([
            'id_actividad'           => 10,
            'nombre_actividad'       => 'Charla Comercial',
            'descripcion'            => 'Charla Comercial',
            'tipo_actividad'         => 'Charla Comercial',
            'carrera_id'             => 12
        ]);
        Actividad::create([
            'id_actividad'           => 11,
            'nombre_actividad'       => 'Charla Electromovilidad',
            'descripcion'            => 'Charla Electromovilidad',
            'tipo_actividad'         => 'Charla Electromovilidad',
            'carrera_id'             => 5
        ]);
        Actividad::create([
            'id_actividad'           => 12,
            'nombre_actividad'       => 'Charla Industrial',
            'descripcion'            => 'Charla Industrial',
            'tipo_actividad'         => 'Charla Industrial',
            'carrera_id'             => 10
        ]);
        Actividad::create([
            'id_actividad'           => 13,
            'nombre_actividad'       => 'Charla Mi experiencia en Ing Electrica',
            'descripcion'            => 'Charla Mi experiencia en Ing Electrica',
            'tipo_actividad'         => 'Charla Mi experiencia en Ing Electrica',
            'carrera_id'             => 2
        ]);
        Actividad::create([
            'id_actividad'           => 14,
            'nombre_actividad'       => 'Charla programacion competitiva',
            'descripcion'            => 'Charla programacion competitiva',
            'tipo_actividad'         => 'Charla programacion competitiva',
            'carrera_id'             => 3
        ]);
        Actividad::create([
            'id_actividad'           => 15,
            'nombre_actividad'       => 'Charla Rol de la Mujer en la Ing Mec',
            'descripcion'            => 'Charla Rol de la Mujer en la Ing Mec',
            'tipo_actividad'         => 'Charla Rol de la Mujer en la Ing Mec',
            'carrera_id'             => 5
        ]);
        Actividad::create([
            'id_actividad'           => 16,
            'nombre_actividad'       => 'Charla Sansano Controlando Estructuras',
            'descripcion'            => 'Charla Sansano Controlando Estructuras',
            'tipo_actividad'         => 'Charla Sansano Controlando Estructuras',
            'carrera_id'             => 1
        ]);
        Actividad::create([
            'id_actividad'           => 17,
            'nombre_actividad'       => 'Ciudades Inteligentes',
            'descripcion'            => 'Ciudades Inteligentes',
            'tipo_actividad'         => 'Ciudades Inteligentes',
            'carrera_id'             => 23
        ]);
        Actividad::create([
            'id_actividad'           => 18,
            'nombre_actividad'       => 'Controlando el Caos',
            'descripcion'            => 'Controlando el Caos',
            'tipo_actividad'         => 'Controlando el Caos',
            'carrera_id'             => 4
        ]);
        Actividad::create([
            'id_actividad'           => 19,
            'nombre_actividad'       => 'Creando Cremas',
            'descripcion'            => 'Creando Cremas',
            'tipo_actividad'         => 'Creando Cremas',
            'carrera_id'             => 7
        ]);
        Actividad::create([
            'id_actividad'           => 20,
            'nombre_actividad'       => 'Desarma la Bomba',
            'descripcion'            => 'Desarma la Bomba',
            'tipo_actividad'         => 'Desarma la Bomba',
            'carrera_id'             => 5
        ]);
        Actividad::create([
            'id_actividad'           => 21,
            'nombre_actividad'       => 'Desarrollo Aeroespacial',
            'descripcion'            => 'Desarrollo Aeroespacial',
            'tipo_actividad'         => 'Desarrollo Aeroespacial',
            'carrera_id'             => 25
        ]);
        Actividad::create([
            'id_actividad'           => 22,
            'nombre_actividad'       => 'El Rayo de Zeus',
            'descripcion'            => 'El Rayo de Zeus',
            'tipo_actividad'         => 'El Rayo de Zeus',
            'carrera_id'             => 2
        ]);
        Actividad::create([
            'id_actividad'           => 23,
            'nombre_actividad'       => 'Electrocobrecito',
            'descripcion'            => 'Electrocobrecito',
            'tipo_actividad'         => 'Electrocobrecito',
            'carrera_id'             => 6
        ]);
        Actividad::create([
            'id_actividad'           => 24,
            'nombre_actividad'       => 'Electrónica Aeronáutica',
            'descripcion'            => 'Electrónica Aeronáutica',
            'tipo_actividad'         => 'Electrónica Aeronáutica',
            'carrera_id'             => 25
        ]);
        Actividad::create([
            'id_actividad'           => 25,
            'nombre_actividad'       => 'Fabrica tu Avión',
            'descripcion'            => 'Fabrica tu Avión',
            'tipo_actividad'         => 'Fabrica tu Avión',
            'carrera_id'             => 25
        ]);
        Actividad::create([
            'id_actividad'           => 26,
            'nombre_actividad'       => 'Go Up! Experiencia de Mercado',
            'descripcion'            => 'Go Up! Experiencia de Mercado',
            'tipo_actividad'         => 'Go Up! Experiencia de Mercado',
            'carrera_id'             => 23
        ]);
        Actividad::create([
            'id_actividad'           => 27,
            'nombre_actividad'       => 'Industria Aerocomercial',
            'descripcion'            => 'Industria Aerocomercial',
            'tipo_actividad'         => 'Industria Aerocomercial',
            'carrera_id'             => 25
        ]);
        Actividad::create([
            'id_actividad'           => 28,
            'nombre_actividad'       => 'Int. Al análisis y minería de datos en R',
            'descripcion'            => 'Int. Al análisis y minería de datos en R',
            'tipo_actividad'         => 'Int. Al análisis y minería de datos en R',
            'carrera_id'             => 3
        ]);
        Actividad::create([
            'id_actividad'           => 29,
            'nombre_actividad'       => 'Introducción a la minería',
            'descripcion'            => 'Introducción a la minería',
            'tipo_actividad'         => 'Introducción a la minería',
            'carrera_id'             => 6
        ]);
        Actividad::create([
            'id_actividad'           => 30,
            'nombre_actividad'       => 'Juego de la Bolsa',
            'descripcion'            => 'Juego de la Bolsa',
            'tipo_actividad'         => 'Juego de la Bolsa',
            'carrera_id'             => 10
        ]);
        Actividad::create([
            'id_actividad'           => 31,
            'nombre_actividad'       => 'Kit Solar',
            'descripcion'            => 'Kit Solar',
            'tipo_actividad'         => 'Kit Solar',
            'carrera_id'             => 5
        ]);
        Actividad::create([
            'id_actividad'           => 32,
            'nombre_actividad'       => 'Laboratorios Quimica',
            'descripcion'            => 'Laboratorios Quimica',
            'tipo_actividad'         => 'Laboratorios Quimica',
            'carrera_id'             => 24
        ]);
        Actividad::create([
            'id_actividad'           => 33,
            'nombre_actividad'       => 'Martillo de Thor',
            'descripcion'            => 'Martillo de Thor',
            'tipo_actividad'         => 'Martillo de Thor',
            'carrera_id'             => 5
        ]);
        Actividad::create([
            'id_actividad'           => 34,
            'nombre_actividad'       => 'Masticando Rocas',
            'descripcion'            => 'Masticando Rocas',
            'tipo_actividad'         => 'Masticando Rocas',
            'carrera_id'             => 6
        ]);
        Actividad::create([
            'id_actividad'           => 35,
            'nombre_actividad'       => 'Mazmorra de Kithgar',
            'descripcion'            => 'Mazmorra de Kithgar',
            'tipo_actividad'         => 'Mazmorra de Kithgar',
            'carrera_id'             => 3
        ]);
        Actividad::create([
            'id_actividad'           => 36,
            'nombre_actividad'       => 'Mecánico 3D',
            'descripcion'            => 'Mecánico 3D',
            'tipo_actividad'         => 'Mecánico 3D',
            'carrera_id'             => 5
        ]);
        Actividad::create([
            'id_actividad'           => 37,
            'nombre_actividad'       => 'Minecraft, el viaje del heroe',
            'descripcion'            => 'Minecraft, el viaje del heroe',
            'tipo_actividad'         => 'Minecraft, el viaje del heroe',
            'carrera_id'             => 3
        ]);
        Actividad::create([
            'id_actividad'           => 38,
            'nombre_actividad'       => 'Modelamiento Ilógico',
            'descripcion'            => 'Modelamiento Ilógico',
            'tipo_actividad'         => 'Modelamiento Ilógico',
            'carrera_id'             => 4
        ]);
        Actividad::create([
            'id_actividad'           => 39,
            'nombre_actividad'       => 'Planifica tu vuelo',
            'descripcion'            => 'Planifica tu vuelo',
            'tipo_actividad'         => 'Planifica tu vuelo',
            'carrera_id'             => 25
        ]);
        Actividad::create([
            'id_actividad'           => 40,
            'nombre_actividad'       => 'Rocología',
            'descripcion'            => 'Rocología',
            'tipo_actividad'         => 'Rocología',
            'carrera_id'             => 6
        ]);
        Actividad::create([
            'id_actividad'           => 41,
            'nombre_actividad'       => 'Ruta Física',
            'descripcion'            => 'Ruta Física',
            'tipo_actividad'         => 'Ruta Física',
            'carrera_id'             => 24
        ]);
        Actividad::create([
            'id_actividad'           => 42,
            'nombre_actividad'       => 'Ruta Química',
            'descripcion'            => 'Ruta Química',
            'tipo_actividad'         => 'Ruta Química',
            'carrera_id'             => 23
        ]);
        Actividad::create([
            'id_actividad'           => 43,
            'nombre_actividad'       => 'Smart Cities',
            'descripcion'            => 'Smart Cities',
            'tipo_actividad'         => 'Smart Cities',
            'carrera_id'             => 18
        ]);
        Actividad::create([
            'id_actividad'           => 44,
            'nombre_actividad'       => 'Taller de Diseño',
            'descripcion'            => 'Taller de Diseño',
            'tipo_actividad'         => 'Taller de Diseño',
            'carrera_id'             => 23
        ]);
        Actividad::create([
            'id_actividad'           => 45,
            'nombre_actividad'       => 'Taller de Negocios',
            'descripcion'            => 'Taller de Negocios',
            'tipo_actividad'         => 'Taller de Negocios',
            'carrera_id'             => 23
        ]);
        Actividad::create([
            'id_actividad'           => 46,
            'nombre_actividad'       => 'Taller de Tecnologia',
            'descripcion'            => 'Taller de Tecnologia',
            'tipo_actividad'         => 'Taller de Tecnologia',
            'carrera_id'             => 9
        ]);
        Actividad::create([
            'id_actividad'           => 47,
            'nombre_actividad'       => 'Tecnologia Mecanica',
            'descripcion'            => 'Tecnologia Mecanica',
            'tipo_actividad'         => 'Tecnologia Mecanica',
            'carrera_id'             => 5
        ]);
        Actividad::create([
            'id_actividad'           => 48,
            'nombre_actividad'       => 'Termofluidos y Automatizacion',
            'descripcion'            => 'Termofluidos y Automatizacion',
            'tipo_actividad'         => 'Termofluidos y Automatizacion',
            'carrera_id'             => 5
        ]);
        Actividad::create([
            'id_actividad'           => 49,
            'nombre_actividad'       => 'Terra Nov UP',
            'descripcion'            => 'Terra Nov UP',
            'tipo_actividad'         => 'Terra Nov UP',
            'carrera_id'             => 12
        ]);
        Actividad::create([
            'id_actividad'           => 50,
            'nombre_actividad'       => 'Trabajando con las Maquinas',
            'descripcion'            => 'Trabajando con las Maquinas',
            'tipo_actividad'         => 'Trabajando con las Maquinas',
            'carrera_id'             => 2
        ]);
        Actividad::create([
            'id_actividad'           => 51,
            'nombre_actividad'       => 'Turtle, Dibujando patrones',
            'descripcion'            => 'Turtle, Dibujando patrones',
            'tipo_actividad'         => 'Turtle, Dibujando patrones',
            'carrera_id'             => 3
        ]);
        Actividad::create([
            'id_actividad'           => 52,
            'nombre_actividad'       => 'Un civil en todas las areas',
            'descripcion'            => 'Un civil en todas las areas',
            'tipo_actividad'         => 'Un civil en todas las areas',
            'carrera_id'             => 1
        ]);

    }

}




class ActividadEventoTableSeeder extends Seeder{

    public function run() {

        // DB::table('role')->truncate(),

 ActividadEvento::create([
            'id_actividad_evento'    => 1,
            'actividad_id'           => 41,
            'evento_id'              => 3,
            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 2,
            'actividad_id'           => 42,
            'evento_id'              => 3,
            'cupos'                  => 24,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 3,
            'actividad_id'           => 7,
            'evento_id'              => 3,
            'cupos'                  => 60,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 4,
            'actividad_id'           => 25,
            'evento_id'              => 3,
            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 5,
            'actividad_id'           => 39,
            'evento_id'              => 3,
            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 6,
            'actividad_id'           => 30,
            'evento_id'              => 3,
            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 7,
            'actividad_id'           => 17,
            'evento_id'              => 3,
            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 4
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 8,
            'actividad_id'           => 12,
            'evento_id'              => 3,
            'cupos'                  => 128,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 4
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 9,
            'actividad_id'           => 21,
            'evento_id'              => 3,
            'cupos'                  => 84,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 10,
            'actividad_id'           => 24,
            'evento_id'              => 3,
            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 11,
            'actividad_id'           => 45,
            'evento_id'              => 3,
            'cupos'                  => 32,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 1,
            'hora_termino_id'        => 3
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 12,
            'actividad_id'           => 41,
            'evento_id'              => 3,
            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 13,
            'actividad_id'           => 42,
            'evento_id'              => 3,
            'cupos'                  => 24,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 14,
            'actividad_id'           => 39,
            'evento_id'              => 3,
            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 15,
            'actividad_id'           => 7,
            'evento_id'              => 3,
            'cupos'                  => 60,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 16,
            'actividad_id'           => 25,
            'evento_id'              => 3,
            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 17,
            'actividad_id'           => 49,
            'evento_id'              => 3,
            'cupos'                  => 64,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 18,
            'actividad_id'           => 3,
            'evento_id'              => 3,
            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 8
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 19,
            'actividad_id'           => 24,
            'evento_id'              => 3,
            'cupos'                  => 14,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 20,
            'actividad_id'           => 10,
            'evento_id'              => 3,
            'cupos'                  => 128,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 21,
            'actividad_id'           => 27,
            'evento_id'              => 3,
            'cupos'                  => 84,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 22,
            'actividad_id'           => 17,
            'evento_id'              => 3,
            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 8
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 23,
            'actividad_id'           => 26,
            'evento_id'              => 3,
            'cupos'                  => 60,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 24,
            'actividad_id'           => 8,
            'evento_id'              => 3,
            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 25,
            'actividad_id'           => 44,
            'evento_id'              => 3,
            'cupos'                  => 32,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 5,
            'hora_termino_id'        => 7
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 26,
            'actividad_id'           => 41,
            'evento_id'              => 3,
            'cupos'                  => 15,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 12
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 27,
            'actividad_id'           => 42,
            'evento_id'              => 3,
            'cupos'                  => 24,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 12
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 28,
            'actividad_id'           => 39,
            'evento_id'              => 3,
            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 12
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 29,
            'actividad_id'           => 8,
            'evento_id'              => 3,
            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 12
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 30,
            'actividad_id'           => 7,
            'evento_id'              => 3,
            'cupos'                  => 60,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 12
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 31,
            'actividad_id'           => 30,
            'evento_id'              => 3,
            'cupos'                  => 40,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 12
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 32,
            'actividad_id'           => 17,
            'evento_id'              => 3,
            'cupos'                  => 30,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 13
        ]);
        ActividadEvento::create([
            'id_actividad_evento'    => 33,
            'actividad_id'           => 49,
            'evento_id'              => 3,
            'cupos'                  => 64,
            'sobre_cupos'            => 0,
            'hora_inicio_id'         => 10,
            'hora_termino_id'        => 12
        ]);


    }
}
