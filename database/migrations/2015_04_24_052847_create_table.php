<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('sex');
            $table->string('tel')->nullable();
            $table->string('mobile')->nullable();
            $table->tinyInteger('active');
            $table->text('description')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('dept', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('company_id');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('user_dept', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('dept_id');
            $table->timestamps();
        });
        Schema::create('company', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('address');
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
        //
    }

}
