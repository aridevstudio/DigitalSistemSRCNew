<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sub_forms', function (Blueprint $table) {
            $table->id();
            $table->string('link_form');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sub_forms');
    }
};