    <?php
        $args = array(
            'post_type' => 'testimonial',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
        // check if the repeater field has rows of data
        $loop = new WP_Query( $args );

    ?>


<div class="testimonial swiper mySwiper">
    <div class="swiper-wrapper">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="swiper-slide">
            <div class="comment"><p><?php echo the_field('comment');?></p></div>
            <div class="author"><p><?php echo the_title();?></p></div>
            <div class="title"><p><?php echo the_field('title');?></p></div>
        </div>

      <?php endwhile;?>
    </div>
      
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>