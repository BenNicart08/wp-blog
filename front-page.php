<?php get_header()?>
<!-- BANNER -->
<section class="banner bg--dark clr--light">
      <div class="container">
        <div class="banner__wrapper">
          <h1 class="banner__title">The Blog</h1>
          <div class="banner__article">
            <div class="banner__grid">
              <div class="banner__primary">
                <?php $primary = new WP_Query(array(
                  'post_type' => 'post',
                  'post_per_page' => 1, 
                  'meta_key' => "Banner",
                  'meta_value' => "Primary",
                  ))?>

                <?php if($primary->have_posts()) : while ($primary->have_posts()) : $primary->the_post(); ?>

                <div class="card__banner__lg">  
                  <?php if(has_post_thumbnail()) {
                  the_post_thumbnail();
                  }?>
                  <ul class="card__meta flex">
                    <li class="article__date"><?php echo get_the_date('M j, Y');?></li>
                  </ul>
                  <p class="article__excerpt">
                    <?php echo wp_trim_words(get_the_excerpt(), 15)?>
                  </p>
                  <a href="<?php the_permalink()?>" class="article__more">Read More</a>
                </div>
                <?php endwhile;
                    else:
                        echo "No More Blog";
                    endif; 
                    wp_reset_postdata();
                ?> 


              </div>
              <div class="banner__secondary">
                
                <?php $secondary = new WP_Query(array(
                  'post_type' => 'post',
                  'post_per_page' => 3, 
                  'meta_key' => "Banner",
                  'meta_value' => "Secondary",
                  ))?>
                
                <?php if($secondary->have_posts()) : while ($secondary->have_posts()) : $secondary->the_post(); ?>

                <div class="card__banner__sm">
                  <div class="flex">
                    <?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                    }?>
                    <div class="wrapper">
                      <ul class="card__meta flex">
                        <li class="article__date"><?php echo get_the_date('M j, Y');?></li>
                      </ul>
                      <h3>
                        <?php echo wp_trim_words(get_the_excerpt(), 7)?>
                      </h3>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
                <?php endwhile;
                    else:
                        echo "No More Blog";
                    endif; 
                    wp_reset_postdata();
                ?> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- LATEST -->
 <section class="latest py--10">
      <div class="container">
        <h2>Latest Story</h2>
        <div class="latest__grid">
          <?php $primary = new WP_Query(array(
                  'post_type' => 'post',
                  'post_per_page' => 1, 
                  'meta_key' => "Latest",
                  'meta_value' => "Primary",
                  ))?>

                <?php if($primary->have_posts()) : while ($primary->have_posts()) : $primary->the_post(); ?>
          <div class="card__single__col">
            <figure class="img__wrapper">
              <div class="flex">
                    <?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                    }?>
            </figure>
            <ul class="card__meta flex">
              <li class="article__date"><?php echo get_the_date('M j, Y');?></li>
              <li class="article__category">
                 <?php echo get_the_category()[0]->name?>
              </li>
            </ul>
            <h3><?php the_title()?></h3>
            <p>
              <?php echo wp_trim_words(get_the_excerpt(), 7)?>
            </p>
            <a href="#">Read More</a>
          </div>
          <?php endwhile;
                    else:
                        echo "No More Blog";
                    endif; 
                    wp_reset_postdata();
                ?> 

        </div>
      </div>
</section>
<!-- FEATURED -->
 <section class="feature bg--dark clr--light py--5 text--center">
      <?php $primary = new WP_Query(array(
                  'post_type' => 'post',
                  'post_per_page' => 1, 
                  'meta_key' => "Feature",
                  'meta_value' => "Primary",
                  ))?>
                
                <?php if($primary->have_posts()) : while ($primary->have_posts()) : $primary->the_post(); ?>

      <div class="container">
        <h2>Feature News</h2>
        <div class="feature__wrapper">
          <h3><?php the_title()?></h3>
          <p>
            <?php echo wp_trim_words(get_the_excerpt(), 20)?>
          </p>
          <a href="#">Read the full Story</a>
        </div>
        <div class="feature__img">
          <?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                    }?>
        </div>
      </div>

      <?php endwhile;
                  else:
                        echo "No More Blog";
                    endif; 
                    wp_reset_postdata();
                ?> 
</section>
<!-- OTHER -->
 <section class="other py--10">
      <div class="container">
        <div class="other__grid">
          <div class="other__main">
            <?php $primary = new WP_Query(array(
                  'post_type' => 'post',
                  'post_per_page' => 3, 
                  'meta_key' => "Story",
                  'meta_value' => "Primary",
                  ))?>
                
                <?php if($primary->have_posts()) : while ($primary->have_posts()) : $primary->the_post(); ?>

            <div class="card__two__col">
              <figure>
                <?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                    }?>
              </figure>

              <div class="other__content">
                <ul class="card__meta flex">
                  <li class="article__date"><?php echo get_the_date('M j, Y');?></li>
                </ul>
                <h3>
                  <?php the_title()?>
                </h3>
                <p>
                  <?php echo wp_trim_words(get_the_excerpt(), 25)?>
                </p>
                <a href="#">Read more</a>
              </div>
            </div>
            <?php endwhile;
                    else:
                        echo "No More Blog";
                    endif; 
                    wp_reset_postdata();
                ?>
          </div>
          <div class="other__side">
            <?php $secondary = new WP_Query(array(
                  'post_type' => 'post',
                  'post_per_page' => 7, 
                  'meta_key' => "Story",
                  'meta_value' => "Secondary",
                  ))?>
                
                <?php if($secondary->have_posts()) : while ($secondary->have_posts()) : $secondary->the_post(); ?>
            <div class="card__sidebar">
              <ul class="card__meta flex">
                <li class="article__date"><?php echo get_the_date('M j, Y');?></li>
              </ul>
              <h3>
                <?php the_title()?>
              </h3>
              <a href="#">Read more</a>
            </div>
            <?php endwhile;
                    else:
                        echo "No More Blog";
                    endif; 
                    wp_reset_postdata();
                ?>

          </div>
        </div>
      </div>
</section>

<?php get_footer()?>