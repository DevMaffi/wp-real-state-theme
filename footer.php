<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

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
        <?php the_field('footer_description'); ?>
      </p>
    </div>

    <!-- FOOTER CONTENT -->
    <div class="footer__content">
      <div>
        <h3 class="footer__title">About</h3>

        <?php
        wp_nav_menu([
          'menu' => 'About menu',
          'container' => false,
          'menu_class' => 'footer__links',
          'echo' => true,
          'fallback_cb' => 'wp_page_menu',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'depth' => 1,
        ]);
        ?>
      </div>

      <div>
        <h3 class="footer__title">Company</h3>

        <?php
        wp_nav_menu([
          'menu' => 'Company menu',
          'container' => false,
          'menu_class' => 'footer__links',
          'echo' => true,
          'fallback_cb' => 'wp_page_menu',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'depth' => 1,
        ]);
        ?>
      </div>

      <div>
        <h3 class="footer__title">Support</h3>

        <?php
        wp_nav_menu([
          'menu' => 'Support menu',
          'container' => false,
          'menu_class' => 'footer__links',
          'echo' => true,
          'fallback_cb' => 'wp_page_menu',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'depth' => 1,
        ]);
        ?>
      </div>

      <div>
        <h3 class="footer__title">Follow us</h3>

        <!-- FOOTER SOCIAL -->
        <ul class="footer__social">
          <?php
          $posts = get_posts(array(
            'numberposts' => 3,
            'category_name' => 'social_links',
            'order_by' => 'date',
            'order' => 'ASC',
            'post_type' => 'post',
            'suppress_filters' => true,
          ));

          foreach ($posts as $post) {
            setup_postdata($post);
          ?>
            <li>
              <a class="footer__social-link" href="<?php the_field('link_ref'); ?>" target="_blank">
                <i class="<?php the_field('link_icon'); ?>"></i>
              </a>
            </li>
          <?php
          }

          wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- FOOTER INFO -->
  <div class="footer__info container">
    <span class="footer__copy">
      <?php the_field('footer_copy'); ?>
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