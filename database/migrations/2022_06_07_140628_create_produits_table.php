<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('libele');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->integer('price');
            $table->integer('stock');
            $table->string('is_special', 3)->nullable();
            $table->string('is_promote', 3)->nullable();
            $table->string('is_slideshow', 3)->nullable();
            $table->string('as_banner', 3)->nullable();
            $table->string('banner_position')->nullable();
            $table->date('promote_until')->nullable();
            $table->string('cover');
            $table->string('new_price')->nullable();
            $table->text('desc')->nullable();
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
        Schema::dropIfExists('produits');
    }
}
