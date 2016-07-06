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
								<h2><?php  ?></h2>
								<?php echo '<a href="'. get_the_permalink() .'"><h3>'. get_the_title() .'</h3></a>' ?>

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

								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								here live the blind texts. Far far away, behind the word mountains, far from the countries
								Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains,
								far from the countries Vokalia and Consonantia,
								here live the blind texts. Far far away, behind the word mountains, far from the countries
								Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains,
								far from the countries Vokalia and Consonantia,
								here live the blind texts. Far far away, behind the word mountains, far from the countries
								Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains,
								far from the countries Vokalia and Consonantia,
								here live the blind texts. Far far away, behind the word mountains, far from the countries
								Vokalia and Consonantia, there live the blind texts.
								</p>
							</div>
						</div>
					</div>
