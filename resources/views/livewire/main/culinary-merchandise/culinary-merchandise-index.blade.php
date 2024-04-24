<section>
  {{-- <!-- Hero Image -->
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
  </section> --}}
  
  <!-- Description Section -->
  <section>
    <div class="container mt-4">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-black">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Merchandise</li>
        </ol>
      </nav>
  
      <div>
        <h1 class="display-5 fw-bolder text-capitalize">Various cool and high quality merchandise available at your tourist destination</h1>
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
              <strong>Location</strong>
              <select class="form-select" aria-label="Dropdown Month">
                <option selected>Select All</option>
                <option value="1">Location 1</option>
                <option value="2">Location 2</option>
                <option value="3">Location 3</option>
                <option value="4">Location 4</option>
                <option value="5">Location 5</option>
                <option value="6">Location 6</option>
                <option value="7">Location 7</option>
                <option value="8">Location 8</option>
                <option value="9">Location 9</option>
                <option value="10">Location 10</option>
              </select>
            </div>

            <!-- Dropdown Price -->
            <div class="w-100 mb-3 mb-lg-0 me-lg-2">
              <strong>Sort Price</strong>
              <select class="form-select" aria-label="Dropdown Sort">
                <option selected>Select All</option>
                <option value="cheap">Sort Cheapest</option>
                <option value="expensive">Sort The Most Expensive</option>
              </select>
            </div>

            <!-- Dropdown Category -->
            <div class="w-100 mb-3 mb-lg-0 me-lg-2">
              <strong>Category</strong>
              <select class="form-select" aria-label="Dropdown Category">
                <option selected>All Category</option>
                <option value="music">Category 1</option>
                <option value="culinary">Category 2</option>
                <option value="culture">Category 3</option>
                <option value="art">Category 4</option>
                <option value="sport">Category 5</option>
                <option value="carnaval">Category 6</option>
              </select>
            </div>

            <!-- Search Filter -->
            <div class="w-100 mb-3 mb-lg-0 me-lg-2">
              <small class="text-nowrap fw-bold">Search Name / Category</small>
              <input type="text" class="form-control" placeholder="Input Name / Category">
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
  
  <!-- Merchandise Section -->
  <section id="recommendation">
    <div class="container mt-4">
      <div class="row">
        <div class="col-12">
          <h1 class="fw-bolder mb-4">Merchandise Section</h1>
        </div>
      </div>
  
      <div class="row">
  
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/merchandise-img/merchandise-img11.png') }}" class="card-img-top merchandise-card-img" alt="...">
            <div class="card-body">
              <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
              <h5 class="card-title">Name of Merchandise Product</h5>
              <p class="card-text fw-bold fs-4">Rp 500.000</p>
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Product Details</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/merchandise-img/merchandise-img12.png') }}" class="card-img-top merchandise-card-img" alt="...">
            <div class="card-body">
              <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
              <h5 class="card-title">Name of Merchandise Product</h5>
              <p class="card-text fw-bold fs-4">Rp 500.000</p>
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Product Details</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/merchandise-img/merchandise-img13.png') }}" class="card-img-top merchandise-card-img" alt="...">
            <div class="card-body">
              <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
              <h5 class="card-title">Name of Merchandise Product</h5>
              <p class="card-text fw-bold fs-4">Rp 500.000</p>
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Product Details</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/merchandise-img/merchandise-img14.png') }}" class="card-img-top merchandise-card-img" alt="...">
            <div class="card-body">
              <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
              <h5 class="card-title">Name of Merchandise Product</h5>
              <p class="card-text fw-bold fs-4">Rp 500.000</p>
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Product Details</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/merchandise-img/merchandise-img15.png') }}" class="card-img-top merchandise-card-img" alt="...">
            <div class="card-body">
              <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
              <h5 class="card-title">Name of Merchandise Product</h5>
              <p class="card-text fw-bold fs-4">Rp 500.000</p>
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Product Details</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/merchandise-img/merchandise-img16.png') }}" class="card-img-top merchandise-card-img" alt="...">
            <div class="card-body">
              <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
              <h5 class="card-title">Name of Merchandise Product</h5>
              <p class="card-text fw-bold fs-4">Rp 500.000</p>
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Product Details</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/merchandise-img/merchandise-img17.png') }}" class="card-img-top merchandise-card-img" alt="...">
            <div class="card-body">
              <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
              <h5 class="card-title">Name of Merchandise Product</h5>
              <p class="card-text fw-bold fs-4">Rp 500.000</p>
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Product Details</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/merchandise-img/merchandise-img18.png') }}" class="card-img-top merchandise-card-img" alt="...">
            <div class="card-body">
              <p class="text-muted mb-2" style="font-size: 10px;">Business Name</p>
              <h5 class="card-title">Name of Merchandise Product</h5>
              <p class="card-text fw-bold fs-4">Rp 500.000</p>
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalMerchandise">Product Details</a>
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
                <img src="{{ asset('images/merchandise-img/merchandise-img11.png') }}" class="card-img-top" alt="..." class="info-card-img">
  
                <h5 class="card-title fw-bolder pt-4">Name of Merchandise Product</h5>
                <p class="text-muted mb-2" style="font-size: 10px;">Category Product : Category 1</p>
                <div>
                  <div>
                    <p class="py-2 mb-0 fw-bold">Product Description</p>
                    <p class="mt-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, aut neque aliquid nostrum, exercitationem repudiandae doloribus in eaque suscipit doloremque placeat sequi, molestias ex eligendi recusandae nesciunt dolorem ad perspiciatis nisi omnis. Dolorem ipsam aliquid quasi! Minima sit modi in officia possimus aut facilis optio aliquam porro. Obcaecati, culpa ipsum?</p>
                  </div>
                  <p><span class="fw-bold">Business Location : </span>Address SBY 2333, ID</p>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-secondary">Visit The Website</a>
                <a href="#" class="btn btn-success">Contact Via Whatsapp</a>
              </div>
            </div>
          </div>
        </div>
  
      </div>
      <hr class="mb-5">
    </div>
  </section>
</section>