<?php include 'includes/header.php'; ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--============ === FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets\css\style.css">

    <title>Sarayu Enclave</title>
</head>

<body class="">
    <!--==================== HEADER ====================-->
   

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                     <!-- Background Video -->
                <video autoplay loop muted playsinline class="home__bg-video">
                    <source src="/assets/videos/sarayu1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="home_data">
                    <h1 class="home__value-number2">
                         <span>SARAYU ENCLAVE,</span><br>Discover Most Suitable Properties
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
                                12.3<span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Acres
                            </span>
                        </div>

                        <div>
                            <h1 class="home__value-number">
                                130<span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Plots
                            </span>       
                        </div>

                        <div>
                            <h1 class="home__value-number">
                                40<span>ft</span>
                            </h1>
                            <span class="home__value-description">
                                Main road
                            </span>
                        </div>
                    </div>
                    <div class="home__value">
                        <div>
                            <h1 class="home__value-number">
                                30<span>ft</span>
                            </h1>
                            <span class="home__value-description">
                                Sub Roads
                            </span>
                        </div>

                        <div>
                            <h1 class="home__value-number">
                                47<span>%</span>
                            </h1>
                            <span class="home__value-description">
                                Roads and <br> Open Spaces
                            </span>       
                        </div>

                        <div>
                            <h1 class="home__value-number">
                                10<span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Amenities
                            </span>
                        </div>
                    </div>    
                </div>

                <!-- <div class="home__images">
                    <div class="home__orbe"></div>
                    <div class="home__img">
                        <img src="assets/images/project4.png" alt="">
                    </div>
                </div> -->

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
      src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3851.341416495269!2d76.95731397511669!3d15.139583285413144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTXCsDA4JzIyLjUiTiA3NsKwNTcnMzUuNiJF!5e0!3m2!1sen!2sin!4v1738314716783!5m2!1sen!2sin"
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
          <td>Taranath Hospital</td>
          <td>3 minutes away</td>
        </tr>
        <tr>
          <td>BPSC School</td>
          <td>5 minutes away</td>
        </tr>
        <tr>
          <td>Smart Bazaar</td>
          <td>7 minutes away</td>
        </tr>
        <tr>
          <td>SLN Mall</td>
          <td>10 minutes away</td>
        </tr>
        <tr>
          <td>Royal Circle</td>
          <td>15 minutes away</td>
        </tr>
        <tr>
          <td>Railway Station</td>
          <td>20 minutes away</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>




        <!--==================== VALUE ====================-->
        <section class="value section" id="value">
            <div class="value__container container grid">
            <div class="home__images">
                    <div class="home__orbe"></div>
                    <div class="home__img">
                        <img src="assets/images/project4.png" alt="">
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