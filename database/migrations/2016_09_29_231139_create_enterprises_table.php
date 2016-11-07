<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterprisesTable extends Migration
{
public function up()
{
   Schema::create('enterprises', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->index();
      $table->string('slug');
      $table->integer('telephone')->unsigned();
      $table->integer('fax')->unsigned();
      $table->string('email')();
      $table->string('website');
      $table->string('address')->index();
      $table->mediumText('details');
      $table->string('logo');
      $table->string('header_image');
      $table->string('facebook');
      $table->string('twitter');
      $table->string('google');
      $table->string('map');
      $table->integer('user_id')->unsigned();
      $table->integer('category_id')->unsigned();
      $table->integer('city_id')->unsigned();
      $table->integer('department_id')->unsigned();
      $table->boolean('featured');
      $table->integer('town_id')->unsigned();
      $table->timestamps();

      // DB::statement('CREATE INDEX details_idx ON enterprises (details(100));');
   });
}

   public function down()
   {
      Schema::drop('enterprises');
      // Schema::table('enterprises', function($table) {
      //     $table->dropIndex('details_idx');
      // });
   }
}