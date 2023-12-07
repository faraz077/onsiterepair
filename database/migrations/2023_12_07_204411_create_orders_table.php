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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_no')->unique();
            $table->foreignId('device_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('manufacturer_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('model_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('location');
            $table->decimal('total_price', 10, 2);
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->text('message')->nullable();
            $table->enum('contact_through', ['phone', 'whatsapp', 'email'])->default('phone');
            $table->enum('status', ['on_hold', 'processing', 'completed', 'cancelled'])->default('on_hold');
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
