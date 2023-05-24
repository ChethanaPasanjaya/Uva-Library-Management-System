<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_requests', function (Blueprint $table) {
            $table->id();
            $table->char('book_id',10);
            $table->text('book_name');
            $table->char('user_id',10);
            $table->text('is_approved');
            $table->text('user_name');
            $table->text('user_message')->nullable();
            //  $table->boolean('status')->default(01)->comment("1=> requested; 2=>owner_confirm, 3=>reject,
            // 4=>user_confirm, 5=>user_reject, 6=>return, 7=>return confirm");
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
        Schema::dropIfExists('book_requests');
    }
}
