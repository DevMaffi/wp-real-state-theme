<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?= bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon" />
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <title>
    <?php
    bloginfo('name');
    echo ' | ';
    bloginfo('description');
    ?>
  </title>

  <?php
  wp_head();
  ?>
</head>

<!-- BODY -->

<body>

  <!-- MAIN -->
  <main class="main">

    <!-- HEADER -->
    <header class="header" id="header">

      <!-- NAV CONTAINER -->
      <nav class="nav container">
        <a class="nav__logo" href="#home">
          Holux
          <i class="bx bxs-home-alt-2"></i>
        </a>

        <!-- NAV MENU -->
        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a class="nav__link active-link" href="#home">
                <i class="bx bx-home-alt-2"></i>
                <span>Home</span>
              </a>
            </li>
            <li class="nav__item">
              <a class="nav__link null" href="#popular">
                <i class="bx bx-building-house"></i>
                <span>Residences</span>
              </a>
            </li>
            <li class="nav__item">
              <a class="nav__link null" href="#value">
                <i class="bx bx-award"></i>
                <span>Value</span>
              </a>
            </li>
            <li class="nav__item">
              <a class="nav__link null" href="#contact">
                <i class="bx bx-phone"></i>
                <span>Contact</span>
              </a>
            </li>
          </ul>
        </div>
        <i class="change__theme bx bx-moon" id="theme-button"></i>
        <a class="button nav__button" href="#">Subscribe</a>
      </nav>
    </header>

    <!-- HOME -->
    <section class="home section" id="home">

      <!-- HOME CONTAINER -->
      <div class="home__container container grid">

        <!-- HOME DATA -->
        <div class="home__data">
          <h1 class="home__title">
            Discover
            <br />
            Most Suitable
            <br />
            Property
          </h1>
          <p class="home__description">
            Find a variety of properties that suit you very easily, forget all difficulties in finding a residence for you
          </p>

          <!-- HOME SEARCH -->
          <form class="home__search" action="#">
            <i class="bx bxs-map"></i>
            <input class="home__search-input" type="search" placeholder="Search by location">
            <button class="button">Search</button>
          </form>

          <!-- HOME VALUE -->
          <div class="home__value">
            <div>
              <h2 class="home__value-number">
                9K
                <span>+</span>
              </h2>
              <span class="home__value-description">
                Premium
                <br />
                Product
              </span>
            </div>
            <div>
              <h2 class="home__value-number">
                28K
                <span>+</span>
              </h2>
              <span class="home__value-description">
                Happy
                <br />
                Customers
              </span>
            </div>
            <div>
              <h2 class="home__value-number">
                2K
                <span>+</span>
              </h2>
              <span class="home__value-description">
                Awards
                <br />
                Winning
              </span>
            </div>
          </div>
        </div>

        <!-- HOME IMAGES -->
        <div class="home__images">
          <div class="home__orbe"></div>
          <div class="home__img">
            <img src="<?= bloginfo('template_url'); ?>/assets/images/home.jpg" alt="home image">
          </div>
        </div>
      </div>
    </section>

    <!-- LOGOS -->
    <section class="logos section">

      <!-- LOGOS CONTAINER -->
      <div class="logos__container container grid">
        <div class="logos__img">
          <img src="<?= bloginfo('template_url'); ?>/assets/images/logo1.png" alt="logo">
        </div>
        <div class="logos__img">
          <img src="<?= bloginfo('template_url'); ?>/assets/images/logo2.png" alt="logo">
        </div>
        <div class="logos__img">
          <img src="<?= bloginfo('template_url'); ?>/assets/images/logo3.png" alt="logo">
        </div>
        <div class="logos__img">
          <img src="<?= bloginfo('template_url'); ?>/assets/images/logo4.png" alt="logo">
        </div>
      </div>
    </section>

    <!-- POPULAR -->
    <section class="popular section" id="popular">

      <!-- CONTAINER -->
      <div class="container">
        <span class="section__subtitle">Best Choice</span>
        <h2 class="section__title">
          Popular Residences
          <span>.</span>
        </h2>

        <!-- POPULAR CONTAINER -->
        <div class="popular__container swiper">
          <div class="swiper-wrapper">

            <!-- POPULAR CARD -->
            <article class="popular__card swiper-slide">
              <img class="popular__img" src="<?= bloginfo('template_url'); ?>/assets/images/popular1.jpg" alt="popular">

              <!-- POPULAR DATA -->
              <div class="popular__data">
                <h2 class="popular__price">
                  <span>$</span>
                  66,356
                </h2>
                <h3 class="popular__title">Garden City Assat</h3>
                <p class="popular__description">
                  Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                </p>
              </div>
            </article>

            <!-- POPULAR CARD -->
            <article class="popular__card swiper-slide">
              <img class="popular__img" src="<?= bloginfo('template_url'); ?>/assets/images/popular2.jpg" alt="popular">

              <!-- POPULAR DATA -->
              <div class="popular__data">
                <h2 class="popular__price">
                  <span>$</span>
                  35,159
                </h2>
                <h3 class="popular__title">Gables Luxurious House</h3>
                <p class="popular__description">
                  Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                </p>
              </div>
            </article>

            <!-- POPULAR CARD -->
            <article class="popular__card swiper-slide">
              <img class="popular__img" src="<?= bloginfo('template_url'); ?>/assets/images/popular3.jpg" alt="popular">

              <!-- POPULAR DATA -->
              <div class="popular__data">
                <h2 class="popular__price">
                  <span>$</span>
                  75,043
                </h2>
                <h3 class="popular__title">Garden Orchard City</h3>
                <p class="popular__description">
                  Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                </p>
              </div>
            </article>

            <!-- POPULAR CARD -->
            <article class="popular__card swiper-slide">
              <img class="popular__img" src="<?= bloginfo('template_url'); ?>/assets/images/popular4.jpg" alt="popular">

              <!-- POPULAR DATA -->
              <div class="popular__data">
                <h2 class="popular__price">
                  <span>$</span>
                  62,024
                </h2>
                <h3 class="popular__title">Luxurious City Garden</h3>
                <p class="popular__description">
                  Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                </p>
              </div>
            </article>

            <!-- POPULAR CARD -->
            <article class="popular__card swiper-slide">
              <img class="popular__img" src="<?= bloginfo('template_url'); ?>/assets/images/popular5.jpg" alt="popular">

              <!-- POPULAR DATA -->
              <div class="popular__data">
                <h2 class="popular__price">
                  <span>$</span>
                  47,043
                </h2>
                <h3 class="popular__title">Aliva Private Garden</h3>
                <p class="popular__description">
                  Street The Garden City Of Miraflores, Lima - Perú Av. Sol #9876
                </p>
              </div>
            </article>
          </div>

          <!-- SWIPER NAVIGATION -->
          <div class="swiper-button-prev">
            <i class="bx bx-chevron-left"></i>
          </div>
          <div class="swiper-button-next">
            <i class="bx bx-chevron-right"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- VALUE -->
    <section class="value section" id="value">

      <!-- VALUE CONTAINER -->
      <div class="value__container container grid">

        <!-- VALUES IMAGES -->
        <div class="value__images">
          <div class="value__orbe"></div>
          <div class="value__img">
            <img src="<?= bloginfo('template_url'); ?>/assets/images/value.jpg" alt="value image">
          </div>
        </div>

        <!-- VALUE CONTENT -->
        <div class="value__content">

          <!-- VALUE DATA -->
          <div class="value__data">
            <span class="section__subtitle">Our Value</span>
            <h2 class="section__title">
              Value We Give To You
              <span>.</span>
            </h2>
            <p class="value__description">
              We always ready to help by providing the best service for you. We believe a good place to live can make your life better.
            </p>
          </div>

          <!-- VALUE ACCORDION -->
          <div class="value__accordion">

            <!-- ACCORDION ITEM -->
            <div class="value__accordion-item">

              <!-- ACCORDION HEADER -->
              <header class="value__accordion-header">
                <i class="value__accordion-icon bx bxs-shield-x"></i>
                <h3 class="value__accordion-title">
                  Best interest rates on the market
                </h3>
                <div class="value__accordion-arrow">
                  <i class="bx bxs-down-arrow"></i>
                </div>
              </header>

              <!-- ACCORDION CONTENT -->
              <div class="value__accordion-content">
                <p class="value__accordion-description">
                  Price we provides is the best for you, we guarantee no price changes on your property due to various unexpected costs that may come.
                </p>
              </div>
            </div>

            <!-- ACCORDION ITEM -->
            <div class="value__accordion-item">

              <!-- ACCORDION HEADER -->
              <header class="value__accordion-header">
                <i class="value__accordion-icon bx bxs-x-square"></i>
                <h3 class="value__accordion-title">
                  Prevent unstable prices
                </h3>
                <div class="value__accordion-arrow">
                  <i class="bx bxs-down-arrow"></i>
                </div>
              </header>

              <!-- ACCORDION CONTENT -->
              <div class="value__accordion-content">
                <p class="value__accordion-description">
                  Price we provides is the best for you, we guarantee no price changes on your property due to various unexpected costs that may come.
                </p>
              </div>
            </div>

            <!-- ACCORDION ITEM -->
            <div class="value__accordion-item">

              <!-- ACCORDION HEADER -->
              <header class="value__accordion-header">
                <i class="value__accordion-icon bx bxs-bar-chart-square"></i>
                <h3 class="value__accordion-title">
                  Best prices on the market
                </h3>
                <div class="value__accordion-arrow">
                  <i class="bx bxs-down-arrow"></i>
                </div>
              </header>

              <!-- ACCORDION CONTENT -->
              <div class="value__accordion-content">
                <p class="value__accordion-description">
                  Price we provides is the best for you, we guarantee no price changes on your property due to various unexpected costs that may come.
                </p>
              </div>
            </div>

            <!-- ACCORDION ITEM -->
            <div class="value__accordion-item">

              <!-- ACCORDION HEADER -->
              <header class="value__accordion-header">
                <i class="value__accordion-icon bx bxs-check-square"></i>
                <h3 class="value__accordion-title">
                  Security of your data
                </h3>
                <div class="value__accordion-arrow">
                  <i class="bx bxs-down-arrow"></i>
                </div>
              </header>

              <!-- ACCORDION CONTENT -->
              <div class="value__accordion-content">
                <p class="value__accordion-description">
                  Price we provides is the best for you, we guarantee no price changes on your property due to various unexpected costs that may come.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section class="contact section" id="contact">

      <!-- CONTACT CONTAINER -->
      <div class="contact__container container grid">

        <!-- CONTACT IMAGES -->
        <div class="contact__images">
          <div class="contact__orbe"></div>
          <div class="contact__img">
            <img src="<?= bloginfo('template_url'); ?>/assets/images/contact.png" alt="contact image">
          </div>
        </div>

        <!-- CONTACT CONTENT -->
        <div class="contact__content">

          <!-- CONTACT DATA -->
          <div class="contact__data"><span class="section__subtitle">Contact Us</span>
            <h3 class="section__title">
              Easy to Contact us
              <span>.</span>
            </h3>
            <div class="contact__description">
              Is there a problem finding your dream home? Need a guide in buying first home? or need a consultation on residential issues? just contact us.
            </div>
          </div>

          <!-- CONTACT CARD -->
          <div class="contact__card">

            <!-- CARD BOX -->
            <div class="contact__card-box">

              <!-- CARD INFO  -->
              <div class="contact__card-info">
                <i class="bx bxs-phone-call"></i>
                <div>
                  <h3 class="contact__card-title">Call</h3>
                  <p class="contact__card-description">
                    022.321.165.19
                  </p>
                </div>
              </div>
              <button class="button contact__card-button">
                Call Now
              </button>
            </div>

            <!-- CARD BOX -->
            <div class="contact__card-box">

              <!-- CARD INFO  -->
              <div class="contact__card-info">
                <i class="bx bxs-message-rounded-dots"></i>
                <div>
                  <h3 class="contact__card-title">Chat</h3>
                  <p class="contact__card-description">
                    022.321.165.19
                  </p>
                </div>
              </div>
              <button class="button contact__card-button">
                Chat Now
              </button>
            </div>

            <!-- CARD BOX -->
            <div class="contact__card-box">

              <!-- CARD INFO  -->
              <div class="contact__card-info">
                <i class="bx bxs-video"></i>
                <div>
                  <h3 class="contact__card-title">Video Call</h3>
                  <p class="contact__card-description">
                    022.321.165.19
                  </p>
                </div>
              </div>
              <button class="button contact__card-button">
                Video Call Now
              </button>
            </div>

            <!-- CARD BOX -->
            <div class="contact__card-box">

              <!-- CARD INFO  -->
              <div class="contact__card-info">
                <i class="bx bxs-envelope"></i>
                <div>
                  <h3 class="contact__card-title">Message</h3>
                  <p class="contact__card-description">
                    022.321.165.19
                  </p>
                </div>
              </div>
              <button class="button contact__card-button">
                Message Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SUBSCRIBE -->
    <section class="subscribe section">

      <!-- SUBSCRIBE CONTAINER -->
      <div class="subscribe__container container">
        <h2 class="subscribe__title">Get Started with Holux</h2>
        <p class="subscribe__description">
          Subscribe and find super attractive price quotes from us, Find your residence soon
        </p>
        <a class="button subscribe__button" href="#">Get Started</a>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer section">

      <!-- FOOTER CONTAINER -->
      <div class="footer__container container grid">
        <div>
          <a class="footer__logo" href="#home">
            Holux
            <i class="bx bxs-home-alt-2"></i>
          </a>
          <p class="footer__description">
            Our vision is to make all people
            <br />
            the best place to live for them.
          </p>
        </div>

        <!-- FOOTER CONTENT -->
        <div class="footer__content">
          <div>
            <h3 class="footer__title">About</h3>

            <!-- FOOTER LINKS -->
            <ul class="footer__links">
              <li>
                <a class="footer__link" href="#">About Us</a>
              </li>
              <li>
                <a class="footer__link" href="#">Features</a>
              </li>
              <li>
                <a class="footer__link" href="#">News &amp; Blog</a>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="footer__title">Company</h3>

            <!-- FOOTER LINKS -->
            <ul class="footer__links">
              <li>
                <a class="footer__link" href="#">How We Work?</a>
              </li>
              <li>
                <a class="footer__link" href="#">Capital</a>
              </li>
              <li>
                <a class="footer__link" href="#">Security</a>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="footer__title">Support</h3>

            <!-- FOOTER LINKS -->
            <ul class="footer__links">
              <li>
                <a class="footer__link" href="#">FAQs</a>
              </li>
              <li>
                <a class="footer__link" href="#">Support center</a>
              </li>
              <li>
                <a class="footer__link" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="footer__title">Follow us</h3>

            <!-- FOOTER SOCIAL -->
            <ul class="footer__social">
              <li>
                <a class="footer__social-link" href="https://www.facebook/" target="_blank">
                  <i class="bx bxl-facebook-circle"></i>
                </a>
              </li>
              <li>
                <a class="footer__social-link" href="https://www.instagram.com/" target="_blank">
                  <i class="bx bxl-instagram-alt"></i>
                </a>
              </li>
              <li>
                <a class="footer__social-link" href="https://www.pinterest.com/" target="_blank">
                  <i class="bx bxl-pinterest"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FOOTER INFO -->
      <div class="footer__info container">
        <span class="footer__copy">
          &#169; 2022 Holux. All rights reserved
        </span>
        <div class="footer__privacy">
          <a href="#">Terms &amp; Agreements</a>
          <a href="#">Privacy Policy</a>
        </div>
      </div>
    </footer>
  </main>

  <!-- SCROLL UP -->
  <a class="scroll-up" id="scroll-up" href="#home">
    <i class="bx bx-chevrons-up"></i>
  </a>

  <?php
  wp_footer();
  ?>
</body>

</html>