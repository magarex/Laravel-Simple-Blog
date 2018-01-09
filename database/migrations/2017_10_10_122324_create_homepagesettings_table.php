<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomepagesettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('homepagesettings', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('logo');
            $table->string('title');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');
            $table->string('linkedin');
            $table->string('aboutus');
            $table->string('dailyvideo');
            $table->string('not1');
            $table->string('not2');
            $table->string('footer');
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
        Schema::dropIfExists('homepagesettings');
    }
}
