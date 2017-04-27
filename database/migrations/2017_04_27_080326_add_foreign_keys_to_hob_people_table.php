<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHobPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hob_people', function(Blueprint $table)
		{
			$table->foreign('city_id', 'fk_hob_people_hob_cities1')->references('id')->on('hob_cities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hob_people', function(Blueprint $table)
		{
			$table->dropForeign('fk_hob_people_hob_cities1');
		});
	}

}
