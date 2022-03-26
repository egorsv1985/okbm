<?php
/*
Template Name: Интересное
*/
?>

<?php get_header(); ?>


<section id="interesting">
  <div class="container">
    <div class="path">
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      }
      ?>
    </div>



    <?php
    $args = array(
      'post_type' => 'post',

      'posts_per_page' => -1,
      'cat' => 1
      // 'orderby'        => 'rand'
    );
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $query = new WP_Query($args);
    while ($query->have_posts()) {
      $query->the_post();

    ?>


      <div class="row row1">
        <div class="col-lg-12">
          <div class="item-block">
            <div class="img-block" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
            </div>

            <div class="text-block">
              <h2><?php the_title(); ?></h2>

              <?php the_excerpt(); ?>

              <a href="<?php the_permalink(); ?>" class="read-more">Читать</a>
            </div>
          </div>
        </div>
      </div>




    <?php
    }
    ?>

    <?php
    wp_reset_postdata();

    ?>


  </div>
</section>


<?php get_footer(); ?>