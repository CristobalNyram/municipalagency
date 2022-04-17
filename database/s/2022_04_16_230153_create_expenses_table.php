<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id('exp_id');
            $table->longText('exp_description');
            $table->longText('exp_proof_url');
            $table->string('exp_status');
            $table->bigInteger('exp_amount');
            $table->unsignedBigInteger('id_monbox');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_monbox')->references('monbox_id')->on('moneyboxes')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('expense');
    }
}
