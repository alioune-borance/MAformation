<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReponse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponse', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->timestamps();
            $table->integer('question_id');
            $table->foreign('question_id')->references('id')->on('question');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_reponse');
    }
}
