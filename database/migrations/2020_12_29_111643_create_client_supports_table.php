<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_supports', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->string('client_subject');
            $table->string('client_description');
            $table->string('date');
            $table->integer('status');
            $table->string('admin_subject')->nullable();
            $table->string('admin_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_supports');
    }
}
