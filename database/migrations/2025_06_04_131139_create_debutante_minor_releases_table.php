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
        Schema::create('debutante_minor_releases', function (Blueprint $table) {
            $table->id();
            $table->string('minor_name');
            $table->string('parent_name');
            $table->string('email');
            $table->date('date');
            $table->text('signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debutante_minor_releases');
    }
};
