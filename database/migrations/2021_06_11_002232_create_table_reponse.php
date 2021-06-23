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
        });

        Schema::table('question', function (Blueprint $table) {
            $table->unsignedBigInteger("quest_id");
            $table->foreign('quest_id')->references('id')->on('question')->onDelete('restrict')->onUpdate('restrict');
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
