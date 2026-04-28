@extends('layouts.master')
@section('content')
    <h2>KEMASKINI PELAJAR</h2>
    <form action="{{route('student.update', $student->id)}}", method="POST">
        @csrf
        @method('post')
            <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Nama Pelajar" value="{{ old('name',$student->name ) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNDP" class="col-sm-2 col-form-label">No. Daftar Pelajar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNDP" name="ndp" placeholder="No. Daftar Pelajar" value="{{ old('ndp',$student->ndp ) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputCourse" class="col-sm-2 col-form-label">Kursus</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCourse" name="course" placeholder="Kursus" value="{{ old('course',$student->course ) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSemester" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSemester" name="semester" placeholder="Semester" value="{{ old('semester',$student->semester ) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputMoTel" class="col-sm-2 col-form-label">No. Telefon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputMoTel" name="no_tel" placeholder="No. Telefon" value="{{ old('no_tel',$student->no_tel ) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputAddress" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Alamat" value="{{ old('address',$student->address ) }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
