@extends('client.core')
@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">Layanan Kami {{$kontak[0]->nama_perusahaan}}</h1>

            </div>

        </div>
    </div>
</section>


<section class="timeline-section section-padding" id="section_3">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-white mb-4">Konsultasi Profesional:</h2>
            </div>

            <div class="col-lg-10 col-12 mx-auto">
                <div class="timeline-container">
                    <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                        <div class="list-progress">
                            <div class="inner" style="height: 671.1px;"></div>
                        </div>

                        <li class="active">
                            <h4 class="text-white mb-3">Layanan Konsultasic</h4>

                            <p class="text-white">Kami menyediakan layanan konsultasi profesional yang mencakup berbagai bidang, termasuk bisnis, teknologi, pemasaran, dan pengembangan pribadi. Tim ahli kami siap memberikan saran dan strategi yang tepat untuk membantu Anda mencapai tujuan Anda.</p>

                            <div class="icon-holder">
                              <i class="bi-search"></i>
                            </div>
                        </li>
                        
                        <li class="">
                            <h4 class="text-white mb-3">Pengembangan Produk dan Layanan:</h4>

                            <p class="text-white">Kami membantu dalam proses pengembangan produk dan layanan dari awal hingga peluncuran. Tim kreatif kami akan bekerja sama dengan Anda untuk mengidentifikasi peluang pasar, merancang konsep, dan mengimplementasikan solusi inovatif yang sesuai dengan kebutuhan dan harapan Anda.</p>

                            <div class="icon-holder">
                              <i class="bi-bookmark"></i>
                            </div>
                        </li>

                        <li class="">
                            <h4 class="text-white mb-3">Penelitian dan Analisis Mendalam:</h4>

                            <p class="text-white">Layanan penelitian dan analisis kami dapat membantu Anda dalam mengumpulkan data yang relevan, menganalisis tren pasar, dan memahami perilaku konsumen. Dengan pendekatan yang berorientasi pada data, kami membantu Anda mengambil keputusan yang lebih cerdas dan efektif.</p>

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
@endsection