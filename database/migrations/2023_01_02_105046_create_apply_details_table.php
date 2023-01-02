<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned();
            $table->string('enrolment_id')->nullable();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('fathername')->nullable();
            $table->string('mothername')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('dob')->nullable();
            $table->enum('gender', ['MALE', 'FEMALE','OTHER'])->nullable();
            $table->string('stateid')->nullable();
            $table->string('cityid')->nullable();
            $table->string('address')->nullable();
            $table->string('pincode')->nullable();
            $table->string('aadharno')->nullable();
            $table->string('center1')->nullable();
            $table->string('center2')->nullable();
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
        Schema::dropIfExists('apply_details');
    }
};
