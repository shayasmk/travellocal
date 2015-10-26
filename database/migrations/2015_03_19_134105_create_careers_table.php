<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('careers', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('name');
			$table->text('address');
			$table->string('city');
			$table->string('country');
                        $table->string('telephone');
                        $table->string('email');
                        $table->string('applied_for');
                        $table->string('file_location');
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
		//
	}

}
