@extends('layouts.master')
@section('content')
    <h2>SENARAI PELAJAR</h2>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="student/create" role="button">Tambah</a>
    </div>
    <table id="resultTable" class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NDP</th>
                <th>Kursus</th>
                <th>Semester</th>
                <th>No Tel</th>
                <th>Alamat</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @if (!$students)
                <tr>
                    <td colspan="5">Tiada data</td>
                </tr>
            @else
                @foreach($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->ndp }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->semester }}</td>
                        <td>{{ $student->no_tel }}</td>
                        <td>{{ $student->address }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('student.edit', $student->id)}}" role="button">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form method="post" action="{{route('student.destroy', $student->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
