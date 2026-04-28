@extends('layouts.master')
@section('content')
    <h2>TAMBAH PELAJAR</h2>
    <form method="post" action="{{route('student.store')}}">
        @csrf
        @method('post')
            <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Nama Pelajar">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNDP" class="col-sm-2 col-form-label">No. Daftar Pelajar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNDP" name="ndp" placeholder="No. Daftar Pelajar">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputCourse" class="col-sm-2 col-form-label">Kursus</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCourse" name="course" placeholder="Kursus">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSemester" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSemester" name="semester" placeholder="Semester">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputMoTel" class="col-sm-2 col-form-label">No. Telefon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputMoTel" name="no_tel" placeholder="No. Telefon">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputAddress" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Alamat">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
@endsection
