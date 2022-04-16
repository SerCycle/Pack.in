@extends('main')

<style>
    .image1{
        width: 200px;
        height: 200px;
        background-image: url('image/Image Product-1.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: auto 100%;
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

@endsection