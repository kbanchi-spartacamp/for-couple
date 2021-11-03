<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdealScoreHusbandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideal_score_husbands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ideal_husband_id')
                ->constrained('ideal_husbands')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->date('date');
            $table->integer('score');
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
        Schema::dropIfExists('ideal_score_husbands');
    }
}
