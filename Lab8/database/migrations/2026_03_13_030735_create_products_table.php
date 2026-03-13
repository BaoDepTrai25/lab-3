<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// BÀI 1 - Migration 2: Tạo bảng products
return new class extends Migration
{
    /**
     * Chạy khi: php artisan migrate
     * Tạo bảng products trong database
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();                              // id BIGINT, AUTO_INCREMENT, PRIMARY KEY
            $table->string('name');                    // name VARCHAR(255), NOT NULL
            $table->decimal('price', 10, 2);           // price DECIMAL(10,2) - VD: 99999999.99
            $table->integer('quantity');               // quantity INT
            $table->text('content');                   // content TEXT
            $table->unsignedBigInteger('category_id'); // category_id BIGINT UNSIGNED (chuẩn bị làm FK)
            $table->timestamps();                      // created_at + updated_at
        });
    }

    /**
     * Chạy khi: php artisan migrate:rollback
     * Xóa bảng products khỏi database
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};