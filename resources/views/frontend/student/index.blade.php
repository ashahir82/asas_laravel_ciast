
@extends('layouts.master')
@section('content')
    <h2>HALAMAN PELAJAR</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NDP</th>
                <th>Kursus</th>
                <th>Semester</th>
                <th>No Tel</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->ndp }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->semester }}</td>
                <td>{{ $student->no_tel }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
