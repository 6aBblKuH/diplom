<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingAudiencesIdToSchedule extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('schedules', function(Blueprint $table)
        {
            $table->integer('audience_id')->unsigned();
            $table->foreign('audience_id')->references('id')->on('audiences');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('schedules', function(Blueprint $table)
        {
            $table->dropColumn('audience_id');
        });
	}

}
