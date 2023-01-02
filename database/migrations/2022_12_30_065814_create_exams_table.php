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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('examname');
            $table->date('examdate')->format('d/m/Y')->nullable();
            $table->time('time')->nullable();
            $table->string('seats')->nullable();
            $table->text('description')->nullable();
            $table->string('file')->nullable();
            $table->string('slug')->unique();
            $table->enum('status', ['ACTIVE', 'DRAFT', 'INACTIVE'])->default('DRAFT');
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
        Schema::dropIfExists('exams');
    }
};
