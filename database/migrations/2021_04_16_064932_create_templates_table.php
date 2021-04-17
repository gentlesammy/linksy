<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dp')->nullable();
            $table->integer('price')->default(10);
            $table->string('main_background_color')->default("#ffffff");
            $table->string('user_detail_color')->default("#000000");
            $table->string('link_background')->default("#f99fff");
            $table->string('link_color')->default("#fff000");
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
        Schema::dropIfExists('templates');
    }
}
