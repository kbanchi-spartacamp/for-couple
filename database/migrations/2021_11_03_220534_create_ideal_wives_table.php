<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdealWivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideal_wives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wife_id')
                ->constrained('wives')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('ideal_category_id')
                ->constrained('ideal_categories')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->text('ideal');
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
        Schema::dropIfExists('ideal_wives');
    }
}
