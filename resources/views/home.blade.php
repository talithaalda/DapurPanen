@extends('layouts.main')
@section('container')
    <div class="header">
        <div class="content-header">
            <div style="font-size: 40px;font-weight: 600;line-height: 56px; /* 140% */">
                Sajikan hidangan terbaikmu, Bersama DapurPanen</div>
            <div
                style="color: var(--foundation-grey-dark-active, #575757);font-size: 18px;font-weight: 400;line-height: 30px; /* 166.667% */">
                Kualitas terbaik selalu jadi prioritas kami. Berkomitmen memberikan pengalaman terbaik, produk aman, halal,
                dan legal, serta memenuhi standar pelanggan. Tepat waktu dan mutu produk kami jadi fokus utama untuk
                kepuasan pelanggan.</div>
            <div class="mt-4">
                <div class="btn btn-app "
                    style="color: var(--foundation-grey-dark-active, #575757);font-size: 18px;font-weight: 400;line-height: 30px; /* 166.667% */">
                    <div class="btn-text">Langganan Sekarang</div>
                </div>
            </div>
        </div>
        <div class="mb-5">
            <img class="headerpic" src={{ asset('headerpic3.png') }} alt="headerpic">
            <div class="effect5">ss</div>
        </div>
    </div>
    <div class="pelanggan m-5">
        <div>
            <div style="color: var(--foundation-grey-darker, #444);text-align: center;font-size: 32px;font-weight: 600;">
                Pelanggan Kami</div>
            <div class="list-pelanggan mt-5">
                <img class="logo-pelanggan" src={{ asset('Logo+pt+kian+mulia+manunggal.png') }}>
                <img class="logo-pelanggan" src={{ asset('den.png') }}>
                <img class="logo-pelanggan" src={{ asset('jumat+berkah.png') }}>
            </div>
        </div>
    </div>
    <div><img src={{ asset('vectorbg.png') }}></div>
    <div class="tentang-kami">
        <div class="effect3"></div>
        <div class="collase1">
            <img src={{ asset('gambar1.png') }}>
            <img src={{ asset('gambar2.png') }}>
        </div>
        <div class="collase2">
            <img src={{ asset('gambar3.png') }}>
            <div class="effect4"></div>

        </div>
        <div class="tentang-kami-content">
            <div style="color: #0F172A;font-size: 48px;font-weight: 600;line-height: 68px; /* 141.667% */">
                Tentang Kami</div>
            <div style="padding: 0 100px 0 0">Kami menyediakan berbagai macam pilihan menu yang sudah matang, siap masak
                untuk memudahkan
                anda dalam
                memilih makanan yang diinginkan. Kami berkomitmen untuk menggunakan bahan-bahan berkualitas dan segar untuk
                menjaga kualitas dan rasa dari setiap hidangan yang kami sajikan. Selain itu, kami juga menyediakan layanan
                catering untuk berbagai acara seperti pesta ulang tahun, pernikahan, dan acara bisnis. Kami dapat
                menyesuaikan menu sesuai dengan kebutuhan dan preferensi pelanggan untuk memastikan bahwa setiap acara
                berjalan dengan sukses.</div>
            <div class="mt-4">
                <div class="btn btn-app "
                    style="color: var(--foundation-grey-dark-active, #575757);font-size: 18px;font-weight: 400;line-height: 30px; /* 166.667% */">
                    <a href="/aboutus">
                        <div class="btn-text">Lihat Selengkapnya</div>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div style="color: var(--foundation-black-normal, #2E2F33);font-size: 48px;font-weight: 600;text-align: center;">
        Produk Kami</div>
    <div class="list-produk mt-5">
        <div>
            <div class="container-img-produk">
                <img class="img-produk" src={{ asset('gambar41.png') }}>
            </div>
            <div class="text-produk">
                <div class="produk-title">Ready to Cook</div>
                <div class="produk-desc">Dapur Panen hadir dengan solusi praktis memasak dengan produk siap masak
                    dari bahan-bahan dan
                    bumbu
                    segar berkualitas. Buat hidangan spesial di rumah dengan mudah.</div>
            </div>
        </div>
        <div>
            <div class="container-img-produk">
                <img class="img-produk" src={{ asset('gambar51.png') }}>
            </div>

            <div class="text-produk">
                <div class="produk-title">Ready to Cook</div>
                <div class="produk-desc">Dapur Panen hadir dengan solusi praktis memasak dengan produk siap masak
                    dari bahan-bahan dan
                    bumbu
                    segar berkualitas. Buat hidangan spesial di rumah dengan mudah.</div>
            </div>
        </div>

        <div>
            <div class="container-img-produk">
                <img class="img-produk" src={{ asset('gambar81.png') }}>
            </div>
            <div class="text-produk">
                <div class="produk-title">Ready to Cook</div>
                <div class="produk-desc">Dapur Panen hadir dengan solusi praktis memasak dengan produk siap masak
                    dari bahan-bahan dan
                    bumbu
                    segar berkualitas. Buat hidangan spesial di rumah dengan mudah.</div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 124px">
        <div class="btn btn-app "
            style="color: var(--foundation-grey-dark-active, #575757);font-size: 18px;font-weight: 400;line-height: 30px; /* 166.667% */">
            <a href="/produk">
                <div class="btn-text">Lihat Semuanya <img src={{ asset('material-symbols_arrow-right-alt-rounded.png') }}
                        alt=""></div>
            </a>
        </div>
    </div>
    <div class="container-promo-menarik mt-5">
        <div style="color: var(--foundation-black-normal, #2E2F33);font-size: 48px;font-weight: 600;text-align: center;">
            Promo Menarik</div>
        <div class="card-group">
            <div class="card-produk">
                <div class="img-promo">
                    <img src={{ asset('image-6.png') }} alt="" style="margin-bottom: 26px">
                    <div class="text-promo">
                        <div class="text-date"><img src={{ asset('flat-color-icons-calendar.png') }} alt="">
                            Berlaku hingga 31 May
                            2023
                        </div>
                        <div class="text-title-promo">
                            Rasakan Kelezatan Hidangan Premium Kami, Dalam Promo Catering Khusus!
                        </div>
                        <div class="btn-promo">
                            <div class="btn btn-app "
                                style="color: var(--foundation-grey-dark-active, #575757);font-size: 18px;font-weight: 400;line-height: 30px; /* 166.667% */">
                                <div class="btn-text">Selengkapnya <img
                                        src={{ asset('material-symbols_arrow-right-alt-rounded.png') }} alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-produk">
                <div class="img-promo">
                    <img src={{ asset('image-6.png') }} alt="" style="margin-bottom: 26px">
                    <div class="text-promo">
                        <div class="text-date"><img src={{ asset('flat-color-icons-calendar.png') }} alt="">
                            Berlaku hingga 31 May
                            2023
                        </div>
                        <div class="text-title-promo">
                            Rasakan Kelezatan Hidangan Premium Kami, Dalam Promo Catering Khusus!
                        </div>
                        <div class="btn-promo">
                            <div class="btn btn-app "
                                style="color: var(--foundation-grey-dark-active, #575757);font-size: 18px;font-weight: 400;line-height: 30px; /* 166.667% */">
                                <div class="btn-text">Selengkapnya <img
                                        src={{ asset('material-symbols_arrow-right-alt-rounded.png') }} alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-produk">
                <div class="img-promo">
                    <img src={{ asset('image-6.png') }} alt="" style="margin-bottom: 26px">
                    <div class="text-promo">
                        <div class="text-date"><img src={{ asset('flat-color-icons-calendar.png') }} alt="">
                            Berlaku hingga 31 May
                            2023
                        </div>
                        <div class="text-title-promo">
                            Rasakan Kelezatan Hidangan Premium Kami, Dalam Promo Catering Khusus!
                        </div>
                        <div class="btn-promo">
                            <div class="btn btn-app "
                                style="color: var(--foundation-grey-dark-active, #575757);font-size: 18px;font-weight: 400;line-height: 30px; /* 166.667% */">
                                <div class="btn-text">Selengkapnya <img
                                        src={{ asset('material-symbols_arrow-right-alt-rounded.png') }} alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-see-all">
            <div class="see-all-promo">Lihat Semua Promo</div>
        </div>
    </div>
    <div class="container-promo-menarik">
        <div style="color: var(--foundation-black-normal, #2E2F33);font-size: 48px;font-weight: 600;text-align: center;">
            Kata Mereka</div>

        <div id="carouselExampleDark" class="carousel carousel-dark slide">

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000" style="z-index: 2">
                    <div class="card-group">
                        <div class="theytalk">
                            <div class="rectangle-float">
                                <div class="card-floating">
                                    <div class="title-floating">
                                        Murah, Cepet bree
                                    </div>
                                    <div class="text-floating">
                                        Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^
                                    </div>
                                </div>
                            </div>
                            <div class="triangle">
                                <img src={{ asset('polygon1.png') }}>
                            </div>
                            <div class="container-people mt-5 mb-4">
                                <img src={{ asset('people.png') }} style="z-index: 2" alt="foto">
                                <div class="effect6"></div>
                            </div>
                            <div class="name" style="font-size: 24px;">Asep M</div>
                            <div class="desc" style="font-size: 24px;">Mahasiswa</div>
                        </div>

                        <div class="theytalk">
                            <div class="rectangle-float">
                                <div class="card-floating">
                                    <div class="title-floating">
                                        Murah, Cepet bree
                                    </div>
                                    <div class="text-floating">
                                        Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^
                                    </div>
                                </div>
                            </div>
                            <div class="triangle">
                                <img src={{ asset('polygon1.png') }}>
                            </div>
                            <div class="container-people mt-5 mb-4">
                                <img src={{ asset('people.png') }} style="z-index: 2" alt="foto">
                                <div class="effect6"></div>
                            </div>
                            <div class="name" style="font-size: 24px;">Asep M</div>
                            <div class="desc" style="font-size: 24px;">Mahasiswa</div>
                        </div>

                        <div class="theytalk">
                            <div class="rectangle-float">
                                <div class="card-floating">
                                    <div class="title-floating">
                                        Murah, Cepet bree
                                    </div>
                                    <div class="text-floating">
                                        Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^
                                    </div>
                                </div>

                            </div>
                            <div class="triangle">
                                <img src={{ asset('polygon1.png') }}>
                            </div>
                            <div class="container-people mt-5 mb-4">
                                <img src={{ asset('people.png') }} style="z-index: 2" alt="foto">
                                <div class="effect6"></div>
                            </div>
                            <div class="name" style="font-size: 24px;">Asep M</div>
                            <div class="desc" style="font-size: 24px;">Mahasiswa</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="card-group">
                        <div class="theytalk">
                            <div class="rectangle-float">
                                <div class="card-floating">
                                    <div class="title-floating">
                                        Murah, Cepet bree
                                    </div>
                                    <div class="text-floating">
                                        Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^
                                    </div>
                                </div>
                            </div>
                            <div class="triangle">
                                <img src={{ asset('polygon1.png') }}>
                            </div>
                            <div class="mt-5 mb-4">
                                <img src={{ asset('people.png') }} alt="foto">
                            </div>
                            <div class="name" style="font-size: 24px;">Asep M</div>
                            <div class="desc" style="font-size: 24px;">Mahasiswa</div>
                        </div>

                        <div class="theytalk">
                            <div class="rectangle-float">
                                <div class="card-floating">
                                    <div class="title-floating">
                                        Murah, Cepet bree
                                    </div>
                                    <div class="text-floating">
                                        Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^
                                    </div>
                                </div>
                            </div>
                            <div class="triangle">
                                <img src={{ asset('polygon1.png') }}>
                            </div>
                            <div class="mt-5 mb-4">
                                <img src={{ asset('people.png') }} alt="foto">
                            </div>
                            <div class="name" style="font-size: 24px;">Asep M</div>
                            <div class="desc" style="font-size: 24px;">Mahasiswa</div>
                        </div>

                        <div class="theytalk">
                            <div class="rectangle-float">
                                <div class="card-floating">
                                    <div class="title-floating">
                                        Murah, Cepet bree
                                    </div>
                                    <div class="text-floating">
                                        Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^
                                    </div>
                                </div>

                            </div>
                            <div class="triangle">
                                <img src={{ asset('polygon1.png') }}>
                            </div>
                            <div class="mt-5 mb-4">
                                <img src={{ asset('people.png') }} alt="foto">
                            </div>
                            <div class="name" style="font-size: 24px;">Asep M</div>
                            <div class="desc" style="font-size: 24px;">Mahasiswa</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-next">
                <button class="btn-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <img src={{ asset('arrow-next.png') }} alt="">
                    {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>


    </div>
    <div class="container-blog ">
        <div style="color: var(--foundation-black-normal, #2E2F33);font-size: 48px;font-weight: 600;text-align: center;">
            Blog Terbaru Kami</div>
        <div class="card-group">
            <div class="card-produk">
                <div class="img-promo">
                    <img src={{ asset('image-6.png') }} alt="" style="margin-bottom: 26px">
                    <div class="text-promo">
                        <div class="text-date"><img src={{ asset('flat-color-icons-calendar.png') }} alt="">
                            20 September 2022
                        </div>
                        <div class="text-by">
                            3 Makanan yang Bikin Kecerdasan Menurun, Penting Dihindari
                        </div>
                        <div style="display: flex; flex-direction: rows; gap:6px">
                            <div class="by">by</div>
                            <div class="name" style="font-size: 16px;">Najwa Putri</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-produk">
                <div class="img-promo">
                    <img src={{ asset('image-6.png') }} alt="" style="margin-bottom: 26px">
                    <div class="text-promo">
                        <div class="text-date"><img src={{ asset('flat-color-icons-calendar.png') }} alt="">
                            20 September 2022
                        </div>
                        <div class="text-by">
                            3 Makanan yang Bikin Kecerdasan Menurun, Penting Dihindari
                        </div>
                        <div style="display: flex; flex-direction: rows; gap:6px">
                            <div class="by">by</div>
                            <div class="name" style="font-size: 16px;">Najwa Putri</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-produk">
                <div class="img-promo">
                    <img src={{ asset('image-6.png') }} alt="" style="margin-bottom: 26px">
                    <div class="text-promo">
                        <div class="text-date"><img src={{ asset('flat-color-icons-calendar.png') }} alt="">
                            20 September 2022
                        </div>
                        <div class="text-by">
                            3 Makanan yang Bikin Kecerdasan Menurun, Penting Dihindari
                        </div>
                        <div style="display: flex; flex-direction: rows; gap:6px">
                            <div class="by">by</div>
                            <div class="name" style="font-size: 16px;">Najwa Putri</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-see-all">
            <div class="btn btn-app "
                style="color: var(--foundation-grey-dark-active, #575757);font-size: 18px;font-weight: 400;line-height: 30px; /* 166.667% */">
                <div class="btn-text">Lihat Semuanya <img src={{ asset('material-symbols_arrow-right-alt-rounded.png') }}
                        alt=""></div>
            </div>
        </div>
    </div>
    <div class="vector-bg"><img src={{ asset('vectorbg2.png') }} alt="">
        <img src={{ asset('vectorbg1.png') }} alt="">
    </div>
    <div class="tentang-kami">
        <div class="download-header">
            <div style="font-size: 40px;font-weight: 600;line-height: 56px; /* 140% */;padding-right: 150px ">
                Makin Mudah dan Praktis
                dengan Aplikasi Panenpanen.id
                Download Sekarang</div>
            <div class="mt-4">
                <img src={{ asset('playstore.png') }} alt="headerpic">
            </div>
        </div>
        <div class="d-inline-flex gap-4">
            <img class="img-produk" src={{ asset('app1.png') }} alt="headerpic">
            <img class="img-produk" src={{ asset('app.png') }} alt="headerpic">
        </div>
    </div>
    <div class="footer mt-5">
        <div class="container text-left">
            <div class="row align-items-start">
                <div class="col-lg-5 mb-4 " style="padding-right: 90px">
                    <img src={{ asset('logo.png') }} alt="logo" width="247px">
                    <div class="footer-bottom">
                        <div class="header-footer">
                            Alamat
                        </div>
                        <div class="desc-footer">
                            Jl. Kutisari IX No.24, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur 60291
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">

                </div>
                <div class="col ">
                    <div class="desc-footer mb-3" style="margin-left: 20px;">
                        Download Our App
                    </div>
                    <img class="img-produk" src={{ asset('app-qr.png') }} alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
