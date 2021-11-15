@extends('Layout.main')
@section('title', 'Player')
@section('main_content')

<div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
    <button class="btn btn-outline-success" type="button" onclick="location.href='{{ route('player.create') }}'">Create Player</button>
</div>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1
        @endphp
        @foreach ($player as $pemain)
        <tr class="table-active">
            <td>{{ $no++ }}</td>
            <td>{{ $pemain->name }}</td>
            <td>{{ $pemain->email }}</td>
            <td>{{ $pemain->phone }}</td>
            <td>{{ $pemain->gender }}</td>
            <td>
                <button class="btn btn btn-success" type="submit" onclick="location.href='{{ route('player.show', $pemain->player_Id) }}'">Details</button>
                <button class="btn btn btn-primary" type="submit" onclick="location.href='{{ route('player.edit', $pemain->player_Id) }}'">Edit</button>
                <form action="{{ route('player.destroy', $pemain->player_Id) }}" method="POST">
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
