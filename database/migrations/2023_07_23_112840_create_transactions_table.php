<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->unsignedBigInteger('finance_category_id');
            $table->foreign('finance_category_id')->references('id')->on('finance_categories');
            $table->unsignedBigInteger('cooperative_id');
            $table->foreign('cooperative_id')->references('id')->on('cooperatives');
            $table->year('year');
            $table->string('month');
            $table->date('date');
            $table->double('amount');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('description')->nullable();
            $table->boolean('flag')->default(false);
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
        Schema::dropIfExists('transactions');
    }
}