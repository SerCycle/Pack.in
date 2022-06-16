@extends('main')

@section('container')

<style>
    .card{
        border-radius: 20px;
    }
    .container2{
        /* background-image:url(image/image5.png); */
        min-height:100%;
        background:linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(image/image5.png);
        background-size:cover;
    }
        
</style>

<div class="container2 container card p-3 shadow-lg" style="margin-top: 2%; margin-bottom: 50px">
        <h3 style="position: absolute; color: white; margin-left: 43%; top: 35%;">Jual Kardus</h3>
        <p><br><br><br><br><br></p>
        <!-- <button 
        style="margin: left:4%; margin-right: 4%; margin-top: 20px;font-size: 15px; background-color: rgb(83, 15, 0);color: white; border: none; display: block; margin: auto; padding-left: 40px; padding-right: 40px; border-radius: 10px; padding-top: 10px;padding-bottom: 10px" class="fw-bold">
            Jual Sekarang</button> -->
        <a href="jualkardusform1"
        style="text-decoration: none; margin: left:4%; margin-right: 4%; margin-top: 1%; font-size: 15px; background-color: rgb(83, 15, 0);
        color: white; border: none; display: block; margin: auto; padding-left: 40px; padding-right: 40px; border-radius: 10px; padding-top: 10px; padding-bottom: 10px" class="fw-bold mb-3">
            Jual Sekarang</a>
        <p><br><br></p>
    </div>

    <div class="tulisan" style="margin-left: 7%; margin-right: 7%; margin-bottom: 7%">
        <h3 style="text-align: center;" class="fw-bold ">Bekerja Sama dengan Masyarakat Sekitar</h3>
        <p style="text-align: center; margin-top: 20px;font-size: 20px; color: rgb(104, 113, 122);" >In ultricies fermentum aliquet. Pellentesque dui magna, condimentum non ullamcorper at, cursus in sem. Nunc condimentum, purus ac enenatis commodo libero, am auctor porta tortor. In ultricies fermentum aliquet. Pellentesque dui magna, condimentum non ullamcorper at, cursus in sem. Nunc condimentum, purus ac enenatis commodo libero, am auctor porta tortor. In ultricies fermentum aliquet. Pellentesque dui magna, condimentum non ullamcorper at, cursus in sem. Nunc condimentum, purus ac enenatis commodo libero, am auctor porta tortor.</p>
@endsection

