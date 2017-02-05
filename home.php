<?php
/**
 * Template for displaying homepages
 * Template Name: Homepage
 *
 * @package ufund-wp
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>



<?php
  $args = array(
    'post_type' => 'homepage',
  );
  $homepage_loop = new WP_Query( $args );

  if ( $homepage_loop->have_posts() ) :
    while ( $homepage_loop->have_posts() ) : $homepage_loop->the_post();
      // Set variables
      $title = get_the_title();
      $intro = get_the_content();
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
      $feature = $featured_image[0];
      // Output
?>

<div class="hidden">
  <h1><?php echo $title; ?></h1>
  <img src="<?php echo $callouticon1; ?>" alt="<?php echo $title; ?>" />
  <img src="<?php echo $featured_image; ?>" alt="" />
  <a href="<?php echo $howitworks; ?>" target="_blank" name="Spec Sheet">how it works</a>
</div>

<!-- <?php echo get_field('homepage_callout_1_icon'); ?> -->
<!-- <?php echo get_field('homepage_callout_1_button_label'); ?> -->
<!-- <?php echo get_field('homepage_callout_1_button_url'); ?> -->

<!-- <?php echo get_field('homepage_callout_2_icon'); ?> -->
<!-- <?php echo get_field('homepage_callout_2_button_label'); ?> -->
<!-- <?php echo get_field('homepage_callout_2_button_url'); ?> -->

<!-- <?php echo get_field('homepage_howitworks_intro'); ?> -->
<!-- <?php echo get_field('howitworks_step_1'); ?> -->
<!-- <?php echo get_field('howitworks_step_2'); ?> -->
<!-- <?php echo get_field('howitworks_step_3'); ?> -->
<!-- <?php echo get_field('howitworks_step_4'); ?> -->

      <!-- home jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1>The Ultimate Fundraising Experience<sup>&trade;</sup></h1>
          <!-- <h1> <?php bloginfo('description'); ?> </h1> -->
          <div class="row">
            <div class="col-md-6 cell">
              <a class="btn" href="<?php echo get_field('homepage_callout_1_button_url'); ?>" role="button">
                <img class="" src="<?php echo get_theme_file_uri( 'img/home-jumbotron-start.svg' );?>" alt="" title="" />
              </a>
              <p class="lbl"><a class="btn btn-primary btn-lg btn-home" href="#" role="button"> <?php echo get_field('homepage_callout_1_button_label'); ?> </a></p>
            </div> <!-- /column -->
            <div class="col-md-6 cell">
              <a class="btn" href="<?php echo get_field('homepage_callout_2_button_url'); ?>" role="button">
                <img class="" src="<?php echo get_theme_file_uri( 'img/home-jumbotron-find.svg' );?>" alt="" title="" />
              </a>
              <p class="lbl"><a class="btn btn-primary btn-lg btn-home" href="#" role="button"> <?php echo get_field('homepage_callout_2_button_label'); ?> </a></p>
            </div> <!-- /column -->
          </div> <!-- /row -->
          <div class="alert" role="alert"> <?php the_content() ?> </div>
        </div>
      </div> <!-- /jumbotron -->

      <div class="container">

        <!-- row for featured campaigns -->
        <div class="row campaign-feature">

          <div class="col-md-3">
            <a class="no-line" href="template-page-campaign-home.html">
              <div class="panel panel-default campaign">
                <div class="panel-body">
                  <img src="<?php echo get_theme_file_uri( 'img/img.png' );?>" alt="" title="" width="100%" height="100%" />
                  <p class="campaign-org">Organization Name</p>
                  <p class="campaign-goal">$88,888</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </div>
              </div> <!-- /panel -->
            </a>
          </div> <!-- /column -->
          <div class="col-md-3">
            <a class="no-line" href="template-page-campaign-home.html">
              <div class="panel panel-default campaign">
                <div class="panel-body">
                  <img src="<?php echo get_theme_file_uri( 'img/img.png' );?>" alt="" title="" width="100%" height="100%" />
                  <p class="campaign-org">Organization Name</p>
                  <p class="campaign-goal">$88,888</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                </div>
              </div> <!-- /panel -->
            </a>
          </div> <!-- /column -->
          <div class="col-md-3">
            <a class="no-line" href="template-page-campaign-home.html">
              <div class="panel panel-default campaign">
                <div class="panel-body">
                  <img src="<?php echo get_theme_file_uri( 'img/img.png' );?>" alt="" title="" width="100%" height="100%" />
                  <p class="campaign-org">Organization Name</p>
                  <p class="campaign-goal">$88,888</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                </div>
              </div> <!-- /panel -->
            </a>
          </div> <!-- /column -->
          <div class="col-md-3">
            <a class="no-line" href="template-page-campaign-home.html">
              <div class="panel panel-default campaign">
                <div class="panel-body">
                  <img src="<?php echo get_theme_file_uri( 'img/img.png' );?>" alt="" title="" width="100%" height="100%" />
                  <p class="campaign-org">Organization Name</p>
                  <p class="campaign-goal">$88,888</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
              </div> <!-- /panel -->
            </a>
          </div> <!-- /column -->

        </div> <!-- /row -->

        <hr>

        <!-- row for how it works -->
        <div class="row work-intro">
          <div class="col-md-12">
            <h2>How it Works</h2>
            <img class="step-img" src="<?php echo get_theme_file_uri( 'img/home-howitworks-0.svg' );?>" alt="" title="" />
            <p class="half-block"><?php echo get_field('homepage_howitworks_intro'); ?></p>
          </div> <!-- /column -->
        </div> <!-- /row -->

        <div class="row work-steps">
          <div class="col-md-3">
            <div class="panel panel-default step">
              <div class="panel-body">
                <div class="step-num">1</div>
                <img class="step-img" src="<?php echo get_theme_file_uri( 'img/home-howitworks-1.svg' );?>" alt="" title="" />
                <p class="step-copy"><?php echo get_field('howitworks_step_1'); ?></p>
              </div>
            </div>
          </div> <!-- /column -->
          <div class="col-md-3">
            <div class="panel panel-default step">
              <div class="panel-body">
                <div class="step-num">2</div>
                <img class="step-img" src="<?php echo get_theme_file_uri( 'img/home-howitworks-2.svg' );?>" alt="" title="" />
                <p class="step-copy"><?php echo get_field('howitworks_step_2'); ?></p>
              </div>
            </div>
          </div> <!-- /column -->
          <div class="col-md-3">
            <div class="panel panel-default step">
              <div class="panel-body">
                <div class="step-num">3</div>
                <img class="step-img" src="<?php echo get_theme_file_uri( 'img/home-howitworks-3.svg' );?>" alt="" title="" />
                <p class="step-copy"><?php echo get_field('howitworks_step_3'); ?></p>
              </div>
            </div>
          </div> <!-- /column -->
          <div class="col-md-3">
            <div class="panel panel-default step">
              <div class="panel-body">
                <div class="step-num">4</div>
                <img class="step-img" src="<?php echo get_theme_file_uri( 'img/home-howitworks-4.svg' );?>" alt="" title="" />
                <p class="step-copy"><?php echo get_field('howitworks_step_4'); ?></p>
              </div>
            </div>
          </div> <!-- /column -->
        </div> <!-- /row -->

      </div>

<?php
  endwhile;
    wp_reset_postdata();
  endif;
?>


<?php get_sidebar('right'); ?>

<?php get_footer(); ?>
