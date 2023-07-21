@extends('layouts.main')
@section('container')
    <div class="header">
        <div class="content-header-produk">
            <div style="font-size: 40px;font-weight: 600;line-height: 56px; /* 140% */">
                Nikmati Produk Pilihan Terbaik dari Kami</div>
            <div class="mt-4">
                <div class="btn btn-app "
                    style="color:#575757;font-size: 18px;font-weight: 400;line-height: 30px; /* 166.667% */">
                    <div class="btn-text">Langganan Sekarang</div>
                </div>
            </div>
        </div>
        <div class="header-produk">
            <img src={{ asset('header2.png') }} alt="headerpic">
        </div>
    </div>
    <img src={{ asset('vectorbg3.png') }} alt="" style="margin-bottom: -50px">
    <div style="color: var(--foundation-black-normal, #2E2F33);font-size: 48px;font-weight: 600;text-align: center;">
        Produk Kami</div>
    <div class="list-produk">
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
                <img class="img-produk" src={{ asset('gambar61.png') }}>
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
                <img class="img-produk" src={{ asset('gambar7.png') }}>
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
    <div class="pesan-catering">
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
