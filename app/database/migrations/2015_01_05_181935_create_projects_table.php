<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id')->index()->nullable()->unsigned();
			$table->string('company');
			$table->string('service');
			$table->string('details');
			$table->date('date');
			$table->string('amount');
			$table->string('contact_name');
			$table->string('contact_email');
			$table->string('contact_phone');
			$table->string('notes');
			$table->timestamps();

			$table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
