@extends('layouts.master')
@section('content')
    <a href="{{ route('product.create') }}" type="button" class="btn btn-success mb-4">
        <i class="bi bi-bag-plus"></i>
        TAMBAH PRODUK
    </a>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @forelse ($product as $Product)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('/storage/product/' . $Product->gambar) }}"
                        alt="{{ $Product->tajuk }}" />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $Product->tajuk }}</h5>
                            <!-- Product price-->
                            {{ 'RM ' . number_format($Product->harga, 2, ',', '.') }}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <form action="{{ route('product.destroy', $Product->id) }}" method="POST"
                                class="delete-form flex items-center gap-2">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="{{ route('product.show', $Product->id) }}" class="btn btn-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('product.edit', $Product->id) }}" class="btn btn-danger">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a class="btn btn-info" href="#">View options</a>
                                <a class="btn btn-warning" href="#">View options</a>
                                <a class="btn btn-danger" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
    <div class="mt-4">
        {{ $product->links() }}
    </div>
    <!-- SweetAlert Script -->
    <script>
        // SweetAlert for delete confirmation
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function (e) {
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
@endsection
