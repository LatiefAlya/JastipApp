<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Jastipin Aja.</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="./../Global Assets/fontawesome-free-6.5.1-web/css/all.min.css" />
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
                        <a class="nav-link active" href="{{ url('contact') }}">Contact us</a>
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
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Login</button>
                        <small class="text-body-secondary">By clicking Login, you agree to the terms of use.</small>
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
                        <small class="text-body-secondary">Belum punya akun? <a href="./../Daftar/index.html">Daftar
                                sekarang</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel -->

    <div id="carouselExampleCaptions" class="carousel slide container-fluid" data-bs-ride="carousel">
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
                <img src="../assets/gambar1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/gambar1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/gambar1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h1>Contact</h1>
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

    <!-- Contac US -->
    <div class="container">
        <h1>Contact Us</h1>
        <h1 class="brand">Jastipin Aja</h1>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="info-box col">
                <i class="fas fa-phone" style="font-size: 20px"></i>
                <div>
                    <h2>Phone</h2>
                    <p>+62 813-5267-3477</p>
                </div>
            </div>

            <div class="info-box col">
                <i class="far fa-envelope" style="font-size: 20px"></i>
                <div>
                    <h2>Email</h2>
                    <p>jastipin.aja@gmail.com</p>
                </div>
            </div>

            <div class="info-box col">
                <i class="fas fa-map-marker-alt" style="font-size: 20px"></i>
                <div>
                    <h2>Location</h2>
                    <p>123 Main Street, City, Country</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="formContac">
            <div class="container">
                <h1>Let's talk about</h1>
                <h1 class="brand">Jastipin Aja</h1>
            </div>
            <h6>Tanya apapun seputar kami</h6>

            <!-- 2 bagian -->
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <div class="formUs">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" placeholder="Nama Kamu"
                                    name="nama" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email Kamu"
                                    name="email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nomor" placeholder="Nomor Kamu"
                                    name="nomor" />
                            </div>
                            <div class="text-area">
                                <textarea class="form-control" id="pesan" placeholder="Pesan" name="pesan"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="additional-content">
                        <img src="../assets/tanya.jpg" alt="Gambar" />
                        <p>Submit Pertanyaan Kamu di bawah ini ya!</p>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <li class="nav-item mb-2"><a href="./../index.html" class="nav-link p-0 text-white">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="./../index.html"
                                class="nav-link p-0 text-white">Benefits</a></li>
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
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact Us</a>
                        </li>
                        <li class="nav-item mb-2"><a href="./../about/index.html"
                                class="nav-link p-0 text-white">About Us</a></li>
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
                                    src="../assets/ic_instagarm.svg" alt="instagram" /></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="me-2"><img src="../assets/ic_twitter.svg"
                                    alt="twitter" /></a>
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
