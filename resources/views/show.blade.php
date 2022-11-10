<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-light">
<div class="container-lg py-3">
    <div class="row g-3">
        <div class="col-6 col-md-4 col-lg-3">
            <div class="bg-white border rounded p-3">
                <a href="product/{{ $products->id }}" class="h6 d-block">
                    {{ $products->name }}
                </a>
                <div class="h6">
                    Category: {{ $products->category->name }}
                </div>
                <div class="h6">
                    Image {{ $products->image }}
                </div>
                <div class="h6">
                    Price: {{ $products->price }}
                </div>
                <div class="h6">
                Barcode: {{ $products->barcode}}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
