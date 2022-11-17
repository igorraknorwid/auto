<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Auta z USA</title>
  <?php wp_head(); ?>  
</head>

<body>

  <header class="header">
    <div class="container">
     
      <div class="header__top">     
       
        <a class="social__link" href="<?php the_field("_link_to_telegram"); ?>" >
        <svg class="test" width="153" height="53">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#logo"></use>
            </svg>
          </a>
        <a class="phone" href="tel:<?php the_field("_phone_number"); ?>"><?php the_field("_phone"); ?></a> 
      </div>
      <div class="header__content">
        <h1 data-wow-delay=".5s" class="header__title wow animate__fadeInLeft">
        <?php the_field("_header_title"); ?>
        </h1>
        <h2 data-wow-delay="1s" class="header__subtitle wow animate__fadeInLeft">
        <?php the_field("header_description"); ?>
        </h2>
        <p data-wow-delay="1.5s" class="header__text wow animate__fadeInLeft">
        <?php the_field("header_content"); ?>
        </p>
        <a class="button" href="#"><?php the_field("_headrer_button"); ?></a>
        <div class="social header__social">
          <a class="social__link" href="<?php the_field("_link_to_instagram"); ?>" target="_blank">
            <svg class="test" width="26" height="26">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#instagram"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field("_link_to_telegram"); ?>" target="_blank">
            <svg width="25" height="19">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#telegram"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field("_link_to_whatsapp"); ?>" target="_blank">
            <svg width="26" height="26">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#whatsapp"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field("_link_to_facebook"); ?>" target="_blank">
            <svg width="14" height="25">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#facebook"></use>
            </svg>
          </a>
        </div>
        <img data-wow-delay="2s" class="header__images wow animate__fadeInUpBig" src="<?php bloginfo('template_url'); ?>/assets/images/ford-mustang.png"
          alt="ford mustang">
      </div>
    </div>
  </header>
