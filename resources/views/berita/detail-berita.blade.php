@extends('layouts.main')

@section('content')
    @include('components.navbar')

    <div class="my-4 pb-2 container ">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail berita</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mt-2 pb-5 px-4  mx-auto">
        <div class="row mx-auto d-flex  justify-content-center">
            <div class="col-lg-8 mb-3">
                <div class="w-100">
                    <img src="/img/mangrove.jpg" class="w-100 rounded d-block object-fit-cover" alt="">
                </div>
                <h4 class="my-4 fw-semibold text-center">Lorem, ipsum dolor.</h4>
                <p class="fs-5 mt-2 lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet eius distinctio
                    vero
                    necessitatibus deleniti omnis cumque aut dolores iste eum, natus odit consequuntur commodi, aspernatur
                    officia neque asperiores. Aliquid vel quos sit eaque deserunt eius id ratione! Ut minus doloribus a,
                    tempore, ad error pariatur quisquam voluptate, mollitia accusamus odit?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eveniet suscipit tempora repellendus.
                    Reiciendis temporibus iste, eaque nisi delectus eum quasi a et vitae ab dolor itaque adipisci? Fugit
                    autem omnis perspiciatis excepturi corrupti voluptate commodi quo obcaecati recusandae, beatae qui id.
                    Tenetur sapiente deleniti qui exercitationem obcaecati dolores, atque sint, culpa, dolorum fugiat
                    impedit vel illum illo voluptatum rerum inventore porro iusto. Veniam neque ut sed, dolorem ducimus
                    dolor, voluptates qui voluptatibus laboriosam corporis labore delectus amet sint tempore nemo facere!
                    Dolor, repudiandae! Quidem placeat voluptatibus corrupti, cupiditate iusto dignissimos, rem, quaerat
                    sunt ullam fugiat excepturi ad error pariatur?</p>
                <div class="mt-5 mb-4 d-flex justify-content-between">
                    <span>0 komentar</span>
                    <small class="text-muted">Lorem, ipsum dolor. years ago</small>
                </div>
                <form action="" method="post">
                    @csrf
                    <hr />
                    <div class="mb-3">
                        {{-- <label for="exampleFormControlTextarea1" class="form-label">Komentar</label> --}}
                        <textarea placeholder="tambahkan komentar" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    @auth
                        <button class="btn btn-primary">komentar</button>
                    @else
                        <button class="btn btn-primary " disabled>login untuk komentar</button>
                    @endauth
                </form>
                {{-- komentar --}}
                <div class="mt-4">
                    <div class="card mb-2 shadow border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class=" flex-shrink-1">
                                    <div class="h-50 w-50 ">
                                        <img src="/img/logo.png" width="30" class=" rounded d-block object-fit-cover"
                                            alt="">
                                    </div>
                                </div>
                                <div class=" w-100">
                                    <p class="ps-3 fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                                        cumque
                                        temporibus quis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi odit
                                        sint recusandae.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="position-absolute bottom-0 end-0">
                            <small class="px-2 d-block mb-1">years ago</small>
                        </div>
                    </div>
                </div>
                {{-- komentar --}}
            </div>
        </div>

        {{-- <div class="row"> --}}
        {{-- </div> --}}
    </div>

    @include('components.footer')
@endsection
