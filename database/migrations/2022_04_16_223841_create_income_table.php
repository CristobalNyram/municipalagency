<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income', function (Blueprint $table) {
            $table->id('inc_id');
            $table->longText('inc_description');
            $table->longText('inc_proof_url');
            $table->string('inc_status');
            $table->bigInteger('inc_amount');
            $table->unsignedBigInteger('id_monbox');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_monbox')->references('monbox_id')->on('moneybox')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('income');
    }
}
