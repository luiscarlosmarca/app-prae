<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker; 
class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$faker->seed(40);
		for($i=0; $i<20; $i ++)
		{
			$idintegrantes=\DB::table('integrantes')->insertGetId(array(
				
				'tipoDoc'  		=> $faker->randomElement(['Cedula','Tarjeta de  identidad','Registro civil']),
				'numDoc'       	=> $faker->unique()->numberBetween($min = 100000000, $max = 900000000),
				'nombre'        	=> $faker->firstName,
				'apellido'      	=> $faker->lastName,
				
				'direccion'    		=> $faker->streetAddress,
				'telefono'      	=> $faker->phoneNumber,
				'foto'      	    => "foto.jpg",
				'rol'               => $faker->randomElement(['Profesor','Estudiante','Padre de Familia','Tercero']),
				'observaciones'		=> $faker->paragraph(rand(2,5))
				));


				
				$idproyectos=\DB::table('proyectos')->insertGetId(array(
				
				'nombre'        	=> $faker->firstName,
				'imagen'      	    => "foto.jpg",
				'justificacion'    	=> $faker->paragraph(rand(1,5)),
				
				'id_coordinador'    => $idintegrantes,
				
				'feEjecucion'       => $faker->dateTimeBetween('-2 years', '-1 years')->format('Y-m-d'),
				'lugarEjecucion'	=> "Default",
				'ciudad'            => $faker->randomElement(['La Dorada','Norcasia','Manizales','Medellin','Bogota']),

				'observaciones'		=> $faker->paragraph(rand(2,5))
				));

				

               



       


                

		}
	}

}
 