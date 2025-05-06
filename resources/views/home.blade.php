<x-header>
  <x-slot name="title">Home Page</x-slot>

  <x-slot name="bodycode">
 <!-- Top Header -->
<div id="top-header" class="bg-light py-3 border-bottom">
  <div class="container">
    <div class="row align-items-center justify-content-between">

      <!-- Logo -->
      <div class="col-md-4 col-12 mb-3 mb-md-0 text-center text-md-start">
        <a href="">
          <img src="{{ asset('/image/K.M. Amish name.png') }}" alt="K. M. Amish" class="img-fluid" style="max-height: 50px;">
        </a>
      </div>

      <!-- Social + Search -->
      <div class="col-md-8 col-12 text-center text-md-end">

        <!-- Social Icons -->
        <div class="mb-2">
          <a href="#" class="text-dark me-3 fs-5"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-dark me-3 fs-5"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-dark me-3 fs-5"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-dark me-3 fs-5"><i class="fab fa-youtube"></i></a>
          <a href="#" class="text-dark fs-5"><i class="fab fa-google"></i></a>
        </div>

        <!-- Modern Search Box -->
        <form action="https://www.arunjaitley.com/" method="get" class="d-flex justify-content-center justify-content-md-end">
          <div class="input-group" style="max-width: 300px;">
            <input type="search" class="form-control border-end-0 rounded-start-pill" placeholder="Search…" name="s" title="Search for:">
            <button class="btn btn-outline-primary rounded-end-pill" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Here i am writing the code of the crousel image -->
    <!-- Here i am going to the write the code of the crousel image -->
    <div id="carouselExampleAutoplaying" class="carousel slide my-0 d-block d-lg-none" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/image/slide image 1.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/image/slide image 1.png')}}" class="d-block w-100" alt="...">
</div>
    <div class="carousel-item">
      <img src="{{ asset('/image/slide image 1.png')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Here available the code of the heading -->

<!-- Centered About Us Section -->
<section class="py-1 bg-light" style="font-family: 'Outfit', sans-serif;">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8" data-aos="fade-up">
        <h2 class="fw-bold mb-3 text-primary">K.M. Amish Khan</h2>
        <p class="text-muted mb-4" style="line-height: 1.8;">
          K. M. Amish was born on 30 May 1991 in a small farmer's family in a village called Usri-Piperjhala.
          He began his education at a government school in Piperjhala, completed high school at District Panchayat Inter College Kasta, intermediate from Raja Lone Singh Inter College Mitauli, and graduated from Yuvarajdatta Y.D.P.G. College...
        </p>
        <a href="{{ route('about.us') }}" class="btn btn-primary btn-lg shadow-sm mb-4">
          Learn More &rarr;
        </a>
      </div>
    </div>

    <!-- Social Links -->
    <div class="row justify-content-center text-center">
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
        <h4 class="fw-semibold mb-3">Connect with Me</h4>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="https://www.facebook.com/share/19UC62ADpK/" target="_blank" class="btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm">
            <i class="fab fa-facebook-f me-2"></i>Facebook
          </a>
          <a href="https://x.com/Multidi43528293?t=JypRJGi49eLtKGqc3uT9TQ&s=09" target="_blank" class="btn btn-outline-info rounded-pill px-4 py-2 shadow-sm">
            <i class="fab fa-twitter me-2"></i>Twitter
          </a>
          <a href="https://www.linkedin.com/in/k-m-amish-president-of-ngo-and-bahuayami-political-party-35a03598" target="_blank" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm">
            <i class="fab fa-linkedin-in me-2"></i>LinkedIn
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Here i am writing the code for the latest new and any other events --> 
<div class="container my-3">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="info-marquee bg-gradient p-2 text-white rounded shadow-sm" style="height: 50px; overflow: hidden; position: relative;">
        <div class="marquee-text position-absolute" style="white-space: nowrap; animation: marquee 15s linear infinite;">
          📢 This is new and latest news updates by click you can read and more something. 🔔 New events are coming soon!
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-1">
  <!-- Carousel for Mobile -->
  <div class="d-block d-md-none">
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card mx-3">
            <img src="{{ asset('/image/news1.jpeg') }}" class="card-img-top" alt="Image 1">
            <div class="card-body text-center">
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card mx-3">
            <img src="{{ asset('/image/news2.jpeg') }}" class="card-img-top" alt="Image 2">
            <div class="card-body text-center">
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card mx-3">
            <img src="{{ asset('/image/news3.jpeg') }}" class="card-img-top" alt="Image 3">
            <div class="card-body text-center">
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Optional controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

  <!-- Grid for Desktop -->
  <div class="row g-4 d-none d-md-flex">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card fixed-card">
        <img src="{{ asset('/image/news1.jpeg') }}" class="card-img-top" alt="Image 1">
        <div class="card-body text-center">
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card fixed-card">
        <img src="{{ asset('/image/news2.jpeg') }}" class="card-img-top" alt="Image 2">
        <div class="card-body text-center">
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card fixed-card">
        <img src="{{ asset('/image/news3.jpeg') }}" class="card-img-top" alt="Image 3">
        <div class="card-body text-center">
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>


  </x-slot>
</x-layout>
