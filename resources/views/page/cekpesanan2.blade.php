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
    <div class="container-fluid sticky-top shadow" style="background-color:#BB6552; padding-left: 5%">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">Pack.in</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse m-auto d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav pe-4">
                <li class="nav-item active">
                    <a class="nav-link active" href="#">Cek Pesanan</a>
                </li>
            </nav>
        </div>
    </div>
    
    <h3 class="text-center" style="font-weight: bold; margin-top: 10%; margin-bottom: 60px;">Please wait for your order</h3>
    <h3 class="text-center" style=" margin-top 30px; margin-bottom: 60px;">your order was delivered...</h3>

    <div class="container col-md-12 text-center" style="margin-top: 30px;">
        <a href="{{ route('Home') }}" type="button" class="btn" for="home" >Home </a>
        <button type="button" class="btn" style="margin-left: 15%;" for="upload"> Add Order </button>
    </div>

</body>