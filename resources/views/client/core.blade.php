<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{$kontak[0]->nama_perusahaan}}</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="{{asset('client')}}/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{asset('client')}}/css/bootstrap-icons.css" rel="stylesheet">

        <link href="{{asset('client')}}/css/templatemo-topic-listing.css" rel="stylesheet">      
        <link rel="stylesheet" href="{{asset('client/font-awesome')}}/css/font-awesome.min.css">

<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <i class="bi-back"></i>
                        
                        <span>{{$kontak[0]->nama_perusahaan}}</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link " href="/">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="/kontak">Kontak</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link " href="/layanan">Layanan</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="/projek">projek</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link " href="/tentang">Tentang</a>
                            </li>

                            
                        </ul>
                    </div>
                </div>
            </nav>
            

            @yield('content')
        </main>

<footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="/">
                            <i class="bi-back"></i>
                            <span>{{ substr($kontak[0]->nama_perusahaan, 0, 11) }}</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="/" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="/kontak" class="site-footer-link">Kontak</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="/layanan" class="site-footer-link">Layanan</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="/projek" class="site-footer-link">Projek</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="/tentang" class="site-footer-link">Tentang</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Informasi</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: {{$kontak[0]->no_wa}}" class="site-footer-link">
                                {{$kontak[0]->no_wa}}
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:{{$kontak[0]->email}}" class="site-footer-link">
                                {{$kontak[0]->email}}
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="https://www.instagram.com/{{$kontak[0]->instagram}}" target="_blank" class="site-footer-link">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                {{$kontak[0]->instagram}}
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('client')}}/js/jquery.min.js"></script>
        <script src="{{asset('client')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('client')}}/js/jquery.sticky.js"></script>
        <script src="{{asset('client')}}/js/click-scroll.js"></script>
        <script src="{{asset('client')}}/js/custom.js"></script>

    </body>
</html>
