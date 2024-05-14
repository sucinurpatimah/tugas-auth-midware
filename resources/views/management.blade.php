<!-- resources/views/management.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>User Management Page</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Umur</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->birthdate }}</td>
                        <td>{{ $user->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
