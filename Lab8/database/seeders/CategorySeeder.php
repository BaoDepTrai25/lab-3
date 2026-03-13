<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

// BÀI 3 - Seeder: Tạo 5 danh mục cố định
// Lệnh tạo: php artisan make:seeder CategorySeeder
class CategorySeeder extends Seeder
{
    /**
     * Chèn 5 danh mục cố định vào bảng categories
     * Chạy khi: php artisan db:seed --class=CategorySeeder
     */
    public function run(): void
    {
        // Dùng insert() để chèn nhiều dòng 1 lúc - nhanh hơn tạo từng Model
        DB::table('categories')->insert([
            [
                'name'        => 'Điện thoại',
                'description' => 'Các dòng điện thoại thông minh Android và iOS mới nhất',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Laptop',
                'description' => 'Laptop văn phòng, gaming, đồ họa các thương hiệu hàng đầu',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Tablet',
                'description' => 'Máy tính bảng phù hợp cho học tập và giải trí',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Phụ kiện',
                'description' => 'Tai nghe, sạc, cáp, ốp lưng và phụ kiện công nghệ',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Đồng hồ',
                'description' => 'Đồng hồ thông minh và đồng hồ thời trang cao cấp',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
        ]);
    }
}