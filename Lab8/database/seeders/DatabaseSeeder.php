<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

// BÀI 3 - DatabaseSeeder: Điều phối toàn bộ quá trình seed
class DatabaseSeeder extends Seeder
{
    /**
     * Chạy khi: php artisan db:seed
     * hoặc khi dùng: php artisan migrate:fresh --seed
     */
    public function run(): void
    {
        // Bước 1: Chạy CategorySeeder trước
        // → Tạo 5 danh mục có id từ 1 đến 5
        // → PHẢI chạy trước ProductFactory vì product cần category_id hợp lệ
        $this->call(CategorySeeder::class);

        // Bước 2: Tạo 50 sản phẩm bằng ProductFactory
        // → Factory sẽ gọi ProductFactory::definition() 50 lần
        // → Mỗi lần tạo 1 sản phẩm với dữ liệu faker khác nhau
        Product::factory(50)->create();
    }
}