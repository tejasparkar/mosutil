<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuerriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('querries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('q_name');
            $table->text('q_email');
            $table->text('q_phone');
            $table->text('q_msg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('querries');
    }
}
