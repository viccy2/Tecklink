<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('companyProfile', function (Blueprint $table) {

            $table->id();
            $table->string('companyName');
            $table->string('companyIndustry');
            $table->string('companyEmail');
            $table->string('companyPhone');
            $table->string('companyState');
            $table->string('companyCountry');
            $table->string('companyPassword');
            $table->string('companyType');
            $table->string('companyAbout')->nullable();
            $table->string('companyLocation');
            $table->string('fbPage')->nullable();
            $table->string('twitterPage')->nullable();
            $table->string('linkedinPage')->nullable();
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
        //
        Schema::dropIfExists('companyProfile');
    }
}
