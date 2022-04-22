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

        .content {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>
<div class="container card p-2" style="margin-top: 2%; background-color: #BB6552; margin-bottom: 50px">
	<h3 style="color: white; padding-left: 2%">Jenis Produk</h3>
	<div class="container">
		<div class="row">
{{--            card produk 1 --}}
			<div class="col-sm">
                <div class="card " style="width: 18rem;">
                    <h5 class="card-title d-flex justify-content-center">Produk #1</h5>
                    <hr>
                    <img width="240 px" height="240px" class="card-img-top d-flex justify-content-center" src="image/product/Image Product-1.jpg" alt="Card image cap">
                    <div class="card-body">
{{--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                </div>
			</div>
{{--            card produk 2 --}}
            <div class="col-sm">
                <div class="card " style="width: 18rem;">
                    <h5 class="card-title d-flex justify-content-center">Produk #2</h5>
                    <hr>
                    <img width="240 px" height="240px" class="card-img-top d-flex justify-content-center" src="image/product/Image Product-2.jpg" alt="Card image cap">
                    <div class="card-body">
{{--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                </div>
            </div>
{{--            card produk 3 --}}
            <div class="col-sm">
                <div class="card " style="width: 18rem;">
                    <h5 class="card-title d-flex justify-content-center">Produk #3</h5>
                    <hr>
                    <img width="240 px" height="240px" class="card-img-top d-flex justify-content-center" src="image/product/Image Product-3.jpg" alt="Card image cap">
                    <div class="card-body">
{{--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                </div>
            </div>
		</div>
	</div>
{{--    Collapse Button--}}
    <button type="button" class="collapsible d-flex justify-content-center">
{{--    <img src="image/icon/Breakdown Sign.png" alt="breakdown">--}}
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg>
    </button>
    <div class="content">
{{--            card produk 4 --}}
        <div class="col-sm">
            <div class="card " style="width: 18rem;">
                <h5 class="card-title d-flex justify-content-center">Produk #4</h5>
                <hr>
                <img width="240 px" height="240px" class="card-img-top d-flex justify-content-center" src="image/product/Image Product-4.jpg" alt="Card image cap">
                <div class="card-body">
{{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                </div>
            </div>
        </div>
    </div>
</div>
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
