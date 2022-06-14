@extends('main')

@section('container')

    <style>
        details > summary {
            padding: 20px 4px 20px 20px;
            font-size: 175%;
            font-weight: 500;
            width: 1000px;
            background-color: #ffffff;
            border: 10px;
            box-shadow: 1px 1px 2px #ffffff;
            cursor: pointer;
        }

        details > p {
            padding: 4px 4px 4px 54px;
            font-size: 125%;
            background-color: #ffffff;
            margin: 0;
            box-shadow: 1px 1px 2px #ffffff;
        }
    </style>

    <div class="bg-image justify-content-center align-items-center" style="font-family: Poppins; background-image: url('image/about.png'); height: 50vh; background-repeat: no-repeat; background-attachment: fixed; background-size: cover; max-height-30rem;">

            <div class="justify-content-center align-items-center">
                <div class="bg-dark bg-opacity-50 py-5" style="height: 50vh; ">
                    <div class=" container ps-5 pe-5" style="height:50vh">
                    <h1 class="text-white px-1 pt-5" style="font-size: 50px;"><b>About Us</b></h1>
                            <p class="text-white px-1 text-wrap" style="font-size: 25px;">Pack.in merupakan suatu layanan packaging di Indonesia dengan memanfaatkan box atau kardus bekas yang masih layak untuk digunakan kembali.</p>
                    </div>
                    </div>
                </div>
            </div>
    </div>



    <div class="container col-8 py-3 px-3">
		<h1 class="text-dark pt-4 px-3" style="font-size: 50px">FAQ</h1>
        <details>
            <summary>
                Bagaimana cara melakukan pembayaran di Pack.in?
            </summary>
            <p>
                Dalam sistem pembayaran, Pack.in hanya menerima transfer melalui bank BCA, Mandiri, BNI, maupun E-Wallet.<br> Untuk nomor rekeningnya seperti tercantum sebagai berikut <b>(A.N : Custom Package)</b> : <br><br>
                <b>> Rek. BCA      : 0097-9279-00</b> <br><br>
                <b>> Rek. Mandiri  : 098-79-2790065-7</b> <br><br>
                <b>> Rek. BNI      : 099-799-7900</b> <br><br>
                <b>> OVO/Gopay/DANA: 0888-8888-8888</b> <br><br>
            </p>
        </details>
        

        <details>
            <summary>
                Bagaimana cara menjual kardus di Packin?
            </summary>
            <p>
                Menu “Jual Kardus” terdapat pada Tab <b>Services > Jual Kardus</b>. Kemudian ketika kita klik Jual Sekarang, maka kami akan mengarahkan anda untuk melakukan penjualan kardus tersebut mulai dari pengisian biodata, info kardus, hingga tanggal bersedia diambilnya kardus tersebut
            </p>
        </details>
    
        <p class="pt-4 px-5"></p>

    </div>



    


    <script src="https://kit.fontawesome.com/724f3c3aaf.js" crossorigin="anonymous"></script>

@endsection