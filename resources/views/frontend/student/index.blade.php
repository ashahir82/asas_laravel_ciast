@extends('layouts.master')
@section('content')
    <h2>HALAMAN PELAJAR</h2>
    <table id="resultTable" class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NDP</th>
                <th>Kursus</th>
                <th>Semester</th>
                <th>No Tel</th>
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
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
