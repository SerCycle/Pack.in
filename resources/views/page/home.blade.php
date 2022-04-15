@extends('main')

@section('container')
    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner text-center text-white" style="height: 300px">
            <div class="carousel-item active bg-image justify-content-center align-items-center" style="background-image: url('image/about.png'); height: 50vh; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
                <h1 class="p-5" style="font-size: 70px">Custome Package</h1>
                <p class="ps-5 pe-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis inventore dolore nobis cupiditate molestias iste aliquid doloribus quod quisquam. Neque architecto incidunt tenetur nisi vel nostrum illo sed aperiam magnam!</p>
            </div>
            <div class="carousel-item bg-image justify-content-center align-items-center" style="background-image: url('image/image5.png'); height: 50vh; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
                <div class="bg-dark bg-opacity-25" style="height: 100%">
                    <h1 class="p-5" style="font-size: 70px">Jual Kardus</h1>
                    <p class="ps-5 pe-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius deserunt distinctio ullam quod maxime in aliquam tenetur veritatis sapiente nisi sunt ad nesciunt qui, quibusdam adipisci totam vel perferendis quia.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection