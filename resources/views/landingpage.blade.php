<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Aleena</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon-aleena.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
 <div id="cursor-follower" class="cursor-follower"></div>
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/logo 1.png" alt=""> 
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#beranda" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#layanan-kami">Layanan Kami</a></li>
          <li><a href="#portofolio">Portfolio</a></li>
          <li><a href="#news">Berita</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
          <a href="#" id="openSidebar">
              <i class="bi bi-list" style="font-size: 28px; cursor:pointer;"></i>
          </a>
      </div>
    <div id="sidebarAleena">
    <div class="sidebar-header">
        <h2>Aleéna</h2>
        <i class="bi bi-x-lg" id="closeSidebar"></i>
    </div>

    <p class="sidebar-sub">IT Consultant & Digital Marketing</p>

    <div class="sidebar-content">
        <h4>Kontak Kami</h4>

        <p><i class="bi bi-telephone"></i> 087753172270</p>

        <p><i class="bi bi-geo-alt"></i>
            Perumahan Bernardy Land Slawu  <br>
            Cluster Alstonia Blok AC 157 ' <br>
            Patrang, Slawe, Patrang, Kalipare <br>
            Jember, Jawa Timur 68118
        </p>
    </div>
</div>

<div id="sidebarOverlay"></div>
<style>
  /* SIDEBAR WRAPPER */
#sidebarAleena {
    position: fixed;
    top: 0;
    left: -320px; /* awal tersembunyi */
    width: 300px;
    height: 100vh;
    background: #111;
    color: #fff;
    padding: 25px;
    z-index: 9999;
    transition: 0.3s ease;
    box-shadow: 2px 0 15px rgba(0, 0, 0, 0.5);
}

/* HEADER SIDEBAR */
.sidebar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.sidebar-header h2 {
    font-size: 1.8rem;
    margin: 0;
}

#closeSidebar {
    font-size: 22px;
    cursor: pointer;
}

/* SUBTITLE */
.sidebar-sub {
    font-size: 0.9rem;
    color: #00ff73;
    margin: 5px 0 20px;
}

/* KONTEN */
.sidebar-content h4 {
    margin-bottom: 15px;
    border-bottom: 2px solid #BFF747;
    display: inline-block;
    padding-bottom: 5px;
}

.sidebar-content p {
    line-height: 1.6;
    margin-bottom: 15px;
}

.sidebar-content i {
    margin-right: 8px;
    color: #00c3ff;
}

/* OVERLAY GELAP */
#sidebarOverlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    display: none;
    z-index: 9998;
}

</style>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="beranda" class="hero section">
      <div class="hero-background">
        <div class="hero-overlay"></div>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center text-center">
          <div class="col-lg-10">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <h1>ALEENA</h1><br><br>
              <p>IT CONSULTANT & DIGITAL MARKETING</p>
            </div>
          </div>
        </div>
       <div class="row-just-content-absolute">
        <div class="col-lg-8">

        <div class="col-lg-8">

          <style>
       
        .watermark-logo {
            position: absolute;
            opacity: 0.08;      
        }

        .watermark-logo img {
            width: 250px;       
            filter: blur(2px);  
            user-select: none;
            pointer-events: none;
        }

      
        .hero-image-container,
        .hero-image {
            position: relative;
            z-index: 5;
        }
        
         </style>

   
        <div class="watermark-logo">
        <img src="assets/img/logo 1.png" alt="Business Innovation">
        </div>

         <div class="hero-image-container" data-aos="zoom-in" data-aos-delay="400">
         </div>

            </div>


        </div>

        </div>
        <div class="container my-4">

        <style>
   
        .hero-green {
        position: relative;
        border-radius: 25px;
        overflow: hidden;
            }

        .hero-green .bg-img {
        background-image: url('assets/img/Rectangle 20.png'); 
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 320px; 
        }

 
        .hero-green .overlay {
        position: absolute;
        inset: 0;
        background: rgba(44, 89, 0, 0.60); /* hijau + transparan */
        }

   
        .content-box {
        position: absolute;
        top: 0;
        right: 0;
        width: 350px;
        font-family: sans-serif;
        font-size: 18px;
        background: black;
        padding: 30px;
        color: white;
        border-bottom-left-radius: 20px;
        z-index: 5;
        }

   
        .btn-custom {
        background: #ffffff00;  
        color: #ffffff !important; 
        font-size: 14px;
        padding: 6px 12px;
        border-radius: 6px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: 1px solid #fff;  
        }


        .btn-custom .icon-circle {
        width: 20px;
        height: 20px;
        background: #66bb33; 
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 12px;
        }

 
        @media (max-width: 768px) {
        .content-box {
            position: relative;
            width: 100%;
            border-radius: 0;
        }
        .hero-green .bg-img {
            height: 250px;
        }
        }
        </style>

        <div class="hero-green">
      <div class="bg-img"></div>
    
      <div class="content-box">
          <p class="mb-3">
              Aleena Mandiri Group hadir sebagai mitra konsultan IT<br>
              dan Digital Marketing yang siap mendukung perusahaan<br>
              dalam mengatasi tantangan serta memanfaatkan peluang<br>
              yang ditawarkan oleh teknologi.
          </p>

          <a href="#" class="btn-custom" >
              Mari Bekerja Sama
              <span class="icon-circle">✔</span>
          </a>
      </div>
<br>
       <div class="green-marquee-full">
    <div class="marquee-inner-full">
        <span>Development Software ✦ UI/UX Design ✦ IT Consultant ✦ Digital Marketing ✦</span>
        <span>Development Software ✦ UI/UX Design ✦ IT Consultant ✦ Digital Marketing ✦</span>
    </div>
</div>

<style>
    
.green-marquee-full {
    width: 100%;
    background: #a8db34;
    overflow: hidden;
    position: relative;
    padding: 12px 0;
    margin: 0;
}

.marquee-inner-full {
    display: flex;
    white-space: nowrap;
    width: max-content;
    animation: marqueeFull 15s linear infinite;
}

.marquee-inner-full span {
    font-size: 20px;
    font-weight: 600;
    color: #1a1a1a;
    padding-right: 60px;
}

@keyframes marqueeFull {
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
}
</style>


       
    </section>


    <section id="about" class="about section">

      <style>

.about-logo {
    width: 120px;
    opacity: 0.9;
}

.about.section {
    margin-top: -60px !important;
}


#about .container {
    margin-top: 30px !important; 
}



.text-justify-aleena {
    text-align: justify;
    text-justify: inter-word;
    font-size: 16px;
    line-height: 1.6;
    color: #fff;
}


.btn-aleena {
    background: #ffffff00;
    border: 1px solid #fff;
    color: #fff !important;
    padding: 6px 14px;
    border-radius: 6px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
}

.btn-aleena .icon-circle {
    width: 22px;
    height: 22px;
    background: #9ad94a;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #000;
    font-weight: bold;
}


.director-box {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-left: 20px;
}

.director-circle {
    width: 30px;
    height: 30px;
    background: #fff;
    border-radius: 50%;
}

.director-info {
    font-size: 12px;
    color: #ccc;
    line-height: 1.2;
}
</style>

<div class="container my-5">

    <div class="row align-items-center text-white">
        
      
        <div class="col-lg-2 text-center text-lg-start">
            <img src="assets/img/logo 1.png" class="about-logo">
        </div>

       
        <div class="col-lg-10">

            <h4 class="mb-2">Tentang Aleena</h4>

            <p class="text-justify-aleena">
                Aleena adalah mitra teknologi dan digital marketing yang menghadirkan solusi inovatif,
                handal, dan berkelanjutan untuk mendukung transformasi digital serta pertumbuhan bisnis
                perusahaan di Indonesia melalui strategi, kreativitas, dan desain yang bernilai.
            </p>

          
            <div class="d-flex align-items-center mt-3">

                <a href="#" class="btn-aleena">
                    Pelajari Lebih Lanjut
                    <span class="icon-circle">➜</span>
                </a>

                <div class="director-box">
                    <div class="director-circle"></div>
                    <div class="director-info">
                        Victor Wahanggara, M.Kom <br>
                        Direktur
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
    <section id="team" class="team section">

      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Divisi Riset & Development</span>
        <h2>Divisi Riset & Development</h2>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

         @foreach ($teams as $item)
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
    <div class="team-member">

        {{-- Foto --}}
        <div class="member-image">
            <img src="{{ asset('storage/' . $item->photo) }}" 
                 class="img-fluid" 
                 alt="{{ $item->name }}" 
                 loading="lazy"
                 style="object-fit: cover; width:100%; height:300px;">
        </div>

        {{-- Info --}}
        <div class="member-info">
            <h4>{{ $item->name }}</h4>
            <span>{{ $item->position }}</span>
            <p>{{ $item->info }}</p>
        </div>

    </div>
</div>
@endforeach


          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-image">
                <img src="assets/img/person/person-m-7.webp" class="img-fluid" alt="" loading="lazy">
                <div class="social-overlay">
                  <div class="social-icons">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
              <div class="member-info">
                <h4>Dian Febrianto, S.Kom</h4>
                <span>UI/UX Designer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus.</p>
              </div>
            </div><!-- End Team Member -->
          </div>

        
          
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-image">
                <img src="assets/img/person/person-f-11.webp" class="img-fluid" alt="" loading="lazy">
                <div class="social-overlay">
                  <div class="social-icons">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
              <div class="member-info">
                <h4>Imam Sahroni, M.Kom</h4>
                <span>Mobile Developer</span>
                <p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div><!-- End Team Member -->
          </div>
        </div>

      </div>

    </section><!-- /Team Section -->
    
    <section id="layanan-kami" class="layanan-kami section">
     
    <div class="container">
        <div class="text-center mb-5">
            <p class="section-title mb-1">Layanan Kami</p>
            <p class="lead text-white-50">Kami menyediakan layanan berbasis jasa dan produk digital untuk mendukung transformasi bisnis melalui pengembangan teknologi dan strategi digital yang terintegrasi.</p>
        </div>
        
        <div class="row g-4 mb-4">
            
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card p-3 service-card">
                    <div class="card-body">
                        <i class="fa-solid fa-desktop service-icon"></i>
                        <h5 class="card-title">POINT OF SALES</h5>
                        <p class="card-text small">(Sistem yang mendukung transaksi jual-beli dan pencatatan stok, umumnya di supermarket, restoran, kafe, dll.)</p>
                        <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card p-3 service-card">
                    <div class="card-body">
                        <i class="fa-solid fa-gear service-icon"></i>
                        <h5 class="card-title">ENTERPRISE RESOURCES PLANNING</h5>
                        <p class="card-text small">(Paket sistem dan software yang digunakan oleh perusahaan untuk mengelola aktivitas bisnis mereka, seperti pengelolaan keuangan, manufaktur, supply chain, proyek, SDM, dan lain-lain.)</p>
                        <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card p-3 service-card">
                    <div class="card-body">
                        <i class="fa-solid fa-bookmark service-icon"></i>
                        <h5 class="card-title">INVENTORY</h5>
                        <p class="card-text small">(Sebuah sistem yang mengelola data seluruh persediaan barang, bahan baku, atau aset bergerak yang dimiliki suatu usaha.)</p>
                        <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card p-3 service-card">
                    <div class="card-body">
                        <i class="fa-solid fa-building service-icon"></i>
                        <h5 class="card-title">WEB COMPANY PROFILE</h5>
                        <p class="card-text small">(Website yang membuat profil perusahaan, informasi manajemen, tentang perusahaan atau brand, visi dan misi, our service atau product, our client dan partner, dan lain sebagainya.)</p>
                        <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card p-3 service-card">
                    <div class="card-body">
                        <i class="fa-solid fa-computer service-icon"></i>
                        <h5 class="card-title">DEVELOPMENT SOFTWARE</h5>
                        <p class="card-text small">(Custom pembuatan aplikasi/sistem berbasis website, desktop & mobile.)</p>
                        <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card p-3 service-card">
                    <div class="card-body">
                        <i class="fa-solid fa-pen-ruler service-icon"></i>
                        <h5 class="card-title">UI/UX DESIGN</h5>
                        <p class="card-text small">(Landing Pages, Wireframing, Prototype Mobile App Design, & Web App Design.)</p>
                        <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card p-3 service-card">
                    <div class="card-body">
                        <i class="fa-solid fa-user-tie service-icon"></i>
                        <h5 class="card-title">IT CONSULTANT</h5>
                        <p class="card-text small">(Jasa profesional yang menawarkan saran dan solusi teknologi untuk meningkatkan kinerja dan efisiensi operasional.)</p>
                        <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card p-3 service-card">
                    <div class="card-body">
                        <i class="fa-solid fa-bullhorn service-icon"></i>
                        <h5 class="card-title">DIGITAL MARKETING</h5>
                        <p class="card-text small">(Pemasaran digital SEO, Optimasi Iklan FB Ads dan Google Ads, TikTok Ads)</p>
                        <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
      #layanan-kami .container {
    background: #2f2f2f; /* abu-abu gelap elegan */
    border-radius: 30px;
    padding: 40px; /* biar kontennya tidak nempel */
    border: 1px solid #444;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

            .section-title {
          color: #ffffff;
          font-size: 2rem;
          font-weight: 700;
          margin-bottom: 5px;
      }

      .service-card {
          background-color: #2b2b2b;
          border: 1px solid #444444;
          color: #cccccc;
          height: 100%;
          transition: all 0.3s ease;
          border-radius: 30px; /* <<< DITAMBAHKAN */
          overflow: hidden; /* Biar efek rapi saat hover */
      }

      .service-card:hover {
          border-color: #00ff73;
          box-shadow: 0 0 15px rgba(0, 255, 115, 0.25);
          transform: translateY(-5px);
      }

      .service-icon {
          color: #00ff73;
          font-size: 3rem;
          margin-bottom: 15px;
      }

      .card-title {
          color: #ffffff;
          font-weight: 600;
          margin-bottom: 10px;
      }

      .read-more {
          color: #00ff73 !important;
          text-decoration: none;
          font-weight: 500;
      }

      .read-more i {
          margin-left: 5px;
          transition: 0.2s ease;
      }

      .read-more:hover i {
          transform: translateX(4px);
      }
    </style>
    </section><!-- /About Section -->

    <!-- Services Section -->
      <section id="portofolio" class="portfolio-section">
        <div class="container">
            <div class="text-center">
                <p class="portfolio-title"><span class="portfolio-title-star"></span> Portofolio & Pencapaian</p>
            </div>

            <div class="row">
                
                <div class="col-lg-5 col-md-12 mb-4">
    <div class="row g-3 h-100">
        
        <div class="col-6">
            <div class="side-by-side-card p-2">
                <img src="assets/img/layanan1.jpg" class="img-fluid rounded" alt="Gambar 1">
            </div>
        </div>

        <div class="col-6">
            <div class="side-by-side-card p-2">
                <img src="assets/img/layanan2.jpg" class="img-fluid rounded" alt="Gambar 2">
            </div>
        </div>

    </div>
</div>


                <div class="col-lg-7 col-md-12">
                    <div class="content-card">
                        
                        <h3 class="main-heading">MENGAPA BISNIS MEMPERCAYAI KAMI MEMBERIKAN SOLUSI TERBAIK</h3>
                        
                        <p class="description-text">
                            Di PT Aleena Mandiri Group, kami mengombinasikan keahlian teknologi informasi, strategi digital, dan pengalaman industri untuk menghadirkan solusi yang benar-benar memberikan dampak. Tim kami bekerja secara dekat dengan setiap klien untuk memahami kebutuhan bisnis secara spesifik dan menyeluruh.
                        </p>
                        
                        <h4 class="problem-heading">Permasalahan yang Sering Dihadapi Bisnis</h4>
                        <ul class="problem-list">
                            <li><i class="fa-solid fa-star"></i> Kesulitan mengelola sistem dan proses bisnis secara terintegrasi</li>
                            <li><i class="fa-solid fa-star"></i> Sistem dan aplikasi yang sudah tidak efektif atau tidak sesuai kebutuhan</li>
                            <li><i class="fa-solid fa-star"></i> Tantangan dalam memanfaatkan teknologi untuk meningkatkan efisiensi dan daya saing</li>
                        </ul>

                        <div class="action-area">
                            
                            <div>
                                <div class="contact-box mb-3">
                                    Kontak Kami <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </div>
                                
                                <div class="partner-group">
                                    <div class="partner-box">10+</div>
                                    <div class="partner-box" style="background-color: #7abf40;">&nbsp;</div>
                                    <div class="partner-box" style="background-color: #8ce450;">&nbsp;</div>
                                    <span class="partner-text">10+ Mitra Kami</span>
                                </div>
                            </div>
                            
                            <div class="achievement-box">
                                <div class="achievement-item">
                                    <span class="text-white">10+</span>
                                    <span class="text-label">Mitra Kami</span>
                                    <i class="fa-solid fa-user-group"></i>
                                </div>
                                <div class="achievement-item">
                                    <span class="text-white">10+</span>
                                    <span class="text-label">Project selesai</span>
                                    <i class="fa-solid fa-clipboard-check"></i>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <style>
          
            .portfolio-section {
            padding: 80px 0;
            background-color: #1e1e1e;
            border-radius: 30px;
        }

        /* =====================================
           Gaya Judul Bagian
           ===================================== */
        .portfolio-title {
            color: #ffffff;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 40px;
        }
        
        .portfolio-title-star {
            color: #00ff73; /* Hijau Neon */
        }

        /* =====================================
           Gaya Kartu Konten Kanan (Satu Kartu Penuh)
           ===================================== */
        .content-card {
            background-color: #242424; 
            border-radius: 10px;
            padding: 40px;
            height: 100%; /* Penting agar tingginya menyesuaikan konten kiri */
        }

        .main-heading {
            color: #ffffff;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.4;
        }

        .description-text {
            color: #cccccc;
            margin-bottom: 30px;
            font-size: 0.95rem;
        }

        .problem-heading {
            color: #ffffff;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .problem-list {
            list-style: none; 
            padding-left: 0;
        }
        
        .problem-list li {
            color: #cccccc;
            margin-bottom: 10px;
            font-size: 0.9rem;
        }

        .problem-list li i {
            color: #00ff73; /* Ikon Bintang Hijau Neon */
            margin-right: 10px;
        }
        
        /* =====================================
           Gaya Kartu Pencapaian Bawah
           ===================================== */

        .action-area {
            display: flex;
            justify-content: space-between;
            align-items: flex-end; 
            margin-top: 30px;
        }
        
        .contact-box {
            background-color: #557733; 
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-box:hover {
            background-color: #779955;
        }

        .contact-box i {
            margin-left: 10px;
        }
        
        .partner-box {
            background-color: #6a9b3a; 
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 0.8rem;
            font-weight: bold;
            color: #1e1e1e;
            position: relative;
            margin-right: -15px; 
        }
        
        .partner-text {
            color: #ffffff;
            font-weight: 600;
            margin-left: 20px;
            font-size: 0.9rem;
        }

        .partner-group {
            display: flex;
            align-items: center;
        }

        .achievement-box {
            text-align: right;
        }

        .achievement-item {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 5px;
        }

        .achievement-item span {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
            margin-right: 5px;
            line-height: 1;
        }
        
        .achievement-item .text-label {
            font-size: 0.8rem;
            color: #aaaaaa;
            font-weight: 500;
        }
        
        .achievement-item i {
            font-size: 1rem;
            color: #BFF747;
            margin-left: 5px;
        }
        
        /* =====================================
           Gaya Kustom untuk Dua Kartu Berdampingan di Kiri
           ===================================== */
        
        /* Kartu Berdampingan di Kiri */
        .side-by-side-card {
            background-color: #2b2b2b;
            border-radius: 10px;
            height: 100%; /* Penting agar tingginya sama */
            min-height: 250px; 
            padding: 20px;
        }

        /* Untuk Mobile: Kedua kartu kiri akan bertumpuk (100% lebar) */
        @media (max-width: 992px) {
            .col-lg-5 .row {
                margin: 0; /* Hilangkan margin row internal */
            }
            .col-lg-5 .col-6 {
                width: 100%;
                margin-bottom: 20px;
            }
            .content-card {
                margin-top: 20px;
            }
            /* ... Gaya responsif lainnya dari kode sebelumnya ... */
        }
      
        </style>
    </section>

    <!-- Steps Section -->
     <section id="news" class="news-section">
        <div class="container">
            <div class="text-center">
              <p class="news-title"><span class="news-title-star">Berita</span></p>
            </div>

            <div class="row g-4">
                
                            @foreach ($berita as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="news-card">

                        <img src="{{ asset('storage/' . $item->gambar) }}" 
                            alt="{{ $item->judul }}" 
                            class="news-image">

                        <div class="news-content">
                            <h4 class="news-heading">{{ $item->judul }}</h4>

                            <a href="{{ route('berita.show', $item->slug) }}" class="read-more-link">
                Readmore <i class="fa-solid fa-arrow-right"></i>
            </a>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <style>
            
        

        /* =====================================
           Gaya Judul Bagian
           ===================================== */
        .news-title {
            color: #ffffff;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 40px;
        }
        
        .news-title-star {
            color: #ffffff; /* Hijau Neon */
        }

        /* =====================================
           Gaya Kartu Berita
           ===================================== */
        .news-card {
            background-color: #2b2b2b; /* Latar belakang kartu gelap */
            border: 1px solid #444444;
            border-radius: 10px;
            overflow: hidden; /* Penting untuk gambar */
            height: 100%; /* Agar semua kartu memiliki tinggi yang sama */
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .news-card:hover {
            box-shadow: 0 0 15px rgba(0, 255, 115, 0.2);
            transform: translateY(-5px);
            border-color: #BFF747;
        }

        /* Gambar Berita */
        .news-image {
            width: 100%;
            height: 250px; /* Tinggi tetap untuk gambar */
            object-fit: cover; /* Memastikan gambar mengisi area tanpa terdistorsi */
        }

        /* Konten di Bawah Gambar */
        .news-content {
            padding: 20px;
        }

        /* Judul Berita */
        .news-heading {
            color: #ffffff;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
            min-height: 50px; /* Tinggi minimum agar semua judul terlihat */
        }

        /* Link Read More */
        .read-more-link {
            color: #BFF747 !important;
            text-decoration: none;
            font-weight: 500;
            display: inline-block;
            transition: color 0.3s;
        }

        .read-more-link:hover {
            color: #BFF747 !important;
        }

        .read-more-link i {
            margin-left: 5px;
            font-size: 0.9rem;
        }

        /* Penyesuaian Responsif */
        @media (max-width: 768px) {
            .col-lg-4 {
                margin-bottom: 30px;
            }
        }
        </style>
    </section>
  </main>

  <footer class="main-footer">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Logo & Deskripsi -->
            <div class="col-lg-4 col-md-12">
                <h1 class="footer-logo">Aleéna</h1>
                <p class="footer-logo-sub">IT Consultant & Digital Marketing</p>
                <p class="footer-description">
                    Aleena Mandiri Group hadir sebagai mitra konsultan IT dan Digital Marketing yang siap mendukung perusahaan dalam mengatasi tantangan serta memanfaatkan peluang yang ditawarkan oleh teknologi.
                </p>
            </div>

            <!-- Tautan -->
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-heading">Tautan</h4>
                <ul class="footer-links">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="#">Jasa</a></li>
                    <li><a href="#">Mitra Kami</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="col-lg-5 col-md-6 offset-lg-0">
                <h4 class="contact-heading">Kontak Kami</h4>
                <ul class="contact-info">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:087753172270" style="color: inherit;">087753172270</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <div class="address-text">
                            Perumahan Bernardy Land Slawu <br>
                            Cluster Alstonia Blok AC 157  <br>
                            Puring, Slawu, Patrang <br>
                            Kabupaten Jember, Jawa Timur 68116
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row">
            <div class="col-12 text-center footer-copyright">
                <p>Copyright © 2025. All Rights Reserved.</p>
            </div>
        </div>
    </div>

    <!-- STYLE -->
    <style>
        /* =====================================
           Footer Global
        ===================================== */
        .main-footer {
            background-color: #000;
            color: #fff;
            padding: 60px 0 20px;
            font-family: Arial, sans-serif;
            font-size: 0.9rem;
        }

        /* Logo */
        .footer-logo {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            line-height: 1;
        }

        .footer-logo-sub {
            font-size: 0.8rem;
            color: #fff;
            font-weight: 300;
            margin-bottom: 20px;
        }

        .footer-description {
            color: #ccc;
            line-height: 1.8;
            font-size: 0.85rem;
            margin-top: 15px;
        }

        /* =====================================
           Tautan
        ===================================== */
        .footer-heading {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li a {
            color: #ccc;
            text-decoration: none;
            line-height: 2.2;
            transition: 0.3s;
        }

        .footer-links li a:hover {
            color: #BFF747;
        }

        /* =====================================
           Kontak
        ===================================== */
        .contact-heading {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #fff;
            border-bottom: 2px solid #BFF747;
            display: inline-block;
            padding-bottom: 5px;
        }

        .contact-info {
            list-style: none;
            padding: 0;
            margin: 0;
            color: #ccc;
        }

        .contact-info li {
            margin-bottom: 15px;
            display: flex;
        }

        .contact-info i {
            color: #BFF747;
            margin-right: 15px;
            font-size: 1.1rem;
            margin-top: 2px;
        }

        .address-text {
            line-height: 1.6;
        }

        /* =====================================
           Copyright
        ===================================== */
        .footer-copyright {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #222;
            color: #555;
            font-size: 0.75rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .col-lg-4,
            .col-lg-3 {
                margin-bottom: 30px;
            }
        }
        
    </style>
</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
    const sidebar = document.getElementById("sidebarAleena");
    const openBtn = document.getElementById("openSidebar");
    const closeBtn = document.getElementById("closeSidebar");
    const overlay = document.getElementById("sidebarOverlay");

    openBtn.onclick = function(e) {
        e.preventDefault();
        sidebar.style.left = "0";
        overlay.style.display = "block";
    };

    closeBtn.onclick = function() {
        sidebar.style.left = "-320px";
        overlay.style.display = "none";
    };

    overlay.onclick = function() {
        sidebar.style.left = "-320px";
        overlay.style.display = "none";
    };
</script>

  
</body>

</html>