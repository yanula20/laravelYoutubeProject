<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Info extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->string('title');
            $table->string('subtitle');
            $table->string('section_one_title');
            $table->string('section_one_description');
            $table->string('section_one_image');
            $table->string('section_one_link');
            $table->string('section_one_link_title');
            $table->string('section_two_title');
            $table->string('section_two_description');
            $table->string('section_two_image');
            $table->string('section_two_link');
            $table->string('section_two_link_title');
            $table->string('section_three_title');
            $table->string('section_three_description');
            $table->string('section_three_image');
            $table->string('section_three_link');
            $table->string('section_three_link_title');
            $table->string('section_four_title');
            $table->string('section_four_description');
            $table->string('section_five_title');
            $table->string('section_five_description');
            $table->string('social_address_1')->nullable();
            $table->string('social_address_2')->nullable();
            $table->string('social_email')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_youtube')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_github')->nullable();
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
        Schema::dropIfExists('info');
    }
}
