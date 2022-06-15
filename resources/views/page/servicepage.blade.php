@extends('main')

@section('container')
    <style>
         .collapsible {
             background-color: #BB6552;
             cursor: pointer;
             padding: 18px;
             width: auto;
             border: none;
             text-align: left;
             outline: none;
             font-size: 15px;

         }

        .active, .collapsible:hover {

        }

        a{
            color: black;
            text-decoration: none;
        }

        svg{
            transition: transform 0.5s;
            animation-name: moving;
            animation-duration: 2s;
            position: relative;
            animation-iteration-count: infinite;
            width: 40px;
            height: 40px;
        }
        @keyframes moving {
            0%   {top:0px;}
            50%  {top:20px;}
            100%  {top:0px;}
        }
        svg:hover{
            cursor: default;
        }
        svg:visited{
            transform: rotate(180deg);
        }
        .content {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
        .cardani:hover{
            transform: scale(1.1);cursor: default;
        }
        .cardani{
            transition: transform 1s;
        }
        .card{
            border-radius: 20px;
        }
        .container2{
            /* background-image:url(image/image5.png); */
            min-height:100%;
            background:linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(image/image5.png);
            background-size:cover;
        }
        img{
            border-radius: 20%;
        }
    </style>

<div class="container card p-2 shadow-lg" style="margin-top: 2%; background-color: #BB6552; margin-bottom: 50px">
	<h3 style="color: white; margin-left: 30px; padding-top:2%; padding-bottom:2%;">Jenis Produk</h3>
	<div class="container">
		<div class="row">
{{--            card produk 1 --}}
			<div class="col-sm">
                <a href="/product">
                <div class="card cardani shadow border-warning" style="width: 18rem; margin-left: 15px">
                    <h5 class="card-title d-flex justify-content-center" style="margin-top: 15px">Produk #1</h5>
                    <hr>
                    <img width="240 px" height="240px" class="card-img-top d-flex justify-content-center" src="image/product/Image Product-1.jpg" alt="Card image cap">
                </div>
                </a>
			</div>
{{--            card produk 2 --}}
            <div class="col-sm">
                <div class="card cardani shadow border-warning" style="width: 18rem; margin-left: 60px">
                    <h5 class="card-title d-flex justify-content-center" style="margin-top: 15px">Produk #2</h5>
                    <hr>
                    <img width="240 px" height="240px" class="card-img-top d-flex justify-content-center" src="image/product/Image Product-2.jpg" alt="Card image cap">
                </div>
            </div>
{{--            card produk 3 --}}
            <div class="col-sm">
                <div class="card shadow cardani border-warning" style="width: 18rem; margin-left: 95px">
                    <h5 class="card-title d-flex justify-content-center" style="margin-top: 15px">Produk #3</h5>
                    <hr>
                    <img width="240 px" height="240px" class="card-img-top d-flex justify-content-center" src="image/product/Image Product-3.jpg" alt="Card image cap">
                </div>
            </div>
		</div>
	</div>
{{--    Collapse Button--}}
    <button type="button" class="collapsible d-flex justify-content-center">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16"> -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
        </svg> -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg>


            <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
        </svg>
    </button>
    <div class="content">
{{--            card produk 4 --}}
        <div class="col-sm">
            <div class="card shadow cardani border-warning" style="width: 18rem; margin-left: 15px">
                <h5 class="card-title d-flex justify-content-center" style="margin-top: 15px">Produk #4</h5>
                <hr>
                <img width="360 px" height="240px" class="card-img-top d-flex justify-content-center" src="image/product/Image Product-4.png" alt="Card image cap">
            </div>
        </div>

    </div>
</div>
<a href="jualkardus">
    <div class="container2 container card p-2 shadow-lg" style="margin-top: 2%; margin-bottom: 50px;">
        <h3 style="color: white; font-size: 30px; margin-left:30px; padding-top:2%;">Jual Kardus</h3>
        <p><br><br><br><br><br><br><br><br><br><br><br></p>
    </div>
</a>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }

 </script>

@endsection
