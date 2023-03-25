@extends('layouts.main')

@section('content')
    <div class="container my-5 py-5">
        <div class="row justify-content-center mx-auto d-flex flex-column">
            <form class="col-lg-5 mx-auto" method="POST" action="">
                @csrf
                <div class="card bg-primary  border-0 shadow p-3">
                    <div class="row text-center mb-3">
                        <h3 class="text-white fw-semibold">Login Admin</h3>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label text-white">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="jhon doe">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Alamat Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="name@example.com">
                    </div>
                    <div class="d-flex justify-content-end my-2">
                        <button type="submit" class="btn btn-light px-4">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
