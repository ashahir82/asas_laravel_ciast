<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah produk baru </title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CKEditor (optional, untuk rich text description) -->
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
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
                    <h4 class="text-lg font-semibold text-gray-900">Tambah Produk</h4>
                    <a href="{{ route('product.index') }}"
                        class="px-4 py-2 rounded-lg bg-gray-900 text-white textsm font-semibold hover:bg-gray-800 transition">
                        BACK
                    </a>
                </div>
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                    @method('post')
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">IMAGE</label>
                        <input type="file" name="gambar"
                            class="block w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-gray-900 file:text-white hover:file:bg-gray-800 border border-gray-200 rounded-lg bg-white">
                        @error('image')
                            <div class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">TAJUK</label>
                        <input type="text" name="tajuk" value="{{ old('tajuk') }}" placeholder="Masukkan Tajuk Produk"
                            class="w-full border border-gray-200 rounded-lg px4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gray-200">
                        @error('tajuk')
                            <div class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">KETERANGAN</label>
                        <textarea name="keterangan" id="keterangan" rows="6" class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gray-200" placeholder="Masukkan Keterangan Produk">{{ old('keterangan') }}</textarea>
                        @error('keterangan')
                            <div class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-semibold text-gray700 mb-2">HARGA</label>
                            <input type="number" name="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga Produk" class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gray-200">
                            @error('harga')
                                <div class="mt-2 text-sm text-red-600">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray700 mb-2">STOK</label>
                            <input type="number" name="stok" value="{{ old('stok') }}" placeholder="Masukkan Stok Produk" class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gray-200">
                            @error('stok')
                                <div class="mt-2 text-sm text-red-600">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="inline-flex items-center justify-center px-4 py-2 rounded-lg bg-emerald-600 text-white text-sm font-semibold hover:bg-emerald-700 transition">
                        SAVE
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        // inisialisasi rich text editor untuk textarea description (opsional)
        CKEDITOR.config.versionCheck = false;
        CKEDITOR.replace('keterangan');
    </script>
</body>

</html>
