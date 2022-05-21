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
    <span class="section__subtitle">
      <?php the_field('popular_subtitle'); ?>
    </span>
    <h2 class="section__title">
      <?php the_field('popular_title'); ?>
      <span>.</span>
    </h2>

    <!-- POPULAR CONTAINER -->
    <div class="popular__container swiper">
      <div class="swiper-wrapper">

        <?php
        $posts = get_posts(array(
          'numberposts' => -1,
          'category_name' => 'popular_cards',
          'order_by' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,
        ));

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <!-- POPULAR CARD -->
          <article class="popular__card swiper-slide">
            <img class="popular__img" src="<?php the_post_thumbnail_url(); ?>" alt="popular">

            <!-- POPULAR DATA -->
            <div class="popular__data">
              <h2 class="popular__price">
                <span>$</span>
                <?php the_field('card_price'); ?>
              </h2>
              <h3 class="popular__title">
                <?php the_field('card_title'); ?>
              </h3>
              <p class="popular__description">
                <?php the_field('card_description'); ?>
              </p>
            </div>
          </article>
        <?php
        }

        wp_reset_postdata();
        ?>
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
        <img src="<?php the_field('value_img'); ?>" alt="value image">
      </div>
    </div>

    <!-- VALUE CONTENT -->
    <div class="value__content">

      <!-- VALUE DATA -->
      <div class="value__data">
        <span class="section__subtitle">
          <?php the_field('value_subtitle'); ?>
        </span>
        <h2 class="section__title">
          <?php the_field('value_title'); ?>
          <span>.</span>
        </h2>
        <p class="value__description">
          <?php the_field('value_description'); ?>
        </p>
      </div>

      <!-- VALUE ACCORDION -->
      <div class="value__accordion">

        <?php
        $posts = get_posts(array(
          'numberposts' => 4,
          'category_name' => 'value_accordion',
          'order_by' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,
        ));

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <!-- ACCORDION ITEM -->
          <div class="value__accordion-item">

            <!-- ACCORDION HEADER -->
            <header class="value__accordion-header">
              <i class="value__accordion-icon <?php the_field('item_icon'); ?>"></i>
              <h3 class="value__accordion-title">
                <?php the_field('item_title'); ?>
              </h3>
              <div class="value__accordion-arrow">
                <i class="bx bxs-down-arrow"></i>
              </div>
            </header>

            <!-- ACCORDION CONTENT -->
            <div class="value__accordion-content">
              <p class="value__accordion-description">
                <?php the_field('item_description'); ?>
              </p>
            </div>
          </div>
        <?php
        }

        wp_reset_postdata();
        ?>
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
        <img src="<?php the_field('contact_img'); ?>" alt="contact image">
      </div>
    </div>

    <!-- CONTACT CONTENT -->
    <div class="contact__content">

      <!-- CONTACT DATA -->
      <div class="contact__data">
        <span class="section__subtitle">
          <?php the_field('contact_title'); ?>
        </span>
        <h3 class="section__title">
          <?php the_field('contact_title'); ?>
          <span>.</span>
        </h3>
        <div class="contact__description">
          <?php the_field('contact_description'); ?>
        </div>
      </div>

      <!-- CONTACT CARD -->
      <div class="contact__card">

        <?php
        $posts = get_posts(array(
          'numberposts' => 4,
          'category_name' => 'contact_cards',
          'order_by' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,
        ));

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <!-- CARD BOX -->
          <div class="contact__card-box">

            <!-- CARD INFO  -->
            <div class="contact__card-info">
              <i class="<?php the_field('card_icon'); ?>"></i>
              <div>
                <h3 class="contact__card-title">
                  <?php the_field('card_title'); ?>
                </h3>
                <p class="contact__card-description">
                  <?php the_field('card_description'); ?>
                </p>
              </div>
            </div>
            <button class="button contact__card-button">
              <?php the_field('card_button_text'); ?>
            </button>
          </div>
        <?php
        }

        wp_reset_postdata();
        ?>
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