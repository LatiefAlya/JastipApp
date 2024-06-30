<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar - Jastipin</title>
    <link rel="stylesheet" href="template/style.css">
    <link rel="stylesheet" href="template/Global Assets/fontawesome-free-6.5.1-web/css/all.min.css">
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
        <div class="contact d-none d-lg-inline-flex">
            <i class="fas fa-phone"></i>
            <p>+62 813-5267-3477</p>
        </div>
        <div class="gmail d-none d-md-inline-flex">
            <i class="far fa-envelope"></i>
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
                <a href="./../Cart/index.html"><button class="btn2"><i
                            class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="./../Spesifikasi/index.html"><button class="btn3" type="submit"><i
                            class="fa-solid fa-magnifying-glass"></i></button></a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Product Details Section -->
                <section class="related-products bg-light p-4 mb-4">
                    <div class="product-item mb-3 d-flex align-items-center">
                        <img src="assets/baju1.jpg" class="img-thumbnail me-3" alt="" width="50%">
                        <div>
                            <h5>VL14797 New Zara mint green eyelet button puff sleeve top</h5>
                            <h5 style="color: #438db8;">Rp 200.000,00</h5>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <!-- Summary Section -->
                <section class="product-summary bg-light p-4 mb-4 overflow-auto">
                    <h2 class="mb-4">Ringkasan Belanja</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Fee</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Zara mint green eyelet button puff sleeve top</td>
                                <td>Rp 200.000,00</td>
                                <td>1</td>
                                <td>Rp 75.000,00</td>
                                <td>Rp 275.000,00</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="total-price">
                        <p>Total Belanja (1 barang)</p>
                        <p>Rp 275.000,00</p>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-lg mt-4">Bayar</button>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <!-- Shipping and Payment Section -->
                <section class="shipping-payment bg-light p-4 mb-4">
                    <h2 class="mb-4">Pengiriman dan Pembayaran</h2>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="shipping-method" class="form-label">Pilih Pengiriman</label>
                                <select class="form-select" name="shipping-method" id="shipping-method">
                                    <option value="regular">Regular</option>
                                    <option value="regular">Hemat</option>
                                    <option value="regular">Instant</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="courier" class="form-label">Pilih Kurir</label>
                                <select class="form-select" name="courier" id="courier">
                                    <option value="jne">JNT</option>
                                    <option value="tiki">JNE</option>
                                    <option value="pos">Shopee</option>
                                </select>
                                <p class="lead">Estimasi tiba 22 - 23 Mar</p>
                            </div>
                        </div>
                        <div class="payment-method mb-4">
                            <label for="payment-method">Pilih Pembayaran</label>
                            <select class="form-select" name="payment-method" id="payment-method">
                                <option value="bca-va">BCA Virtual Account</option>
                                <option value="bri-va">BRI Virtual Account</option>
                                <option value="mandiri-va">Mandiri Virtual Account</option>
                                <option value="ovo">OVO</option>
                            </select>
                        </div>
                    </form>
                </section>
            </div>
        </div>

        <!-- Other Products -->
        <section class="container-lg my-5 py-5">
            <h2 class="mb-4">Produk lain</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
                <div class="col">
                    <div class="card h-100" style="box-shadow: 2px 2px 1px 0px rgba(0, 0, 0, 0.1)">
                        <img src="./assets/elektronik1.jpg" class="card-img-top" alt="img elektronik"
                            style="aspect-ratio: 1/1; object-fit: cover" />
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="card-title-container">
                                <p class="card-title" style="font-size: calc(8px + 0.5vw)">
                                    iPhone XS 256 GB - White
                                </p>
                                <h5 class="card-title mb-4" style="font-size: calc(12px + 0.5vw); color: #438db8">
                                    Rp 4.120.000
                                </h5>
                            </div>
                            <div class="btn-container">
                                <a href="./../Products/index.html" class="btn btn-primary stretched-link"
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
                        <img src="./assets/makanan1.jpg" class="card-img-top" alt="img makanan"
                            style="aspect-ratio: 1/1; object-fit: cover" />
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="card-title-container">
                                <p class="card-title" style="font-size: calc(8px + 0.5vw)">
                                    Bento Seafood Snack 15 Pack x 25g Sweet Spicy Thai Food
                                </p>
                                <h5 class="card-title mb-4" style="font-size: calc(12px + 0.5vw); color: #438db8">
                                    Rp 50.000,00
                                </h5>
                            </div>
                            <div class="btn-container">
                                <a href="./../Products/index.html" class="btn btn-primary stretched-link"
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
                        <img src="../assets/sepatu2" class="card-img-top" alt="img sepatu"
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
                                <a href="./../Products/index.html" class="btn btn-primary stretched-link"
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
                        <img src="../assets/tas1.jpg" class="card-img-top" alt="img tas"
                            style="aspect-ratio: 1/1; object-fit: cover" />
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="card-title-container">
                                <p class="card-title" style="font-size: calc(8px + 0.5vw)">
                                    Nylon shoulder bag H&M
                                </p>
                                <h5 class="card-title mb-4" style="font-size: calc(12px + 0.5vw); color: #438db8">
                                    Rp 800.000,00
                                </h5>
                            </div>
                            <div class="btn-container">
                                <a href="./../Products/index.html" class="btn btn-primary stretched-link"
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
                        <img src="../assets/img_iPad5.svg" class="card-img-top" alt="img elektronik"
                            style="aspect-ratio: 1/1; object-fit: cover" />
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="card-title-container">
                                <p class="card-title" style="font-size: calc(8px + 0.5vw)">
                                    Apple iPad Air (Gen 5) 64GB Garansi Resmi - Gray
                                </p>
                                <h5 class="card-title mb-4" style="font-size: calc(12px + 0.5vw); color: #438db8">
                                    Rp7.900.000
                                </h5>
                            </div>
                            <div class="btn-container">
                                <a href="./../Products/index.html" class="btn btn-primary stretched-link"
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
    </div>
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
                        <li class="nav-item mb-2"><a href="./../index.html" class="nav-link p-0 text-white">Home</a>
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
                                    src="./assets/ic_facebook.svg" alt="facebook"></a>
                        </li>
                        <li class="nav-item mb-2"><a href="https://www.instagram.com/bangrez_apple"
                                class="me-2"><img src="./assets/ic_instagarm.svg" alt="facebook"></a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="me-2"><img
                                    src="./assets/ic_twitter.svg" alt="facebook"></a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
