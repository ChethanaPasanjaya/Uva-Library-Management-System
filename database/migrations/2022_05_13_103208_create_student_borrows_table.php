<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_borrows', function (Blueprint $table) {
            $table->id();
            $table->char('Book_Id', 10);
            $table->char('User_Id', 10);
            $table->String('Book_Name', 200);
            $table->date('Borrow_Date');
            $table->date('Return_Date');
            $table->date('New_Return_Date');
            $table->char('status', 2)->default(0);
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
        Schema::dropIfExists('student_borrows');
    }
}
