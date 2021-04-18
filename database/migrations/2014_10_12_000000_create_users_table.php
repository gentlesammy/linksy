<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->longText('description')->nullable();
            $table->boolean('blocked')->default(false);
            $table->boolean('suspended')->default(false);
            $table->string('background')->default("#ffffff");
            $table->string('color')->default("#000000");
            $table->string('dp')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role')->default(1);
            $table->string('password');
            $table->bigInteger("total_visit_count")->default(0);
            $table->boolean('choosen')->default(false);
            $table->foreignId('template_id')->nullable();
            $table->dateTime('payment_expires_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
