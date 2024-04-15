@extends('layouts.app')

@section('content')

<!-- Hero Image -->
<section id="hero-details">
  <div class="container">
    <div class="row text-white">
      <div class="col-10 ps-5 ps-md-0">
        <h1 class="display-5 fw-bolder text-uppercase">Tourist details regarding the destination you want to go</h1>
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
        <li class="breadcrumb-item"><a href="{{ route('destination') }}" class="text-decoration-none text-black">Tourist Destination</a></li>
        <li class="breadcrumb-item active" aria-current="page">Destination Details</li>
      </ol>
    </nav>

    <div>
      <h1 class="display-5 fw-bolder text-capitalize">This page contains details of the tourist destination you want to go</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae perferendis animi quisquam nostrum eaque suscipit exercitationem? Saepe nihil quaerat perferendis dolorem sequi. Perferendis, eum quam. Ducimus voluptas fugit reprehenderit totam eos nulla repudiandae, omnis, maxime sed ipsam perferendis placeat aliquid. Mollitia, optio. Ipsa illo quidem adipisci porro sapiente quam, est soluta officiis expedita pariatur in, perferendis ut magni numquam, accusantium iure! Maxime modi expedita obcaecati animi consequatur adipisci dignissimos. Magni nemo quis reprehenderit minima, fugiat at iste, sit exercitationem repudiandae sed nostrum amet neque illo, inventore sint quasi impedit doloribus pariatur rem maiores quos eius? Labore deleniti dicta suscipit, quasi natus possimus molestias, rem aliquid consequuntur fuga quidem odio. Consectetur nam assumenda nulla labore, iusto, id fugit ab, soluta laudantium sapiente alias ducimus architecto commodi recusandae velit quos optio repellat atque sunt dignissimos. Voluptatibus officia aspernatur laudantium officiis vel rerum et mollitia temporibus? Rerum nam esse quia dicta accusamus dignissimos?</p>
      <hr class="mb-5">
    </div>
  </div>
</section>

<!-- Frequently Visited Place Section -->
<section>
  <div class="container">
    <div class="col-12 mb-4">
      <h1 class="display-6 fw-bolder text-capitalize">Frequently visited places in this destination</h1>
    </div>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">

      <div class="col mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img15.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 1</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img16.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 2</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img17.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 3</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img18.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 4</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img19.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 5</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img20.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 6</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img21.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 7</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img22.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 8</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img23.png') }}" alt="Pemandangan 2" class="tour-image-popular">
            <div class="tour-title fs-5 fw-bold">Destinasi 9</div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <a href="{{ route('destination-details') }}">
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

<!-- Further Explanation Section -->
<section>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 mb-4">
        <h1 class="display-6 fw-bolder text-capitalize">Further explanation about this destination</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, similique. Doloribus consequuntur veritatis suscipit hic ut consectetur voluptatibus, in blanditiis deserunt molestiae quo, fugiat accusantium itaque optio repellendus? Nisi quia earum minus ut optio tempore, quisquam doloribus exercitationem rerum adipisci doloremque maxime illum. Sunt culpa perferendis ipsa aut rem, nulla quas quos neque ratione porro? Expedita fuga odit deserunt totam repellendus illum veritatis placeat deleniti ea. Eligendi ipsum suscipit iste amet maiores quia nulla quis?</p>
      </div>

      <div class="col-6 col-md-4 mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img9.png') }}" alt="Pemandangan 1" class="tour-image">
            <div class="tour-title fs-5 fw-bold">Destinasi 1</div>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img10.png') }}" alt="Pemandangan 2" class="tour-image">
            <div class="tour-title fs-5 fw-bold">Destinasi 2</div>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 mb-4">
        <a href="{{ route('destination-details') }}">
          <div class="tour-column">
            <img src="{{ asset('images/destination-images/destination-img11.png') }}" alt="Pemandangan 3" class="tour-image">
            <div class="tour-title fs-5 fw-bold">Destinasi 3</div>
          </div>
        </a>
      </div>

      <hr class="my-5">
    </div>
  </div>
</section>

<!-- Testimonial Section -->
<section id="testimonial">
  <div class="container">
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

    <hr class="my-5">
  </div>
</section>

<!-- Food & Merchandise Section -->
<section>
  <div class="container">
    <div class="col-12 mb-4">
      <h1 class="display-6 fw-bolder text-capitalize">Food and merchandise available</h1>
    </div>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/food-img/food-img1.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalFoodMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/food-img/food-img2.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalFoodMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/food-img/food-img3.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalFoodMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/merchandise-img/merchandise-img1.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalFoodMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/merchandise-img/merchandise-img2.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
            <h5 class="card-title fw-bold">Name of Food or Merchandise</h5>
            <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalFoodMerchandise">Show Details</a>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <!-- This Modal is only for dummy, if you want to use it for each element, you just copy it and then change a few things -->
      <div class="modal fade" id="ModalFoodMerchandise" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- More Information Section -->
<section>
  <div class="container">
    <div class="col-12 mb-4">
      <h1 class="display-6 fw-bolder text-capitalize">Some information about this destination</h1>
    </div>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/article-img/article-img1.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">14 Apr 2024</p>
            <h5 class="card-title fw-bold">Title of article or information</h5>
            <a href="#" class="btn btn-primary col-12">Read More</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/article-img/article-img2.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">14 Apr 2024</p>
            <h5 class="card-title fw-bold">Title of article or information</h5>
            <a href="#" class="btn btn-primary col-12">Read More</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/article-img/article-img3.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">14 Apr 2024</p>
            <h5 class="card-title fw-bold">Title of article or information</h5>
            <a href="#" class="btn btn-primary col-12">Read More</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/article-img/article-img4.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">14 Apr 2024</p>
            <h5 class="card-title fw-bold">Title of article or information</h5>
            <a href="#" class="btn btn-primary col-12">Read More</a>
          </div>
        </div>
      </div>

      <div class="col mb-4">
        <div class="info-card card">
          <img src="{{ asset('images/article-img/article-img5.png') }}" class="card-img-top" alt="..." class="info-card-img">
          <div class="card-body">
            <p class="text-muted mb-2" style="font-size: 10px;">14 Apr 2024</p>
            <h5 class="card-title fw-bold">Title of article or information</h5>
            <a href="#" class="btn btn-primary col-12">Read More</a>
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