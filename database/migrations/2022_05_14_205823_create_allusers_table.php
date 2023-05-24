<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allusers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('guardiansname')->nullable();
            $table->string('guardianphone')->nullable();
            $table->string('address');
            $table->string('gender');
            $table->string('dob');
            $table->string('grade')->nullable();
            $table->string('class')->nullable();
            $table->string('phonenumber');
            $table->string('email') ->unique();
            $table->string('password');    
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
        Schema::dropIfExists('allusers');
    }
}
