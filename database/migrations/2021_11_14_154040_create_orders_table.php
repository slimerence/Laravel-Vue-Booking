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
            $table->date('order_date')->comment('预定日期');
            $table->text('time_slot')->comment('时间段');
            $table->text('tea')->nullable()->comment('下午茶');
            $table->integer('customer_id');
            $table->string('participants')->nullable();
            $table->text('avg_cost')->nullable();
            $table->text('book_by')->nullable();
            $table->text('comment')->nullable();
            $table->text('conclusion')->nullable();
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
