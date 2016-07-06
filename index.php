<?php
/*
 #=======================================================
 *
 * index.php
 *
 * The main template
 *
 #=======================================================
 */
?>

<?php
/* Load header.php */
get_header();
?>
<div id="fh5co-intro-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 animate-box">
				<h2 class="intro-heading"><?php _e('We Create Cool Things For The Better Web.', 'agency'); ?></h2>
				<p><span><?php _e('Created with by the fine folks at FreeHTML5.co', 'agency'); ?></a></span></p>
			</div>
		</div>
	</div>
</div>
<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section">
					


						<!-- <h3>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3> -->
					</div>
				</div>
				<div class="row fh5co-services-single">

							<?php if(have_posts()) : while(have_posts()):	 the_post(); ?>
								<?php get_template_part('content', get_post_format()); ?>
							<?php endwhile; ?>

							<?php else: ?>
								<?php get_template_part('content', 'none'); ?>
							<?php endif; ?>





					<div class="col-md-4 animate-box">
						<div class="fh5co-services">
							sidebar
						</div>
					</div>

				</div>
			</div>
		</div>
