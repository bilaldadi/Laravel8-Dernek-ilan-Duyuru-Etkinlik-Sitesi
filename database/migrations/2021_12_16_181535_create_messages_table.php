<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id()-> autoIncrement();
            $table->string('name',150);
            $table->string('email',150)->nullable();
            $table->string('phone')->nullable();
            $table->string('subject')->nullable();
            $table->string('message',100)->nullable();
            $table->string('ip',5)->nullable();
            $table->string('status')->nullable()->default('False');
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
        Schema::dropIfExists('messages');
    }
}
