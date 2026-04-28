@extends('layouts.master')
@section('content')
    <h2>SENARAI PELAJAR</h2>
    <a class="btn btn-primary" href="student/create" role="button">Tambah</a>
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
                        <td>Kemaskini | Padam</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
