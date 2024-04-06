@extends('client.core')
@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">Tentang Kami {{$kontak[0]->nama_perusahaan}}</h1>

            </div>

        </div>
    </div>
</section>


<section class="faq-section section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="mb-4">{{$kontak[0]->nama_perusahaan}}</h2>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-5 col-12">
                <img src="{{asset('client')}}/images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
            </div>

            <div class="col-lg-6 col-12 m-auto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            apa sih {{$kontak[0]->nama_perusahaan}} itu?
                            </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Perusahaan kami {{$kontak[0]->nama_perusahaan}} adalah layanan yang menyediakan bantuan komprehensif bagi mahasiswa dalam menyelesaikan tugas akhir mereka, seperti skripsi, tesis, atau disertasi. Mereka biasanya memiliki tim ahli yang terdiri dari penulis, editor, dan peneliti berpengalaman dalam berbagai bidang akademik. Namun, perusahaan tersebut harus memastikan kepatuhan terhadap etika akademik dan kebijakan universitas, termasuk menjaga kerahasiaan informasi dan memastikan kesesuaian dengan pedoman penulisan yang ditetapkan. Meskipun dapat memberikan bantuan, mahasiswa tetap perlu memahami materi yang diajarkan dan terlibat aktif dalam proses penelitian dan penulisan tugas akhir mereka.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bagaimana cara pemesanan projek?
                        </button>
                        </h2>

                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <ul>
                                <li>Hubungi Admin : <br>
                                    Pelanggan menghubungi admin perusahaan untuk memesan jasa. Mereka menjelaskan rincian proyek yang diinginkan, termasuk deskripsi proyek, tenggat waktu, dan kebutuhan khusus lainnya.
                                </li>
                                <li>Penjelasan Proyek : <br>
                                    Setelah pemesanan diterima, admin akan memberikan penjelasan detail mengenai proyek kepada pelanggan. Ini termasuk ruang lingkup pekerjaan, biaya perkiraan, batas waktu penyelesaian, dan ketentuan-ketentuan khusus lainnya yang perlu dipertimbangkan.
                                </li>
                                <li>Persetujuan Dan Pembayaran DP : <br>
                                    Jika pelanggan setuju dengan penjelasan detail proyek, mereka akan diminta untuk membayar setengah dari biaya total proyek sebelum pekerjaan dimulai. Ini bertujuan untuk memastikan komitmen pelanggan terhadap proyek dan untuk membantu menutupi biaya awal.
                                </li>
                                <li>Pelaksanaan Proyek : <br>
                                    Tim kerja mulai melaksanakan proyek sesuai dengan kesepakatan dan tenggat waktu yang telah ditetapkan. Mereka terus berkomunikasi dengan pelanggan untuk memastikan progres proyek sesuai dengan harapan.
                                </li>
                                <li>Pembayaran Penuh Setelah Selesai : <br>
                                    Setelah proyek selesai dan disetujui oleh pelanggan, mereka diminta untuk melakukan pembayaran penuh atas sisa biaya proyek. Hal ini menandai penyelesaian transaksi dan penyerahan produk atau layanan secara penuh kepada pelanggan.
                                </li>
                               </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            murah gak sih di {{$kontak[0]->nama_perusahaan}}?
                        </button>
                        </h2>

                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Pembayaran yang murah dan tepat waktu adalah fitur penting dalam menjaga kepuasan pelanggan dan membangun reputasi yang baik bagi perusahaan. Dengan menawarkan harga yang terjangkau, perusahaan dapat menarik perhatian lebih banyak pelanggan dan memastikan bahwa layanan yang mereka berikan tetap kompetitif di pasar. Pembayaran tepat waktu kepada karyawan atau kontraktor juga memainkan peran penting dalam mempertahankan kualitas layanan dan motivasi tim kerja.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection