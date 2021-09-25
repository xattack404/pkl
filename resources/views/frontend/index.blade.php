{{-- {{ dd($data['navigasi']) }} --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <title>UMKM Jajanan Kelor</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('css_frontend/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css_frontend/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css_frontend/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css_frontend/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css_frontend/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css_frontend/magnific-popup.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css_frontend/templatemo-style.css') }}">

</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand">{{ $data['pengaturan'][0]->nama_web }}</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#home" class="smoothScroll">Beranda</a></li>
                    @foreach ($data['navigasi'] as $nav)
                        <li><a href="#{{ $nav->link }}" class="smoothScroll">{{ $nav->nama_navigasi }}</a>
                        </li>
                    @endforeach
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-phone"></i> {{ $data['pengaturan'][0]->no_telp }}</a></li>
                    <a href="#contact
                    " class="section-btn">Pesan Produk</a>
                </ul>
            </div>

        </div>
    </section>


    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="row">

            <div class="owl-carousel owl-theme">
                @foreach ($data['slider'] as $slider)
                    <div class="item item-first"
                        style="background-image: url({{ asset('gambar_slider/' . $slider->gambar) }});">
                        <div class="caption">
                            <div class="container">
                                <div class="col-md-8 col-sm-12">
                                    <h3>{{ $slider->judul }}</h3>
                                    <h1>{{ $slider->caption }}</h1>
                                    <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our
                                        chef</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- ABOUT -->
    <section id="{{ $data['navigasi'][0]->link }}" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                {{-- @php
                    $tentang = $data['navigasi'];
                @endphp --}}
                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h2>{{ $data['navigasi'][0]->judul_konten }}</h2>
                            <div class="wow fadeInUp" data-wow-delay="0.4s">
                                <p>{{ $data['navigasi'][0]->isi_konten }}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="gambar_artikel/{{ $data['navigasi'][0]->gambar }}" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MENU-->
    <section id="{{ $data['navigasi'][2]->link }}" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>{{ $data['navigasi'][2]->nama_navigasi }}</h2>
                        <h4>{{ $data['navigasi'][2]->isi_konten }}</h4>
                    </div>
                </div>
                {{-- @forelse ($data['artikel'] as $data) --}}
                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="gambar_artikel/{{ $data['artikel'][0]->gambar }}" class="image-popup"
                            title="Serbuk Daun Kelor">
                            <img src="gambar_artikel/{{ $data['artikel'][0]->gambar }}" class="img-responsive"
                                alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>{{ $data['artikel'][0]->judul_artikel }}</h3>
                                    <p>{{ $data['artikel'][0]->relasiKategori->nama_kategori }}</p>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="gambar_artikel/{{ $data['artikel'][1]->gambar }}" class="image-popup"
                            title="Serbuk Daun Kelor">
                            <img src="gambar_artikel/{{ $data['artikel'][1]->gambar }}" class="img-responsive"
                                alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>{{ $data['artikel'][1]->judul_artikel }}</h3>
                                    <p>{{ $data['artikel'][1]->relasiKategori->nama_kategori }}</p>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="gambar_artikel/{{ $data['artikel'][2]->gambar }}" class="image-popup"
                            title="Serbuk Daun Kelor">
                            <img src="gambar_artikel/{{ $data['artikel'][2]->gambar }}" class="img-responsive"
                                alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>{{ $data['artikel'][2]->judul_artikel }}</h3>
                                    <p>{{ $data['artikel'][2]->relasiKategori->nama_kategori }}</p>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
                {{-- @empty
                    <h3>Data Kosong</h3>
                @endforelse --}}



            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
 -->
                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                    <div id="google-map">
                        <iframe src="{{ $data['pengaturan'][0]->link_map }}" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2>Hubungi Kami</h2>
                        </div>
                    </div>

                    <!-- CONTACT FORM -->
                    <form action="{{ route('inbox.store') }}" method="post" class="wow fadeInUp" id="contact-form"
                        role="form" data-wow-delay="0.8s" enctype="multipart/form-data">
                        @csrf
                        <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                        <h6 class="text-success">Your message has been sent successfully.</h6>

                        <!-- IF MAIL NOT SENT -->
                        <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.
                        </h6>

                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="cf-name" name="nama" placeholder="Nama">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email">
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" id="cf-subject" name="subjek"
                                placeholder="Subjek">

                            <textarea class="form-control" rows="6" id="cf-message" name="isi"
                                placeholder="Isi"></textarea>

                            <button type="submit" class="form-control" id="cf-submit" name="submit">Kirim
                                Pesan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Deskripsi</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            {{ $data['pengaturan'][0]->deskripsi }} </address>
                    </div>
                </div>

                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Alamat</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            {{ $data['pengaturan'][0]->alamat }}>
                        </address>
                    </div>
                </div>
                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Reservation</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Telp | {{ $data['pengaturan'][0]->no_telp }}</p>
                            <p><a href="mailto:admin@jajanankelor.com">E-Mail |
                                    {{ $data['pengaturan'][0]->email }}</a></p>
                            <p>WA | {{ $data['pengaturan'][0]->no_telp }} </p>
                        </address>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                        <li><a href="{{ $data['pengaturan'][0]->link_facebook }}" class="fa fa-facebook-square"
                                attr="facebook icon"></a></li>
                        <li><a href="{{ $data['pengaturan'][0]->link_twitter }}" class="fa fa-twitter"></a></li>
                        <li><a href="{{ $data['pengaturan'][0]->link_ig }}" class="fa fa-instagram"></a></li>
                        <li><a href="www.google.com" class="fa fa-google"></a></li>
                    </ul>

                    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                        <p><br>Copyright &copy; 2018 <br>PKL Polije 2021

                            <br><br>Design: TemplateMo
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="{{ asset('js_frontend/jquery.js') }}"></script>
    <script src="{{ asset('js_frontend/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js_frontend/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js_frontend/wow.min.js') }}"></script>
    <script src="{{ asset('js_frontend/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js_frontend/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js_frontend/smoothscroll.js') }}"></script>
    <script src="{{ asset('js_frontend/custom.js') }}"></script>

</body>

</html>
