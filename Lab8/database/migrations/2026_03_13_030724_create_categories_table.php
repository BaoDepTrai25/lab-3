<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// BÀI 1 - Migration 1: Tạo bảng categories
return new class extends Migration
{
    /**
     * Chạy khi: php artisan migrate
     * Tạo bảng categories trong database
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();                              // id BIGINT, AUTO_INCREMENT, PRIMARY KEY
            $table->string('name');                    // name VARCHAR(255), NOT NULL
            $table->text('description')->nullable();   // description TEXT, cho phép NULL
            $table->timestamps();                      // created_at + updated_at TIMESTAMP
        });
    }

    /**
     * Chạy khi: php artisan migrate:rollback
     * Xóa bảng categories khỏi database
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};