<?php
/**
Template Name: All Vendors

*/

get_header();

//global $shopera_site_width;

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();

?>

<div id="main-content" class="main-content row">

<?php get_sidebar('left'); ?>

	<div id="primary" class="content-area <?php echo esc_attr( $shopera_site_width ); ?>">
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

				endwhile;
			?>

      <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-6">
          <div class="col-md-4 vendorserach col-md-offset-8">
            <input type="text" value="" placeholder="Search Organization Here" name="vendortext" id="vendortext" />
            <input type="button" class="serachvendor" value="Search"/>
            <input type="hidden" class="searchvfile" value="<?php echo get_template_directory_uri(); ?>/searchvendor.php" />
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div style="display: none;"  class="loaderimage">
            <img src="<?php echo get_template_directory_uri(); ?>/images/loader.gif" class="loader"/>
          </div>
          <div style="display: none;" class="search_results">
          </div>
        </div>
      </div>

      <ul class="allvendors">

        <?php

          $args = array(
          'type'                     => 'post',
          'child_of'                 => 0,
          'parent'                   => '',
          'orderby'                  => 'name',
          'order'                    => 'ASC',
          'hide_empty'               => 0,
          'hierarchical'             => 1,
          'exclude'                  => '',
          'include'                  => '',
          'number'                   => '',
          'taxonomy'                 => 'wcpv_product_vendors',
          'pad_counts'               => false

          );

							$categories = get_categories( $args );                             $i=1;
							 foreach ($categories as $all_cat)
							 {
								 echo '<li class="col-md-3 col-sm-3 col-xs-12">';

								     $taxonomy_image_url = get_option('z_taxonomy_image'.$all_cat->term_id);
									if(!empty($taxonomy_image_url)) {
										$attachment_id = z_get_attachment_id_by_url($taxonomy_image_url);
										if(!empty($attachment_id)) {
											$taxonomy_image_url = wp_get_attachment_image_src($attachment_id,'medium');
											 $taxonomy_image_url = $taxonomy_image_url[0];
										}
									}
								   echo '<div class="vendorimage">';
								   if($taxonomy_image_url)
								   {
					                echo '<a href="'.get_term_link($all_cat->name,'wcpv_product_vendors').'"/><img src="'.$taxonomy_image_url.'"/></a>';
								   }
								   else { echo '<a href="'.get_term_link($all_cat->name,'wcpv_product_vendors').'"/><img s src="/wp-content/uploads/2016/07/ufund-default-group.png"/></a>'; }

								   echo '</div>';
								   echo '<div class="vendordesc">';
								   echo '<h4><a href="'.get_term_link($all_cat->name,'wcpv_product_vendors').'"/>'.$all_cat->name.'</a></h4>';
								  /* if($all_cat->category_description) { echo '<p>'.substr($all_cat->category_description,0,200).'....</p>'; }*/
								   /*echo '<a href="'.get_term_link($all_cat->name,'shop_vendor').'"/>Read More>></a>';*/
								   echo '</div>';
					               echo '</li>';                                   if($i ==4) { echo '<div class="clear"></div>'; $i=0; }								   $i++;

							 }

        ?>
      </ul>

		</div><!-- #content -->
	</div><!-- #primary -->

	<?php get_sidebar( 'content' ); ?>

</div><!-- #main-content -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
});
$(".serachvendor").click(function(){
  $('.search_results').hide();
 var vendortext=$("#vendortext").val();
 var url=$('.searchvfile').val();
  $('.loaderimage').show();

 				jQuery.ajax({

                type: "post",
                url: url,
               	data:
					{
						vendortext: vendortext,
					},
                success: function (msg) {
				      $('.search_results').show();
					    $('.loaderimage').hide();
                        $('.search_results').html(msg);


				}


                });
});
</script>

<?php
get_footer();
