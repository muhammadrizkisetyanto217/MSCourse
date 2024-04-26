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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            //* Dengan constrained maka sistem akan mencari table user secara otomatis
            //* On Delete cascade berguna jika data guru dihapus maka seluruh data yang berkaitan termasuk kelasnya juga akan kehapus sehingga tidak ada cacat data  
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            //* Untuk menentukan guru aktif atau tidaknya 
            $table->boolean('is_active')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
