@extends('layouts.app')

@section('content')

<!-- Hero Image -->
<section id="hero-food-merchandise">
  <div class="container">
    <div class="row text-white">
      <div class="col-10 ps-5 ps-md-0">
        <h1 class="display-5 fw-bolder text-uppercase">Culinary and merchandise available at tourist destinations</h1>
        <p class="opacity-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, reiciendis consectetur quas possimus debitis suscipit sapiente praesentium voluptatem tempore impedit, temporibus fugiat nemo velit magnam omnis quod dignissimos voluptas esse nihil! Corporis fuga enim inventore!</p>
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
        <li class="breadcrumb-item active" aria-current="page">Culinary & Merchandise</li>
      </ol>
    </nav>

    <div>
      <h1 class="display-5 fw-bolder text-capitalize">Various culinary businesses and merchandise available at your tourist destination</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus illo cum expedita repudiandae molestiae labore natus doloribus id quasi consectetur, aut eaque. Maiores iste quo, neque explicabo consequuntur qui doloribus ab minus blanditiis mollitia cumque quos. Perspiciatis totam sit alias eius aperiam temporibus sequi ut similique corporis harum ipsum, vel numquam ullam aliquid nam! Est, officiis. Eligendi dicta nobis maiores.</p>
      <hr class="mb-5">
    </div>
  </div>
</section>

<!-- Culinary Section -->
<section id="recommendation">
  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <h1 class="fw-bolder mb-4">Culinary Section</h1>
      </div>
    </div>

    <div class="row">

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img1.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img2.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img3.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img4.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img5.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img6.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img7.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img8.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img9.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img10.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img11.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img12.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img13.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img14.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img15.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img16.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img17.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/food-img/food-img18.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalCulinary">Show Details</a>
          </div>
        </div>
      </div>

      <!-- Modal Culinary -->
      <!-- This Modal is only for dummy, if you want to use it for each element, you just copy it and then change a few things -->
      <div class="modal fade" id="ModalCulinary" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title fw-bold" id="exampleModalLabel">Business Name</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="{{ asset('images/food-img/food-img1.png') }}" class="card-img-top" alt="..." class="info-card-img">

              <h5 class="card-title fw-bolder pt-4">Name of Food or Merchandise</h5>
              <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis repellat veritatis impedit dicta iste exercitationem totam ex nostrum rerum. Minima expedita laudantium esse explicabo voluptate.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <hr class="mb-5">
  </div>
</section>

<!-- Merchandise Section -->
<section id="recommendation">
  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <h1 class="fw-bolder mb-4">Merchandise Section</h1>
      </div>
    </div>

    <div class="row">

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/merchandise-img/merchandise-img1.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/merchandise-img/merchandise-img2.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/merchandise-img/merchandise-img3.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/merchandise-img/merchandise-img4.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/merchandise-img/merchandise-img5.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/merchandise-img/merchandise-img6.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/merchandise-img/merchandise-img7.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/merchandise-img/merchandise-img8.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card recom-card" >
          <img src="{{ asset('images/merchandise-img/merchandise-img9.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <!-- Modal Merchandise -->
      <!-- This Modal is only for dummy, if you want to use it for each element, you just copy it and then change a few things -->
      <div class="modal fade" id="ModalMerchandise" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title fw-bold" id="exampleModalLabel">Business Name</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="{{ asset('images/merchandise-img/merchandise-img1.png') }}" class="card-img-top" alt="..." class="info-card-img">

              <h5 class="card-title fw-bolder pt-4">Name of Food or Merchandise</h5>
              <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis repellat veritatis impedit dicta iste exercitationem totam ex nostrum rerum. Minima expedita laudantium esse explicabo voluptate.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
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