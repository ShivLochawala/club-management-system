<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('company_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->bigInteger('postal_code');
            $table->string('email')->unique();
            $table->string('phone');
            $table->bigInteger('mobile');
            $table->string('slug');
            $table->integer('status');
            $table->string('password');
            $table->string('renewal_date');
            $table->integer('days')->nullable();
            $table->string('expiring_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
