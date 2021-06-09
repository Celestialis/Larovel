<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('category_id');
            $table->bigInteger('category_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('title', 191);
            $table->string('image', 255)->nullable();
            $table->string('author', 191)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            //$table->foreign('category_id')->on('categories')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
