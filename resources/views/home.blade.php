<x-header>
  <x-slot name="title">Home Page</x-slot>

  <x-slot name="bodycode">

  <!-- This is the main header section-->  
  <div class="w-100" style="height: 150px; background: linear-gradient(135deg,rgb(105, 161, 88) 0%, #764ba2 100%); font-family: 'Outfit', sans-serif;">
  <div class="container h-100 d-flex justify-content-center align-items-center text-white text-center">
    <div>
      <h1 class="mb-2 fw-semibold fw-bold" style="font-family: Merriweather, serif;"> Dr. K.M. Amish</h1>
      <p class="mb-0"> एक सामाजिक कार्यकर्ता, नैनोटेक्नोलॉजिस्ट, व राजनीतिक विश्लेषक</p>
    </div>
  </div>
</div>

<!-- Here i am writing the code for the latest new and any other events --> 
<div class="container my-1">
  <h3 class="my-1 text-center" >Latest News & Blog</h3>

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

      <!-- JHere i am creating the aboutus section of the portfolio --> 
         <!-- About 2 - Bootstrap Brain Component -->
   <!-- About 1 - Bootstrap Brain Component -->
  <section class="py-2" style="font-family: 'Outfit', sans-serif; background-color: #f9f9f9;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Circular Photo -->
      <div class="col-md-6 text-center mb-1 mb-md-0">
        <img src="{{ asset('/image/kmamish.jpeg')}}" alt="About" class="img-fluid rounded-circle shadow" style="width: 250px; height: 250px; object-fit: cover;">
      </div>

      <!-- About Content -->
      <div class="col-md-6">
        <h2 class="mb-3 text-center text-md-start fw-semibold">K.M. Amish Khan</h2>
        <p class="mb-1 text-center text-md-start">K. M. Amish was born on 30 May 1991 in a small farmer's family in a village called Usri-Piperjhala, from the same government school in the neighboring village of Piperjhala. After completing the examination of District Panchayat Inter College Kasta High School, Raja Lone Singh Inter College Mitauli Intermediate, Yuvarajdatta Y.D.P.G. College after graduation from......</p>
        <div class="text-center text-md-start">
          <a  href="{{ route('about.us') }}" class="btn btn-primary">Read More +</a>
        </div>
      </div>
    </div>

    <!-- Connect Section -->
    <div class="row mt-1 justify-content-center text-center">
      <div class="col-12">
        <h4 class="fw-semibold mb-3">Connect with Me</h4>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href=" https://www.facebook.com/share/19UC62ADpK/" class="btn btn-outline-dark px-4" target="_blank">Facebook</a>
          <a href=" https://x.com/Multidi43528293?t=JypRJGi49eLtKGqc3uT9TQ&s=09 " class="btn btn-outline-dark px-4" target="_blank">Twitter</a>
          <a href="https://www.linkedin.com/in/k-m-amish-president-of-ngo-and-bahuayami-political-party-35a03598?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app  " class="btn btn-outline-dark px-4" target="_blank">LinkedIn</a>
        </div>
      </div>
    </div>
  </div>
</section>

  </x-slot>
</x-layout>
