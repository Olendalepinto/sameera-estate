<?php include 'includes/header.php'; ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets\css\style.css">

    <title>Responsive Real Estate Website - HTML CSS JAVASCRIPT</title>
</head>

<body class="">
    <!--==================== HEADER ====================-->
   

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home_data">
                    <h1 class="home__title">
                        Discover Most Suitable Properties
                    </h1>
                    <p class="home__description">
                        Find a variety of properties that suit you very easily, forget all difficulties in finding a
                        residence for you
                    </p>

                    <form action="" class="home__search">
                        <i class='bx bx-map'></i>
                        <input type="search" placeholder="Search locations..." class="home__search-input">
                        <button class="button popup-enabled">Search</button>
                    </form>

                    <div class="home__value">
                        <div>
                            <h1 class="home__value-number">
                                9K<span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Premium <br> Product
                            </span>
                        </div>

                        <div>
                            <h1 class="home__value-number">
                                2K<span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Happy <br> Customer
                            </span>       
                        </div>

                        <div>
                            <h1 class="home__value-number">
                                28K<span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Awards <br> Winning
                            </span>
                        </div>
                    </div>
                </div>

                <div class="home__images">
                    <div class="home__orbe"></div>
                    <div class="home__img">
                        <img src="assets/images/project4.png" alt="">
                    </div>
                </div>

            </div>
        </section>

        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <div class="container">
                <span class="section__subtitle">
                    Best Choice
                </span>
                <h2 class="section__title">
                    AME<span>NITIES</span>
                </h2>
                <div class="popular__container swiper">
                    <div class="swiper-wrapper">

                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/i2.png" alt="">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>69,000.0
                                </h2>
                                <h3 class="popular__title">
                                    Garden City Assat
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/seesaw.png" alt="arrr">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>69,000.0
                                </h2>
                                <h3 class="popular__title">
                                    Garden City Assat
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/opengym.png" alt="">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>69,000.0
                                </h2>
                                <h3 class="popular__title">
                                    Garden City Assat
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/streetlight.png" alt="">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>69,000.0
                                </h2>
                                <h3 class="popular__title">
                                    Garden City Assat
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/water.png" alt="">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>69,000.0
                                </h2>
                                <h3 class="popular__title">
                                    Garden City Assat
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/current.png" alt="">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>69,000.0
                                </h2>
                                <h3 class="popular__title">
                                    Garden City Assat
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>

                    </div>
                    <div class="swiper-button-next">
                        <i class='bx bxs-chevron-right'></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class='bx bxs-chevron-left'></i>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== VALUE ====================-->
        <section class="value section" id="value">
            <div class="value__container container grid">
                <div class="value__images">
                    <div class="value__orbe">
                        <div class="value__img">
                            <img src="assets/img/value.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="value__content">
                    <div class="value__data">
                        <span class="section__subtitle">Our Value</span>
                        <h2 class="section__title">Value We Give To <span>You.</span></h2>
                        <p class="value__description">
                            Lorem, ipsum dolor sit amet od?
                            Lorem, ipsum dolor sit amet od?
                            Lorem, ipsum dolor sit amet od?
                        </p>
                    </div>

                    <div class="value__accordion">

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-shield value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Best Interest rates on the market
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Price we provide is lore Lorem ipsum, dolor sit
                                    amet consectetur adipisicing elit. Consequatur
                                    dolorem esse dignissimos
                                </p>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-shield value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Best Interest rates on the market
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Price we provide is lore Lorem ipsum, dolor sit
                                    amet consectetur adipisicing elit. Consequatur
                                    dolorem esse dignissimos
                                </p>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-shield value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Best Interest rates on the market
                                </h3>
                                <div class="value__accordion-arrow">
                                    <!-- <i class='bx bxs-down-arrow'></i> -->
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Price we provide is lore Lorem ipsum, dolor sit
                                    amet consectetur adipisicing elit. Consequatur
                                    dolorem esse dignissimos
                                </p>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-shield value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Best Interest rates on the market
                                </h3>
                                <div class="value__accordion-arrow">
                                    <!-- <i class='bx bxs-down-arrow'></i> -->
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Price we provide is lore Lorem ipsum, dolor sit
                                    amet consectetur adipisicing elit. Consequatur
                                    dolorem esse dignissimos
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        
    </main>

            <!--==================== LOGOS ====================-->
            <!-- <section class="logos section">
                <div class="logos__container container grid">
                    <div class="logos__img">
                        <img src="assets/img/logo1.png" alt="">
                    </div>
                    <div class="logos__img">
                        <img src="assets/img/logo2.png" alt="">
                    </div>
                    <div class="logos__img">
                        <img src="assets/img/logo3.png" alt="">
                    </div>
                    <div class="logos__img">
                        <img src="assets/img/logo4.png" alt="">
                    </div>
                </div>
            </section> -->

            <?php include 'includes/footer.php'; ?>


    <!--========== SCROLL UP ==========-->
    <a href="" class="scrollup" id="scroll-up">
        <i class='bx bxs-chevrons-up'></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src=""></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>