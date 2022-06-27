<div class="container-fluid sticky-top shadow" style="background-color:#BB6552; padding-left: 5%">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="{{ route('Home') }}">Pack.in</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-auto d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav pe-4">
            <li class="nav-item active">
                <a class="nav-link {{ ($nav === '1' ) ? 'active' : '' }}" href="{{ route('Home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($nav === '2' ) ? 'active' : '' }}" href="{{ route('Service') }}">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($nav === '3' ) ? 'active' : '' }}" href="{{ route('About') }}">About Us</a>
            </li>
            </ul>
            </div>
        </nav>
    </div>
</div>
