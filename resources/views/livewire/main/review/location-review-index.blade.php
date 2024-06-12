<section>

  <!-- Review Breadcrumb -->
  <section id="breadcrumb-section">
    <div class="container mt-4">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-muted text-black fw-bold">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('location-review') }}" class="text-decoration-none fw-bold" style="color: #fa971e;">Location Review</a></li>
        </ol>
      </nav>
    </div>
  </section>

  <div class="container mb-4">
    <h1 class="display-6 fw-bolder">Review Lokasi Lumpur Lapindo</h1>
  </div>

  <!-- Location Review Image Section -->
  <section id="location-review-img">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="{{ asset('images/review-img/review-lokasi-img.png') }}" class="w-100 radius-img" alt="...">
        </div>
      </div>
    </div>
  </section>

  <!-- Location Review Section -->
  <section>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12 mb-4">
          <p>"Review Lokasi" pada navigasi web Lap-X dirancang untuk membantu pengunjung mendapatkan informasi mendetail mengenai lokasi-lokasi yang terkait dengan Lumpur Lapindo. Fitur ini tidak hanya bermanfaat bagi pengunjung, tetapi juga bagi pengelola tempat wisata, karena mereka dapat menerima masukan langsung dari pengunjung dan memperbaiki layanan serta fasilitas yang ada.</p>

          <p>Interaksi ini dapat meningkatkan kualitas pengalaman wisata secara keseluruhan dan memastikan bahwa tempat-tempat yang terkait dengan Lumpur Lapindo terus berkembang sesuai dengan kebutuhan dan harapan pengunjung. Dengan demikian, fitur "Review Tempat" pada LapX menjadi alat penting untuk transparansi, peningkatan kualitas, dan peningkatan keterlibatan komunitas dalam memahami dan mengelola kawasan wisata yang unik ini.</p>
        </div>

        <div class="col-md-6 mb-4">
          <h3 class="fw-bold mb-4">1. Semburan Lumpur</h3>
          <div class="card card-review mb-4">
            <div class="review-image">
              <img src="{{ asset('images/review-img/semburan-lumpur.png') }}" class="card-img-top w-100 rounded-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text">Pengunjung dapat melihat langsung semburan lumpur yang masih aktif. Fenomena alam ini menawarkan pemandangan yang jarang ditemui di tempat lain.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <h3 class="fw-bold mb-4">2. Monumen dan Patung</h3>
          <div class="card card-review mb-4">
            <div class="review-image">
              <img src="{{ asset('images/review-img/monumen-dan-patung.png') }}" class="card-img-top w-100 rounded-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text">Terdapat beberapa monumen dan patung yang dibuat sebagai pengingat dan simbol dari bencana ini, seperti patung-patung yang menggambarkan orang-orang terperangkap dalam lumpur, yang menggambarkan penderitaan dan kehilangan akibat bencana.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <h3 class="fw-bold mb-4">3. Tanggul-Tanggul Besar</h3>
          <div class="card card-review mb-4">
            <div class="review-image">
              <img src="{{ asset('images/review-img/tanggul-tanggul-besar.png') }}" class="card-img-top w-100 rounded-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text">Tanggul-tanggul yang dibangun untuk menahan aliran lumpur kini menjadi pemandangan menarik tersendiri. Dari atas tanggul, pengunjung bisa melihat luasnya area yang tertutup lumpur.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <h3 class="fw-bold mb-4">4. Museum Mini</h3>
          <div class="card card-review mb-4">
            <div class="review-image">
              <img src="{{ asset('images/review-img/museum-mini.png') }}" class="card-img-top w-100 rounded-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text">Beberapa tempat di sekitar kawasan lumpur juga menyediakan museum mini yang menampilkan informasi tentang sejarah semburan lumpur, penyebab, dampak, dan upaya penanganan yang telah dilakukan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Youtube Carousel Section -->
  <section id="yt-carousel">
    <div class="container mb-5">
      <h1 class="fw-bolder mb-4">Reviewer Wisata Lumpur Lapindo</h1>
      <div id="carousel-youtube" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active slide-yt">
            <iframe src="https://www.youtube.com/embed/jUVAQndjkVM?si=TdYE-59tt4Hjk9a4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="carousel-item slide-yt">
            <iframe src="https://www.youtube.com/embed/3WeL0B_J5Fc?si=DUEo6W79MGXTMBZO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="carousel-item slide-yt">
            <iframe src="https://www.youtube.com/embed/D83JERHeofU?si=HBx5dY2EL8eeb1QU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="carousel-item slide-yt">
            <iframe src="https://www.youtube.com/embed/12cQaWxLPqA?si=Ex0IL2Kh7ARIe6Nh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-youtube" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-youtube" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <hr class="my-5">
    </div>
  </section>
  
</section>