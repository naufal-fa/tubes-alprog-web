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

  <!-- Hero Image -->
  <section id="hero-home" class="hero-section d-flex align-items-center justify-content-center">
    <div class="container">
      <div class="row text-white">
        <div class="col-10 ps-md-0 text-center text-md-start mx-auto m-lg-0">
          <h1 class="display-5 fw-bolder text-uppercase">LAP-X PUSAT INFORMASI BENCANA LUMPUR LAPINDO</h1>
          <p class="opacity-75">LapX adalah sebuah situs web yang dikembangkan sebagai pusat informasi mengenai bencana Lumpur Lapindo di Sidoarjo, Jawa Timur. <span class="d-none d-md-inline">Tujuan utama dari LapX adalah untuk menyediakan informasi yang komprehensif, akurat, dan terkini tentang semua aspek terkait Lumpur Lapindo, termasuk sejarah, dampak, upaya penanganan, dan perkembangan terbaru.</span></p>
          <div class="d-none d-md-flex mt-2">
            <a href="#" class="btn btn-primary me-3">Learn More</a>
            <a href="#" class="btn btn-outline-light"><p class="d-inline">Watch Video</p></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Weather Section -->
  <section id="weather-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-12 col-md-4 mb-6">
          <div class="weather-card">
            <div class="circle-icon position-relative mx-auto">
              <a href="#" title="Temperature Sensor"><img src="{{ asset('logo/Temperature_Sensor.png') }}" alt="" width="70" height="70" class="position-absolute top-50 start-50 translate-middle"></a>
            </div>
            <h3 class="fw-bold mt-4 text-center">Kondisi Temperature - Sensor</h3> 
            <h1 class="mt-3 text-center">{{ $sensors->value1 }} °C</h1>
          </div>
        </div>

        <div class="col-12 col-md-4 mb-6">
          <div class="weather-card">
            <div class="circle-icon position-relative mx-auto">
              <a href="#" title="Kadar CO"><img src="{{ asset('logo/Kadar_CO.png') }}" alt="" width="70" height="70" class="position-absolute top-50 start-50 translate-middle"></a>
            </div>
            <h3 class="fw-bold mt-4 text-center">Kadar CO</h3> 
            <h1 class="mt-3 text-center">CO: {{ $sensors->value2 }}</h1>
          </div>
        </div>

        <div class="col-12 col-md-4 mb-6">
          <div class="weather-card">
            <div class="circle-icon position-relative mx-auto">
              <a href="#" title="Logo BMKG"><img src="{{ asset('logo/Logo_BMKG.png') }}" alt="" width="60" height="70" class="position-absolute top-50 start-50 translate-middle"></a>
            </div>
            <h3 class="fw-bold mt-4 text-center">Kondisi Temperature - BMKG</h3>
            <h4 class="mt-3 text-center" id="weatherBMKG">Cuaca: </h4>
            <h1 class="mt-3 text-center" id="temperatureBMKG"></h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Lapindo Explanation Image Section -->
  <section id="lapindo-explanation-img">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="{{ asset('images/home-img/lapindo-explanation-img.png') }}" class="w-100 radius-img" alt="...">
        </div>
      </div>
    </div>
  </section>

  <!-- Lapindo Explanation Section -->
  <section>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12 mb-4">
          <h1 class="display-6 fw-bolder text-capitalize mb-3">Deskripsi Lumpur Lapindo</h1>

          <p>Apa itu Lumpur Lapindo? Teman teman pasti banyak yang tidak mengetahui lumpur Lapindo, wisata ini ada setelah terjadinya kesalahan pengeboran di salah satu proyek yang ada di sidoarjo. Lumpur panas di Sidoarjo atau lebih dikenal dengan Lumpur Lapindo, terjadi pada tanggal 29 Mei 2006 yang lokasinya di area pengeboran PT Lapindo Brantas, Dusun Balongnongo. Terdapat dua desa yang terkena dampak paling besar yaitu Desa Renekenongo dan Desa Jatirejo, Kec Porong, Kab Sidoarjo, Jawa Timur, Indonesia.</p>

          <p>Hal ini terjadi karena adanya aktivitas pengeboran, dan karena kesalahan aktivitas pengeboran itu keluarlah lumpur panas yang per hari nya mengeluarkan lumpur sekitar 100.000 meter kubik. Lokasi semburan lumpur ini merupakan kawasan yang dekat dengan pemukiman warga dan dulu di sekitar lumpur tersebut termasuk salah satu area industri besar yang ada di Jawa Timur.</p>

          <p>Tidak jauh dari lokasi Lumpur Lapindo terdapat akses jalan tol arah Surabaya-Malang, jalan raya Surabaya-Sidoarjo-Malang dan jalur kereta api rute Surabaya-Malang. Lalu agar lumpur tidak meluas dan menyebar kemana-mana, dibagun sebuah tanggul mengelilingi lokasi keluarnya lumpur panas dan berjalannya waktu tanggul ini pun semakin di perlebar, jadinya seperti tembok besar yang mengelilingi kawasan lumpur Lapindo. Dan sekarang di area lumpur Lapindo sedang di bangun infrastruktur seperti bendungan tepatnya di seberang dari Lumpur Lapindo, pengerjaan pun masih berjalan. Lalu yang membuat penasaran banyak wisatawan ke wisata ini, yaitu tingginya tanggul atau tembok yang mengelilingi lumpur Lapindo menjadi daya tarik bagi wisatawan yang melintas di Sidoarjo karena posisinya yang tertutup, tinggi, dan luas.</p>

        </div>
        <hr class="mb-5">
      </div>
    </div>
  </section>

  <!-- Galery Carousel Section -->
  <section id="galery">
    <div class="container mb-5">
      <h1 class="fw-bolder mb-4">Galery of Lapindo</h1>
      <div id="carousel-galery" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/home-img/carousel-galery/galery-slide-1.png') }}" class="d-block w-100 radius-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/home-img/carousel-galery/galery-slide-2.png') }}" class="d-block w-100 radius-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/home-img/carousel-galery/galery-slide-3.png') }}" class="d-block w-100 radius-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/home-img/carousel-galery/galery-slide-4.png') }}" class="d-block w-100 radius-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/home-img/carousel-galery/galery-slide-5.png') }}" class="d-block w-100 radius-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/home-img/carousel-galery/galery-slide-6.png') }}" class="d-block w-100 radius-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/home-img/carousel-galery/galery-slide-7.png') }}" class="d-block w-100 radius-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/home-img/carousel-galery/galery-slide-8.png') }}" class="d-block w-100 radius-img" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-galery" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-galery" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <hr class="my-5">
    </div>
  </section>

  <!-- Visitor Testimonial Section -->
  <section id="testimoni">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex align-items-center">
          <h1 class="fw-bolder">Testimoni Visitor Lumpur Lapindo</h1>
        </div>

        <div class="col-lg-6">
          <div id="testimonialCarousel" class="carousel slide shadow radius-box" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active p-4">
                <div class="d-flex justify-content-center">
                  <div class="">
                    <div class="d-flex justify-content-between mb-3">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('logo/visitor-img.png') }}" alt="Visitor Image 1" width="35" height="35" class="rounded-circle me-3">
                        <div>
                          <p class="fw-bold mb-0">Abimanyu Widodo</p>
                          <p class="fw-normal text-muted mb-0">Juni 2019</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <div>
                          <p class="star-active mb-0">&#9733;<span class="star-disabled">&#9733;&#9733;&#9733;&#9733;</span></p>
                        </div>
                      </div>
                    </div>
                    <p class="mb-0">Kawasan Lumpur Lapindo terletak di Kecamatan Porong Sidoarjo, kawasan yang dulunya perkampungan penduduk dan kawasan industri, ludes ditimbun lumpur PT. Lapindo akibat salah prosedur saat pengeboran. Saat ini kawasan lapindo dijadikan obyek wisata dadakan, bagi wisatawan wisatawan dari luar kota yang ingin melihat kawasan lumpur banyak berdatangan ke kawasan ini. Cuaca panas dan tanah gersang sesekali muncul letupan gas dari bekas semburan adalah pemandangan yang dapat dinikmati... :D</p>
                  </div>
                </div>
              </div>

              <div class="carousel-item p-4">
                <div class="d-flex justify-content-center">
                  <div class="">
                    <div class="d-flex justify-content-between mb-3">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('logo/visitor-img.png') }}" alt="Visitor Image 2" width="35" height="35" class="rounded-circle me-3">
                        <div>
                          <p class="fw-bold mb-0">Ummiaiz</p>
                          <p class="fw-normal text-muted mb-0">Maret 2019</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <div>
                          <p class="star-active mb-0">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                        </div>
                      </div>
                    </div>
                    <p class="mb-0">Kejadian lumpur ini bukan bencana alam tapi karena ulah manusia, itulah yang dikatakan oleh seorang bapak yang merupakan salah seorang mangsa kejadian ini yang berada di sini saat kami mampir. melawat tempat ini sesungguhnya akan membuat kita lebih berfikir.</p>
                  </div>
                </div>
              </div>

              <div class="carousel-item p-4">
                <div class="d-flex justify-content-center">
                  <div class="">
                    <div class="d-flex justify-content-between mb-3">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('logo/visitor-img.png') }}" alt="Visitor Image 3" width="35" height="35" class="rounded-circle me-3">
                        <div>
                          <p class="fw-bold mb-0">Riza</p>
                          <p class="fw-normal text-muted mb-0">Januari 2018</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <div>
                          <p class="star-active mb-0">&#9733;&#9733;<span class="star-disabled">&#9733;&#9733;&#9733;</span></p>
                        </div>
                      </div>
                    </div>
                    <p class="mb-0">Kesan pertama saat mengunjungi tempat ini benar-benar seperti kota mati yang ditenggelamkan. Di sisi pinggir tanggul, lumpur sudah mulai mengering dan retak karena selalu tersengat panas matahari. Sedangkan di pusat semburan, lumpur panas masih terus menyembur hingga saat ini. Udara disana sangat panas, minim sekali tempat untuk berteduh walau lokasi tersebut telah dikelola sebagai tempat wisata. Untuk tiket parkir dan masuk lokasi rawan premanisme. Entah pengelolaan tanggul tersebut menjadi tempat wisata resmi atau tidak. Yang pasti sistemnya terkesan kurang menyenangkan dan membuat tidak nyaman.</p>
                  </div>
                </div>
              </div>

              <div class="carousel-item p-4">
                <div class="d-flex justify-content-center">
                  <div class="">
                    <div class="d-flex justify-content-between mb-3">
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('logo/visitor-img.png') }}" alt="Visitor Image 4" width="35" height="35" class="rounded-circle me-3">
                        <div>
                          <p class="fw-bold mb-0">Padadita</p>
                          <p class="fw-normal text-muted mb-0">Juni 2018</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <div>
                          <p class="star-active mb-0">&#9733;&#9733;&#9733;&#9733;<span class="star-disabled">&#9733;</span></p>
                        </div>
                      </div>
                    </div>
                    <p class="mb-0">Lumpur Lapindo namanya yang terletak Di daerah Porong-Sidoarjo merupakan suatu bentukan alam yang terjadi fenomena atas kejahilan segelintir manusia untuk memperkaya sebagian kelompok akan tetapi merugikan banyak masyarakat luas,hampir 13 tahun lebih lapindo membawa kenangan seiring waktu menjadi tontonan dan wisata seperti saat ini kami bisa melihat seantero mata memandang lautan lumpur kering terhampar.</p>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <hr class="my-5">
    </div>
  </section>

</section>