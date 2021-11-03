<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdealHusbandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideal_husbands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('husband_id')
                ->constrained('husbands')
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
        Schema::dropIfExists('ideal_husbands');
    }
}
