@extends('Layout.main')
@section('title', 'Account')
@section('main_content')

<div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
    <button class="btn btn-outline-success" type="submit" onclick="location.href='{{ route('account.create') }}'">Create Account</button>
</div>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Nickname</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1
        @endphp
        @foreach ($account as $akun)
        <tr class="table-active">
            <td>{{ $no++ }}</td>
            <td>{{ $akun->username }}</td>
            <td>{{ $akun->password }}</td>
            <td>{{ $akun->email }}</td>
            <td>{{ $akun->phone }}</td>
            <td>{{ $akun->nickname }}</td>
            <td>{{ $akun->gender }}</td>
            <td>
                <button class="btn btn btn-success" type="submit" onclick="location.href='{{ route('account.show', $akun->id) }}'">Details</button>
                <button class="btn btn btn-primary" type="submit" onclick="location.href='{{ route('account.edit', $akun->id) }}'">Edit</button>
                <form action="{{ route('account.destroy', $akun->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tr>

    </tbody>
  </table>

@endsection
