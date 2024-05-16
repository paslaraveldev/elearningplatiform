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
        Schema::create('political_economies', function (Blueprint $table) {
            $table->id(); 
             $table->string('title');
            $table->text('description');
            $table->string('file_path');
            $table->string('type');
            $table->string('image_path')->nullable();
            $table->string('tutor_name');
            $table->unsignedBigInteger('file_size');
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
        Schema::dropIfExists('political_economies');
    }
};
