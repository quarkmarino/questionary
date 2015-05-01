<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('value', 128);
            $table->enum('type', ['option',  'multi']);
            
            $table->integer('question_id')->index()->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
            
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
		Schema::drop('answers');
	}

}
