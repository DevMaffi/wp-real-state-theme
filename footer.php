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