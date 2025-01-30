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
                     <!-- Background Video -->
    <!-- <video autoplay loop muted playsinline class="home__bg-video">
        <source src="assets/videos/sarayu.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video> -->
                <div class="home_data">
                    <h1 class="home__title">
                        Discover Most Suitable Properties
                    </h1>
                    <p class="home__description">
                        Find a variety of properties that suit you very easily, forget all difficulties in finding a
                        residence for you
                    </p>
            
                    <button class="button popup-enabled">
                        <a href="/assets/brochure/SarayuEnclave.pdf" class="nav__link" download>
                            Download Brochure
                        </a>
                    </button>


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
                    Our Speciality
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
                                    Park
                                </h2>
                                
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/seesaw.png" alt="arrr">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    Kids Play Area
                                </h2>
                               
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/opengym.png" alt="">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    Open Gym
                                </h2>
                                
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/streetlight.png" alt="">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    Street Light
                                </h2>
                                
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/water.png" alt="">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    Water Supply
                                </h2>
                                
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img class="popular__img" src="assets/images/current.png" alt="">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    Underground Electrification
                                </h2>
                                
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

        <section class="table-section">
  <h2 class="section__title">Location Details</h2>
  <p class="section__subtitle">Almost close to all Urban Amenities</p>
</section> 
  <!-- Google Maps Embed -->
  <div class="map-wrapper">
  <div class="map-container">
    <iframe 
      class="google-map" 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509366!2d144.95373531531823!3d-37.81627944202154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5df1f9d6b1%3A0x1f0b1c6c9f7d0b0!2sMelbourne%2C%20Australia!5e0!3m2!1sen!2sus!4v1621567781205!5m2!1sen!2sus" 
      allowfullscreen="" 
      loading="lazy">
    </iframe>
  </div>
</div>


  <!-- Table -->
  <section class="table-section">

  <div class="table-container">
    <table class="responsive-table">
      <thead>
        <tr>
          <th>Location</th>
          <th>Distance</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Royal Circle</td>
          <td>10 minutes away</td>
        </tr>
        <tr>
          <td>City Bus Stand</td>
          <td>10 minutes away</td>
        </tr>
        <tr>
          <td>Bus Stand</td>
          <td>10 minutes away</td>
        </tr>
        <tr>
          <td>City Bus Stand</td>
          <td>10 minutes away</td>
        </tr>
      </tbody>
    </table>
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
                        <span class="section__subtitle">Top-Notch</span>
                        <h2 class="section__title">Infra<span>structure</span></h2>
                        <p class="value__description">
                            The present and upcoming infrastructure around <span>SARAYU ENCLAVE</span> assures of a lifestyle that's convenient to the core.
                        </p>
                    </div>

                    <div class="value__accordion">

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-shield value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                Roads & Pathways
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                <ul class="about__list">
                                  <li class="about__list-item">40 ft, 60 ft and  30 ft internal concrete roads.</li>
                                    <li class="about__list-item">Stormwater  drain along the driveway.</li>
                                    <li class="about__list-item">Landscaping on either side of the road.</li>
                                </ul>
                                </p>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-shield value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                Safety & Security
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                <ul class="about__list">
                                  <li class="about__list-item">24/7 security.</li>
                                    <li class="about__list-item">Surrounded with compound wall.</li>
                                </ul> 
                                </p>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-shield value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                Landscaped Features
                                </h3>
                                <div class="value__accordion-arrow">
                                    <!-- <i class='bx bxs-down-arrow'></i> -->
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                <ul class="about__list">
                                  <li class="about__list-item">Well developed park.</li>
                                    <li class="about__list-item">Kids Play Area.</li>
                                    <li class="about__list-item">Open Gym.</li>
                                </ul> 
                                </p>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-shield value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Electrical and Plumbing
                                </h3>
                                <div class="value__accordion-arrow">
                                    <!-- <i class='bx bxs-down-arrow'></i> -->
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                <ul class="about__list">
                                  <li class="about__list-item">Under Ground Electrification.</li>
                                    <li class="about__list-item">Well planned street lights.</li>
                                    <li class="about__list-item">Water Supply for every Plot.</li>
                                    <li class="about__list-item">Under Ground Drains and Open Drains.</li>
                                </ul>
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