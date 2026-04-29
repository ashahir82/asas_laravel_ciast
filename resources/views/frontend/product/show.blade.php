<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paparkan Produk - </title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="text-center">
            <h3 class="text-2xl font-bold mb-2">Asas Laravel 12 untuk produk</h3>
            <h5 class="text-sm">
                <a href="https://" class="text-blue-600 hover:underline">www.</a>
            </h5>
            <hr class="my-6 border-gray-200">
        </div>
        <div class="bg-white rounded-2xl shadow-sm border border-gray200">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="text-lg font-semibold text-gray-900">Detail
                        Produk</h4>
                    <a href="{{ route('product.index') }}"
                        class="px-4 py-2 rounded-lg bg-gray-900 text-white textsm font-semibold hover:bg-gray-800 transition">
                        BACK
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                    <div class="md:col-span-4">
                        <div class="border border-gray-200 rounded-2xl overflow-hidden">
                            <img src="{{ asset('/storage/product/' . $product->gambar)}}" class="w-full"
                                alt="{{ $product->tajuk }}">
                        </div>
                    </div>
                    <div class="md:col-span-8">
                        <div class="border border-gray-200 rounded-2xl p-6">
                            <h3 class="text-xl font-bold text-gray-900">{{ $product->tajuk }}</h3>
                            <hr class="my-4 border-gray-200">
                            <p class="text-gray-700 font-semibold">
                                {{ "RM " . number_format($product->harga, 2, ',', '.') }}
                            </p>
                            <div class="mt-4">
                                <div class="text-sm font-semibold text-gray-700 mb-2">KETERANGAN</div>
                                <div class="prose max-w-none text-gray-700"> {!! $product->keterangan !!}
                                </div>
                            </div>
                            <hr class="my-4 border-gray-200">
                            <p class="text-gray-700">
                                Stock : <span class="font-semibold">{{ $product->stok }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
