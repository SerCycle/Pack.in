@extends('main')

<style>
    .image1{
        width: 250px;
        height: 250px;
        background-image: url('image/image5.png');
        background-repeat: no-repeat;
        background-position: 30% 50%;
        background-size: auto 100%;
    }
    .image2{
        width: 250px;
        height: 250px;
        background-image: url('image/image8.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 120%;
    }
    .image3{
        width: 250px;
        height: 250px;
        background-image: url('image/Image-Home-CustomPackaging-1.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%;
    }
    .image4{
        width: 250px;
        height: 250px;
        background-image: url('image/Image-Home-CustomPackaging-2.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%;
    }
</style>
@section('container')
    
    <div id="HomeCarousel" class="carousel slide shadow mb-5" data-bs-ride="carousel">
        <div class="carousel-inner text-center text-white" style="height: 300px">
            <div class="carousel-item active bg-image justify-content-center align-items-center" style="background-image: url('image/about.png'); height: 50vh; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
                <h1 class="p-5" style="font-size: 70px">Custome Package</h1>
                <p class="ps-5 pe-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis inventore dolore nobis cupiditate molestias iste aliquid doloribus quod quisquam. Neque architecto incidunt tenetur nisi vel nostrum illo sed aperiam magnam!</p>
            </div>
            <div class="carousel-item bg-image justify-content-center align-items-center" style="background-image: url('image/image5.png'); height: 50vh; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
                <div class="bg-dark bg-opacity-25" style="height: 100%">
                    <h1 class="p-5" style="font-size: 70px">Jual Kardus</h1>
                    <p class="ps-5 pe-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius deserunt distinctio ullam quod maxime in aliquam tenetur veritatis sapiente nisi sunt ad nesciunt qui, quibusdam adipisci totam vel perferendis quia.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#HomeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#HomeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container" style="font-family:">
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-6">
                <p class="mb-0">HOW WE CAN PERFECT YOUR PACKAGE</p>
                <p style="font-size: 35px"><b>Bekerja Sama dengan Masyarkat sekitar</b></p>
                <p>Pack.in menerima penjualan bahan package berupa kardus, maupun bungkusan lainnya dalam fitur “Jual Kardus”.</p>
            </div>
            <div class="col-3">
                <div class="rounded shadow bg-image image1"></div>
            </div>
            <div class="col-3">
                <div class="rounded shadow bg-image image2"></div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-3">
                <div class="rounded shadow bg-image image3"></div>
            </div>
            <div class="col-3">
                <div class="rounded shadow bg-image image4"></div>
            </div>
            <div class="col-6" align="right">
                <p style="font-size: 35px"><b>Kustom Bingkisan / Paket dengan Ahli Desain</b></p>
                <p>Kustomisasi bingkisan, paket, maupun hadiahmu hanya di Pack.in. Karena Pack.in telah menyediakan kustomisasi dengan desain sesuai keinginan anda, dan tentunya di-desain oleh ahli desain terbaik Pack.in.</p>
            </div>
        </div>
    </div>
@endsection