@extends('layouts.app')

@section('content')

<!-- Hero Image -->
<section id="hero-destination">
  <div class="container">
    <div class="row text-white">
      <div class="col-10 ps-5 ps-md-0">
        <h1 class="display-5 fw-bolder text-uppercase">Visit Your Various Interesting Destinations</h1>
        <p class="opacity-75">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit atque pariatur numquam, necessitatibus officia soluta tempora, deserunt accusamus sequi enim dolores quia architecto. Voluptatem, perspiciatis.</p>
        <div class="d-flex gap-3 mt-2">
          <a href="#" class="btn btn-primary">Show More</a>
          <a href="#" class="btn btn-outline-light"><i class="bi bi-play-circle-fill"></i><p class="pt-3 ps-2 d-inline">Watch Video</p></a>
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
        <li class="breadcrumb-item active" aria-current="page">Tourist Destination</li>
      </ol>
    </nav>

    <div>
      <h1 class="display-5 fw-bolder text-capitalize">The enchanting beauty of this tourist destination makes it a must to explore</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat expedita doloribus autem! Velit, perferendis, excepturi tenetur illum odio quidem, repellendus modi magni rerum ipsa asperiores? Pariatur enim quas voluptates eaque sunt, impedit veritatis ducimus, dignissimos asperiores nisi ullam optio voluptas reiciendis natus, alias hic iusto fugiat minus eveniet fuga quo praesentium deleniti. Debitis numquam libero temporibus rerum incidunt, esse qui cum repudiandae deleniti atque, quasi voluptate. Perspiciatis quibusdam voluptatum temporibus exercitationem totam accusantium fugit modi sapiente, asperiores quos eius necessitatibus natus possimus veniam maxime ipsam iure nostrum quod? Eos tempore at temporibus deleniti laudantium pariatur omnis veritatis in. Ducimus, distinctio?</p>
      <hr class="mb-4">
    </div>
  </div>
</section>

<section>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 mb-4">
        <h1 class="display-6 fw-bolder text-capitalize">Explore Various Destinations</h1>
      </div>

      <div class="col-6 col-md-4 mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img9.png') }}" alt="Pemandangan 1" class="tour-image">
            <div class="tour-title fs-5 fw-bold">Destinasi 1</div>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img10.png') }}" alt="Pemandangan 2" class="tour-image">
            <div class="tour-title fs-5 fw-bold">Destinasi 2</div>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img11.png') }}" alt="Pemandangan 3" class="tour-image">
            <div class="tour-title fs-5 fw-bold">Destinasi 3</div>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img12.png') }}" alt="Pemandangan 1" class="tour-image">
            <div class="tour-title fs-5 fw-bold">Destinasi 4</div>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img13.png') }}" alt="Pemandangan 2" class="tour-image">
            <div class="tour-title fs-5 fw-bold">Destinasi 5</div>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img14.png') }}" alt="Pemandangan 3" class="tour-image">
            <div class="tour-title fs-5 fw-bold">Destinasi 6</div>
          </div>
        </a>
      </div>

      <hr class="my-5">
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="col-12 mb-4">
      <h1 class="display-6 fw-bolder text-capitalize">Popular Destinations</h1>
    </div>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">

      <div class="col mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img15.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 1</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img16.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 2</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img17.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 3</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img18.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 4</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img19.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 5</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img20.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 6</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img21.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 7</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img22.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 8</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img23.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 9</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="#">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img24.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 10</div>
          </div>
        </a>
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