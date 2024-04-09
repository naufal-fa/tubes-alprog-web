@extends('layouts.app')

@section('content')

<!-- Carousel Section -->
<section>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="{{ asset('images/slider-image-1.png') }}" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 d-flex justify-content-center align-items-center">
          <div class="text-center">
            <p class="fs-6 fs-md-5 text-uppercase">Experience Breathtaking Natural Beauty</p>
            <h1 class=" display-5 fw-bolder text-uppercase">Welcome to Nature's Paradise</h1>
            <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum iure iusto ducimus officia quasi repellat aut voluptate minima. Dolorum aliquam sapiente cum iusto repudiandae, placeat cumque inventore illo dolorem.</p>
            <button class="btn btn-primary px-4 py-2 fs-5 mt-2">Start Your Adventure</button>
          </div>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="{{ asset('images/slider-image-2.png') }}" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 d-flex justify-content-center align-items-center">
          <div class="text-center">
            <p class="fs-6 fs-md-5 text-uppercase">Trekking and Natural Wonders</p>
            <h1 class=" display-5 fw-bolder text-uppercase">Majestic Green Mountains</h1>
            <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum iure iusto ducimus officia quasi repellat aut voluptate minima. Dolorum aliquam sapiente cum iusto repudiandae, placeat cumque inventore illo dolorem.</p>
            <button class="btn btn-primary px-4 py-2 fs-5 mt-2">Explore Mountains</button>
          </div>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="{{ asset('images/slider-image-3.png') }}" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 d-flex justify-content-center align-items-center">
          <div class="text-center">
            <p class="fs-6 fs-md-5 text-uppercase">Enchanting Tropical Forests</p>
            <h1 class=" display-5 fw-bolder text-uppercase">Wildlife Exploration</h1>
            <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum iure iusto ducimus officia quasi repellat aut voluptate minima. Dolorum aliquam sapiente cum iusto repudiandae, placeat cumque inventore illo dolorem.</p>
            <button class="btn btn-primary px-4 py-2 fs-5 mt-2">Begin Your Adventure</button>
          </div>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="{{ asset('images/slider-image-4.png') }}" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 d-flex justify-content-center align-items-center">
          <div class="text-center">
            <p class="fs-6 fs-md-5 text-uppercase">Waves and Sandy Shores</p>
            <h1 class=" display-5 fw-bolder text-uppercase">Captivating Coastal Views</h1>
            <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum iure iusto ducimus officia quasi repellat aut voluptate minima. Dolorum aliquam sapiente cum iusto repudiandae, placeat cumque inventore illo dolorem.</p>
            <button class="btn btn-primary px-4 py-2 fs-5 mt-2">Learn More</button>
          </div>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="{{ asset('images/slider-image-5.png') }}" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 d-flex justify-content-center align-items-center">
          <div class="text-center">
            <p class="fs-6 fs-md-5 text-uppercase">Romantic Sunsets</p>
            <h1 class=" display-5 fw-bolder text-uppercase">Tranquility and Beauty</h1>
            <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum iure iusto ducimus officia quasi repellat aut voluptate minima. Dolorum aliquam sapiente cum iusto repudiandae, placeat cumque inventore illo dolorem.</p>
            <button class="btn btn-primary px-4 py-2 fs-5 mt-2">View Scenery</button>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- Service Section -->
<section id="service-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 mb-4">
        <div class="service-card">
          <div class="circle-icon position-relative mx-auto">
            <a href="https://www.flaticon.com/free-icons/travel" title="travel icons"><img src="{{ asset('logo/airplane.png') }}" alt="" width="70" height="70" class="position-absolute top-50 start-50 translate-middle"></a>
          </div>
          <h3 class="fw-bold mt-4 text-center">Fast Travel</h3>
          <p class="mt-3 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum vel id cupiditate assumenda ratione odio!</p>
        </div>
      </div>

      <div class="col-12 col-md-4 mb-4">
        <div class="service-card">
          <div class="circle-icon position-relative mx-auto">
            <a href="https://www.flaticon.com/free-icons/sustainable-travel" title="sustainable travel"><img src="{{ asset('logo/sustainable-travel.png') }}" alt="" width="70" height="70" class="position-absolute top-50 start-50 translate-middle"></a>
          </div>
          <h3 class="fw-bold mt-4 text-center">Sustainable Travel</h3>
          <p class="mt-3 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum vel id cupiditate assumenda ratione odio!</p>
        </div>
      </div>

      <div class="col-12 col-md-4 mb-4">
        <div class="service-card">
          <div class="circle-icon position-relative mx-auto">
            <a href="https://www.flaticon.com/free-icons/airplane" title="airplane icons"><img src="{{ asset('logo/payment.png') }}" alt="" width="70" height="70" class="position-absolute top-50 start-50 translate-middle"></a>
          </div>
          <h3 class="fw-bold mt-4 text-center">Affordable Cost</h3>
          <p class="mt-3 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum vel id cupiditate assumenda ratione odio!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Destination Highlight -->
<section id="destlight">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="fw-bolder">Destination Highlight</h1>
      </div>

      <div class="container mt-4">
        <div class="row">
          <div class="col-6 col-lg-3 mb-4">
            <div class="dest-card position-relative">
              <img src="{{ asset('images/destination-images/destination-img1.png') }}" width="100%" height="auto" alt="" class="dest-img">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="text-white position-absolute top-50 start-50 translate-middle text-center w-100 p-3">
                  <h5 class="fs-4 fw-bolder">Destinasi 1</h5>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                  <a href="#" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 mb-4">
            <div class="dest-card position-relative">
              <img src="{{ asset('images/destination-images/destination-img2.png') }}" width="100%" height="auto" alt="" class="dest-img">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="text-white position-absolute top-50 start-50 translate-middle text-center w-100 p-3">
                  <h5 class="fs-4 fw-bolder">Destinasi 2</h5>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                  <a href="#" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 mb-4">
            <div class="dest-card position-relative">
              <img src="{{ asset('images/destination-images/destination-img3.png') }}" width="100%" height="auto" alt="" class="dest-img">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="text-white position-absolute top-50 start-50 translate-middle text-center w-100 p-3">
                  <h5 class="fs-4 fw-bolder">Destinasi 3</h5>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                  <a href="#" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 mb-4">
            <div class="dest-card position-relative">
              <img src="{{ asset('images/destination-images/destination-img4.png') }}" width="100%" height="auto" alt="" class="dest-img">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="text-white position-absolute top-50 start-50 translate-middle text-center w-100 p-3">
                  <h5 class="fs-4 fw-bolder">Destinasi 4</h5>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                  <a href="#" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 mb-4">
            <div class="dest-card position-relative">
              <img src="{{ asset('images/destination-images/destination-img5.png') }}" width="100%" height="auto" alt="" class="dest-img">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="text-white position-absolute top-50 start-50 translate-middle text-center w-100 p-3">
                  <h5 class="fs-4 fw-bolder">Destinasi 5</h5>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                  <a href="#" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 mb-4">
            <div class="dest-card position-relative">
              <img src="{{ asset('images/destination-images/destination-img6.png') }}" width="100%" height="auto" alt="" class="dest-img">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="text-white position-absolute top-50 start-50 translate-middle text-center w-100 p-3">
                  <h5 class="fs-4 fw-bolder">Destinasi 6</h5>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                  <a href="#" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 mb-4">
            <div class="dest-card position-relative">
              <img src="{{ asset('images/destination-images/destination-img7.png') }}" width="100%" height="auto" alt="" class="dest-img">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="text-white position-absolute top-50 start-50 translate-middle text-center w-100 p-3">
                  <h5 class="fs-4 fw-bolder">Destinasi 7</h5>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                  <a href="#" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 mb-4">
            <div class="dest-card position-relative">
              <img src="{{ asset('images/destination-images/destination-img8.png') }}" width="100%" height="auto" alt="" class="dest-img">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="text-white position-absolute top-50 start-50 translate-middle text-center w-100 p-3">
                  <h5 class="fs-4 fw-bolder">Destinasi 8</h5>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                  <a href="#" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection