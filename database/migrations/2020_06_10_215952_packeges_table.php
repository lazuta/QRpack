<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PackegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packeges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tracker')->unique();
            $table->bigInteger('sender_id')->unsigned();
            $table->foreign('sender_id')->references('id')->on('departures_sender')->onDelete('cascade');
            $table->bigInteger('rec_id')->unsigned();
            $table->foreign('rec_id')->references('id')->on('departures_recvest')->onDelete('cascade');
            $table->string('user_tel');
            $table->rememberToken();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('packeges');
    }
}
