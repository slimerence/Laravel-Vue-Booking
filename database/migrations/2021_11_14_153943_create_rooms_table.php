<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('房间名');
            $table->integer('group_id')->nullable();
            $table->boolean('is_extend')->default(true);
            $table->text('open_day')->nullable();
            $table->text('open_hour')->nullable();
            $table->text('image')->nullable();
            $table->integer('order_type')->nullable();
            $table->text('time_span')->nullable();
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
        Schema::dropIfExists('rooms');
    }
}
