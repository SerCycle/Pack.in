<div class="container-fluid sticky-top shadow" style="background-color:#BB6552; padding-left: 5%">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">Pack.in</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-auto d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav pe-4">
            <li class="nav-item active">
                <a class="nav-link {{ ($title === 'Home' ) ? 'active' : '' }}" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Service' ) ? 'active' : '' }}" href="/service">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'About' ) ? 'active' : '' }}" href="/about">About Us</a>
            </li>
            </ul>
            </div>
        </nav>
    </div>
</div>
