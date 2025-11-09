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
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('imgMateri');
            $table->date('date')->useCurrent();
            $table->text('deskripsi');
            $table->timestamps();
            $table->enum('Kategori', ['Interactive Multimedia', 'Sofware Engineering']);
            $table->foreignId('writer_id')->constrained('writers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
