<?php
/**
 * The template for displaying all single video posts
 * Copy this template into your site root
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lodc
 */

get_header();
?>

	<main id="primary" class="site-main container">
   
       <div class="row">
	   <div class="col-12">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="btn btn-info" style="width:50%;float:left;border-radius:0!important;font-size:20px;font-weight:bold;"><i class="fas fa-arrow-left"></i>' . esc_html__( ' Previous: ', 'lodc' ) . '<span class="nav-title">%title</span></span>',
					'next_text' => '<span class="btn btn-success" style="width:50%;float:left;border-radius:0!important;font-size:20px;font-weight:bold;">' . esc_html__( 'Next:', 'lodc' ) . '<span class="nav-title">%title </span><i class="fas fa-arrow-right"></i></span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>
		</div>

</div>
	</main><!-- #main -->

<?php

get_footer();