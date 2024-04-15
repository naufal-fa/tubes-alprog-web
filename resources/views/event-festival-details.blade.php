@extends('layouts.app')

@section('content')

<!-- Hero Image -->
<section id="hero-event-details">
  <div class="container">
    <div class="row text-white">
      <div class="col-10 ps-5 ps-md-0">
        <h1 class="display-5 fw-bolder text-uppercase">Detailed information about events and festivals</h1>
        <p class="opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quibusdam blanditiis sed, vel fugit nemo pariatur totam tenetur praesentium adipisci eveniet fuga esse error necessitatibus.</p>
        <div class="d-flex gap-3 mt-2">
          <a href="#" class="btn btn-primary">Learn More</a>
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
        <li class="breadcrumb-item"><a href="{{ route('event-festival') }}" class="text-decoration-none text-black">Event & Festival</a></li>
        <li class="breadcrumb-item active" aria-current="page">Event & Festival Details</li>
      </ol>
    </nav>

    <div>
      <h1 class="display-5 fw-bolder text-capitalize">Name of Event or Festival</h1>
      <hr class="mb-5">
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="{{ asset('images/event-festival-img/event-festival-img1.png') }}" class="w-100 rounded" alt="...">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-center">
        <div class="circle-container me-3">
          <img src="{{ asset('icon/icon-point.svg') }}" alt="" class="dropdown-icon">
        </div>
        <div>
          <h5 class="fw-bold mb-0">Event Location</h5>
          <p class="mb-0" style="font-size: 13px;">Address EVT 3666, YEA</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-center">
        <div class="circle-container me-3">
          <img src="{{ asset('icon/icon-calendar.svg') }}" alt="" class="dropdown-icon">
        </div>
        <div>
          <h5 class="fw-bold mb-0">Event Start From</h5>
          <p class="mb-0" style="font-size: 13px;">Wednesday, 24 April 2024 | 12:00 WIB</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-center">
        <div class="circle-container me-3">
          <img src="{{ asset('icon/icon-calendar.svg') }}" alt="" class="dropdown-icon">
        </div>
        <div>
          <h5 class="fw-bold mb-0">Event Date To</h5>
          <p class="mb-0" style="font-size: 13px;">Saturday, 27 April 2024 | 15:00 WIB</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Further Explanation Section -->
<section>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 mb-4">
        <h1 class="display-6 fw-bolder text-capitalize mb-3">Description of the event</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, similique. Doloribus consequuntur veritatis suscipit hic ut consectetur voluptatibus, in blanditiis deserunt molestiae quo, fugiat accusantium itaque optio repellendus? Nisi quia earum minus ut optio tempore, quisquam doloribus exercitationem rerum adipisci doloremque maxime illum. Sunt culpa perferendis ipsa aut rem, nulla quas quos neque ratione porro? Expedita fuga odit deserunt totam repellendus illum veritatis placeat deleniti ea. Eligendi ipsum suscipit iste amet maiores quia nulla quis?<br><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic dolor nisi accusantium qui repellat recusandae minima corrupti quis? Voluptate enim maiores qui voluptatum debitis quam quasi minus fugiat harum ipsum, quis earum eaque explicabo eius eum incidunt? Officiis laudantium porro sunt expedita nulla, deleniti ipsam id? Consequatur maxime soluta temporibus quas voluptas cupiditate deleniti incidunt pariatur delectus! Error dolor voluptates ipsum reiciendis enim, placeat possimus deserunt, earum at deleniti nulla voluptatem itaque corporis aliquid, id quidem optio neque? Qui, suscipit provident repellat accusantium dignissimos dolores ad. Veniam, ipsum. Aliquid autem voluptatibus temporibus reiciendis iusto dolor, dolorem perferendis! Iure dolores alias eligendi eos reprehenderit totam, fugiat beatae dicta fuga dolorum aperiam repudiandae quos, eveniet provident, molestias placeat voluptatibus sunt! Impedit, maiores?<br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores natus velit dolorem! Impedit omnis, eaque reprehenderit pariatur adipisci ipsum, animi nisi recusandae fugit eligendi et expedita dolor itaque eum? Temporibus ipsam ut iure non molestiae quos sapiente debitis praesentium recusandae nobis obcaecati natus nesciunt aperiam, sint numquam expedita a odit adipisci enim, eaque iusto cumque omnis! Earum sit quibusdam labore maxime, similique sapiente incidunt laudantium expedita aut officia voluptates, ea error libero alias velit autem minus impedit distinctio molestias totam tenetur illo, est reprehenderit. Nisi quas tenetur officiis quod nemo.</p>
      </div>
      <hr class="my-5">
    </div>
  </div>
</section>

<!-- Event & Festival Section -->
<section>
  <div class="container">
    <div class="col-12 mb-4">
      <h1 class="display-6 fw-bolder text-capitalize">Upcoming events and festivals</h1>
    </div>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/event-festival-img/event-festival-img1.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">14 Apr 2024 | 12:00 WIB</p>
            <h5 class="card-title fw-bold">Name of Event or Festival</h5>
            <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/event-festival-img/event-festival-img2.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">14 Apr 2024 | 12:00 WIB</p>
            <h5 class="card-title fw-bold">Name of Event or Festival</h5>
            <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/event-festival-img/event-festival-img3.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">14 Apr 2024 | 12:00 WIB</p>
            <h5 class="card-title fw-bold">Name of Event or Festival</h5>
            <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/event-festival-img/event-festival-img4.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">14 Apr 2024 | 12:00 WIB</p>
            <h5 class="card-title fw-bold">Name of Event or Festival</h5>
            <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/event-festival-img/event-festival-img5.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">14 Apr 2024 | 12:00 WIB</p>
            <h5 class="card-title fw-bold">Name of Event or Festival</h5>
            <a href="{{ route('event-festival-details') }}" class="btn btn-primary col-12">Show Details</a>
          </div>
        </div>
      </div>
      
    </div>
    <hr class="mb-5">
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