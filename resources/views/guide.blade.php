@extends('layouts.app')

@section('content')

<!-- Hero Image -->
<section id="hero-event">
  <div class="container">
    <div class="row text-white">
      <div class="col-10 ps-5 ps-md-0">
        <h1 class="display-5 fw-bolder text-uppercase">The most complete travel guide for tourism needs</h1>
        <p class="opacity-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, reiciendis consectetur quas possimus debitis suscipit sapiente praesentium voluptatem tempore impedit, temporibus fugiat nemo velit magnam omnis quod dignissimos voluptas esse nihil! Corporis fuga enim inventore!</p>
        <div class="d-flex gap-3 mt-2">
          <a href="#" class="btn btn-primary">Learn More</a>
          <a href="#" class="btn btn-outline-light" download="Travel_Guide"><p class="pt-3 d-inline">Download Guide</p></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Description Section -->
<section>
  <div class="container mt-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none text-black">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Travel Guide</li>
      </ol>
    </nav>

    <div>
      <h1 class="display-5 fw-bolder text-capitalize">Essential guide for your needs</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus illo cum expedita repudiandae molestiae labore natus doloribus id quasi consectetur, aut eaque. Maiores iste quo, neque explicabo consequuntur qui doloribus ab minus blanditiis mollitia cumque quos. Perspiciatis totam sit alias eius aperiam temporibus sequi ut similique corporis harum ipsum, vel numquam ullam aliquid nam! Est, officiis. Eligendi dicta nobis maiores.</p>
      <hr class="mb-5">
    </div>
  </div>
</section>

<!-- Travel Guide Section -->
<section>
  <div class="container">
    <div class="row">

      <div class="col-lg-6">
        <div class="card card-guide mb-3">
          <div class="row g-0">
            <div class="col-4 guide-cover-img">
              <img src="{{ asset('images/destination-images/destination-img1.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Travel Guide 1</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary col-12 col-md-6 col-lg-5" download="Travel_Guide"><p class="pt-3 d-inline">Download PDF</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-guide mb-3">
          <div class="row g-0">
            <div class="col-4 guide-cover-img">
              <img src="{{ asset('images/destination-images/destination-img2.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Travel Guide 2</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary col-12 col-md-6 col-lg-5" download="Travel_Guide"><p class="pt-3 d-inline">Download PDF</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-guide mb-3">
          <div class="row g-0">
            <div class="col-4 guide-cover-img">
              <img src="{{ asset('images/destination-images/destination-img3.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Travel Guide 3</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary col-12 col-md-6 col-lg-5" download="Travel_Guide"><p class="pt-3 d-inline">Download PDF</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-guide mb-3">
          <div class="row g-0">
            <div class="col-4 guide-cover-img">
              <img src="{{ asset('images/destination-images/destination-img4.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Travel Guide 4</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary col-12 col-md-6 col-lg-5" download="Travel_Guide"><p class="pt-3 d-inline">Download PDF</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-guide mb-3">
          <div class="row g-0">
            <div class="col-4 guide-cover-img">
              <img src="{{ asset('images/destination-images/destination-img5.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Travel Guide 5</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary col-12 col-md-6 col-lg-5" download="Travel_Guide"><p class="pt-3 d-inline">Download PDF</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-guide mb-3">
          <div class="row g-0">
            <div class="col-4 guide-cover-img">
              <img src="{{ asset('images/destination-images/destination-img6.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Travel Guide 6</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary col-12 col-md-6 col-lg-5" download="Travel_Guide"><p class="pt-3 d-inline">Download PDF</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-guide mb-3">
          <div class="row g-0">
            <div class="col-4 guide-cover-img">
              <img src="{{ asset('images/destination-images/destination-img7.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Travel Guide 7</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary col-12 col-md-6 col-lg-5" download="Travel_Guide"><p class="pt-3 d-inline">Download PDF</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-guide mb-3">
          <div class="row g-0">
            <div class="col-4 guide-cover-img">
              <img src="{{ asset('images/destination-images/destination-img8.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Travel Guide 8</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary col-12 col-md-6 col-lg-5" download="Travel_Guide"><p class="pt-3 d-inline">Download PDF</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-guide mb-3">
          <div class="row g-0">
            <div class="col-4 guide-cover-img">
              <img src="{{ asset('images/destination-images/destination-img9.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Travel Guide 9</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary col-12 col-md-6 col-lg-5" download="Travel_Guide"><p class="pt-3 d-inline">Download PDF</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-guide mb-3">
          <div class="row g-0">
            <div class="col-4 guide-cover-img">
              <img src="{{ asset('images/destination-images/destination-img10.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Travel Guide 10</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary col-12 col-md-6 col-lg-5" download="Travel_Guide"><p class="pt-3 d-inline">Download PDF</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

    <hr class="my-5">
  </div>
</section>

<!-- Subscribe Email Section -->
<section class="mx-3">
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