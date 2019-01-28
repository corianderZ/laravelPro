<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager',function(Blueprint $table){
            $table->increments('mg_id')->comment('主键');
            $table->string('username',64)->comment('名称');
            $table->char('password',60)->comment('密码');
            $table->string('mg_role_ids')->nullable()->comment('名称');
            $table->enum('mg_sex',['男','女'])->default('男')->comment('性别');
            $table->string('mg_phone')->nullable()->comment('手机号码');
            $table->string('mg_email')->nullable()->comment('邮箱');
            $table->string('mg_remark')->nullable()->comment('备注');
            $table->timestamps();
            $table->softDeletes();
            $table->rememberToken();
            $table->unique('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manager');
    }
}
