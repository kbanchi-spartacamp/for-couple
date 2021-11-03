<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdealScoreWivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideal_score_wives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ideal_wife_id')
                ->constrained('ideal_wives')
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
        Schema::dropIfExists('ideal_score_wives');
    }
}
