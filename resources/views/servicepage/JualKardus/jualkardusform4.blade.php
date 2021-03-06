<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        *
        {
            margin: 0;
            padding: 0;
        }
        .contact-box
        {
            width: 500px;
            top: 35%;
            left: 50%;
            transform:translate(-50%,-50%);
            position: absolute;
        }
        form
        {
            margin: 60px;
        }
        /* label
        {
            
        } */
        .input-field
        {
            width: 400px;
            height: 40px;
            margin-top: 5px;
            margin-bottom: 30px;
            padding-left:10px;
            border-radius: 10px;
            font-weight: 700;
            opacity: 0.5;
        }

        .btn
        {
            border-radius: 10px;
            color: black;
            background-color: white;
            font-size: 12px;
            cursor: pointer;
            padding-left: 30px;
            padding-right: 30px;
            border: 0.5px solid black;
            font-weight: 800;
        }
    </style>
    <h4 class="text-center text-success py-3" style="font-weight: 700;"> Pack.in - Sell Cardboard</h4>
    <h3 class="text-center mb-3" style="font-weight: 700; margin-bottom: 30px;">Select Date</h3>
    <div class="contact-box mt-3 text-center">
        <p class="text-center fw-bold" style="border: solid; border-width: 1px; border-radius: 5px; width: 200px;; margin:auto; padding: 5px; padding-top: 5px; padding-bottom: 5px;">Pengisian data berhasil!</p>
        <a href="{{ route('Home') }}" class="btn" style="margin-top: 100px;">HOME</a>
    </div>

</body>
</html>