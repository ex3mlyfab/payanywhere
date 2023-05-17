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
        Schema::create('payment_hxs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_hx_id');
            $table->integer('amount');
            $table->boolean('transfered_to_emr');
            $table->integer('previous_balance')->default(0);
            $table->integer('previous_bill')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_hxs');
    }
};
