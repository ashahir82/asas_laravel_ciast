<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asas Data Produk</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="text-center">
            <h3 class="text-2xl font-bold mb-2">Asas Laravel 12 untuk
                produk </h3>
            <h5 class="text-sm">
                <a href="https://" class="text-blue-600 hover:underline"> www.
                </a>
            </h5>
            <hr class="my-6 border-gray-200">
        </div>
        <div class="bg-white rounded-2xl shadow-sm border border-gray200">
            <div class="p-6">
                <a href="{{ route('product.create') }}"
                    class="inline-flex items-center justify-center px-4 py-2
rounded-lg
 bg-emerald-600 text-white text-sm font-semibold hover:bg-emerald-700 transition mb-4">
                    TAMBAH PRODUK
                </a>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm border border-gray-200
rounded-lg overflow-hidden">
                        <thead class="bg-gray-50 text-gray-700">
                            <tr>
                                <th class="px-4 py-3 text-left font-semibold borderb">GAMBAR</th>
                                <th class="px-4 py-3 text-left font-semibold borderb">TAJUK</th>
                                <th class="px-4 py-3 text-left font-semibold borderb">HARGA</th>
                                <th class="px-4 py-3 text-left font-semibold borderb">STOK</th>
                                <th class="px-4 py-3 text-left font-semibold borderb w-[220px]">TINDAKAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($product as $Product)
                                <tr class="border-b last:border-b-0">
                                    <td class="px-4 py-3">
                                        <div class="flex justify-center">
                                            <img src="{{ asset('/storage/product/' . $Product->gambar) }}"
                                                class="w-[150px] rounded-lg borderborder-gray-200"
                                                alt="{{ $Product->tajuk }}">
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 font-medium text-gray900">
                                        {{ $Product->tajuk }}
                                    </td>
                                    <td class="px-4 py-3 text-gray-700">
                                        {{ 'RM ' . number_format($Product->harga, 2, ',', '.') }}
                                    </td>
                                    <td class="px-4 py-3 text-gray-700">
                                        {{ $Product->stok }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <form action="{{ route('product.destroy', $Product->id) }}" method="POST"
                                            class="delete-form flex items-center gap-2">
                                            <a href="{{ route('product.show', $Product->id) }}"
                                                class="px-3 py-2 rounded-lg bg-gray-900 text-white text-xs font-semibold hover:bg-gray800 transition">
                                                PAPARKAN
                                            </a>
                                            <a href="{{ route('product.edit', $Product->id) }}"
                                                class="px-3 py-2 rounded-lg bg-blue-600 text-white text-xs font-semibold hover:bg-blue700 transition">
                                                EDIT
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-2 rounded-lg bg-red-600 text-white text-xs font-semibold hover:bg-red700 transition">
                                                HAPUS
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-6">
                                        <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg px-4 py-3">
                                            Data Produk belum ada.
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $product->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- SweetAlert Script -->
    <script>
        // SweetAlert for delete confirmation
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc2626',
                    cancelButtonColor: '#6b7280',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
        // SweetAlert for success message
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            });
        @endif
    </script>
</body>

</html>
