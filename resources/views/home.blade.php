@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>SELAMAT DATANG</h1>
            <h2>DI KLINIK BANJARNEGARA</h2>
            <a href="/antrian" class="btn-get-started scrollto">AMBIL ANTRIAN</a>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>SISTEM ANTRIAN ONLINE</h3>
                            <p>
                                Ini adalah Sistem Antrian Online Klinik Banjarnegara dimana setiap pengunjung dapat
                                mengambil antrian
                                Sesuai klinik terlebih dahulu dari rumah
                            </p>
                            <div class="text-center">
                                <a href="/antrian" class="more-btn">AMBIL ANTRIAN <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-plus-medical"></i>
                                        <h4>Poli Umum</h4>
                                        <p>Pelayanan Poli Umum adalah pelayanan pemeriksaan medis berupa pemeriksaan
                                            kesehatan, pengobatan, dan edukasi kepada pasien dalam rangka meningkatkan
                                            kesehatan perorangan dan masyarakat.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-dna"></i>
                                        <h4>Poli Gigi</h4>
                                        <p>Pelayanan Kesehatan Gigi dan Mulut merupakan pelayanan kesehatan gigi dan mulut
                                            berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan
                                            medis dasar kesehatan gigi dan mulut.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bxs-first-aid"></i>
                                        <h4>Poli THT</h4>
                                        <p>Pelayanan Kesehatan THT atau Telinga Hidung Tenggorokan berupa pemeriksaan
                                            kesehatan, pengobatan, dan pemberian tindakan medis pada Telinga Hidung
                                            Tenggorokan</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-bed"></i>
                                        <h4>Poli Lansia & Disabilitas</h4>
                                        <p>Ini adalah poli kesehatan yang khusus menangani kebutuhan kesehatan para lansia
                                            dan individu dengan disabilitas. Pelayanan di poli ini dirancang untuk mendukung
                                            kesehatan dan kesejahteraan mereka.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-child"></i>
                                        <h4>Poli Balita</h4>
                                        <p>Poli Balita adalah unit pelayanan kesehatan yang fokus pada perawatan dan
                                            pemantauan kesehatan anak-anak balita. Pelayanan di poli ini mencakup
                                            pemeriksaan rutin, imunisasi, serta penanganan penyakit umum pada balita.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bxs-shield-plus"></i>
                                        <h4>Poli KIA & KB</h4>
                                        <p>Poli KIA (Kesehatan Ibu dan Anak) dan KB (Kelahiran Berencana) memberikan layanan
                                            terkait kehamilan, persalinan, dan perawatan pasca melahirkan. Selain itu, poli
                                            ini juga menyediakan informasi dan layanan terkait keluarga berencana.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bxs-clinic"></i>
                                        <h4>Poli Nifas / PNC</h4>
                                        <p>Poli Nifas atau PNC menangani perawatan kesehatan bagi ibu setelah
                                            melahirkan. Pelayanan ini mencakup pemantauan kesehatan ibu pasca
                                            melahirkan, perawatan luka, konseling, dan edukasi terkait perawatan bayi
                                            baru lahir.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->



        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fas fa-user-md"></i>
                            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>DOCTOR</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="far fa-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>DEPARTEMENS</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-flask"></i>
                            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>LABORATORIUM</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1000000000" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>PENILAIAN</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->




        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>
            </div>



            <div class="container">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>LOKASI:</h4>
                                <p>Banjarnegara, Jawa Tengah</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>EMAIL:</h4>
                                <p>klinikbanjarnegara@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>TELPON:</h4>
                                <p>+6289681882690</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection

@include('partials.footer')
