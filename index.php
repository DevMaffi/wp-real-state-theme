<?php
get_header();
?>

<!-- HOME -->
<section class="home section" id="home">

  <!-- HOME CONTAINER -->
  <div class="home__container container grid">

    <!-- HOME DATA -->
    <div class="home__data">
      <h1 class="home__title">
        <?php the_field('home_title'); ?>
      </h1>
      <p class="home__description">
        <?php the_field('home_descr'); ?>
      </p>

      <!-- HOME SEARCH -->
      <form class="home__search" action="#">
        <i class="bx bxs-map"></i>
        <input class="home__search-input" type="search" placeholder="Search by location">
        <button class="button">Search</button>
      </form>

      <!-- HOME VALUE -->
      <div class="home__value">
        <?php
        $posts = get_posts(array(
          'numberposts' => 3,
          'category_name' => 'home_value',
          'order_by' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,
        ));

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <div>
            <h2 class="home__value-number">
              <?php the_field('value_number'); ?>
              <span>+</span>
            </h2>
            <span class="home__value-description">
              <?php the_field('value_description'); ?>
            </span>
          </div>
        <?php
        }

        wp_reset_postdata();
        ?>
      </div>
    </div>

    <!-- HOME IMAGES -->
    <div class="home__images">
      <div class="home__orbe"></div>
      <div class="home__img">
        <img src="<?php the_field('home_img'); ?>" alt="home image">
      </div>
    </div>
  </div>
</section>

<!-- LOGOS -->
<section class="logos section">

  <!-- LOGOS CONTAINER -->
  <div class="logos__container container grid">
    <?php
    $posts = get_posts(array(
      'numberposts' => 4,
      'category_name' => 'logos',
      'order_by' => 'date',
      'order' => 'ASC',
      'post_type' => 'post',
      'suppress_filters' => true,
    ));

    foreach ($posts as $post) {
      setup_postdata($post);
    ?>
      <div class="logos__img">
        <img src="<?php the_field('logo_img'); ?>" alt="logo">
      </div>
    <?php
    }

    wp_reset_postdata();
    ?>
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

<?php
get_footer();
?>