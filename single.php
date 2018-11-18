<?php get_header(); ?>

<!--<div class="alert alert-danger">-->
<!--    <h1>Single.php</h1>-->
<!--</div>-->

	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="" class="s-text16">
			Blog
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			Black Friday Guide: Best Sales & Discount Codes
		</span>
	</div>

	<!-- content page -->
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
                            <?php
                            if ( have_posts() ) :
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/page/content', get_post_type() );

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;

                            endwhile;
                            ?>
                            <?php else: ?>
                                <div class="blog-detail-img wrap-pic-w">
                                    <img src="images/blog-04.jpg" alt="IMG-BLOG">
                                </div>

                                <div class="blog-detail-txt p-t-33">
                                    <h4 class="p-b-11 m-text24">
                                        Black Friday Guide: Best Sales & Discount Codes
                                    </h4>

                                    <div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By Admin
										<span class="m-l-3 m-r-6">|</span>
									</span>

                                        <span>
										28 Dec, 2018
										<span class="m-l-3 m-r-6">|</span>
									</span>

                                        <span>
										Cooking, Food
										<span class="m-l-3 m-r-6">|</span>
									</span>

                                        <span>
										8 Comments
									</span>
                                    </div>

                                    <p class="p-b-25">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.
                                    </p>

                                    <p class="p-b-25">
                                        Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.
                                    </p>
                                </div>

                                <div class="flex-m flex-w p-t-20">
								<span class="s-text20 p-r-20">
									Tags
								</span>

                                    <div class="wrap-tags flex-w">
                                        <a href="#" class="tag-item">
                                            Streetstyle
                                        </a>

                                        <a href="#" class="tag-item">
                                            Crafts
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
						</div>

						<!-- Leave a comment -->
						<form class="leave-comment">
							<h4 class="m-text25 p-b-14">
								Leave a Comment
							</h4>

							<p class="s-text8 p-b-40">
								Your email address will not be published. Required fields are marked *
							</p>

							<textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment" placeholder="Comment..."></textarea>

							<div class="bo12 of-hidden size19 m-b-20">
								<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="name" placeholder="Name *">
							</div>

							<div class="bo12 of-hidden size19 m-b-20">
								<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="email" placeholder="Email *">
							</div>

							<div class="bo12 of-hidden size19 m-b-30">
								<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="website" placeholder="Website">
							</div>

							<div class="w-size24">
								<!-- Button -->
								<button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Post Comment
								</button>
							</div>
						</form>
					</div>
				</div>

                <!-- Blog right side bar -->
				<?php get_sidebar('blog'); ?>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<?php get_footer(); ?>
