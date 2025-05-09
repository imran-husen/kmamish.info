<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Here i am linking the files of the css -->
  <link rel="stylesheet" href=" {{ asset('css/main.css') }}">

<!-- Here i am link the various types of the google fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

  <!-- For other formats like PNG, use the following -->
  <link rel="icon" href="{{ asset('/image/favicons.png') }}" type="image/png"> 

<!-- This is the dynamics title of the page -->
<title>{{$title}}</title>

   <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include Bootstrap & Font Awesome (place in <head>) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg modern-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">K.M. Amish</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="biographyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Biography
          </a>
          <ul class="dropdown-menu" aria-labelledby="biographyDropdown">
            <li><a class="dropdown-item" href="#">About Us</a></li>
            <li><a class="dropdown-item" href="#">Religious Field</a></li>
            <li><a class="dropdown-item" href="#">Writer Field</a></li>
            <li><a class="dropdown-item" href="#">Political Field</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="mediaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Media
          </a>
          <ul class="dropdown-menu" aria-labelledby="mediaDropdown">
            <li><a class="dropdown-item" href="#">In the News</a></li>
            <li><a class="dropdown-item" href="#">Video Gallery</a></li>
            <li><a class="dropdown-item" href="#">Photo Gallery</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Join Us</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- This is the body section of the page -->
{{$bodycode}}

<!-- Here i am going to the write the code of the footer section -->
<footer class="bg-dark text-light pt-5 mt-2">
  <div class="container">
    <div class="row text-center text-md-start">
      
      <div class="col-md-4 mb-1">
        <h5 class="fw-bold  text-primary text-uppercase mb-3">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="index.aspx" class="text-decoration-none text-light d-block py-1">Home</a></li>
          <li><a href="aap.aspx" class="text-decoration-none text-light d-block py-1">Direct Dialogue</a></li>
          <li><a href="sendfeedback.aspx" class="text-decoration-none text-light d-block py-1">Send Feedback</a></li>
          <li><a href="contact.aspx" class="text-decoration-none text-light d-block py-1">Contact</a></li>
        </ul>
      </div>

      <div class="col-md-4 mb-1">
        <h5 class="fw-bold text-primary text-uppercase mb-3">Explore</h5>
        <ul class="list-unstyled">
          <li><a href="lekh.aspx" class="text-decoration-none text-light d-block py-1">Articles</a></li>
          <li><a href="PaperNewAlbum.aspx" class="text-decoration-none text-light d-block py-1">Media Coverage</a></li>
          <li><a href="Andolan.aspx" class="text-decoration-none text-light d-block py-1">Movements</a></li>
          <li><a href="humse.aspx" class="text-decoration-none text-light d-block py-1">Join Us</a></li>
        </ul>
      </div>

      <div class="col-md-4 mb-1">
        <h5 class="fw-bold text-uppercase text-primary mb-3">Connect</h5>
        <ul class="list-unstyled">
          <li><a href="http://blog.yogiadityanath.in/" target="_blank" class="text-decoration-none text-light d-block py-1">Blog</a></li>
          <li><a href="video_youtube.aspx" class="text-decoration-none text-light d-block py-1">Video Gallery</a></li>
          <li><a href="photogallery.aspx" class="text-decoration-none text-light d-block py-1">Photo Gallery</a></li>
        </ul>
      </div>
    </div>

     <div class="text-center text-light border-top pt-3 mt-4">
      <p class="mb-0 small text-light">&copy; 2025 <strong class=" text-light">Your Portfolio Name</strong>. All rights reserved.</p>
     </div>
  </div>
</footer>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Include AOS Library for scroll animations -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>