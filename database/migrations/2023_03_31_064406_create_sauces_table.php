<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaucesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sauces', function (Blueprint $table) {
            
            $table ->Integer('idSauces')->primary();
            $table->String('userId');
            $table->String('manufacturer');
            $table->String('description');
            $table->String('mainPepper');
            $table->String('imageUrl');
            $table->Integer('heat');
            $table->Integer('likes');
            $table->Integer('dislikes');
            $table->json('usersLiked')->nullable();
            $table->json('usersDisliked')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sauces');
    }
}
