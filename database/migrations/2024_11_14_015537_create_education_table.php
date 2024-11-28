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
        Schema::create('education', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('school_id')->nullable();            
            $table->string('name',255);
            $table->string('title',255);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('description',)->nullable();
            //relasi id ke field id di school
            $table->foreign('school_id')->references('id')->on('schools')->onDelete(null)->onUpdate(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
