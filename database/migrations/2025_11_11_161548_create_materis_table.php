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
            $table->string('Title');
            $table->text('BodyText');
            $table->text('ArticleImage');
            $table->foreignId('writer_id')->constrained('writers')->onDelete('cascade')->onUpdate('cascade');
            $table->date('Date')->useCurrent();
            $table->enum('Cat', ['Software Engineering', 'Interactive Multimedia', 'Data Mining']);
            $table->timestamps();
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
