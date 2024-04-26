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
        Schema::create('subsribe_transactions', function (Blueprint $table) {
            $table->id();
            //* Fungsinya supaya integernya tidak bisa negatif (-) 
            $table->unsignedBigInteger('total_amount');
            $table->boolean('is_paid');
            //* Diberikan nullable karena bisa belum berlangganan 
            $table->date('subscription_start_date')->nullable();
            //* Adalah bukti pembayaran
            $table->string('proof');
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsribe_transactions');
    }
};
