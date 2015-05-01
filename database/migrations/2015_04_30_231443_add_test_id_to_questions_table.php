<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTestIdToQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('questions', function(Blueprint $table) {
            $table->integer('test_id')->nullable()->unsigned()->index();
            $table->foreign('test_id')->references('id')->on('tests');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('questions', function(Blueprint $table) {
            $table->dropColumn('test_id');
            $table->dropColumn('test_id');
        });
	}

}
