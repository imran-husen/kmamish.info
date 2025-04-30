<x-header>
  <x-slot name="title">Home Page</x-slot>

  <x-slot name="bodycode">
  
  <!-- Here i will always write the code of the center part of the body --> 
  

  <!-- I ma writing the code of the crousel slide image -->
  <div id="carouselExampleAutoplaying" class="carousel slide my-0 d-block d-lg-none" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/image/first slide.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/image/first slide.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/image/first slide.png')}}" class="d-block w-100" alt="...">
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

<!-- Here i am writing the code for the latest new and any other events --> 
<div class="container my-2">
  <h3 class="mb-2 text-center" style="font-family: Merriweather, serif;">Latest News & Blog</h3>
  <div class="row g-4">

  <div class="col-md-4 d-flex justify-content-center">
        <div class="card fixed-card">
          <a href="#" class="btn btn-primary read-more-btn">Read More</a>
          <img src="{{ asset('/image/news1.jpeg')}}" class="card-img-top" alt="Image 1">
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card fixed-card">
          <a href="#" class="btn btn-primary read-more-btn">Read More</a>
          <img src="{{ asset('/image/news2.jpeg')}}" class="card-img-top" alt="Image 2">
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card fixed-card">
          <a href="#" class="btn btn-primary read-more-btn">Read More</a>
          <img src="{{ asset('/image/news3.jpeg')}}" class="card-img-top" alt="Image 3">
        </div>
      </div>
   

      <!-- JHere i am creating the aboutus section of the portfolio --> 
         <!-- About 2 - Bootstrap Brain Component -->
   <!-- About 1 - Bootstrap Brain Component -->
   <div class="container my-2">
  <h3 class="mb-2 text-center" style="font-family: Merriweather, serif;"> About Us K.M. Amish Khan</h3>
  <div class="row g-4">
<section class="py-3 py-md-1" style="font-family: Merriweather, serif;">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy" src="{{ asset('/image/kmamish.png')}}" alt="About 1">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="mb-3 text-center" style="font-family: Merriweather, serif;">About us:-</h2>
            <p class="mb-1" style="font-family: Merriweather, serif;">We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.</p>
            <p class="mb-1" style="font-family: Merriweather, serif;">We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.</p>
            <button type="button" class="btn btn-primary"> Read More+</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  </x-slot>
</x-layout>
