<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_mes', function (Blueprint $table) {
           $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('versity')->nullable();
            $table->string('designation')->nullable();
            $table->string('graduation')->nullable();
            $table->string('address')->nullable();
            $table->longText('description')->nullable();
            $table->string('skil')->nullable();
            $table->string('image')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_mes');
    }
}
