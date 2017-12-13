<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="grey-background container-fluid">
			<div class="container">
				<h1> Your Laundry Your Ways</h1>
				<hr>
				<p> Dependable Cleaners offers more than conventional local dry cleaners. We wash, dry, press and fold all types of laundry - from bedsheets to bath towels and beyond -- using advance methods and trusted techniques in clothing and textile care.
				<div  class="row">
					<div  class="col-md-4 col-6">
						container 1
					</div>
					<div  class="col-md-4 col-6">
						container 2
					</div>
					<div  class="col-md-4 col-6">
						container 3
					</div>
					<div  class="col-md-4 col-6">
						container 4
					</div>
					<div  class="col-md-4 col-6">
						container 5
					</div>
					<div  class="col-md-4 col-6">
						container 6
					</div>
				</div>
				<div>
					<button>Explore all  Laundry Services
				</div>
			</div>
		</div>
		<div class="white-background container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-6"><img scr="#" alt="bag of laundry image"></div>
					<div lass="col-md-6">
						<h1> Get The VIP Treatment
						</h1>
						<hr>
						<p>Our complimentary VIP services, features immediate check-in, efficient check-out, automatic billing and 24-hour access to our services, is a comprehensive laundry solution tailoring to busy families.</p>
						<button>Become a VIP</button>
					</div>
				</div>
			</div>
		</div>
		<div class="grey-background container-fluid">
			<div class="container">
				<h1>Seven Point Inspection</h1>
				<hr>

			</div>

		</div>
		
	</div><!-- .panel-content -->

</article><!-- #post-## -->
