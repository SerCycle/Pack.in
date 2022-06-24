<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<style>
    *{
    list-style: none;
}
body{
    margin:0;
    padding: 0;

}
#isi-box{
    width: 500px;
    margin: 0 auto;

}
form
{
    margin: 60px;
}


.input-field
{
    width: 415px;
    height: 50px;
    margin-top: 5px;
    margin-bottom: 30px;
    padding-left:10px;
    border-radius: 10px;
    font-weight: 700;
    opacity: 0.5;
    background-color: #E9E4E4;
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
    margin-top: 40px;
}
.col-gambar{
    width: 70%;
    float: left;
    height: 40px;
    margin-top: 5px;
    margin-bottom: 30px;
    padding-left:25%;
    padding-top: 8%;
    font-weight: 700;
}
.col-form{
    width:  500px;
    float: right;
}
img{
    width: 300px;
}
.container{
    display: grid;
    grid-template-columns: 1fr 1fr;
}
</style>

    <h4 class="text-center text-success py-3" style="font-weight: 700;"> Pack.in - Product Order</h4>
    <h3 class="text-center mb-3" style="font-weight: 700;">Biodata</h3>

<div class="container">
    <div class="col-gambar">
        <img src="{{ URL::to('/' . $image )}}" alt="">
        <p class="text-center fs-5"">{{ $name }}</p>
        <p class="text-center fs-4">Rp.{{ $harga }}/piece</p>
    </div>
    
    <div class="col-form mt-3 ">
        <form action="{{ route('OrderProduct3', $idproduct) }}" method="POST" style="margin: 35px;">
        @csrf
            <input type="hidden" value="{{ $generateOrderId }}" name="order_id">
            <input type="hidden" value="{{ $idproduct }}" name="product_id">
            <label class="fw-bold" for="user_fullname">*Nama :</label>
            <input type="text" class="input-field" placeholder="Nama Lengkap" name="user_fullname" id="user_fullname">
            <label class="fw-bold" for="phone">*No HP :</label>
            <input type="text" class="input-field" placeholder="Nomor HP" name="phone" id="phone">
            <label class="fw-bold" for="address">*Alamat :</label>
            <input type="text" class="input-field" placeholder="Alamat" name="address" id="address"> 
            <button type="button" class="btn" >BACK</button>
            <button type="submit" class="btn" style="margin-left: 205px;">NEXT</button>
        </form>
    </div>

</div>

</body>
</html>