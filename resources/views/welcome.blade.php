@extends('layouts.main')

@section('content')
    @include('components.navbar')
    {{-- jumbotron --}}
    <div style="background-image: url('/img/mangrove.jpg'); background-repeat: no-repeat; background-size: cover"
        class="position-absolute start-0 end-0 z-n1 bottom-0 top-0">
    </div>
    <div class="position-absolute start-0 end-0 z-n1 bottom-0 top-0"
        style="background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(1px)"></div>

    <div class=" pb-4 mb-5 container">
        <div class="p-5 mb-4 text-center text-white">
            <div class="container-fluid pb-5">
                <h2 class="display-6 fw-semibold ">Selamat Datang</h2>
                <h3 class="display-6 fw-semibold">Desa Tambaksari</h3>
                <div class="mt-5 pt-2 mx-auto col-lg-4 col-12">
                    <p class="text-center text-capitalize mb-4">fokus pembangunan desa</p>
                    <div class="mt-3 d-flex justify-content-center gap-3">
                        <div class="shadow border-0 card" style="width: 6rem">
                            <i class="fas fa-university py-4 mx-auto fs-1 text-dark"></i>
                        </div>
                        <div class="shadow border-0 card" style="width: 6rem">
                            <i class="fas fa-tree py-4 mx-auto fs-1 text-success"></i>
                        </div>
                        <div class="shadow border-0 card" style="width: 6rem">
                            <i class="fas fa-water py-4 mx-auto fs-1 text-info"></i>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button type="button" class="btn btn-primary pb-2 rounded-5 px-4">selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- jumbotron --}}

    {{-- berita --}}
    @include('components.berita')
    {{-- berita --}}

    {{-- visi misi --}}
    @include('components.visi-misi')
    {{-- visi misi --}}

    {{-- card --}}
    @include('components.wisata')

    {{-- footer --}}
    @include('components.footer')
    {{-- footer --}}
@endsection
