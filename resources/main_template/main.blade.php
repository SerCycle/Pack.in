<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<link href="../css/style.css" rel="stylesheet" type="text/css">

        <title>Pack.in</title>
    </head>
    <body>
		
		<header>	
			<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#BB6552; padding-left: 5%">
			  <a class="navbar-brand" href="#">Pack.in</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse m-auto d-flex justify-content-center" id="navbarNav">
				<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><strong>Service</strong></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About Us</a>
				</li>
				</ul>
			  </div>
			</nav>
		</header>
		
        <div class="container"></div>
        <main>
			@yield('container')
		</main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
