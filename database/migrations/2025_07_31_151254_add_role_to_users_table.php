<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //ajout de la colonne role dans la table users
            $table->string('role')->default('user')->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //sert à annuler les modifications (réversibilite d'une migration)
    {
        Schema::table('users', function (Blueprint $table) {
            //retirer la colonne nommée de la table users
            $table->dropColumn('role');
        });
    }
};
