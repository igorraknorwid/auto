<?php
/*
Template Name: home

*/ ?>
<?php get_header();?>
  <section class="services">
    <div class="container">
      <h2 class="title">NASZE USŁUGI</h2>
      <div class="services__inner">
        <div class="services__content">

        <?php
                    global $post;

                    $myposts = get_posts([ 
                      'numberposts' => -1,
                      'category_name' => 'services'
                      // 'offset'      => 2,
                      // 'category'    => 4
                    ]);

                    if( $myposts ){
                      foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>
                    
                       <div class="services__content-box">
                             <h6 class="services__content-title">
                             <?php the_title(); ?>
                              </h6>
            <div class="services__content-textbox">
              <p class="services__content-text">
              <?php the_content(); ?>
            </div>
          </div> 
                        <?php 
                      }
                    } else {
                      // Постов не найдено
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?>

          <a class="button button--decor" href="#">KONSULTACJE EKSPERTA</a>
        </div>
        <ol class="services__list">
        <?php
                    global $post;
                    $index = 1;

                    $myposts = get_posts([ 
                      'numberposts' => -1,
                      'category_name' => 'service-counter'
                      // 'offset'      => 2,
                      // 'category'    => 4
                    ]);

                    if( $myposts ){
                     
                      foreach( $myposts as $post ){
                        $index=$index+0.2;
                        setup_postdata( $post );
                        ?>
                                       <li data-wow-delay="<?php  $index; ?>s" class="services__item wow animate__fadeInRight">
            <p class="services__item-title"> <?php the_title(); ?></p>
            <p class="services__item-text"><?php the_content(); ?>
          </li>
                        <?php 
                      }
                    } else {
                      // Постов не найдено
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?>       
          </li>
        </ol>
      </div>
    </div>
  </section>


  <section class="benefits">
    <div class="container">
      <div class="benefits__inner">
        <img data-wow-delay="2s" class="lazy benefits__images wow animate__fadeInUp" src="<?php bloginfo('template_url'); ?>/assets/images/car.png" alt="car">
        <div class="benefits__content">
          <h2 class="title benefits__title">DLACZEGO MY?</h2>
        
         
          <ul class="benefits__list">

          <?php
                    global $post;
                    $index = 1;

                    $myposts = get_posts([ 
                      'numberposts' => -1,
                      'category_name' => 'why'
                      // 'offset'      => 2,
                      // 'category'    => 4
                    ]);

                    if( $myposts ){
                     
                      foreach( $myposts as $post ){
                        $index=$index+0.2;
                        setup_postdata( $post );
                        ?>
            <li class="benefits__item">
              <p class="benefits__item-num"><?php the_title(); ?></p>              
              <div class="benefits__item-text"><?php the_content(); ?></div>
            </li>
                        <?php 
                      }
                    } else {
                      // Постов не найдено
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?>   
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="carousel">
    <div class="container">
      <h2 class="title">
      SAMOCHODY DOSTARCZANE PRZEZ NAS
      </h2>
      <div class="carousel__inner">

                          <?php
                    global $post;

                    $myposts = get_posts([ 
                      'numberposts' => -1,
                      'category_name' => 'cars'
                      // 'offset'      => 2,
                      // 'category'    => 4
                    ]);

                    if( $myposts ){
                      foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>
                      <div class="carousel__item">
                        <div class="carousel__item-box">                         
                           <?php the_post_thumbnail(array(380,250),array(
                            "class" => "carousel__item-img"
                           )); ?>
                           <h4 class="carousel__item-title"><?php the_title(); ?></h4>
                            <p class="carousel__item-text"><?php the_content(); ?></p>
                         </div>
                       </div>
                        <?php 
                      }
                    } else {
                      // Постов не найдено
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?>

      </div>
    </div>
  </section>



  <section class="contacts">
    <div class="container">
      <div class="contacts__inner">
        <div class="contacts__info">
          <h2 class="title">
            КONTAKT
          </h2>
          <ul class="contacts__list">
            <li class="contacts__item">
              <p class="contacts__item-title">Adres</p>
              <p class="contacts__item-text">
                Warszawa<br>
                Wojska Polskiego,71
              </p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Czas pracy</p>
              <p class="contacts__item-text">
                Pn-Sb: с 9:00 до 19:00, <br>
                Niedzila: wolny
              </p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Telefon</p>
              <p class="contacts__item-text">
              <?php the_field("_phone"); ?>
              </p>
            </li>
          </ul>
        </div>
        <div class="contacts__form">
          <h2 class="title contacts__title">Wyślij</h2>
          <?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;		
			while ( have_posts() ) :
				the_post();			
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
              
        </div>
      </div>
    </div>
  </section>

<?php get_footer();?>
