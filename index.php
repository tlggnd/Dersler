<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tolga Gündoğdu Fullstack Ödev</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
</head>
<body> 


      <header>
          <div id="header-logo">
              <img src="assets/img/logo.png"  alt="Logo">
          </div>
       <div class="header-menu">
              <ul>
                  <li><a href="./index.php">Ana Sayfa</a></li>
                  <li><a href="./javaislem.php">Java İşlem</a></li>
                  <li><a href="./phpislem.php">PHP İşlem</a></li>
                  <li><a href="#">İletişim</a></li>
              </ul>
         </div>
      </header>
    <main>


        <section class="main-slider">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="assets/img/slide-1.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
        </section>
        <section class="main-about">
            <div class="main-about-header">
                  <h1>Hakkımızda</h1>
            </div>
            <div class="main-about-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam magni voluptatibus incidunt quibusdam necessitatibus veritatis itaque numquam sapiente nisi, praesentium sed! Maiores facere odit nesciunt quod officia molestiae fugit ea qui nulla possimus non impedit animi ipsum, optio soluta unde iusto? Deleniti quasi eius qui necessitatibus quam adipisci assumenda.</p>     
            </div>
            <div class="main-about-footer">
                 <button class="main-about-btn">
                     İletişime Geç
                 </button>
            </div>
        </section>
        <section class="main-bize-katilin">
          <div class="main-bize-katilin-left">
            <img src="assets/img/bize-katilin.jpg" alt="">
          </div>

          <div class="main-bize-katilin-right">
            <div class="main-bize-katilin-right-header">
              <h2>Neler Yapıyoruz? </h2>
            </div>
            <div class="main-bize-katilin-right-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi facilis ut ullam earum! Quisquam dolores esse numquam quia minus, ad similique fugiat doloremque labore deleniti alias ipsum ullam, recusandae impedit expedita reprehenderit quam, odit voluptatum nisi obcaecati amet excepturi laborum. Corrupti delectus ea suscipit quia. Dignissimos accusamus modi aut quibusdam.</p>
            </div>
            <div class="main-bize-katilin-right-footer">
              <button class="main-bize-katilin-btn">İletişime Geç</button>

          </div>


        </section>

        <section class="main-referance">
            <div class="main-referance-box"><img src="assets/img/ref1.png" alt=""></div>
            <div class="main-referance-box"><img src="assets/img/ref2.png" alt=""></div>
            <div class="main-referance-box"><img src="assets/img/ref3.png" alt=""></div>
            <div class="main-referance-box"><img src="assets/img/ref4.png" alt=""></div>
        </section>
   
    </main>

    <footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>




