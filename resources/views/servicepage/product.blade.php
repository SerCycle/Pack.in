@extends('main')

<style>
    .image1{
        width: 200px;
        height: 200px;
        background-image: url('image/product/Image Product-1.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%;
    }
    .image2{
        width: 200px;
        height: 200px;
        background-image: url('image/product/Image Product-2.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: auto 100%;
        margin-right: 10%;
        margin-left: 10%;
    }
    .image3{
        width: 200px;
        height: 200px;
        background-image: url('image/product/Image Product-3.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: auto 100%;
        margin-right: 10%;
        margin-left: 10%;
    }
    .image4{
        width: 200px;
        height: 200px;
        background-image: url('image/product/Image Product-4.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: auto 100%;
        margin-right: 10%;
        margin-left: 10%;
    }
</style>

@section('container')
    
    <div class="container rounded mt-3 text-white" style="background-color:#BB6552">
        <div class="row p-5">
            <div class="col-3">
                <div class="bg-image rounded image1"></div>
            </div>
            <div class="ps-5 col-9">
                <p>Produk #1</p>
                <p style="font-size: 30px"><b>Rp100.000</b></p>
                <p>Box berbahan E-Fluete Board dengan ukuran minimal 26cm x 26cm. Cocok untuk menyimpan segala jenis barang, mulai dari buku, kosmetik, bahkan cocok digunakan sebagai bungkus kado.</p>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5">
        <h3>Produk terkait</h3>
        <div class="pt-5 row justify-content-around align-items-center text-center">
            <div class="border border-dark rounded shadow col-3 justify-content-center">
                <p class="pt-1">Product #2</p>
                <div class="bg-image image2"></div>
            </div>
            <div class="border border-dark rounded shadow col-3 justify-content-center">
                <p class="pt-1">Product #3</p>
                <div class="bg-image image3"></div>
            </div>
            <div class="border border-dark rounded shadow col-3 justify-content-center">
                <p class="pt-1">Product #4</p>
                <div class="bg-image image4"></div>
            </div>
        </div>
    </div>

@endsection