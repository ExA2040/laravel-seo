<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSEOTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('seos', function($table)
    {
      $table->increments('id');
      $table->string('class_name');

      $table->integer('object_id');

      $table->string('title')->nullable();
      $table->string('description')->nullable();
      $table->string('tags')->nullable();
      
      $table->index('class_name');
      $table->index('object_id');

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
    Schema::drop('seos');
  }

}
