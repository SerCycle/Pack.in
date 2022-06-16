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
    <h4 class="text-center text-success py-3" style="font-weight: 700;"> Pack.in - Sell Cardboard</h4>
    <h3 class="text-center mb-3" style="font-weight: 700; margin-bottom: 30px;">Cardboard Info</h3>



    <div class="contact-box mt-3">
        <form action="" style="margin: 35px;">
            <label class="fw-bold" for="">*Ketebalan :</label>
            <select type="text" class="input-field" placeholder="-Select Thickness-">
                <option value="" disabled selected hidden>-Select Thickness-</option>
                <option value="">2 mm - 5 mm</option>
                <option value="">6 mm - 7 mm</option>
                <option value="">8 mm - 10 mm</option>
            </select>
            <label class="fw-bold" for="">*Ukuran :</label>
            <input type="text" class="input-field" placeholder="ex : 100 cm x 200 cm">
            <label class="fw-bold" for="">*Kondisi :</label>
            <select type="text" class="input-field" placeholder="-Select Condition-">
                <option value="" disabled selected hidden>-Select Condition-</option>
                <option value="">Baru</option>
                <option value="">Bekas</option>
            </select>

            <button type="button" class="btn" >BACK</button>
            <button type="button" class="btn" style="margin-left: 205px;">NEXT</button>
        </form>
    </div>

</body>
</html>