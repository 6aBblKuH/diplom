<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Schedules extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedules', function(Blueprint $table)
        {
            $table->increments('id');
            $table->enum('day_of_week', array('Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П`ятниця'));
            $table->integer('lesson_id')->unsigned();
            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->enum('lesson_order', array('1', '2', '3', '4', '5', '6'));
            $table->enum('lesson_type', array('Л', 'П', 'Лр'));
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
        Schema::drop('schedules');
    }

}
