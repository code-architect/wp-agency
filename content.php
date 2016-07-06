<?php
/*
 #=======================================================
 *
 * conetnt.php
 *
 * The default template for content
 *
 #=======================================================
 */
?>

<div id="post-<?php the_ID(); ?>" class="<?php post_class('col-md-8 animate-box'); ?>">

						<div class="fh5co-services">

							<div class="holder-section">

								<?php
								// post title
								echo '<a href="'. get_the_permalink() .'"><h3>'. get_the_title() .'</h3></a>';

								// post meta
								ca_post_meta();
								?>

								<!-- Post Image -->
								<!-- Display only if have a post thubnail -->
								<?php if(has_post_thumbnail()):  ?>
									<div class="portfolio-wrapper">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
											<?php the_post_thumbnail('full'); ?>
											<img src="images/portfolio_pic2.jpg" alt="" />
										</a>
									</div>
								<?php endif; ?>
								<!-- Post image end -->

								<p><?php the_content( __(' Continue reading.....', 'agency') ); ?></p>
							</div>
						</div>
					</div>
