<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!-- Title dan Icon -->
    <title>Tadika Laundry</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">

  </head>
  <body>
    <!-- NavBar -->

  <div style="width:100%;">
  <nav class="navbar navbar-expand-lg navbar-light navigasi" style="width: 100%;">
        <div class="container cnav" style="width: 100%;">
            <img src="img/logo.png" alt="Bootstrap" width="" height="76">
            <a class="navbar-brand nav-b ms-4" style="color: #0455c0" href="#">Tadika Laundry</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" >
              <li class="nav-item nav-i">
                <a class="nav-link  nav-l active" aria-current="page" href="/register" style="color: #0455c0">Home</a>
              </li>
              <li class="nav-item mx-0.1">
                <a class="nav-link nav-l " href="#varian" style="color: #0455c0">Service</a>
              </li>
              <li class="nav-item mx-0.1">
                <a class="nav-link nav-l " href="#service" style="color: #0455c0">Pricing</a>
              </li>
              <li class="nav-item mx-0.1">
                <a class="nav-link nav-l " href="#" style="color: #0455c0">FAQ</a>
              </li>
              <li class="nav-item mx-0.1">
                <a class="nav-link nav-l " href="#" style="color: #0455c0">Contact</a>
              </li>
              <li class="nav-item mx-0.1">
                <a class="btn btn-primary tombol px-4" style="margin-left: 50px" href="/register">REGIS</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>
      
    <!-- Hero Section -->
    <section id="hero" class="hero">
          <div>
          <!-- class="row" style="height: 732px; margin-top:10px; width:auto" -->
            <div class="halaman2" style="padding-left: 50px;">
              <div class="box_50 my-auto hero-tagline">
              <!-- <div class="col-4 my-auto hero-tagline" style="margin-left: 100px"> -->
                  <h1><span class="fw-bold">Your One Stop <br> Solution for <br> Every Sheets</span></h1>
                  <h3><br> Percayakan laundry Anda pada Service <br> Tadika Laundry yang sudah dipercaya <br> oleh banyak customer.</h3> <br>
                  <a class="btn btn-primary tombol px-4" href="#how">Swipe Down</a>
              </div>

              <div class="gambar_50">
              <!-- <div class="col img-fluid"> -->
                <img src="img/kiri.png" alt="gambar orang laundry" style="width: 100%;">
              </div>
            
            </div>

          </div>
           
    </section>


    <!-- Tulisan Bergerak -->
    <div class="tulisan my-auto">
      <marquee  behavior="slide" bgcolor="#0455C0" loop= "20"  >
        <div class="row my-auto">
          <div class="col-2" style="padding: 5px">
              <center>15% Off<br>All Clothes<br></center> 
          </div>
          <div class="col-2">
              <center><img src="img/emoji.png" alt="" style="margin-top: 27px"></center>
          </div> 
          <div class="col-2" style="padding: 5px">
              <center>15% Off<br>All Clothes<br></center> 
          </div>
          <div class="col-2">
              <center><img src="img/emoji.png" alt="" style="margin-top: 27px"></center>
          </div> 
          <div class="col-2" style="padding: 5px">
          <center>15% Off<br>All Clothes<br></center> 
          </div>
          <div class="col-2">
          <center><img src="img/emoji.png" alt="" style="margin-top: 27px"></center>
          </div>  
        </div>
      </marquee> 
    </div>


    <!-- How Tadika Laundry -->
    <div class="coverhow" id="how">
          <center>
              <h1 class="judulpage" style="padding-top: 100px">How Tadika Laundry Works</h1> <br>
              <p class="isi" style="padding-bottom: -50px">Kami berusaha semaksimal mungkin untuk layanan laundry kami</p>
          </center>

        <div class="card-container">
            <div class="card card-how">
                <div class="card-image one"></div>
                    <div class="card-text text-how">
                    <span class="name">Order</span>
                    <p>Pesan laundry dan pilih jenis <br> laundry Anda.</p>
                </div>
            </div>
    
            <div class="card card-how">
                <div class="card-image two"></div>
                    <div class="card-text text-how">
                    <span class="name">Wait</span>
                    <p>Nantikan pesanan Anda <br> sampai estimasi waktu <br> yang tertera di sistem.</p>
                </div>
            </div>
    
            <div class="card card-how">
                <div class="card-image three"></div>
                    <div class="card-text text-how">
                    <span class="name">Deliver</span>
                    <p>Kami akan dapat mengantar <br> langsung laundry ke <br> kamar hotel Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <!--Varian Section -->
    <section id="varian" class="varian">
        <div class="container con-var">
          <div class="row">
            <div class="col-12 text-center">
              <h1>Every Sheet Will Be Totally Clean</h1>
              <h2>Mulai dari vest kesayangan Anda, kemeja, celana, kaos <br> bahkan sepatu akan kami bersihkan dengan sepenuh hati.</h2>
            </div>
          </div>
          <!-- Bagian Jenis-Jenisnya -->
          <div class="row mb-5" style="margin: 50px">
            <div class="col-4">
              <div class="card var-card">
                <div  class="kategori justify-content-center" >
                  <img src="img/baju.png" class="card-img-top" alt="" style="background-color: #fff">
                  </div> 
                <div class="card-body var-card-body">
                  Any Shirts
                </div>
              </div>
            </div>

            <div class="col-4">
              <div class="card var-card">
                <div class="kategori justify-content-center" >
                  <img src="img/jeans2.png" class="card-img-top" alt="">
                </div> 
                <div class="card-body var-card-body">
                  Any Trousers
                </div>
              </div>
            </div>

            <div class="col-4">
              <div class="card var-card">
                <div class="kategori justify-content-center my-auto" >
                  <img src="img/sepatu3.png" class="card-img-top py-auto" alt=""> 
                </div> 
                <div class="card-body var-card-body">
                  Any Shoes
                </div>
              </div>
            </div>
          </div>
            
          <center>
          <div>
          <a class="btn tombolver2 px-5 text-center" style="text-align: center" href="#">What to Clean?</a>
        </div>
          </center>
        </div>
      </div>
    </section>
   
  <section class="why">
    <div class="container-bg">
      <center><div class="coverbg">
        <center><h2 class="text-why">  Why Tadika Laundry?</h2></center>
    
        <center>
            <div class="container-why">
                <div class="courses-container">
                    <div class="course">
                        <div class="course-preview">
                            <img src="img/clean.png" alt="" width="130" height="130">
                        </div>
                        <div class="course-info">
                            <h2>Clean</h2>
                            <p>Laundry Anda pasti kembali dengan bersih</p>
                        </div>
                    </div>
                </div>
                
                <div class="courses-container">
                    <div class="course">
                        <div class="course-preview">
                            <img src="img/Quick2.png" alt="" width="130" height="130">
                        </div>
                        <div class="course-info">
                            <h2>Quick</h2>
                            <p>Laundry Anda pasti selesai dengan cepat dan tepat waktu</p>
                        </div>
                    </div>
                </div>
                
                <div class="courses-container">
                    <div class="course">
                        <div class="course-preview">
                            <img src="img/fresh2.png" alt="" width="130" height="130">
                        </div>
                        <div class="course-info">
                            <h2>Fresh</h2>
                            <p>Laundry Anda kembali tanpa bau apek dan penuh dengan wangi</p>
                        </div>
                    </div>
                </div>
                
                <div class="courses-container">
                    <div class="course">
                        <div class="course-preview">
                            <img src="img/trusted2.png" alt="" width="130" height="130">
                        </div>
                        <div class="course-info">
                            <h2>Trusted</h2>
                            <p>Testimoni terpercaya oleh banyak customer pada service kami</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>
    
        <center>
        <button class="floating-btn tombol3">
            See More Who Trust Us
        </button>
        </center>

      </center>
      </div>
    </div>
  </section>

    <!-- Service -->
    <section id="service"> 
      <div class="container mt-5">
        <div class="service"> 
        <div class="row">
          <div class="col-12 text-center">
            <h1>Our Main Services</h1>
          </div>
          <hr>
        </div>

        <!-- Bagian Jenis-Jenisnya -->
        <div class="row mb-5" style="margin: 50px">
          <div class="col-4 fotoService">
            <img src="img/MachineWash.png" alt="" width="166px" height="142px">
            <h1>Wash</h1>
            <h2>Mulai dari vest kesayangan Anda, kemeja, celana, kaos bahkan sepatu akan bersih.</h2>
          </div>

          <div class="col-4 fotoService">
            <img src="img/DripDry.png" alt="" width="166px" height="142px ">
            <h1>Dry</h1>
            <h2>Semua pakaian anda akan kering dengan sempurna dan tepat waktu.</h2>
          </div>

          <div class="col-4 fotoService">
            <img src="img/Iron.png" alt="" width="166px" height="142px">
            <h1>Iron</h1>
            <h2>Menggunakan setrika premium, sehingga pakaian anda akan rapi setelah kami laundry.</h2>
          </div>
      </div>
    </section>

        


     
    <center>
      <div class="testi"> 
      <div class="judultesti">
          <h2>Our Lovely Testimonials</h2>
      </div>

      <div class="container-why-2">
          <div class="courses-container-2">
              <div class="course-2">
                  <div class="course-preview-2">
                      <img src="img/cewetesti.png" alt="" width="90" height="120">
                  </div>
                  <div class="course-info-2">
                      <h2>Eno</h2>
                      <div class="rating">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                      </div>
                      <p>Wah baju saya hampir ilang, tapi untung ga ilang.</p>
                  </div>
              </div>
          </div>
          
          <div class="courses-container-2">
              <div class="course-2">
                  <div class="course-preview-2">
                      <img src="img/cowotesti.png" alt="" width="90" height="120">
                  </div>
                  <div class="course-info-2">
                      <h2>Adnyanul</h2>
                      <div class="rating">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                      </div>
                      <p>Emang keren banget sih, baju gue jadi bersih and shining deh</p>
                  </div>
              </div>
          </div>

          <div class="courses-container-2">
              <div class="course-2">
                  <div class="course-preview-2">
                      <img src="img/cewetesti.png" alt="" width="90" height="120">
                  </div>
                  <div class="course-info-2">
                      <h2>Lalisa</h2>
                      <div class="rating">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                      </div>
                      <p>So good and so nice. Xoxo LALISA</p>
                  </div>
              </div>
          </div>


          
      </div>
    </div>


  <div class="footermain">
      <div class="footer-content">
          <center>
          <h2>More About Tadika Laundry?</h2>
              <button class="floating-button fbtn">
                  Get in Touch
              </button>
              <button class="floating-button fbtn">
                  View our FAQs
              </button>
              </center>
      </div>

      
      <div class="container footer-con">
          <div class="row ftr">
              <div class="footer-col">
                  <h4 class="judul-footer">Follow Our Social</h4>
                  <ul>
                      <li><a href="https://instagram.com/laundrytadika?igshid=YmMyMTA2M2Y=">@laundrytadika</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4 class="judul-footer">Anything to Ask?</h4>
                  <ul>
                      <li><a href="#">laundry@tadika.com</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4 class="judul-footer">Helpful links</h4>
                  <ul>
                      <li><a href="">About Tadika Hotel</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4 class="judul-footer">Terms</h4>
                  <ul>
                      <li><a href="">T&Cs</a></li>
                      <li><a href="">Privacy Policy</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4 class="judul-footer">Our Location</h4>
                  <ul>
                      <li><a href="">Jimbaran</a></li>
                      <li><a href="">Ubud</a></li>
                      <li><a href="">Denpasar</a></li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="footer-bottom">
          <center><p>&copy;2022 Tadika Mesra Ltd</p></center>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>