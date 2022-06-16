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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
		$(document).ready(function(){
			$(".default_option").click(function(){
			  $(this).parent().toggleClass("active");
			})

			$(".select_ul li").click(function(){
			  var currentele = $(this).html();
			  $(".default_option li").html(currentele);
			  $(this).parents(".select_wrap").removeClass("active");
			})
		});
	</script>
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

    /* 
    .wrapper{
        position: absolute;
        top: 35%;
        left: 50%;
        transform: translate(-50%,-50%);
      }
      
      .wrapper .title{
        font-weight: 700;
        font-size: 24px;
        color: #fff;
      } */
      
      .select_wrap{
        width: 400px;
        margin: 15px auto;
        position: relative;
        user-select: none;

      }
      
      .select_wrap .default_option{
        background: #E9E4E4;
        border-radius: 10px;
        position: relative;
        cursor: pointer;
        border-style: solid;
        border-color: #858484;
        border-width: 1px;
        margin-left: -15px;
        font-weight: bold;
      }
      
      .select_wrap .default_option li{
          padding: 0px 0px;
          margin-top: 0px;
      }
      
      .select_wrap .default_option:before{
          content: "";
          position: absolute;
          top: 18px;
          right: 18px;
          width: 6px;
          height: 6px;
          border: 2px solid;
          border-color: transparent transparent #555555 #555555;
          transform: rotate(-45deg);
      }
      
      .select_wrap .select_ul{
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        background: #E9E4E4;
        border-radius: 20px;
        display: none;
        margin-left: -10px;
      }
      
      .select_wrap .select_ul li{
        padding: 3px 3px;
        cursor: pointer;
      }
      
      .select_wrap .select_ul li:first-child:hover{
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
      }
      
      .select_wrap .select_ul li:last-child:hover{
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
      }
      
      
      .select_wrap .option{
        display: flex;
        align-items: center;
      }


    .select_wrap .option.white .icon{
        background: url('image/warna/white.png') no-repeat 0 0;
      width: 32px;
      height: 32px;
        margin-right: 5px;
        margin-bottom: 8px;
        margin-top: 8px;
        margin-left: -13px;
    } 

    .select_wrap .option.green .icon{
        background: url('image/warna/green.png') no-repeat 0 0;
      width: 32px;
      height: 32px;
        margin-right: 5px;
        margin-bottom: 8px;
        margin-top: 8px;
        margin-left: -13px;
    }

    .select_wrap .option.yellow .icon{
        background: url('image/warna/yellow.png') no-repeat 0 0;
      width: 32px;
      height: 32px;
        margin-right: 5px;
        margin-bottom: 10px;
        margin-top: 8px;
        margin-left: -13px;
    }

    .select_wrap .option.blue .icon{
        background: url('image/warna/blue.png') no-repeat 0 0;
      width: 32px;
      height: 32px;
        margin-right: 5px;
        margin-bottom: 10px;
        margin-top: 8px;
        margin-left: -13px;
    }
    .select_wrap .option.maroon .icon{
        background: url('image/warna/maroon.png') no-repeat 0 0;
      width: 32px;
      height: 32px;
        margin-right: 5px;
        margin-bottom: 10px;
        margin-top: 8px;
        margin-left: -13px;
        }

    .select_wrap.active .select_ul{
      display: block;
    }

    .select_wrap.active .default_option:before{
      top: 25px;
      transform: rotate(-225deg);
    }
    .image-upload>input {
        display: none;
      }
</style>

    <h4 class="text-center text-success py-3" style="font-weight: 700;"> Pack.in - Product Order</h4>
    <h3 class="text-center mb-3" style="font-weight: 700;">Design</h3>

<div class="container">

    

   
    <div class="col-gambar">
        <img src="image/product/Image Product-1.jpg" alt="">
        <p class="text-center fs-5"">Product #1</p>
        <p class="text-center fs-4">Rp.100.000</p>
    </div>
    

    <div class="col-form mt-3 ">
        <form action="" style="margin: 35px;">
            <label class="fw-bold" for="">*Ukuran :</label>
            <select type="text" class="input-field" id="">
                <option value="" disabled selected hidden style="margin-left: ;5px">-Select Size-</option>
                <option value="">26cm x 26cm</option>
                <option value="">32cm x 32cm</option>
                <option value="">64cm x 64cm</option>
                <option value="">128cm x 128cm</option>
            </select>

            <label class="fw-bold" for="">*Warna :</label>
            <div class="select_wrap">
                <ul class="default_option">
                    <li>
                        <div class="option default">
                          <div class="icon"></div>
                          <p class="mt-2">-Select Color-</p>
                        </div>
                    </li>
                </ul>
                <ul class="select_ul">
                    <li>
                        <div class="option white">
                          <div class="icon"></div>
                          <p class="text">White</p>
                        </div>
                    </li>
                    <li>
                        <div class="option green">
                          <div class="icon"></div>
                          <p>Green</p>
                        </div>  
                    </li>
                    <li>
                        <div class="option yellow">
                          <div class="icon"></div>
                          <p>Yellow</p>
                        </div>  
                    </li>
                    <li>
                        <div class="option blue">
                          <div class="icon"></div>
                          <p>Blue</p>
                        </div>  
                    </li>
                    <li>
                      <div class="option maroon">
                          <div class="icon"></div>
                          <p>Maroon</p>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="image-upload" style="margin-bottom: 40px;">
                <label for="file-input">
                  <img src="image/icon/UploadDesignForm.png" style="width: 415px; margin-top: 14px;"/>
                </label>
              
                <input id="file-input" type="file" />
              </div>

            <button type="button" class="btn"">BACK</button>
            <button type="button" class="btn" style="margin-left: 300px; margin-top: -55px;">NEXT</button>
        </form>
    </div>


</div>


</body>
</html>