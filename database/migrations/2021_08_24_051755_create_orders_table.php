<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number',150);
            $table->string('status',150);
            $table->bigInteger('user_id');
            $table->string('walletaddress',150);
            $table->text("comment")->nullable();
            $table->float("producttotal",9, 2);
            $table->float("discount",9, 2)->nullable();
            $table->float("delivery",9, 2);
            $table->float("currentbalance",9, 2)->nullable();
            $table->float('ordertotal',9, 2);
            $table->float('bitcoin',9, 9);
            $table->float('amountleft',9, 2);
            $table->string('currency',100);
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
        Schema::dropIfExists('orders');
    }
}
