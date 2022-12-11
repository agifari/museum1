<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css"
        integrity="sha512-SagM1PHxt5mWDyWARVY6UOdhM5A8J+R1UqIWcGfiwOd+be7uHQagB+JQOmfVZF8jjJQqbyuWzw/KXfb4yqjBkQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Bootsrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="loader" class="center-load"></div>
    <div class="animsition" style="height: 100%">
        <div class="exit-button">
            <a href="index.php"
                class="animsition-link btn btn-danger btn-md d-flex align-items-center justify-content-center"
                style="border-radius: 20px; float: right; margin: 5px">X</a>
        </div>
        <div class="detail-field">
            <div class="detail-part-1">
                <div class="row">
                    <div class="col-4">
                        <div class="detail-part-1-left d-flex align-items-center justify-content-center">
                            <img src="Gambar/gambar1.jpg" alt="" style="height: 80%" />
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="detail-part-1-right d-flex align-items-center justify-content-center">
                            <div style="width: 100%;">
                                <div class="mb-3">
                                    <input class="inp" placeholder="Nama Item" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="NAMA ITEM" disabled/>
                                </div>
                                <div class="mb-3">
                                    <input class="inp" placeholder="Nama Item" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="TAHUN Pemakaian ITEM" disabled />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-part-2">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis odit expedita dolorum ducimus modi ex, repellendus necessitatibus voluptate magnam quisquam tempore ullam, hic numquam minima illum adipisci, suscipit inventore! Pariatur?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum labore dolorum ab asperiores quis repudiandae saepe dolor, impedit nemo facilis molestias officia dolorem voluptas neque optio soluta quibusdam delectus aliquam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero commodi veniam numquam inventore laboriosam aliquam nisi itaque velit nesciunt consequuntur necessitatibus minima nam quidem, nobis illum. Dolorem, vitae corporis! Aut?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero commodi veniam numquam inventore laboriosam aliquam nisi itaque velit nesciunt consequuntur necessitatibus minima nam quidem, nobis illum. Dolorem, vitae corporis! Aut?
                </p>
            </div>
        </div>
        <footer class="d-flex align-items-center justify-content-center">
            <div class="footer-mini d-flex align-items-center justify-content-center">
                <span>© 2020 Copyright:
                    <span style="font-weight: bold">Museum Komando Daerah Militer Jayakarta</span></span>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"
        integrity="sha512-pYd2QwnzV9JgtoARJf1Ui1q5+p1WHpeAz/M0sUJNprhDviO4zRo12GLlk4/sKBRUCtMHEmjgqo5zcrn8pkdhmQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Bootsrap 5 js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script src="index.js"></script>

    <script src="transition.js"></script>
</body>

</html>