@extends('main')
    
<style>
    .image1{
        width: 200px;
        height: 200px;
        background-image: url('{{ URL::to('/' . $image )}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%;
    }
    .image{
        width: 200px;
        height: 200px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: auto 100%;
        margin-right: 10%;
        margin-left: 10%;
    }

</style>

@section('container')

    <div class="container rounded mt-3 text-white" style="background-color:#BB6552">
        <div class="row p-5">
            <div class="col-3">
                <div class="bg-image rounded image1"></div>
            </div>
            <div class="ps-5 col-9">
                <p>{{ $name }}</p>
                <p style="font-size: 30px"><b>Rp{{ $harga }}</b></p>
                <p>{{ $description }}</p>
                <a href="/productorder1" type="button" class="btn btn-outline-warning"><b>PESAN SEKARANG</b></a>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5">
        <h3>Produk terkait</h3>
        <div class="pt-5 row d-flex justify-content-around align-items-center text-center">
            @for ($i = 0; $i < 4; $i++)
                @if ($i == $id-1)
                    @continue
                @endif
                <div class="border border-dark rounded shadow justify-content-center" style="width:15rem;">
                    <a href="{{ route('selectedProduct', $i+1) }}" style="text-decoration: none;">
                        <p class="pt-1" style="color: black;">{{ $products[$i]->product_name }}</p>
                        <div class="bg-image image" style="background-image: url('{{ URL::to('/' . $products[$i]->image )}}');"></div>
                    </a>
                </div>
                </a>
            @endfor
    </div>

@endsection
