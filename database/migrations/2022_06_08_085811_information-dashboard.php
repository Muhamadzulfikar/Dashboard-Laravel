<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create table 
        Schema::create('information_dashboards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('news_title');
            $table->string('news_time');
            $table->string('notification_title');
            $table->string('notification_time');
            $table->string('roaster');
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
};
