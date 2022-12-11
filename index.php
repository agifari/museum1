<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css"
      integrity="sha512-SagM1PHxt5mWDyWARVY6UOdhM5A8J+R1UqIWcGfiwOd+be7uHQagB+JQOmfVZF8jjJQqbyuWzw/KXfb4yqjBkQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--Bootsrap 5 CSS-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div id="loader" class="center-load"></div>
    <div class="animsition" style="height: 100%">
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a class="animsition-link" href="detail.php"
              ><img src="Gambar/gambar1.jpg" alt=""
            /></a>
          </div>
          <div class="swiper-slide">
            <img src="Gambar/gambar2.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="Gambar/gambar3.jpeg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="Gambar/gambar1.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="Gambar/gambar2.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="Gambar/gambar3.jpeg" alt="" />
          </div>
        </div>
        <div class="swiper-button-next" style="color: #faeab1"></div>
        <div class="swiper-button-prev" style="color: #faeab1" s></div>
        <div class="swiper-pagination" style="color: #faeab1"></div>
      </div>
      <footer class="d-flex align-items-center justify-content-center">
        <div
          class="footer-mini d-flex align-items-center justify-content-center"
        >
          <span
            >© 2022 Copyright:
            <span style="font-weight: bold"
              >Museum Komando Daerah Militer Jayakarta</span
            ></span
          >
        </div>
      </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"
      integrity="sha512-pYd2QwnzV9JgtoARJf1Ui1q5+p1WHpeAz/M0sUJNprhDviO4zRo12GLlk4/sKBRUCtMHEmjgqo5zcrn8pkdhmQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!--Bootsrap 5 js-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script src="index.js"></script>

    <script src="transition.js"></script>
  </body>
</html>
