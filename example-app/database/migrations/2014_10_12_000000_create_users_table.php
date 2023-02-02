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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');;
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

        });
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('appointment');
            $table->timestamps();
        });
        Schema::table('appointman', function (Blueprint $table) {
            $table->text('message')->nullable();

        });
        Schema::table('selected_dates', function (Blueprint $table) {
            $table->date('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
