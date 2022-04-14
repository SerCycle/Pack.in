@extends('main')

@section('container')



    <div class="bg-image justify-content-center align-items-center" style="font-family: Poppins; background-image: url('image/about.png'); height: 50vh; background-repeat: no-repeat; background-attachment: fixed; background-size: cover; max-height-30rem;">

            <div class="justify-content-center align-items-center">
                <div class="bg-dark bg-opacity-50 py-5" style="height: 50vh; ">
                    <div class=" container ps-5 pe-5" style="height:50vh">
                    <h1 class="text-white px-1 " style="font-size: 50px;"><b>About Us</b></h1>
                            <p class="text-white px-1 text-wrap" style="font-size: 25px;">Pack.in merupakan suatu layanan packaging di Indonesia dengan memanfaatkan box atau kardus bekas yang masih layak untuk digunakan kembali.</p>
                    </div>
                    </div>
                </div>
            </div>
    </div>

<<<<<<< HEAD:resources/views/about.blade.php
<!-- 
    <div class="col-8 py-3 px-3">
=======

    <div class="container col-8 py-3 px-3">
>>>>>>> a138c9935f24c0c775dd52ad74c579d6e3c97475:resources/views/page/about.blade.php
		<h1 class="text-dark pt-4 px-3" style="font-size: 50px">FAQ</h1>

        
        
        <button class="btn px-3" type="button" data-bs-toggle="collapse" data-bs-target="#drop1" aria-expanded="false" aria-controls="drop1">
            <span class="fa-solid fa-caret-down" style="margin-right:2%" ></span>
            
        </button>
        <span class="fs-4 fw-bold">Bagaimana cara melakukan pembayaran di Pack.in?</span>
        <div style="min-height: 120px;">
            <div class="collapse" id="drop1">
                <div class="card card-body" style="width: 900px;">
                    Dalam sistem pembayaran, Pack.in menerima transfer melalui bank BCA, Mandiri, BNI, maupun E-Wallet. Untuk nomor rekeningnya seperti tercantum sebagai berikut :
                </div>
            </div>
        </div>
        <button class="btn px-3" type="button" data-bs-toggle="collapse" data-bs-target="#drop2" aria-expanded="false" aria-controls="drop1">
            <span class="fa-solid fa-caret-down" style="margin-right:2%" ></span>
            
        </button>
        <span class="fs-4 fw-bold">Bagaimana cara menjual kardus di Packin?</span>
        <div style="min-height: 120px;">
            <div class="collapse" id="drop2">
                <div class="card card-body" style="width: 900px;">
                    Menu “Jual Kardus” terdapat pada menu Services > Jual Kardus. Kemudian ketika kita klik Jual Sekarang, maka kami akan mengarahkan anda untuk melakukan penjualan kardus tersebut mulai dari pengisian biodata, info kardus, hingga tanggal bersedia diambilnya kardus tersebut
                </div>
            </div>
        </div>
    </div> -->

    <div class="col-8 py-3 px-3">
		<h1 class="text-dark pt-4 px-3" style="font-size: 50px">FAQ</h1>
        <h3 class="text-dark pt-4 px-3" ><i class="fa-solid fa-caret-down" style="margin-right:2%" ></i>Bagaimana cara melakukan pembayaran di Pack.in?</h3>
        <p class="pt-4 px-3"style="margin-left:4%; margin-right:25%;font-size: 20px">Dalam sistem pembayaran, Pack.in menerima transfer melalui bank BCA, Mandiri, BNI, maupun E-Wallet. Untuk nomor rekeningnya seperti tercantum sebagai berikut :</p>
        
        <h3 class="text-dark pt-4 px-3" ><i class="fa-solid fa-caret-down" style="margin-right:2%" ></i>Bagaimana cara menjual kardus di Packin?</h3>
        <p class="pt-4 px-3"style="margin-left:4%; margin-right:25%;font-size: 20px">Menu “Jual Kardus” terdapat pada menu Services > Jual Kardus. Kemudian ketika kita klik Jual Sekarang, maka kami akan mengarahkan anda untuk melakukan penjualan kardus tersebut mulai dari pengisian biodata, info kardus, hingga tanggal bersedia diambilnya kardus tersebut</p>

    </div>



    


    <script src="https://kit.fontawesome.com/724f3c3aaf.js" crossorigin="anonymous"></script>

@endsection