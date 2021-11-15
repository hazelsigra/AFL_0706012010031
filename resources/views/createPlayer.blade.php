@extends('Layout.main')

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="mt-5">Create new Player</h1>

            <div class="">
                <form action="{{ route('player.store') }}" method="POST" class="row g-3">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="example@gmai.com">
                    </div>
                    <div class="col-12">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="number" class="form-control" id="phone">
                    </div>
                    <div class="col-md-4">
                      <label for="inputGender" class="form-label">Gender</label>
                      <select id="inputGender" class="form-select">
                        <option selected>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
