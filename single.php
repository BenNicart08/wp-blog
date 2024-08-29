<?php 

/**
 * Template Name: Blog Single
 *  
*/



?>



<?php get_header()?>


<section class="single__banner bg--dark clr--light py--10">
    <?php new WP_Query(array(
                  'post_type' => 'post',
                  'post_per_page' => 1, 
                  'meta_key' => "Banner",
                  'meta_value' => "Primary",
                  ))?>
      <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="container">
        <div class="single__banner__header flex justify--between align--end">
          <h1>
            <?php the_title()?>
          </h1>
          <ul>
            <li><?php echo get_the_date('M j, Y');?></li>
            <li>By: <?php echo get_the_author_meta('first_name');?></li>
          </ul>
        </div>
        <div class="single__banner__body">
            <?php the_content()?>
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

<main class="single__article py--10 bg--dark clr--light">
      <div class="container">
        <?php new WP_Query(array(
                  'post_type' => 'post',
                  'post_per_page' => 3, 
                  'meta_key' => "Article",
                  'meta_value' => "Single",
                  ))?>
                
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="single__article__wrapper">
          <div class="single__article__info bg--light clr--dark">
            <div class="single__article__meta">
              <h4>Category</h4>
              <p><?php echo get_the_category()[0]->name?></p>
            </div>

            <div class="single__article__meta">
              <h4>Tags</h4>
              <p>
                <?php $Tags = get_the_tags();
                    if($Tags) {
                        foreach($Tags as $tag) { ?>
                        <?php echo $tag->name;?>,
                        <?php }
                    }?>
                </p>
            </div>

            <div class="single__article__meta">
              <h4>Author</h4>
              <p>by: <span><?php echo get_the_author_meta('first_name');?></span></p>
            </div>

            <div class="single__article__meta">
              <h4>Reading</h4>
              <p><?php echo get_post_meta(get_the_ID(), 'Reading', true)?></p>
            </div>
          </div>

          <div class="single__article__body">
            <div class="wrapper">
              <h3>
                <?php the_title();?>
              </h3>
              <?php the_content()?>
            </div>

            <div class="single__navigation mt--10">
              <ul class="flex justify--between">
                <li><?php echo get_previous_post_link('%link','Previous')?></li>
                <li><?php echo get_next_post_link('%link','Next')?></li>
              </ul>
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
</main>

<div class="single__other bg--dark clr--light">
      <div class="container">
        <div class="single__other__wrapper">
          <div class="single__other__sidebar">

           <?php $secondary = new WP_Query(array(
                  'post_type' => 'post',
                  'posts_per_page' => 3, 
                  'orderby' => 'rand',
                  'post__not_in' => array(get_the_ID())
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
          <div class="single__other__main">
            <?php  new WP_Query(array(
                  'post_type' => 'post',
                  'posts_per_page' => 1, 
                  'orderby' => 'rand',
                  'post__not_in' => array(get_the_ID()),
                  ))?>
                
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>



            <div class="card__other">
              <?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                    }?>
              <div class="overlay"></div>
              <div class="card__other__body">
                <h3>
                  <?php the_title()?>
                </h3>
                <p>
                  <?php the_content()?>
                </p>
                <a href="">Continue Reading</a>
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

<?php get_footer()?>