@extends('layouts.master')
@section('content')
    <h2>SENARAI PENGAJAR</h2>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="lecturer/create" role="button">Tambah</a>
    </div>
    <table id="resultTable" class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>No KP</th>
                <th>No Tel</th>
                <th>Alamat E-mel</th>
                <th>Bidang</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @if (!$lecturers)
                <tr>
                    <td colspan="6">Tiada data</td>
                </tr>
            @else
                @foreach($lecturers as $lecturer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $lecturer->name }}</td>
                        <td>{{ $lecturer->no_ic }}</td>
                        <td>{{ $lecturer->no_tel }}</td>
                        <td>{{ $lecturer->email }}</td>
                        <td>{{ $lecturer->bidang }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('lecturer.edit', $lecturer->id)}}" role="button">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form method="post" action="{{route('lecturer.destroy', $lecturer->id)}}">
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
