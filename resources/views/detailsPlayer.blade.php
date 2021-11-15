@extends('Layout.main')

@section ('main_content')
<div class="mt-4 p-5 bg-primary text-white rounded">
    <p>Nama: {{ $player->name }}</p>
    <p>Email: {{ $player->email }}</p>
    <p>Phone: {{ $player->phone }}</p>
    <p>Gender: {{ $player->gender }}</p>
</div>
@endsection
