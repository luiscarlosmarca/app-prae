<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegrantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('integrantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string ('nombre');
			$table->string ('apellido');
			$table->string ('foto');
			
			$table->enum   ('rol',['Profesor','Estudiante','Padre de Familia','Tercero']);
			$table->enum   ('tipoDoc',['Cedula','Tarjeta de identidad','Registro civil']);
			$table->double ('numDoc');
			$table->string ('telefono');
			$table->string ('direccion');
			$table->string ('email');
			

			$table->mediumText	('observaciones')->nullable();
			$table->timestamps();


			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('integrantes');
	}

}
