<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// BÀI 2 - Migration 3: Thêm cột vào bảng products đã có
// Lệnh tạo: php artisan make:migration add_columns_to_products_table --table=products
return new class extends Migration
{
    /**
     * Thêm 2 cột mới vào bảng products
     * KHÔNG được sửa file migration cũ - phải tạo file migration MỚI
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('views')->default(0);        // Lượt xem, mặc định = 0
            $table->boolean('is_active')->default(true); // Trạng thái hiện/ẩn, mặc định = true
        });
    }

    /**
     * Rollback: xóa 2 cột vừa thêm
     * Chạy khi: php artisan migrate:rollback
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['views', 'is_active']);
        });
    }
};