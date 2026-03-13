<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// BÀI 3 - Factory: Sinh dữ liệu giả cho bảng products
// Lệnh tạo: php artisan make:factory ProductFactory --model=Product
class ProductFactory extends Factory
{
    /**
     * Định nghĩa dữ liệu giả cho 1 sản phẩm
     * Faker tự động sinh dữ liệu ngẫu nhiên mỗi lần gọi
     */
    public function definition(): array
    {
        return [
            // Tên sản phẩm: ghép 3 từ ngẫu nhiên
            'name'        => $this->faker->words(3, true),

            // Giá: số nguyên ngẫu nhiên từ 1,000 đến 100,000
            'price'       => $this->faker->numberBetween(1000, 100000),

            // Số lượng tồn kho: 0 đến 500
            'quantity'    => $this->faker->numberBetween(0, 500),

            // Mô tả: đoạn văn ngẫu nhiên (~3 câu)
            'content'     => $this->faker->paragraph(3),

            // Danh mục: random từ 1 đến 5 (khớp với 5 category đã seed)
            'category_id' => $this->faker->numberBetween(1, 5),

            // Lượt xem: random từ 0 đến 9999
            'views'       => $this->faker->numberBetween(0, 9999),

            // Trạng thái: 80% sản phẩm đang active
            'is_active'   => $this->faker->boolean(80),
        ];
    }
}