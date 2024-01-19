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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
          
                $table->decimal('amount');
                $table->unsignedBigInteger('register_id')->constrained(); // Assuming a foreign key relationship
                $table->enum('type', ['deposit', 'withdrawal']);
                $table->decimal('amount', 10, 2);
                $table->decimal('new_balance', 10, 2);
                
                
                $table->foreign('register_id')->references('id')->on('registers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
