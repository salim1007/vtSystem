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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('post');
            $table->string('post_code');
            $table->string('year');
            $table->string('cand_idty');
            $table->string('programme');
            $table->string('college');
            $table->string('description');
            $table->string('photo_url');
            $table->string('reg_no');
            $table->string('status')->default('ACTIVE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
