<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">

    <title>{{ $title }}</title>
</head>
<body>

{{-- NAVBAR--}}
<div class="container-fluid sticky-top shadow" style="background-color:#BB6552; padding-left: 5%">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">Pack.in</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-auto d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav pe-4">
                    <li class="nav-item active">
                        <a class="nav-link {{ ($nav === '11' ) ? 'active' : '' }}" href="/admin-orderinfo">CUSTOME ORDER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($nav === '22' ) ? 'active' : '' }}" href="/">SELL CARDBOARD</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="bg-image justify-content-center align-items-center" style="font-family: Poppins; background-image: url('image/about.png'); height: 100vh; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container-fluid justify-content-center align-items-center">
        <div class="col-6 bg-dark bg-opacity-10" style="padding-top: 10%; padding-bottom: 10%; height: 100vh; ">
            <div class="ps-5 pe-5 rounded-3" style="padding-top: 25%; padding-bottom: 25%; height:50vh">
                <h1 class="text-white" style="font-size: 50px"><b>Hello, Admin</b></h1>
                <p class="text-white" style="font-size: 25px">Lengkapi keindahan bingkisan & hadiahmu dengan Custome Package</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
