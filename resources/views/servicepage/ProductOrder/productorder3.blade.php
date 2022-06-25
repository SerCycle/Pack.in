<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <style>
        .image-upload>input {
    display: none;
  }

  .btn
  {
      border-radius: 10px;
      color: black;
      background-color: white;
      font-size: 12px;
      cursor: pointer;
      max-width: 100px;
      width: 100%;
      border: 0.5px solid black;
      font-weight: 800;
      margin-top: 30px;
  }

    </style>
    <h4 class="text-center text-success py-3" style="font-weight: 700;"> Pack.in - Product Order</h4>
    <h3 class="text-center mb-3" style="font-weight: 700;">Order Detail</h3>




<div class="container" style="width: 880px;"">
    <div class="container" style="border-style: solid; width: 100%; max-width: 750px;">

          <div class="containter" style="font-weight: bold;">
            <div class="row">
                <div class="col" >
                    <div class="row">
                        <p>No. Order:</p>
                    </div>
                    <div class="row">
                        <p>Nama Lengkap:</p>
                    </div>
                    <div class="row">
                        <p>Alamat:</p>
                    </div>
                    <div class="row">
                        <p>Nama Produk:</p>
                    </div>
                    <div class="row">
                        <p>Total Harga:</p>
                    </div>
                    <div class="row">
                        <p>Status:</p>
                    </div>
                  </div>


                  <div class="col" style="margin-left: 80px;">
                    <div class="row">
                        <p>{{ $orders->order_id }}</p>
                    </div>
                    <div class="row">
                        <p>{{ $users->user_fullname }}</p>
                    </div>
                    <div class="row">
                        <p>{{ $users->address }}</p>
                    </div>
                    <div class="row">
                        <p>{{ $products->product_name }}</p>
                    </div>
                    <div class="row">
                        <p>{{ $products->harga }}</p>
                    </div>
                    <div class="row">
                        <p>{{ $orders->order_status }}</p>
                    </div>
                  </div>
            </div>
          </div>
    </div>
        <div class="col" style="margin: 50px; padding: 0px;">
            <form action="{{ route('OrderProductFinal', $orders->order_id) }}" enctype="multipart/form-data" method="POST" style="margin: 35px;">
                @csrf
                <input type="hidden" value="{{ $orders->order_id }}" name="order_id">
                <div class="row" style="width: 100%; max-width: 780px;">
                    <div class="" style="">
                        <label for="payment_verification" class="form-label">Masukkan Bukti Pemabayaran:</label>
                        <input class="form-control" type="file" name="payment_verification" id="payment_verification">
                    </div>
                    {{-- <div class="image-upload text-center">
                        <label for="file-input">
                        <img src="image/icon/UploadPembayaranFrom.png" style="width: 100%; margin-top: 14px; margin-left:3px;"/>
                        </label>
                        <input id="file-input" type="file" />
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col text-left">
                        <a href="/home" class="btn" for="home"> HOME </a>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn" style="margin-left: 62%;" for="upload">UPLOAD</button>
                    </div>
                </div>
            </form>
        </div>

    

</div>


</body>