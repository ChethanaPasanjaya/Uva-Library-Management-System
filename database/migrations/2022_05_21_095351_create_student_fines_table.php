<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentFinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_fines', function (Blueprint $table) {
            $table->id();
            $table->char('Fine_Id', 10);
            $table->char('User_Id', 10);
            $table->char('Book_Id', 10);
            $table->foreign('User_Id')->references('Stu_Id')->on('user_students');
            $table->foreign('Book_Id')->references('book_id')->on('books');
            $table->float('Total_Fine');
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
        Schema::dropIfExists('student_fines');
    }
}
