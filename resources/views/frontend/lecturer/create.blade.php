@extends('layouts.master')
@section('content')
    <h2>TAMBAH PENGAJAR</h2>
    <form method="post" action="{{route('lecturer.store')}}">
        @csrf
        @method('post')
            <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Nama Pengajar">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNoIC" class="col-sm-2 col-form-label">No. Pengenalan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNoIC" name="no_ic" placeholder="No. Pengenalan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputMoTel" class="col-sm-2 col-form-label">No. Telefon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputMoTel" name="no_tel" placeholder="No. Telefon">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Alamat E-Mel</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Semester">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputBidang" class="col-sm-2 col-form-label">Bidang Kemahiran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputBidang" name="bidang" placeholder="Bidang Kemahiran">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
