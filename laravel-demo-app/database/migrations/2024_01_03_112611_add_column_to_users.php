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
            //
            $table->string('houseNo')->nullable();
            $table->string('street')->nullable();
            $table->string('county')->nullable();
            $table->string('postcode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('houseNo')->nullable();
            $table->dropColumn('street')->nullable();
            $table->dropColumn('county')->nullable();
            $table->dropColumn('postcode')->nullable();
        });
    }
};
