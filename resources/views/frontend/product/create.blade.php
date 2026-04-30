@extends('layouts.master')
@section('content')
    <a href="{{ route('product.index') }}" type="button" class="btn btn-secondary mb-4">
        <i class="bi bi-arrow-left-circle"></i>
        BACK
    </a>

    <div class="card">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            <div class="card-header">
                Tambah Produk
            </div>
            <div class="card-body">
                @csrf
                @method('post')
                <div class="row mb-3">
                    <label for="inputGambar" class="col-sm-2 col-form-label">GAMBAR</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputGambar" name="gambar">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputTajuk" class="col-sm-2 col-form-label">TAJUK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTajuk" name="tajuk">
                        @error('tajuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputKeterangan" class="col-sm-2 col-form-label">KETERANGAN</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputKeterangan" name="keterangan" rows="6"></textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputHarga" class="col-sm-2 col-form-label">HARGA</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputHarga" name="harga">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputStok" class="col-sm-2 col-form-label">STOK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputStok" name="stok">
                        @error('stok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-archive"></i>
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <script>
        // inisialisasi rich text editor untuk textarea description (opsional)
        CKEDITOR.config.versionCheck = false;
        CKEDITOR.replace('keterangan');
    </script>
@endsection
