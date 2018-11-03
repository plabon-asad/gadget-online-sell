
    <?php get_header(); ?>
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) ?>/images/heading-pages-05.jpg);">
		<h2 class="l-text2 t-center">
			Blog
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
                        <?php
                        $args = array(
                                'category' => 'blog_post',
                            'posts_per_page' => '1',
                            'order' => 'ASC'

                        );
                        $blog_post = new WP_Query( $args );
                        if ($blog_post->have_posts()) : ; while ($blog_post->have_posts()) : $blog_post->the_post();
                        ?>
						<!-- item blog -->
						<div class="item-blog p-b-80">
							<a href="<?php the_permalink(); ?>" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<?php the_post_thumbnail(); ?>
<!--                                <img src="--><?php //echo esc_url(get_template_directory_uri()) ?><!--/images/blog-04.jpg" alt="IMG-BLOG">-->

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									<?php the_date( 'd M Y' ); ?>
								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="<?php the_permalink(); ?>" class="m-text24">
										<?php the_title(); ?>
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By <?php the_author(); ?>
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										Cooking, Food
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										<?php the_comment(); ?>
									</span>
								</div>

								<p class="p-b-12">
									<?php the_content(); ?>
								</p>

								<a href="<?php the_permalink(); ?>" class="s-text20">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>
                        <?php endwhile; ?>
                        <!-- Pagination -->
                        <div class="pagination flex-m flex-w p-r-50">
                                <span class="item-pagination flex-c-m trans-0-4 active-pagination">
                                    <?php previous_post_link(); ?>
                                </span>
                                <span class="item-pagination flex-c-m trans-0-4 active-pagination">
                                    <?php next_post_link(); ?>
                                </span>
<!--                            <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>-->
<!--                            <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>-->
                        </div>
                        <?php endif; wp_reset_postdata(); ?>
					</div>


				</div>

				<!-- Right sidebar -->
                <?php get_sidebar(); ?>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<?php get_footer(); ?>