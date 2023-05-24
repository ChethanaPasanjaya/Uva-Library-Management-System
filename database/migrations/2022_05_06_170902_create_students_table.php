<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->char('Stu_Id', 10)->primary();
            $table->String('First_Name', 100);
            $table->String('Last_Name', 100);
            $table->integer('Grade');
            $table->char('Class', 2);
            $table->String('Gender', 6);
            $table->date('DOB');
            $table->String('Address', 100);
            $table->integer('TeleNum')->unique();
            $table->String('Email')->unique();
            $table->String('Password');
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
        Schema::dropIfExists('students');
    }
}
