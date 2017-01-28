<?php
/**
 * Template for displaying single post (read full post page).
 *
 * @package ufund-wp
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>

<?php get_sidebar('left'); ?>

      <div class="container">

        <h1> <?php the_title(); ?> </h1>

        <div class="row campaign-content">

          <div class="col-md-12" role="main">

            <div class="panel panel-default campaign">

              <div class="panel-body campaign-copy">

                <?php
                  while (have_posts()) {
                    the_post();

                    //get_template_part('content', 'page');
                    the_content();

                    echo "\n\n";

                    // If comments are open or we have at least one comment, load up the comment template
                    if (comments_open() || '0' != get_comments_number()) {
                    	comments_template();
                    }

                    echo "\n\n";

                  } //endwhile;
                ?>

              </div>

            </div>

          </div>

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>
