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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
    <h3 class="text-center mb-3" style="font-weight: 700;">Done!</h3>
    <h3 class="text-center mb-3" style="font-weight: 700;">Please wait for your order</h3>
    <h3 class="text-center mb-3" style="font-weight: 700;">Checking payment in progress...</h3>

    <div class="container text-center">
        <p style="font-size: 20px; margin-top: 5%; font-weight: 500;">Harap simpan nomor pemesanan anda</p>
        <div class="container" style="max-width: 189px;">
            <p style="font-size: 20px;font-weight: 600; display:flex; border-radius: 5px; text-align: center;">{{ $orders->order_id }} <button class="material-symbols-outlined" style="border: 1px solid balck; padding: 1px;margin-left: 10px; height: 30px; background-color: #C4C4C4; border-radius: 5px;">
                content_copy
            </button></p>
        </div>
        <a href="{{ route('Home') }}" type="button" class="btn" for="home"> Home </a>
        <a href="{{ route('Service') }}" type="button" class="btn" style="margin-left: 5%;" for="upload">Add Order</a>
    </div>
</body>