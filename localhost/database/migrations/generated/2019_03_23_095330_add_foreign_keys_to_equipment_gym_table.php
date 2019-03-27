<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquipmentGymTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equipment_gym', function(Blueprint $table)
		{
			$table->foreign('equipment_id')->references('id')->on('equipments')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('gym_id')->references('id')->on('gyms')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equipment_gym', function(Blueprint $table)
		{
			$table->dropForeign('equipment_gym_equipment_id_foreign');
			$table->dropForeign('equipment_gym_gym_id_foreign');
		});
	}

}
