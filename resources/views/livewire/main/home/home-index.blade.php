<section>
  <!-- Carousel Section -->
  <section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
      <div class="carousel-indicators">
        @foreach ($carousels as $key => $carousel)
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key }}"></button>
        @endforeach
      </div>
      <div class="carousel-inner">
        @foreach ($carousels as $key => $carousel)
          <div class="carousel-item {{ $key == 0 ? 'active' : '' }} c-item">
            <img src="{{ asset('assets/images/content/home/carousel') .'/'. $carousel->image }}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption top-0 d-flex justify-content-center align-items-center">
              <div class="text-center">
                <p class="fs-6 fs-md-5 text-uppercase">{{ $carousel->subtitle }}</p>
                <h1 class="display-5 fw-bolder text-uppercase">{{ $carousel->title }}</h1>
                <p class="d-none d-md-block">{{ $carousel->description }}</p>
                @if ($carousel->link)
                  <button class="btn btn-primary px-4 py-2 fs-5 mt-2">Learn more</button>
                @endif
              </div>
            </div>
          </div>
        @endforeach
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

      <!-- Weather Section -->
      <section id="service-section">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 mb-6">
              <div class="service-card">
                <div class="circle-icon position-relative mx-auto">
                  <a href="https://www.flaticon.com/free-icons/sustainable-travel" title="Internet of Things"><img src="{{ asset('logo/internet-of-things.png') }}" alt="" width="70" height="70" class="position-absolute top-50 start-50 translate-middle"></a>
                </div>
                <h3 class="fw-bold mt-4 text-center">Kondisi Temperature - Sensor</h3> 
                <h1 class="mt-3 text-center">{{ $sensors->value1 }} °C</h1>
              </div>
            </div>
    
            <div class="col-12 col-md-4 mb-6">
              <div class="service-card">
                <div class="circle-icon position-relative mx-auto">
                  <a href="https://www.flaticon.com/free-icons/sustainable-travel" title="Internet of Things"><img src="{{ asset('logo/internet-of-things.png') }}" alt="" width="70" height="70" class="position-absolute top-50 start-50 translate-middle"></a>
                </div>
                <h3 class="fw-bold mt-4 text-center">Kadar CO</h3> 
                <h1 class="mt-3 text-center">CO: {{ $sensors->value2 }}</h1>
              </div>
            </div>


            <div class="col-12 col-md-4 mb-6">
              <div class="service-card">
                <div class="circle-icon position-relative mx-auto">
                  <a href="https://www.flaticon.com/free-icons/airplane" title="Logo BMKG"><img src="{{ asset('logo/Logo_BMKG.png') }}" alt="" width="60" height="70" class="position-absolute top-50 start-50 translate-middle"></a>
                </div>
                <h3 class="fw-bold mt-4 text-center">Kondisi Temperature - BMKG</h3>
                <h4 class="mt-3 text-center" id="weatherBMKG">Cuaca: </h4>
                <h1 class="mt-3 text-center" id="temperatureBMKG"></h1>
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
                  <span class="d-none d-lg-inline">Event</span>
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
                  <span class="d-none d-lg-inline">Festival</span>
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
                  <span class="d-none d-lg-inline">Enterprise</span>
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
                  <span class="d-none d-lg-inline">Article</span>
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
          <div class="col-md-12 grid-margin stretch-card">
            <div class="owl-carousel owl-theme owl-auto-play">
              @foreach ($testimonials as $key => $testimonial)
                  <div class="card card-testimoni">
                    <img src="{{ asset('assets/images/content/home/testimonial') .'/'. $testimonial->image }}" alt="" class="card-img-testi">
                    <div class="card-body text-center">
                      <h4 class="fs-4 fw-bold">{{ $testimonial->name }}</h4>
                      <p class="card-text fst-italic">
                        "{{ $testimonial->description }}"
                      </p>
                    </div>
                  </div>
              @endforeach
            </div>
          </div>
      </div>
    </div>
  </section>
</section>