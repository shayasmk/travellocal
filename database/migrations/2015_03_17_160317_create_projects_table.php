<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
                        $table->string('name');
			$table->text('address');
			$table->string('location');
			$table->string('construction_start_date');
                        $table->string('sq_feet');
                        $table->text('overview');
                        $table->string('project_status');
                        $table->text('amenities');
                        $table->string('latitude');
                        $table->string('longitude');
                        $table->string('image_location');
                        $table->string('location_info');
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
		Schema::drop('projects');
	}

}
