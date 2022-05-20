<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

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