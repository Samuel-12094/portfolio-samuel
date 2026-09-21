<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('competences', function (Blueprint $table) {
            $table->id();
            $table->string('categorie');
            $table->string('nom');
            $table->integer('niveau');
            $table->integer('ordre')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('competences');
    }
};
