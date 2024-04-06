@extends('client.core')
@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">Projek Kami {{$kontak[0]->nama_perusahaan}}</h1>
                <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" action="/cari" role="search">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bi-search" id="basic-addon1">
                            
                        </span>

                        <input name="cari" type="search" class="form-control" id="keyword" placeholder="cari projek berdasar nama, jenis, harga, keterangan" aria-label="Search">

                        <button type="submit" class="form-control">Cari</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>


<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
            </div>

            <div class="col-lg-8 col-12 mt-3 mx-auto">
                @if($projek->count()==0)
                    <h1>projek kosong</h1>
                @else
                @foreach ($projek as $item)
                <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                    <div class="d-flex">
                        <img src="{{asset('client')}}/images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-topics-listing-info d-flex">
                            <div>
                                <h5 class="mb-2">{{$item->nama_projek}}</h5>

                                <p class="mb-0">{{$item->keterangan}}</p>
                                @if($item->diskon !=null)
                                <h6>Harga : <del>{{$item->harga}}</del></h6>
                                <h4>Diskon : {{$item->diskon}}</h4>
                                @else
                                <h6>Harga : {{$item->harga}}</h6>
                                @endif
                            </div>

                            <span class="badge bg-design rounded-pill ms-auto">{{$item->jenis}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                

            </div>

            

        </div>
    </div>
</section>
@endsection