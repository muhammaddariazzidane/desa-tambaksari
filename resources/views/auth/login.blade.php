@extends('layouts.main')

@section('content')
    <div class="container my-5 py-5">
        @if (session()->has('error'))
            <div class="row justify-content-center mx-auto">
                <div class="col-lg-5">
                    <div class="alert alert-warning text-center" role="alert">
                        {{ session('error') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center mx-auto d-flex flex-column">
            <form class="col-lg-5 mx-auto" method="POST" action="{{ route('login.auth') }}">
                @csrf
                <div class="card  border-0 shadow p-3">
                    <div class="row text-center mb-3">
                        <h3 class="fw-semibold">Login Admin</h3>
                    </div>

                    <div>
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
                        <button type="submit" class="btn btn-dark shadow px-4">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
