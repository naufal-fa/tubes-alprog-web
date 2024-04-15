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
            <h1 class="display-5 fw-bolder text-uppercase">Welcome to Nature's Paradise</h1>
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
                  <a href="{{ route('destination-details') }}" class="btn btn-primary">View More</a>
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
                  <a href="{{ route('destination-details') }}" class="btn btn-primary">View More</a>
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
                  <a href="{{ route('destination-details') }}" class="btn btn-primary">View More</a>
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
                  <a href="{{ route('destination-details') }}" class="btn btn-primary">View More</a>
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
                  <a href="{{ route('destination-details') }}" class="btn btn-primary">View More</a>
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
                  <a href="{{ route('destination-details') }}" class="btn btn-primary">View More</a>
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
                  <a href="{{ route('destination-details') }}" class="btn btn-primary">View More</a>
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
                  <a href="{{ route('destination-details') }}" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Search Section -->
<section id="search" class="d-flex align-items-center mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-10 mx-auto text-center text-white">
        <h2 class="fw-bolder fs-1">Find Your Destination</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam inventore, soluta veritatis quisquam similique assumenda! Numquam est quidem corporis repellat, nesciunt praesentium at voluptatem adipisci.</p>
      </div>

      <div class="col-10 mx-auto mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="destination-tab" data-bs-toggle="tab" data-bs-target="#destination" type="button" role="tab" aria-controls="home" aria-selected="true">Destination</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="accomodation-tab" data-bs-toggle="tab" data-bs-target="#accomodation" type="button" role="tab" aria-controls="profile" aria-selected="false">Regional Event</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tourpackages-tab" data-bs-toggle="tab" data-bs-target="#tourpackages" type="button" role="tab" aria-controls="contact" aria-selected="false">Information</button>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="destination" role="tabpanel" aria-labelledby="destination-tab">
            <div class="input-group input-search mb-3">

              <!-- DROPDOWN TEMPAT WISATA -->
              <button class="button-secondary px-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('icon/icon-tourism-destination.svg') }}" alt="" class="dropdown-icon">
                <span class="d-none d-lg-inline">Tourist Destination</span>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>

              <!-- DROPDOWN ATRAKSI -->
              <button class="button-secondary px-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('icon/icon-attraction.svg') }}" alt="" class="dropdown-icon">
                <span class="d-none d-lg-inline">Attraction</span>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>

              <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search by name, location, id, etc.">
              <button class="button-primary px-4 fs-5" type="button" id="button-addon2">Search</button>
            </div>
          </div>

          <div class="tab-pane fade" id="accomodation" role="tabpanel" aria-labelledby="accomodation-tab">
            <div class="input-group input-search mb-3">

              <!-- DROPDOWN EVENT -->
              <button class="button-secondary px-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('icon/icon-event.svg') }}" alt="" class="dropdown-icon">
                Event
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>

              <!-- DROPDOWN FESTIVAL -->
              <button class="button-secondary px-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('icon/icon-festival.svg') }}" alt="" class="dropdown-icon">
                Festival
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>

              <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search by name, location, id, etc.">
              <button class="button-primary px-4 fs-5" type="button" id="button-addon2">Search</button>
            </div>
          </div>
          
          <div class="tab-pane fade" id="tourpackages" role="tabpanel" aria-labelledby="tourpackage-tab">
            <div class="input-group input-search mb-3">

              <!-- DROPDOWN TRAVEL PACKAGE -->
              <button class="button-secondary px-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('icon/icon-enterprise.svg') }}" alt="" class="dropdown-icon">
                 Enterprise
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>

              <!-- DROPDOWN TRAVEL TOUR -->
              <button class="button-secondary px-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('icon/icon-article.svg') }}" alt="" class="dropdown-icon">
                Article
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>

              <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search by name, location, id, etc.">
              <button class="button-primary px-4 fs-5" type="button" id="button-addon2">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Recommendation Section -->
<section id="recommendation">
  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <h1 class="fw-bolder mb-4">Recommended Tourist Destinations</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/recom-images/recom-images1.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">Destinasi 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('destination-details') }}" class="btn btn-primary w-100">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/recom-images/recom-images2.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">Destinasi 2</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('destination-details') }}" class="btn btn-primary w-100">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/recom-images/recom-images3.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">Destinasi 3</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('destination-details') }}" class="btn btn-primary w-100">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/recom-images/recom-images4.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">Destinasi 4</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('destination-details') }}" class="btn btn-primary w-100">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/recom-images/recom-images5.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">Destinasi 5</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('destination-details') }}" class="btn btn-primary w-100">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/recom-images/recom-images6.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">Destinasi 6</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('destination-details') }}" class="btn btn-primary w-100">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonial Section -->
<section id="testimonial">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12">
        <h1 class="fw-bolder mb-4">Visitor Testimonials</h1>
      </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row mt-2">
            <div class="col-md-4 mb-4">
              <div class="card card-testimoni">
                <img src="{{ asset('images/profile-picture/1.png') }}" alt="" class="card-img-testi">
                <div class="card-body text-center">
                  <h4 class="fs-4 fw-bold">Name of Visitor 1</h4>
                  <p class="card-text fst-italic">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?"
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card card-testimoni">
                <img src="{{ asset('images/profile-picture/2.png') }}" alt="" class="card-img-testi">
                <div class="card-body text-center">
                  <h4 class="fs-4 fw-bold">Name of Visitor 2</h4>
                  <p class="card-text fst-italic">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?"
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card card-testimoni">
                <img src="{{ asset('images/profile-picture/3.png') }}" alt="" class="card-img-testi">
                <div class="card-body text-center">
                  <h4 class="fs-4 fw-bold">Name of Visitor 3</h4>
                  <p class="card-text fst-italic">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?"
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row mt-2">
            <div class="col-md-4 mb-4">
              <div class="card card-testimoni">
                <img src="{{ asset('images/profile-picture/4.png') }}" alt="" class="card-img-testi">
                <div class="card-body text-center">
                  <h4 class="fs-4 fw-bold">Name of Visitor 4</h4>
                  <p class="card-text fst-italic">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?"
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card card-testimoni">
                <img src="{{ asset('images/profile-picture/5.png') }}" alt="" class="card-img-testi">
                <div class="card-body text-center">
                  <h4 class="fs-4 fw-bold">Name of Visitor 5</h4>
                  <p class="card-text fst-italic">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?"
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card card-testimoni">
                <img src="{{ asset('images/profile-picture/6.png') }}" alt="" class="card-img-testi">
                <div class="card-body text-center">
                  <h4 class="fs-4 fw-bold">Name of Visitor 6</h4>
                  <p class="card-text fst-italic">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?"
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row mt-2">
            <div class="col-md-4 mb-4">
              <div class="card card-testimoni">
                <img src="{{ asset('images/profile-picture/7.png') }}" alt="" class="card-img-testi">
                <div class="card-body text-center">
                  <h4 class="fs-4 fw-bold">Name of Visitor 7</h4>
                  <p class="card-text fst-italic">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?"
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card card-testimoni">
                <img src="{{ asset('images/profile-picture/8.png') }}" alt="" class="card-img-testi">
                <div class="card-body text-center">
                  <h4 class="fs-4 fw-bold">Name of Visitor 8</h4>
                  <p class="card-text fst-italic">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?"
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card card-testimoni">
                <img src="{{ asset('images/profile-picture/9.png') }}" alt="" class="card-img-testi">
                <div class="card-body text-center">
                  <h4 class="fs-4 fw-bold">Name of Visitor 9</h4>
                  <p class="card-text fst-italic">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?"
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Subscribe Email Section -->
<section class="mx-3 mt-5">
  <div id="bg-image-email" class="container p-5">
    <div class="row">
      <h2 class="text-white text-center fw-bold mb-4">Dapatkan E-Book Travel Gratis dengan Berlangganan</h2>
      <div class="col-10 mx-auto">
        <form>
          <div class="input-group mb-3">
            <input type="email" class="form-control py-2" placeholder="Enter your email address" aria-label="Recipient's email">
            <div class="input-group-append">
              <button class="btn btn-primary py-2" type="submit">Subscribe</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer Section -->
<footer class="bg-light text-dark pt-5 pb-4">
  <div class="container">
    <div class="row">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h4 class="text-uppercase mb-4 fw-bold">About Us</h4>
        <hr class="mb-4">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, voluptatibus. Magni a repellendus nobis dolor.</p>
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h4 class="text-uppercase mb-4 fw-bold">Link Title 1</h4>
        <hr class="mb-4">
        <p>
          <a href="#" class="text-dark text-decoration-none">Your Link 1</a>
        </p>
        <p>
          <a href="#" class="text-dark text-decoration-none">Your Link 2</a>
        </p>
        <p>
          <a href="#" class="text-dark text-decoration-none">Your Link 3</a>
        </p>
        <p>
          <a href="#" class="text-dark text-decoration-none">Your Link 4</a>
        </p>
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h4 class="text-uppercase mb-4 fw-bold">Link Title 2</h4>
        <hr class="mb-4">
        <p>
          <a href="#" class="text-dark text-decoration-none">Your Link 1</a>
        </p>
        <p>
          <a href="#" class="text-dark text-decoration-none">Your Link 2</a>
        </p>
        <p>
          <a href="#" class="text-dark text-decoration-none">Your Link 3</a>
        </p>
        <p>
          <a href="#" class="text-dark text-decoration-none">Your Link 4</a>
        </p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h4 class="text-uppercase mb-4 fw-bold">Contact</h4>
        <hr class="mb-4">
        <ul  class="list-unstyled">
          <li class="d-flex"><i class="bi bi-house-door-fill"></i><p class="pt-1 ps-2">Address SBY 2333, ID</p></li>
          <li class="d-flex"><i class="bi bi-envelope-fill"></i><p class="pt-1 ps-2">youremail@gmail.com</p></li>
          <li class="d-flex"><i class="bi bi-telephone-fill"></i><p class="pt-1 ps-2">+01 2345 6789</p></li>
          <li class="d-flex"><i class="bi bi-printer-fill"></i><p class="pt-1 ps-2">12 3456 7890</p></li>
        </ul>
      </div>

      <hr class="mb-4">
      <div class="row">
        <div class="d-flex align-items-center">
          <div class="">
              <p>
                Copyright 2024 All Right Reserved By :
                <a href="#" class="text-decoration-none text-dark fw-bold">Laravel Project</a>
              </p>
            </div>

            <div class="d-flex ms-auto">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><i class="bi bi-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><i class="bi bi-whatsapp"></i></a>
                </li>
              </ul>
            </div>
        </div>
      </div>

    </div>
  </div>
</footer>

@endsection