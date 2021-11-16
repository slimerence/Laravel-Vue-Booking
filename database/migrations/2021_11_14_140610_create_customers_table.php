<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('姓名');
            $table->string('sex')->comment('性别')->nullable();
            $table->text('age_range')->comment('年龄段')->nullable();
            $table->text('phone')->comment('联系电话');
            $table->text('wechat')->comment('微信号')->nullable();
            $table->boolean('is_member')->default(0)->comment('是否会员');
            $table->text('address')->comment('住址')->nullable();
            $table->text('contact')->comment('对接人')->nullable();
            $table->text('favourite')->comment('喜好')->nullable();
            $table->text('hate')->comment('忌口')->nullable();
            $table->text('industry')->comment('行业')->nullable();
            $table->text('extra')->comment('备注')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
