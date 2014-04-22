<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */

get_header(); ?>


	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">

			<div id="highcharts" style="width:100%; height:400px;"></div>
			</div><!-- #content -->


			<?php get_sidebar(); ?>
			<div class="clear"></div>
			
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>