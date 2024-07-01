<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="template/style.css">
    <link rel="stylesheet" href="template/Global Assets/fontawesome-free-6.5.1-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <header class="px-5">
        <div class="sosmed d-none d-lg-inline-flex">
            <p>Follow us:</p>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
        </div>
        <div class="contact d-none d-lg-inline-flex">
            <i class="fa-solid fa-phone"></i>
            <p>+62 813-5267-3477</p>
        </div>
        <div class="gmail d-none d-md-inline-flex">
            <i class="fa-regular fa-envelope"></i>
            <p>myappleid@gmail.com</p>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="mx-2 mx-lg-5">Jastipin Aja</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('product') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('spesification') }}">Specification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                    </li>
                </ul>
                <button class="btn1" data-bs-toggle="modal" data-bs-target="#modalSignin"><i
                        class="fa-regular fa-user"></i>Login / Register</button>
                <a href="{{ url('cart') }}"><button class="btn2"><i
                            class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="{{ url('spesification') }}"><button class="btn3" type="submit"><i
                            class="fa-solid fa-magnifying-glass"></i></button></a>
            </div>
        </div>
    </nav>


    <!-- Keranjang -->

    <section class="container-lg my-5">
        <h1>Keranjang</h1>
        <div class="d-flex flex-row justify-content-between my-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="all" id="checkall" />
                <label class="form-check-label">
                    Pilih Semua
                </label>
            </div>
            <p style="color: red; cursor: pointer" id="delete">Hapus Semua</p>
        </div>

        <div class="d-flex align-items-center justify-content-between my-2 py-4 flex-md-row flex-column gap-5 flex-start width-100"
            style="border-top: 1px solid hsl(202, 47%, 49%);border-bottom: 1px solid #438db8;" id="list-cart">
            <div class="d-flex  gap-4 flex-md-row flex-column">
                <div class="d-flex align-items-center gap-4 flex-row">
                    <input class="form-check-input cb-element" type="checkbox" />
                    <div
                        style="
                height: 200px;
                aspect-ratio: 1/1;
                border-radius: 8px;
                background-color: gray;
                overflow: hidden;
              ">
                        <img src="template/assets/elektronik1.jpg" alt="img_elektronik"
                            style="object-position: center; object-fit: cover; height: 100%;">
                    </div>
                </div>
                <div class="detail-cart d-flex flex-column h-100">
                    <h4>iPhone XS 256 GB - White </h4>
                    <p>harga: Rp 4.120.000,00</p>
                    <h6 class="fs-4" style="color: #438db8;">Rp<span id="price" class="fs-4">4.300.000,00</span>
                    </h6>
                </div>
            </div>

            <div class="d-flex flex-column gap-5">
                <div class="d-flex flex-row gap-4 align-items-center">
                    <h6 class="m-0">Total Harga</h6>
                    <p class="m-0 fs-4 fw-semibold" style="color: #438db8;" id="total">Rp 4.300.000,000</p>
                </div>
                <div class="d-flex flex-row gap-2 align-items-center">
                    <p class="m-0">tulis catatan</p>
                    <button id="decerement" class="btn btn-outline text-black"
                        style="
                                      --bs-btn-padding-y: 0.25rem;
                                      --bs-btn-padding-x: 1rem;
                                      --bs-btn-font-size: 1rem;
                                      --bs-btn-border-color: #438db8;
                                      --bs-btn-hover-border-color: #438db8;
                                    ">-</button>
                    <p class="m-0" id="counter">0</p>
                    <button id="incerement" class="btn btn-outline text-black"
                        style="
                                      --bs-btn-padding-y: 0.25rem;
                                      --bs-btn-padding-x: 1rem;
                                      --bs-btn-font-size: 1rem;
                                      --bs-btn-border-color: #438db8;
                                      --bs-btn-hover-border-color: #438db8;
                                    ">+</button>
                    <a href="{{ url('payment') }}" class="btn btn-primary"
                        style="
                                      --bs-btn-padding-y: 0.25rem;
                                      --bs-btn-padding-x: 1rem;
                                      --bs-btn-font-size: 1rem;
                                      --bs-btn-bg: #438db8;
                                      --bs-btn-border-color: #438db8;
                                      --bs-btn-hover-bg: hsl(202, 47%, 40%);
                                      --bs-btn-hover-border-color: #438db8;
                                    ">Beli</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk lain -->

    <section class="container-lg my-5 py-5">
        <h2 class="mb-4">Produk lain</h2>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
            <div class="col">
                <div class="card h-100" style="box-shadow: 2px 2px 1px 0px rgba(0, 0, 0, 0.1)">
                    <img src="template/assets/sepatu2.jpg" class="card-img-top" alt="img sepatu"
                        style="aspect-ratio: 1/1; object-fit: cover" />
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="card-title-container">
                            <p class="card-title" style="font-size: calc(8px + 0.5vw)">
                                Shoes Sneakers PULL&BEAR
                            </p>
                            <h5 class="card-title mb-4" style="font-size: calc(12px + 0.5vw); color: #438db8">
                                Rp 700.000,00
                            </h5>
                        </div>
                        <div class="btn-container">
                            <a href="{{ url('detailsproduct') }}" class="btn btn-primary stretched-link"
                                style="
                      --bs-btn-padding-y: 0.25rem;
                      --bs-btn-padding-x: 1rem;
                      --bs-btn-font-size: 1rem;
                      --bs-btn-bg: #438db8;
                      --bs-btn-border-color: #438db8;
                      --bs-btn-hover-bg: hsl(202, 47%, 40%);
                      --bs-btn-hover-border-color: #438db8;
                    ">Beli</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100" style="box-shadow: 2px 2px 1px 0px rgba(0, 0, 0, 0.1)">
                    <img src="template/assets/tas1.jpg" class="card-img-top" alt="img tas"
                        style="aspect-ratio: 1/1; object-fit: cover" />
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="card-title-container">
                            <p class="card-title" style="font-size: calc(8px + 0.5vw)">
                                Nylon shoulder bag H&M
                            </p>
                            <h5 class="card-title mb-4" style="font-size: calc(12px + 0.5vw); color: #438db8">
                                Rp. 800.000,00
                            </h5>
                        </div>
                        <div class="btn-container">
                            <a href="{{ url('detailsproduct') }}" class="btn btn-primary stretched-link"
                                style="
                      --bs-btn-padding-y: 0.25rem;
                      --bs-btn-padding-x: 1rem;
                      --bs-btn-font-size: 1rem;
                      --bs-btn-bg: #438db8;
                      --bs-btn-border-color: #438db8;
                      --bs-btn-hover-bg: hsl(202, 47%, 40%);
                      --bs-btn-hover-border-color: #438db8;
                    ">Beli</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100" style="box-shadow: 2px 2px 1px 0px rgba(0, 0, 0, 0.1)">
                    <img src="template/assets/makanan1.jpg" class="card-img-top" alt="img makanan"
                        style="aspect-ratio: 1/1; object-fit: cover" />
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="card-title-container">
                            <p class="card-title" style="font-size: calc(8px + 0.5vw)">
                                Bento Seafood Snack 15 Pack x 25g Sweet Spicy Thai Food
                            </p>
                            <h5 class="card-title mb-4" style="font-size: calc(12px + 0.5vw); color: #438db8">
                                Rp. 50.000,00
                            </h5>
                        </div>
                        <div class="btn-container">
                            <a href="{{ url('detailsproduct') }}" class="btn btn-primary stretched-link"
                                style="
                      --bs-btn-padding-y: 0.25rem;
                      --bs-btn-padding-x: 1rem;
                      --bs-btn-font-size: 1rem;
                      --bs-btn-bg: #438db8;
                      --bs-btn-border-color: #438db8;
                      --bs-btn-hover-bg: hsl(202, 47%, 40%);
                      --bs-btn-hover-border-color: #438db8;
                    ">Beli</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100" style="box-shadow: 2px 2px 1px 0px rgba(0, 0, 0, 0.1)">
                    <img src="template/assets/elektronik1.jpg" class="card-img-top" alt="img elektronik"
                        style="aspect-ratio: 1/1; object-fit: cover" />
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="card-title-container">
                            <p class="card-title" style="font-size: calc(8px + 0.5vw)">
                                iPhone XS 256 GB - White
                            </p>
                            <h5 class="card-title mb-4" style="font-size: calc(12px + 0.5vw); color: #438db8">
                                Rp 4.120.000,00
                            </h5>
                        </div>
                        <div class="btn-container">
                            <a href="{{ url('detailsproduct') }}" class="btn btn-primary stretched-link"
                                style="
                      --bs-btn-padding-y: 0.25rem;
                      --bs-btn-padding-x: 1rem;
                      --bs-btn-font-size: 1rem;
                      --bs-btn-bg: #438db8;
                      --bs-btn-border-color: #438db8;
                      --bs-btn-hover-bg: hsl(202, 47%, 40%);
                      --bs-btn-hover-border-color: #438db8;
                    ">Beli</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100" style="box-shadow: 2px 2px 1px 0px rgba(0, 0, 0, 0.1)">
                    <img src="template/assets/baju1.jpg" class="card-img-top" alt="img baju"
                        style="aspect-ratio: 1/1; object-fit: cover" />
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="card-title-container">
                            <p class="card-title" style="font-size: calc(8px + 0.5vw)">
                                Zara Jewelry Studded Collar Puffy-Sleeved Buttoned Front Top
                            </p>
                            <h5 class="card-title mb-4" style="font-size: calc(12px + 0.5vw); color: #438db8">
                                Rp 200.000,00
                            </h5>
                        </div>
                        <div class="btn-container">
                            <a href="{{ url('detailsproduct') }}" class="btn btn-primary stretched-link"
                                style="
                      --bs-btn-padding-y: 0.25rem;
                      --bs-btn-padding-x: 1rem;
                      --bs-btn-font-size: 1rem;
                      --bs-btn-bg: #438db8;
                      --bs-btn-border-color: #438db8;
                      --bs-btn-hover-bg: hsl(202, 47%, 40%);
                      --bs-btn-hover-border-color: #438db8;
                    ">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <div class="bg-dark text-white ">
        <div class="container-lg">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-4 py-5 mt-5">
                <div class="col mb-3">
                    <a href="" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        <h1 style="color: #438db8;">Jastipin Aja</h1>
                    </a>
                    <p class="text-white">123 Main Street, City, Country</p>
                </div>

                <div class="col mb-3">
                    <h5>Navigasi</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="{{ url('home') }}"
                                class="nav-link p-0 text-white">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="./../index.html"
                                class="nav-link p-0 text-white">Benefits</a>
                        </li>
                        <li class="nav-item mb-2"><a href="./../index.html" class="nav-link p-0 text-white">Best
                                Seller</a></li>
                        <li class="nav-item mb-2"><a href="./../index.html" class="nav-link p-0 text-white">Produk
                                Kami</a></li>
                        <li class="nav-item mb-2"><a href="./../index.html" class="nav-link p-0 text-white">FAQs</a>
                        </li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Informasi</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="./../Contac_Us/index.html"
                                class="nav-link p-0 text-white">Contact Us</a></li>
                        <li class="nav-item mb-2"><a href="./../about/index.html"
                                class="nav-link p-0 text-white">About
                                Us</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Sosial Media</h5>
                    <ul class="nav flex-row ">
                        <li class="nav-item mb-2"><a href="#" class="me-2"><img
                                    src="../assets/ic_facebook.svg" alt="facebook"></a>
                        </li>
                        <li class="nav-item mb-2"><a href="https://www.instagram.com/r.rzkika" class="me-2"><img
                                    src="../assets/ic_instagarm.svg" alt="Instagram"></a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="me-2"><img
                                    src="../assets/ic_twitter.svg" alt="Twitter"></a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
