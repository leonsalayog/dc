<?php /*Template Name: Home Template */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                <div class="grey-background container-fluid">
                        <div class="container">
                            <h1> Your Laundry Your Ways</h1>
                            <hr>
                            <p> Dependable Cleaners offers more than conventional local dry cleaners. We wash, dry, press and fold all types of laundry - from bedsheets to bath towels and beyond -- using advance methods and trusted techniques in clothing and textile care.
                            <div  class="row">
                                <div  class="col-md-4 col-md-6">
                                    container 1
                                </div>
                                <div  class="col-md-4 col-md-6">
                                    container 2
                                </div>
                                <div  class="col-md-4 col-md-6">
                                    container 3
                                </div>
                                <div  class="col-md-4 col-md-6">
                                    container 4
                                </div>
                                <div  class="col-md-4 col-md-6">
                                    container 5
                                </div>
                                <div  class="col-md-4 col-md-6">
                                    container 6
                                </div>
                            </div>
                        </div>
                    </div>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
            ?>
            
            asd

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();