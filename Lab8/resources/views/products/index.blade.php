<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.bootcdn.net/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; }
        .card { transition: transform 0.2s; }
        .card:hover { transform: translateY(-4px); box-shadow: 0 8px 24px rgba(0,0,0,.1); }
        .badge-category { font-size: .75rem; }
        .price { font-size: 1.1rem; font-weight: 700; color: #e74c3c; }
    </style>
</head>
<body>

<div class="container py-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">🛒 Danh sách sản phẩm</h2>
            <small class="text-muted">Tổng: {{ $products->total() }} sản phẩm</small>
        </div>
        <span class="badge bg-primary fs-6">
            Trang {{ $products->currentPage() }} / {{ $products->lastPage() }}
        </span>
    </div>

    {{-- Danh sách sản phẩm --}}
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($products as $product)
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">

                    {{-- Danh mục --}}
                    <span class="badge bg-secondary badge-category mb-2">
                        📁 {{ $product->category->name ?? 'Không có' }}
                    </span>

                    {{-- Tên sản phẩm --}}
                    <h5 class="card-title fw-semibold">{{ $product->name }}</h5>

                    {{-- Mô tả --}}
                    <p class="card-text text-muted small">
                        {{ Str::limit($product->content, 90) }}
                    </p>

                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="price">{{ number_format($product->price) }}₫</span>
                        <div class="text-end">
                            <small class="text-muted d-block">
                                👁 {{ number_format($product->views) }} lượt xem
                            </small>
                            <small class="text-muted">
                                📦 Kho: {{ $product->quantity }}
                            </small>
                        </div>
                    </div>
                    {{-- Trạng thái --}}
                    @if ($product->is_active)
                        <span class="badge bg-success mt-2">● Đang bán</span>
                    @else
                        <span class="badge bg-danger mt-2">● Tạm ẩn</span>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Phân trang --}}
    <div class="mt-5 d-flex justify-content-center">
        {{ $products->links() }}
    </div>

</div>

</body>
</html>