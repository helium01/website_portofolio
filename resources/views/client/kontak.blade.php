@extends('client.core')
@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">Kontak Kami {{$kontak[0]->nama_perusahaan}}</h1>

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
                    <span class="me-2">Telp</span>

                    <a href="tel:{{$kontak[0]->no_wa}}" class="site-footer-link">
                        {{$kontak[0]->no_wa}}
                    </a>
                </p>
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
                <p class="d-flex align-items-center">
                    <span class="me-2"><i class="fa fa-instagram" aria-hidden="true"></i>
                        Instagram</span>

                    <a href="https://www.instagram.com/{{$kontak[0]->instagram}}" class="site-footer-link">
                        {{$kontak[0]->instagram}}
                    </a>
                </p>
            </div>

            

        </div>
    </div>
</section>
@endsection