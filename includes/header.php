<?php 
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
<header class="header" id="header">
        <nav class="nav container">
        <a href="" class="nav__logo">
            <img src="../assets/images/logo.png" alt="Logo" class="nav__logo-img">
        </a>

            <div class="nav__menu">
                <ul class="nav__list">

                <li class="nav__item">
                    <a href="../index.php" class="nav__link <?php echo ($current_page === 'index.php') ? 'active-link' : ''; ?>">
                    <i class='bx bx-home-alt-2'></i>
                    <span>Home</span>
                    </a>
                </li>

                    <li class="nav__item">
                        <a href="/pages/about.php" class="nav__link <?php echo ($current_page == 'about.php') ? 'active-link' : ''; ?>">
                        <i class="bx bx-group"></i>
                        <span>About</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="/pages/contact.php" class="nav__link <?php echo ($current_page == 'contact.php') ? 'active-link' : ''; ?>">
                            <i class='bx bx-phone'></i>
                            <span>Contact</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="/assets/brochure/SarayuEnclave.pdf" class="nav__link" target="_blank">
                            <i class='bx bxs-file'></i>
                            <span>Brochure</span>
                        </a>
                    </li>

                </ul>
            </div>

            <i class="bx bx-moon change-theme" id="theme-button"></i>

            <!-- <a href="#" class="button nav__button">Subscribe</a> -->

        </nav>

    </header>
     <!--========== SCROLL UP ==========-->
     <a href="" class="scrollup" id="scroll-up">
        <i class='bx bxs-chevrons-up'></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src=""></script>

    <!--=============== SWIPER JS ===============-->
    <script src="../assets/js/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <!--=============== MAIN JS ===============-->
</body>
</html>

