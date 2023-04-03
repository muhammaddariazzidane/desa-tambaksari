@extends('layouts.main')

@section('content')
    <div class="container my-5 py-5">
        <div class="row justify-content-center mx-auto d-flex flex-column">
            <form class="col-lg-5 mx-auto" method="POST" action="{{ route('register.store') }}">
                @csrf
                <div class="card  border-0 shadow p-3">
                    <div class="row text-center mb-3">
                        <h3 class=" fw-semibold">Register</h3>
                    </div>
                    <div class="">
                        <label for="name" class="form-label text-white">Nama</label>
                        <input type="text"
                            class="form-control @error('name')
                        is-invalid
                        @enderror"
                            value="{{ old('name') }}" name="name" id="name" placeholder="jhon doe">
                        @error('name')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="">
                        <label for="email" class="form-label text-white">Alamat Email</label>
                        <input type="email"
                            class="form-control @error('email')
                          is-invalid
                        @enderror"
                            value="{{ old('email') }}" name="email" id="email" placeholder="name@example.com">
                        @error('email')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Password</label>
                        <input type="password"
                            class="form-control @error('password')
                          is-invalid
                        @enderror"
                            name="password" id="password" placeholder="jhon doe">
                        @error('password')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end my-2">
                        <button type="submit" class="btn btn-dark px-4">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
