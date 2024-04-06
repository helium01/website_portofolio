@extends('client.core')
@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">Jasa Bimbingan Skripsi {{$kontak[0]->nama_perusahaan}}</h1>

                <h6 class="text-center">Jasa pembuatan skripsi dan bimbingan skripsi di malang  </h6>

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


<section class="featured-section">
    <div class="container">
        <div class="row justify-content-center">

           

            <div class="col-lg-6 col-12">
                <div class="custom-block custom-block-overlay">
                    <div class="d-flex flex-column h-100">
                        <img src="{{asset('client')}}/images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                            <div>
                                <h5 class="text-white mb-2">{{$projek[$jumlah_projek]->nama_projek}}</h5>

                                <p class="text-white">{{$projek[$jumlah_projek]->keterangan}}</p>

                                <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                            </div>

                            <span class="badge bg-finance rounded-pill ms-auto">{{$projek[$jumlah_projek]->jenis}}</span>
                        </div>

                        <div class="social-share d-flex">
                            

                            

                            <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                        </div>

                        <div class="section-overlay"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-4">Projek</h1>
            </div>

        </div>
    </div>

    

    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                        <div class="row">
                            @foreach ($projek as $item)
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mt-5 mb-lg-0">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="#">
                                        <div class="d-flex">
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

                                        <img src="{{asset('client')}}/images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>

        </div>
    </div>
</section>


<section class="timeline-section section-padding" id="section_3">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-white mb-4">Bagaimana Cara Bimbingan ?</h1>
            </div>

            <div class="col-lg-10 col-12 mx-auto">
                <div class="timeline-container">
                    <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                        <div class="list-progress">
                            <div class="inner"></div>
                        </div>

                        <li>
                            <h4 class="text-white mb-3">Hubungi Admin</h4>

                            <p class="text-white">hubungi admin untuk menentukan harga dan detail projek yang akan di kerjakan dan jabarkan jenis projek yang di kerjakan maka admin akan menentukan harga</p>

                            <div class="icon-holder">
                              <i class="bi-search"></i>
                            </div>
                        </li>
                        
                        <li>
                            <h4 class="text-white mb-3">Sertakan Data</h4>

                            <p class="text-white">Sertakan data yang di butuhkan dalam projek tersebut dan lakukan bimbinan sesuai dengan kebutuhan</p>

                            <div class="icon-holder">
                              <i class="bi-bookmark"></i>
                            </div>
                        </li>

                        <li>
                            <h4 class="text-white mb-3">Selesai</h4>

                            <p class="text-white">Apabila projek sudah selesai lakukan pelunasan untuk menyelesaikan projek</p>

                            <div class="icon-holder">
                              <i class="bi-book"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            
        </div>
    </div>
</section>





<section class="contact-section section-padding section-bg" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Kunjungi Kami</h2>
            </div>

            <div class="col-lg-8 col-12 mb-4 mb-lg-0">
                <iframe class="google-map" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gg.%203b%20Mergosono,%20Kec.%20Kedungkandang,%20Kota%20Malang,%20Jawa%20Timur+(Gg.%203b)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"><a href="https://www.maps.ie/population/">Population Estimator map</a></iframe>
                
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                <h4 class="mb-3">Alamat</h4>

                <p>{{$kontak[0]->alamat}}</p>

                <hr>

                <p class="d-flex align-items-center mb-1">
                    <span class="me-2">whatsapp (WA)</span>

                    <a href="https://wa.me/{{$kontak[0]->no_wa}}" class="site-footer-link">
                        {{$kontak[0]->no_wa}}
                    </a>
                </p>

                <p class="d-flex align-items-center">
                    <span class="me-2">Email</span>

                    <a href="mailto:{{$kontak[0]->email}}" class="site-footer-link">
                        {{$kontak[0]->email}}
                    </a>
                </p>
            </div>

            

        </div>
    </div>
</section>
@endsection