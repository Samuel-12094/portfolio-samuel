<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['stage', 'developpement', 'formation'])->default('developpement');
            $table->string('titre');
            $table->string('organisme')->nullable();
            $table->string('periode')->nullable();
            $table->string('lieu')->nullable();
            $table->string('domaine')->nullable();
            $table->text('description')->nullable();
            $table->json('details')->nullable();
            $table->integer('ordre')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
