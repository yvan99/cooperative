<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCooperativeOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperative_owners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cooperative_id');
            $table->unsignedBigInteger('leader_id');
            $table->foreign('cooperative_id')->references('id')->on('cooperatives');
            $table->foreign('leader_id')->references('id')->on('leaders');
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
        Schema::dropIfExists('cooperative_owners');
    }
}
