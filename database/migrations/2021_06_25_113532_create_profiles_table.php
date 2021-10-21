<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->mediumText('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->mediumText('nature_of_business')->nullable();
            $table->string('designation')->nullable();
            $table->string('dob')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('nationality')->nullable();
            $table->mediumText('marital_status')->nullable();
            $table->string('pastor_name')->nullable();
            $table->string('church_role')->nullable();
            $table->string('time_in_church')->nullable();
            $table->mediumText('other_churches_and_roles')->nullable();
            $table->string('born_again')->nullable();
            $table->string('born_again_time')->nullable();
            $table->mediumText('name_and_address_of_church')->nullable();
            $table->mediumText('church_involvement')->nullable();
            $table->mediumText('academics')->nullable();
            $table->mediumText('other_bible_college')->nullable();
            $table->string('first_referee')->nullable();
            $table->string('first_referee_phone')->nullable();
            $table->string('second_referee')->nullable();
            $table->string('second_referee_phone')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
