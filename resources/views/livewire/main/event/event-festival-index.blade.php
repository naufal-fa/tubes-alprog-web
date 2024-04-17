<section>
    {{-- <!-- Hero Image -->
<section id="hero-event">
    <div class="container">
      <div class="row text-white">
        <div class="col-10 ps-5 ps-md-0">
          <h1 class="display-5 fw-bolder text-uppercase">Events and festivals in various tourist destinations</h1>
          <p class="opacity-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, reiciendis consectetur quas possimus debitis suscipit sapiente praesentium voluptatem tempore impedit, temporibus fugiat nemo velit magnam omnis quod dignissimos voluptas esse nihil! Corporis fuga enim inventore!</p>
          <div class="d-flex gap-3 mt-2">
            <a href="#" class="btn btn-primary">Show More</a>
            <a href="#" class="btn btn-outline-light"><i class="bi bi-play-circle-fill"></i><p class="pt-3 ps-2 d-inline">Watch Video</p></a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  
  <!-- Description Section -->
  <section>
    <div class="container mt-4">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-black">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Event & Festival</li>
        </ol>
      </nav>
  
      <div>
        <h1 class="display-5 fw-bolder text-capitalize">List of events and festivals that will be held at the destination you want to visit</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus illo cum expedita repudiandae molestiae labore natus doloribus id quasi consectetur, aut eaque. Maiores iste quo, neque explicabo consequuntur qui doloribus ab minus blanditiis mollitia cumque quos. Perspiciatis totam sit alias eius aperiam temporibus sequi ut similique corporis harum ipsum, vel numquam ullam aliquid nam! Est, officiis. Eligendi dicta nobis maiores.</p>
        <hr class="mb-5">
      </div>
    </div>
  </section>
  
  <!-- Filter Section -->
  <section id="filter" class="mb-4 p-4 rounded container">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <!-- Filter Bar -->
          <div class="d-flex flex-column flex-lg-row justify-content-between align-items-end">
            <!-- Dropdown Month -->
            <div class="w-100 mb-3 mb-lg-0 me-lg-2">
              <strong>Month</strong>
              <select class="form-select" aria-label="Dropdown Month">
                  <option selected>All Month</option>
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
              </select>
            </div>
  
            <!-- Dropdown Year -->
            <div class="w-100 mb-3 mb-lg-0 me-lg-2">
              <strong>Year</strong>
              <select class="form-select" aria-label="Dropdown Year">
                  <option selected>All Year</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
              </select>
            </div>
  
            <!-- Dropdown Sort -->
            <div class="w-100 mb-3 mb-lg-0 me-lg-2">
              <strong>Sort</strong>
              <select class="form-select" aria-label="Dropdown Sort">
                  <option selected>Select All</option>
                  <option value="name">Name</option>
                  <option value="date">Event/Festival Date</option>
              </select>
            </div>
  
            <!-- Dropdown Category -->
            <div class="w-100 mb-3 mb-lg-0 me-lg-2">
              <strong>Category</strong>
              <select class="form-select" aria-label="Dropdown Category">
                  <option selected>All Category</option>
                  <option value="music">Music</option>
                  <option value="culinary">Culinary</option>
                  <option value="culture">Culture</option>
                  <option value="art">Art</option>
                  <option value="sport">Sport</option>
                  <option value="carnaval">Carnaval</option>
              </select>
            </div>
  
            <!-- Search Filter -->
            <div class="w-100 mb-3 mb-lg-0 me-lg-2">
              <small class="text-nowrap fw-bold">Search Event / Festival</small>
              <input type="text" class="form-control" placeholder="Input Event / Festival Name">
            </div>
  
            <!-- Button Reset -->
            <div class="d-flex justify-content-end">
              <button class="btn btn-primary">Reset</button>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Event & Festival Section -->
  <section>
    <div class="container">
      <div class="row">
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img1.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img2.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img3.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img4.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img5.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img6.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img7.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img8.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img9.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img10.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img11.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img12.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img13.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img14.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img15.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img16.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img17.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img18.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img19.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="card card-event mb-3">
            <div class="row g-0">
              <div class="col-4 event-cover-img">
                <img src="{{ asset('images/event-festival-img/event-festival-img20.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Name of Event or Festival</h5>
                  <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Address EVT 3666, YEA</p>
                  <h5 class="fw-bold">14 April 2024</h5>
                  <p>Start 12:00 WIB</p>
                  <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12 col-md-6 col-lg-5"><p class="pt-3 d-inline">See Details</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
  
      </div>
  
      <hr class="my-5">
    </div>
  </section>
</section>