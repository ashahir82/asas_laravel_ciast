@extends('layouts.master')
@section('content')
    <h2>KEMASKINI PENGAJAR</h2>
    <form action="{{route('lecturer.update', $lecturer->id)}}", method="POST">
        @csrf
        @method('post')
            <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Nama Pengajar" value="{{ old('name',$lecturer->name ) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputno_ic" class="col-sm-2 col-form-label">No. Pengenalan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputno_ic" name="no_ic" placeholder="No. Pengenalan" value="{{ old('no_ic',$lecturer->no_ic ) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputno_tel" class="col-sm-2 col-form-label">No Telefon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputno_tel" name="no_tel" placeholder="No Telefon" value="{{ old('no_tel',$lecturer->no_tel ) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputemail" class="col-sm-2 col-form-label">Alamat E-Mel</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputemail" name="email" placeholder="Alamat E-Mel" value="{{ old('email',$lecturer->email ) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputbidang" class="col-sm-2 col-form-label">Bidang Kemahiran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputbidang" name="bidang" placeholder="Bidang Kemahiran" value="{{ old('bidang',$lecturer->bidang ) }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
