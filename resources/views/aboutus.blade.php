@extends('layouts.main')
@section('container')
    <div class="header-about">
        <div style="width: 680px">
            <div class="font-header">
                Kami hanya akan memberikan hidangan <span style="color:#479E10;">terbaik dan berkualitas</span> untukmu.
            </div>
        </div>
        <div style="width: 370px">
            <div class="font-header-desc">Lorem ipsum dolor sit amet consectetur.
                Sodales fermentum aenean nisi dui purus
                accumsan sit amet vel. </div>
        </div>
    </div>
    <div class="bg-about">ss</div>
    <div class="row pelayanan-terbaik">
        <div class="col">
            <div class="font-header">
                Pelayanan terbaik dengan harga terjangkau</div>
        </div>
        <div class="col">
            <div class="font-header-desc-bold">Lorem ipsum dolor sit amet consectetur.
                Sodales fermentum aenean nisi dui purus
                accumsan sit amet vel. </div>
            <div class="font-header-desc">Lorem ipsum dolor sit amet consectetur. Ultrices nisi ornare non nunc sit. Sem
                turpis sit tellus sed
                fringilla suspendisse. Faucibus in in velit mauris amet tempor tempor. Vestibulum at amet vivamus ridiculus
                nibh aenean purus vitae. Enim urna adipiscing massa dictum faucibus. Nulla porttitor cras fermentum justo.
                Nisl in purus non adipiscing placerat.
                Velit risus mattis dolor nam vitae vulputate augue. Scelerisque tortor viverra in libero malesuada augue
                viverra. Consequat vehicula fringilla et velit habitant tincidunt mollis sem quis. Sit cras auctor rutrum
                feugiat. Faucibus ante at tempor laoreet. Pharetra risus libero bibendum posuere consequat consequat nibh.
                Feugiat cras nunc eget cras gravida in nam aliquet imperdiet. Suspendisse egestas pulvinar ut pulvinar est
                ligula. Sollicitudin dui nibh eu tellus. Condimentum amet integer elit in cras.</div>
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
    <div class="pesan-catering1">
        <div class="catering-img">
            <img src={{ asset('catering.png') }}>
        </div>

        <div class="tentang-kami-content">
            <div style="color: #0F172A;font-size: 48px;font-weight: 600;line-height: 68px; /* 141.667% */">
                Pesan catering, solusi makan bebas pusing</div>
            <div style="padding: 0 100px 0 0">Kami mengerti bahwa di kantor atau sekolah, makanan bukanlah hanya kebutuhan,
                tetapi juga faktor penting dalam produktivitas dan kesehatan. Oleh karena itu, kami menawarkan layanan
                catering yang dapat memenuhi kebutuhan nutrisi dan selera Anda, serta mempermudah Anda dalam menyediakan
                makanan berkualitas untuk karyawan atau siswa Anda.</div>
            <div class="mt-4">
                <div class="btn btn-app "
                    style="color: var(--foundation-grey-dark-active, #575757);font-size: 18px;font-weight: 400;line-height: 30px; /* 166.667% */">
                    <div class="btn-text">Langganan Sekarang <img
                            src={{ asset('material-symbols_arrow-right-alt-rounded.png') }} alt=""></div>
                </div>
            </div>
        </div>

    </div>
    <div class="download-cont">
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
@endsection
