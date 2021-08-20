<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('weight',100);
            $table->string('type',100);
            $table->bigInteger('type_classfication_id');
            $table->text('short_description');
            $table->string('activity',150);
            $table->string('delay_water',100);
            $table->bigInteger('classification_id');
            $table->string('hbr',100);
            $table->string('Dosage',100);
            $table->string('Hepatoxity',100);
            $table->string('acne',100);
            $table->string('aromatization',100);
            $table->text('description',100);
            $table->text('image');
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
        Schema::dropIfExists('products');
    }
}
