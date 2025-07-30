<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seen & Sold</title>
    <link rel="icon" type="image/x-icon" href="assets/img/seenandsold.webp">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Swiper CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Top Bar -->
    <div class="d-none d-lg-block top-bar text-white text-center">
        <div class="container d-flex justify-content-between">
            <div class="fs-5"><a href="mailto:hello@seenandsold.in" class="text-decoration-none text-white"><i class="fa fa-envelope me-2"></i> hello@seenandsold.in</a> </div>
            <div class="fs-5">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php"><img src="assets/img/seenandsold.webp" alt="SEEN & SOLD" /></a>
            <button
                class="btn d-lg-none text-warning"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu">
                <i class="fas fa-bars"></i>
            </button>

            <div class="d-none d-lg-flex ms-auto align-items-center">
                <a class="nav-link fs-5 px-4 fw-bold" href="index.php">Home</a>
                <a class="nav-link fs-5 px-4 fw-bold" href="index.php#services">Services</a>
                <a class="nav-link fs-5 px-4 fw-bold" href="faqs.php">How it Works</a>
                <a class="nav-link fs-5 px-4 fw-bold" href="about-us.php">About</a>
                <a class="nav-link fs-5 px-4 fw-bold" href="contact-us.php">Contact Us</a>
                <a class="btn btn-yellow btn-sm fs-5 ms-3" href="javascript:void(0);" data-bs-toggle="modal"
                    data-bs-target="#largeModal">Consult now</a>
                <!-- <a class="btn btn-outline-secondary btn-sm fs-5 ms-2" href="#">Sign in</a> -->
            </div>
        </div>
    </nav>

    <!-- Offcanvas Mobile Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
        <div class="offcanvas-header">
            <a href="index.php">
                <h5 class="offcanvas-title">
                    <img
                        src="assets/img/seenandsold.webp"
                        alt="Logo"
                        style="max-height: 70px"
                        alt="SEEN & SOLD" />
                </h5>
            </a>
            <button
                type="button"
                class="btn-close text-reset"
                data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <a href="index.php"><i class="fa fa-home"></i> Home</a>
            <!-- <a href="#"><i class="fa fa-user"></i> My Profile</a> -->
            <a href="index.php#services"><i class="fa fa-briefcase"></i> Services</a>
            <a href="javascript:void(0);"><i class="fa fa-calendar"></i> My Appointment</a>
            <a href="about-us.php"><i class="fa fa-info-circle"></i> About</a>
            <a href="terms-and-conditions.php"><i class="fa fa-file"></i> Term & Conditions</a>
            <a href="privacy-policy.php"><i class="fa fa-lock"></i> Privacy Policy</a>
            <!-- <a href="#"><i class="fa fa-bullseye"></i> Our Mission</a> -->
            <a href="contact-us.php"><i class="fa fa-comments"></i> Contact Us</a>
            <a href="faqs.php"><i class="fa fa-question-circle"></i> Help & Support</a>
        </div>
    </div>