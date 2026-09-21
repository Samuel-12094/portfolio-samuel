<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('domaine')->nullable()->after('description');
            $table->string('role')->nullable()->after('domaine');
            $table->string('type')->nullable()->after('role');
            $table->text('presentation')->nullable()->after('type');
            $table->json('fonctionnalites')->nullable()->after('presentation');
            $table->string('statut')->default('Terminé')->change();
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['domaine', 'role', 'type', 'presentation', 'fonctionnalites']);
            $table->enum('statut', ['Terminé', 'En cours'])->default('Terminé')->change();
        });
    }
};
