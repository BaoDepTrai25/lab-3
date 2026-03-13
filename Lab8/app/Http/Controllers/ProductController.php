<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Hiển thị danh sách sản phẩm có phân trang
     * Route: GET /products
     */
    public function index()
    {
        // Lấy tất cả sản phẩm, kèm tên danh mục (eager loading tránh N+1 query)
        // paginate(10) = 10 sản phẩm mỗi trang, tổng 50 sản phẩm = 5 trang
        $products = Product::with('category')
                           ->latest()       // sắp xếp theo created_at DESC
                           ->paginate(10);

        return view('products.index', compact('products'));
    }
}