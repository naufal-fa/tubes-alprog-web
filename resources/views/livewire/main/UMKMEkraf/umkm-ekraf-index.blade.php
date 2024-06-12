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

  <!-- Hero Image -->
  <section id="hero-umkm" class="hero-section d-flex align-items-center justify-content-center"></section>

  <!-- UMKM Breadcrumb -->
  <section id="breadcrumb-section" style="margin-top: 30px;">
    <div class="container mt-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-muted text-black fw-bold">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('umkm-ekraf') }}" class="text-decoration-none fw-bold" style="color: #fa971e;">UMKM dan Ekonomi Kreatif</a></li>
        </ol>
      </nav>
    </div>
  </section>
  
  <!-- Description Section -->
  <section>
    <div class="container mt-4">
      <div>
        <h1 class="display-5 fw-bolder text-capitalize">UMKM dan Ekonomi Kreatif</h1>
        <p>UMKM & Ekonomi Kreatif adalah fitur web UMKM dan Ekraf memainkan peran penting dalam mendukung bisnis lokal dan kreatif. Dengan memungkinkan pelanggan untuk memberikan ulasan dan penilaian, fitur ini membantu meningkatkan transparansi, membangun reputasi, dan menyediakan umpan balik yang berharga bagi pemilik usaha. Ini juga memberikan informasi yang bermanfaat bagi calon pelanggan, membantu mereka membuat keputusan yang lebih baik berdasarkan pengalaman dan pendapat orang lain.</p>
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
    
            <!-- Dropdown Price -->
            <!-- <div class="w-100 mb-3 mb-lg-0 me-lg-2">
              <strong>Sort Price</strong>
              <select class="form-select" aria-label="Dropdown Sort">
                <option selected>Select All</option>
                <option value="cheap">Sort Cheapest</option>
                <option value="expensive">Sort The Most Expensive</option>
              </select>
            </div> -->

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

            <!-- Dropdown Location -->
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
  
  <!-- UMKM Section -->
  <section id="">
    <div class="container mt-4">
      <div class="row">
        <div class="col-12">
          <h1 class="fw-bolder mb-4">Daftar Mitra UMKM</h1>
        </div>
      </div>
  
      <div class="row">
  
        <div class="col-12 col-md-6 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/umkm-ekraf-img/jajan-tradisional.png') }}" class="card-img-top umkm-ekraf-card-image" alt="...">
            <div class="card-body">
              <p class="col-3 py-1 text-center text-white fw-bold bg-success mb-2 rounded-2" style="font-size: 10px;">Snack & Jajanan</p>
              <h5 class="card-title fw-bold mb-2">Warung Rasa Nusantara</h5>
              <p class="card-text">“Warung Rasa Nusantara” adalah sebuah usaha mikro, kecil, dan menengah (UMKM) yang berfokus pada jualan jajanan tradisional.</p>
              <!-- <p class="card-text fw-bold fs-4">Rp 500.000</p> -->
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalUMKMEkraf1">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/umkm-ekraf-img/perajin-jerami.png') }}" class="card-img-top umkm-ekraf-card-image" alt="...">
            <div class="card-body">
              <p class="col-3 py-1 text-center text-white fw-bold bg-success mb-2 rounded-2" style="font-size: 10px;">Kerajinan Tangan</p>
              <h5 class="card-title fw-bold mb-2">Jerami Kreatif</h5>
              <p class="card-text">“Jerami Kreatif” adalah sebuah usaha mikro, kecil, dan menengah (UMKM) yang mengkhususkan diri dalam kerajinan tangan dari jerami.</p>
              <!-- <p class="card-text fw-bold fs-4">Rp 500.000</p> -->
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalUMKMEkraf2">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/umkm-ekraf-img/penjual-buah.png') }}" class="card-img-top umkm-ekraf-card-image" alt="...">
            <div class="card-body">
              <p class="col-3 py-1 text-center text-white fw-bold bg-success mb-2 rounded-2" style="font-size: 10px;">Buah-buahan</p>
              <h5 class="card-title fw-bold mb-2">Jeruk Peras Manis</h5>
              <p class="card-text">“Jeruk Peras Manis” adalah usaha mikro, kecil, dan menengah (UMKM) yang mengkhususkan diri dalam jeruk peras segar dan es jeruk peras.</p>
              <!-- <p class="card-text fw-bold fs-4">Rp 500.000</p> -->
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalUMKMEkraf3">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
          <div class="card recom-card" >
            <img src="{{ asset('images/umkm-ekraf-img/warung.png') }}" class="card-img-top umkm-ekraf-card-image" alt="...">
            <div class="card-body">
              <p class="col-3 py-1 text-center text-white fw-bold bg-success mb-2 rounded-2" style="font-size: 10px;">Kebutuhan Primer</p>
              <h5 class="card-title fw-bold mb-2">Warung Barokah Mega</h5>
              <p class="card-text">"Warung Barokah Megah" adalah usaha mikro, kecil, dan menengah (UMKM) yang menawarkan produk kebutuhan pokok (sembako).</p>
              <!-- <p class="card-text fw-bold fs-4">Rp 500.000</p> -->
              <a href="#" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#ModalUMKMEkraf4">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
  
        <!-- Modal UMKM EKRAF -->
        <!-- This Modal is only for dummy, if you want to use it for each element, you just copy it and then change a few things -->
        <div class="modal fade" id="ModalUMKMEkraf1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Mitra UMKM dan Ekonomi Kreatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="{{ asset('images/umkm-ekraf-img/jajan-tradisional.png') }}" class="card-img-top" alt="..." class="info-card-img">
  
                <h5 class="card-title fw-bolder pt-4">Warung Rasa Nusantara</h5>
                <p class="col-3 py-1 text-center text-white fw-bold bg-success mb-2 rounded-2" style="font-size: 10px;">Snack & Jajanan</p>

                <div>
                  <div>
                    <p class="mt-0">“Warung Rasa Nusantara” adalah sebuah usaha mikro, kecil, dan menengah (UMKM) yang berfokus pada jualan jajanan tradisional. Warung ini menawarkan berbagai macam makanan ringan khas Indonesia yang lezat dan menggugah selera. Dari kue-kue basah seperti onde-onde, klepon, dan lemper hingga camilan gurih seperti keripik tempe, kerupuk, dan rempeyek, semuanya tersedia di Warung Rasa Nusantara.</p>

                    <p>Keistimewaan dari Warung Rasa Nusantara adalah penggunaan bahan-bahan berkualitas tinggi dan resep turun-temurun yang memastikan cita rasa autentik. Setiap produk dijamin segar dan dibuat dengan penuh cinta oleh pemiliknya, Ibu Siti, yang telah berpengalaman puluhan tahun dalam dunia kuliner.</p>
                  </div>
                  <p><span class="fw-bold">Business Location : </span>FPF6+6P5, Lumpur Lapindo, Renokenongo, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274</p>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-success">Contact Whatsapp</a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ModalUMKMEkraf2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Mitra UMKM dan Ekonomi Kreatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="{{ asset('images/umkm-ekraf-img/perajin-jerami.png') }}" class="card-img-top" alt="..." class="info-card-img">
  
                <h5 class="card-title fw-bolder pt-4">Jerami Kreatif</h5>
                <p class="col-3 py-1 text-center text-white fw-bold bg-success mb-2 rounded-2" style="font-size: 10px;">Kerajinan Tangan</p>

                <div>
                  <div>
                    <p class="mt-0">“Jerami Kreatif” adalah sebuah usaha mikro, kecil, dan menengah (UMKM) yang mengkhususkan diri dalam kerajinan tangan dari jerami. Di bawah kepemimpinan Bapak Surya, Jerami Kreatif telah menghasilkan berbagai produk unik dan indah yang menggabungkan keahlian tradisional dengan sentuhan modern.</p>

                    <p>Produk-produk Jerami Kreatif meliputi:</p>
                    <ul>
                      <li>Topi Jerami: Topi jerami yang nyaman dan stylish untuk melindungi Anda dari sinar matahari.</li>
                      <li>Anyaman Dinding: Dekorasi dinding yang terbuat dari jerami dengan motif alami dan elegan.</li>
                      <li>Keranjang: Keranjang multifungsi untuk menyimpan barang-barang sehari-hari.</li>
                      <li>Gantungan Kunci: Gantungan kunci lucu dan ramah lingkungan.</li>
                      <li>Aksesoris: Gelang, kalung, dan anting-anting yang terbuat dari jerami.</li>
                    </ul>

                    <p>Jerami Kreatif berkomitmen untuk menggunakan bahan berkualitas tinggi dan mendukung keberlanjutan lingkungan. Setiap produk dihasilkan dengan cinta dan ketelitian oleh para pengrajin lokal yang memiliki keahlian dalam mengolah jerami.</p>
                  </div>
                  <p><span class="fw-bold">Business Location : </span>FPF6+6P5, Lumpur Lapindo, Renokenongo, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274</p>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-success">Contact Whatsapp</a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ModalUMKMEkraf3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Mitra UMKM dan Ekonomi Kreatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="{{ asset('images/umkm-ekraf-img/penjual-buah.png') }}" class="card-img-top" alt="..." class="info-card-img">
  
                <h5 class="card-title fw-bolder pt-4">Jeruk Peras Manis</h5>
                <p class="col-3 py-1 text-center text-white fw-bold bg-success mb-2 rounded-2" style="font-size: 10px;">Buah-buahan</p>

                <div>
                  <div>
                    <p class="mt-0">“Jeruk Peras Manis” adalah sebuah usaha mikro, kecil, dan menengah (UMKM) yang mengkhususkan diri dalam jeruk peras segar dan es jeruk peras. Usaha ini menyediakan Jeruk peras yang selalu segar, manis, dan berkualitas tinggi. Cocok untuk dinikmati langsung atau diolah menjadi jus. Jeruk Peras Manis berkomitmen untuk memberikan produk berkualitas tinggi dan pelayanan yang ramah.</p>
                  </div>
                  <p><span class="fw-bold">Business Location : </span>FPF6+6P5, Lumpur Lapindo, Renokenongo, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274</p>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-success">Contact Whatsapp</a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ModalUMKMEkraf4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Mitra UMKM dan Ekonomi Kreatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="{{ asset('images/umkm-ekraf-img/warung.png') }}" class="card-img-top" alt="..." class="info-card-img">
  
                <h5 class="card-title fw-bolder pt-4">Warung Barokah Mega</h5>
                <p class="col-3 py-1 text-center text-white fw-bold bg-success mb-2 rounded-2" style="font-size: 10px;">Kebutuhan Primer</p>

                <div>
                  <div>
                    <p class="mt-0">“Warung Barokah Mega” adalah sebuah usaha mikro, kecil, dan menengah (UMKM) yang menjadi tujuan utama warga sekitar. Warung ini menawarkan berbagai produk kebutuhan pokok (sembako) seperti beras, gula, minyak goreng, dan telur. Selain itu, Warung Barokah Mega juga memiliki rak yang dipenuhi dengan camilan dan makanan ringan yang menggugah selera.</p>

                    <p>Keistimewaan dari Warung Barokah Mega adalah pelayanan yang ramah, harga yang terjangkau, dan kualitas produk yang terjamin. Pelanggan dapat membeli semua kebutuhan sehari-hari dalam satu tempat, mulai dari bahan makanan hingga camilan favorit. Warung ini juga sering mengadakan promo dan diskon khusus untuk pelanggan setia.</p>
                  </div>
                  <p><span class="fw-bold">Business Location : </span>FPF6+6P5, Lumpur Lapindo, Renokenongo, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274</p>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-success">Contact Whatsapp</a>
              </div>
            </div>
          </div>
        </div>
  
      </div>
      <hr class="mb-5">
    </div>
  </section>
  
  <!-- Join Us Section -->
  <section class="mx-3 mb-5">
    <div id="join-us" class="container p-5">
      <div class="row">
        <h2 class="text-white text-center fw-bold mb-4">Mau Join Menjadi Mitra Kami? Klik Gabung Bersama Kami</h2>
        <div class="col-10 mx-auto">
          <button class="btn btn-primary col-12">Mulai Bergabung Bersama Kami</button>
        </div>
      </div>
    </div>
  </section>

</section>