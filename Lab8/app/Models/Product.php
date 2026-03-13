<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    // HasFactory: cho phép dùng Product::factory()
    // BẮT BUỘC phải có để ProductFactory hoạt động
    use HasFactory;

    // Các cột được phép gán hàng loạt (mass assignment)
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'content',
        'category_id',
        'views',
        'is_active',
    ];

    // Quan hệ: 1 sản phẩm thuộc về 1 danh mục
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}