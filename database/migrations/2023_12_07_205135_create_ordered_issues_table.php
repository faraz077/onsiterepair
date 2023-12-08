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
        Schema::create('ordered_issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('issue_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('issue_name')->nullable();
            $table->decimal('issue_price', 10, 2)->nullable();
            $table->string('issue_timeframe')->nullable();
            $table->string('issue_warranty')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordered_issues');
    }
};
