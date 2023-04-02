@extends('layouts.main')

@section('content')
    @include('components.navbar')
    <div class="container py-5 my-5">
        <div class="row text-center mb-3">
            <h3>Cari NIK</h3>
        </div>
        <div class="row justify-content-center mx-auto">
            <div class="col-4">
                <form method="get" action="/bantuan" class="input-group mb-3">
                    <input type="search" name="search" class="form-control" placeholder="321*****"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button type="submit" class="input-group-text bg-warning" id="basic-addon2"><i
                            class="fas fa-search"></i></button>
                </form>
            </div>

        </div>
        <div class="row my-5 mx-auto justify-content-center">
            <div class="card border-0 shadow" style="width: 28rem;">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="mb-5">DATA PENERIMA BANTUAN</h5>
                    </div>
                    {{-- nik --}}
                    <div class="d-flex flex-wrap gap-2">
                        <h6 class="card-title">NIK : </h6>
                        <h6 class="card-title">3219830773</h6>
                    </div>
                    {{-- nik --}}
                    {{-- nama --}}
                    <div class="d-flex flex-wrap gap-2">
                        <h6 class="card-title">NAMA :</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit.</h6>
                    </div>
                    {{-- nama --}}
                    {{-- jenis bantuan --}}
                    <div class="d-flex flex-wrap gap-2">
                        <h6 class="card-title">JENIS BANTUAN :</h6>
                        <h6 class="card-title">SEMBAKO</h6>
                    </div>
                    {{-- jenis bantuan --}}
                    {{-- jenis bantuan --}}
                    <div class="d-flex flex-wrap gap-2">
                        <h6 class="card-title">BERLAKU SAMPAI :</h6>
                        <h6 class="card-title">80 februari</h6>
                    </div>
                    {{-- jenis bantuan --}}

                    <a href="#" class="d-flex justify-content-end card-link">Cetak Bukti</a>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
