@extends('Layout.main')

@section ('main_content')
<div class="mt-4 p-5 bg-primary text-white rounded">
    <p>Username: {{ $account->username }}</p>
    <p>Password: {{ $account->password }}</p>
    <p>Email: {{ $account->email }}</p>
    <p>Phone: {{ $account->phone }}</p>
    <p>Nickname: {{ $account->nickname }}</p>
    <p>Gender: {{ $account->gender }}</p>
</div>
@endsection
