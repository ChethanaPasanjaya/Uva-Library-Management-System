<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_students', function (Blueprint $table) {
            $table->id();
            $table->char('Stu_Id', 10);
            $table->char('First_Name', 100);
            $table->char('Last_Name', 100);
            $table->char('Grade',5);
            $table->char('Class', 2);
            $table->String('Gender', 6);
            $table->date('DOB');
            $table->String('Address', 100);
            $table->integer('TeleNum');
            $table->String('Email');
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
        Schema::dropIfExists('user_students');
    }
}
