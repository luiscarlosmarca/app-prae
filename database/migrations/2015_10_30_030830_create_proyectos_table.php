<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string    ('nombre');
			$table->string    ('imagen');
			$table->string    ('justificacion');
			
			$table->integer   ('id_coordinador')->unsigned();
		
			$table->enum      ('ciudad',['La Dorada','Norcasia','Manizales','Medellin','Bogota']);
			$table->string    ('lugarEjecucion');
			$table->date  	  ('feEjecucion');
            $table->mediumText	('observaciones')->nullable();
			$table->timestamps();

			

			$table->foreign('id_coordinador')
				  ->references('id')
				  ->on('integrantes')
				  ->onUpdate('cascade')
				  ->onDelete('cascade');


			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proyectos');
	}

}
