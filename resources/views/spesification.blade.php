<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#f8fafc" />
    <title>jastipin Aja</title>
    <link rel="stylesheet" href="Homepage/style.css" />
    <link rel="manifest" href="manifest.json" />
    <link rel="stylesheet" href="Global Assets/fontawesome-free-6.5.1-web/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <header class="px-5">
        <div class="sosmed d-none d-lg-inline-flex">
            <p>Follow us:</p>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
        <div class="text"></div>
        <div class="contact d-none d-lg-inline-flex">
            <i class="fa-solid fa-phone"></i>
            <p>+62 813-5267-3477</p>
        </div>
        <div class="gmail d-none d-md-inline-flex">
            <i class="fa-regular fa-envelope"></i>
            <p>jastipin.aja@gmail.com</p>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-5">
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
                        <a class="nav-link active" aria-current="page" href="{{ url('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('products') }}">Products</a>
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
                <button class="btn1" data-bs-toggle="modal" data-bs-target="#modalSignin">
                    <i class="fa-regular fa-user"></i>Login / Register
                </button>
                <a href="Cart/index.html"><button class="btn2">
                        <i class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="Spesifikasi/index.html"><button class="btn3" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i></button></a>
            </div>
        </div>
    </nav>

    <!-- Modal dialog login -->
    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modalSignin">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-5 pt-0">
                    <form class="me-0">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="floatingInput"
                                placeholder="name@example.com" />
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingPassword"
                                placeholder="Password" />
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                            Login
                        </button>
                        <small class="text-body-secondary">By clicking Login, you agree to the terms of
                            use.</small>
                        <hr class="my-4" />
                        <h2 class="fs-5 fw-bold mb-3">atau login dengan</h2>
                        <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                            <i class="fa-brands fa-twitter" style="color: #74c0fc"></i>
                            Sign up with Twitter
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                            <i class="fa-brands fa-facebook" style="color: #1a9cff"></i>
                            Sign up with Facebook
                        </button>
                        <br />
                        <br />
                        <small class="text-body-secondary">Belum punya akun?
                            <a href="Daftar/index.html">Daftar sekarang</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/gambar1.jpg" class="d-block w-100" alt="img_banner" style="object-fit: cover" />
                <div class="carousel-caption d-none d-md-block">
                    <h1>Enhance Your Life with Comfort and Style</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/gambar1.jpg" class="d-block w-100" alt="img_banner" style="object-fit: cover" />
                <div class="carousel-caption d-none d-md-block">
                    <h1>Enhance Your Life with Comfort and Style</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/gambar1.jpg" class="d-block w-100" alt="img_banner" style="object-fit: cover" />
                <div class="carousel-caption d-none d-md-block">
                    <h1>Enhance Your Life with Comfort and Style</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="container-lg py-5" id="benefits">
        <div class="row py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col text-center">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center mb-3">
                    <img src="../assets/ic_delivery.svg" alt="ic delivery" />
                </div>
                <h3 class="fs-2 text-body-emphasis">Gratis Ongkir</h3>
                <p class="fs-5">
                    tanpa menambahkan biaya tambahan ongkir. S&K berlaku.
                </p>
            </div>
            <div class="feature col text-center">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center mb-3">
                    <img src="../assets/ic_agreement.svg" alt="ic agreement" />
                </div>
                <h3 class="fs-2 text-body-emphasis">Terpercaya</h3>
                <p class="fs-5">
                    Proses pembayaran yang aman untuk melindungi uang kamu.
                </p>
            </div>
            <div class="feature col text-center">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center mb-3">
                    <img src="../assets/ic_shield.svg" alt="ic shield" />
                </div>
                <h3 class="fs-2 text-body-emphasis">Bergaransi</h3>
                <p class="fs-5">
                    Dengan garansi kamu akan lebih tenang dengan jasa jastip
                    kami.
                </p>
            </div>
        </div>
    </section>

    <!-- Best seller Products -->

    <section class="container-lg my-5 text-center">
        <h2 class="mb-5" id="bestseller">Produk Best Seller Toko Kami</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mx-3 mx-lg-5">
            <div class="col">
                <div class="card h-100" style="box-shadow: 2px 2px 1px 0px rgba(0, 0, 0, 0.1)">
                    <img src="../assets/makanan1.jpg" class="card-img-top" alt="img makanan"
                        style="aspect-ratio: 1/1; object-fit: cover" />
                    <div class="card-body">
                        <h6 class="card-title" style="font-size: calc(12px + 0.5vw)">
                            Bento Seafood Snack 15 Pack x 25g Sweet Spicy
                            Thai Food
                        </h6>
                        <h5 class="card-title mb-4"
                            style="
                                    font-size: calc(12px + 0.5vw);
                                    color: #438db8;
                                ">
                            Rp.50.000,00
                        </h5>
                        <a href="DetailProducts/index.html" class="btn btn-primary stretched-link"
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
            <div class="col">
                <div class="card h-100" style="box-shadow: 2px 2px 1px 0px rgba(0, 0, 0, 0.1)">
                    <img src="../assets/baju1.jpg" class="card-img-top" alt="img baju"
                        style="aspect-ratio: 1/1; object-fit: cover" />
                    <div class="card-body">
                        <h6 class="card-title" style="font-size: calc(12px + 0.5vw)">
                            Zara Jewelry Studded Collar Puffy-Sleeved
                            Buttoned Front Top
                        </h6>
                        <h5 class="card-title mb-4"
                            style="
                                    font-size: calc(12px + 0.5vw);
                                    color: #438db8;
                                ">
                            Rp 200.000,00
                        </h5>
                        <a href="DetailProducts/index.html" class="btn btn-primary stretched-link"
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
            <div class="col">
                <div class="card h-100" style="box-shadow: 2px 2px 1px 0px rgba(0, 0, 0, 0.1)">
                    <img src="../assets/elektronik1.jpg" class="card-img-top" alt="img elektronik"
                        style="aspect-ratio: 1/1; object-fit: cover" />
                    <div class="card-body">
                        <h6 class="card-title" style="font-size: calc(12px + 0.5vw)">
                            iPhone XS 256 GB - White
                        </h6>
                        <h5 class="card-title mb-4"
                            style="
                                    font-size: calc(12px + 0.5vw);
                                    color: #438db8;
                                ">
                            Rp 4.120.000,00
                        </h5>
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
    </section>

    <!-- Other Products -->

    <section class="container-lg my-5">
        <h2 class="mb-4">Produk Jastip Lain</h2>
        <div class="text-center my-5">
            <a href="Products/index.html" class="btn btn-outline-dark">Lihat Lebih Banyak</a>
        </div>
    </section>

    <section class="container-lg text-center my-5">
        <h1>Tersedia juga di marketplace favorit kamu</h1>
        <img src="../assets/ic_shopee.svg" alt="icon shopee" class="mx-5 my-3 my-lg-5" />
        <img src="../assets/ic_tokped.svg" alt="icon tokopedia" class="mx-5 my-3 my-lg-5" />
    </section>

    <!-- Accordion -->

    <section class="container-lg my-5 text-center d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-5" id="faq">FAQs</h1>
        <div class="accordion w-75" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong>Apakah produk jastip yang dijual asli?</strong>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Ya, kami hanya membeli produk asli yang resmi
                        didistribusikan oleh toko terpercaya. Setiap produk
                        yang kami jual telah melewati proses verifikasi
                        keaslian produk.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>Bagaimana cara melakukan pembayaran?</strong>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Kami menerima pembayaran melalui berbagai metode,
                        termasuk kartu kredit, transfer bank, dan metode
                        pembayaran online lainnya. Detail pembayaran akan
                        diberikan pada saat checkout.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Apakah ada biaya tambahan yang harus saya
                            bayar?</strong>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Selain harga produk, Anda mungkin dikenakan biaya
                        pengiriman sesuai dengan lokasi pengiriman Anda.
                        Biaya pengiriman akan diinformasikan pada saat
                        checkout sebelum Anda menyelesaikan pembelian.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <div class="bg-dark text-white">
        <div class="container-lg">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-4 py-5 mt-5">
                <div class="col mb-3">
                    <a href="" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        <h1 style="color: #438db8">Jastipin Aja</h1>
                    </a>
                    <p class="text-white">123 Main Street, City, Country</p>
                </div>

                <div class="col mb-3">
                    <h5>Navigasi</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="Homepage/index.html" class="nav-link p-0 text-white">Home</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#benefits" class="nav-link p-0 text-white">Benefits</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#bestseller" class="nav-link p-0 text-white">Best Seller</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="Products/index.html" class="nav-link p-0 text-white">Produk Kami</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#faq" class="nav-link p-0 text-white">FAQs</a>
                        </li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Informasi</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="Contac_Us/index.html" class="nav-link p-0 text-white">Contact Us</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="about/index.html" class="nav-link p-0 text-white">About Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Sosial Media</h5>
                    <ul class="nav flex-row">
                        <li class="nav-item mb-2">
                            <a href="#" class="me-2"><img src="../assets/ic_facebook.svg"
                                    alt="facebook" /></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="https://www.instagram.com/r.rzkika" class="me-2"><img
                                    src="../assets/ic_instagarm.svg" alt="facebook" /></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="me-2"><img src="../assets/ic_twitter.svg"
                                    alt="facebook" /></a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <script>
        window.addEventListener("load", () => {
            if ("serviceWorker" in navigator) {
                navigator.serviceWorker.register("sw.js");
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
