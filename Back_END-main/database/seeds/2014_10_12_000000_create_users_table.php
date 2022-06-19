<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('middleName')->nullable();
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('userDob')->nullable();
            $table->string('homePhoneNumber')->nullable();
            $table->string('mobilePhoneNumber');
            $table->string('officePhoneNumber')->nullable();
            $table->string('contactAddress')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('fbProfile')->nullable();
            $table->string('twitterProfile')->nullable();
            $table->string('linkedinProfile')->nullable();
            $table->string('profilePicture')->nullable();
            $table->text('userAbout')->nullable();
            $table->string('languagesSpoken')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
