	<?php echo $__env->make('frontend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


		<!-- ~~~=| Logo Area END |=~~~ -->
		
		<!-- ~~~=| Main Navigation START |=~~~ -->
		<div class="mainnav">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<nav class="main_nav_box">
							<div class="main_nav_box">
							<ul id="nav">

								<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $men): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<li class="<?php echo e($men->menuicon); ?>"><a href="<?php echo e(url($men->menulink)); ?>"><?php echo e($men->menuname); ?></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


							</ul>
							</div>
						</nav>
						
						<!-- ~~~=| Mobile Navigation END |=~~~ -->
						<div class="only-for-mobile">
							<div class="col-md-12 col-sm-12 col-xs-12">
								

								<!-- MOBILE MENU -->
								<div class="mobi-menu">
									<div id='cssmenu'>
										<ul>
											<li class='has-sub'>
												<a href='index.html'><span>Home</span></a>
												<ul class="sub-nav">
													<li><a href="index.html"><span>Home One</span></a></li>
													<li><a href="index-two.html"><span>Home Two</span></a></li>
												</ul>
											</li>
											<li class='has-sub'>
												<a href='#'><span>News</span></a>
												<ul class="sub-nav">
													<li><a href="#"><span>Hockey</span></a></li>
													<li><a href="#"><span>Cricket</span></a></li>
													<li><a href="#"><span>Football</span></a></li>
													<li><a href="#"><span>Boxing</span></a></li>
													<li><a href="#"><span>Bat Mitton</span></a></li>
													<li><a href="#"><span>Others</span></a></li>
												</ul>
											</li>
											<li>
												<a href='#'><span>Fashion</span></a>
											</li>
											<li class='has-sub'>
												<a href='#'><span>Lifeguide</span></a>
												<ul>
													<li class='has-sub'>
														<a href='#'><span>features</span></a>
														<ul class="has-sub">
															<li><a href="#"><span>Business</span></a></li>
															<li><a href="#"><span>Technology</span></a></li>
															<li><a href="#"><span>Politics</span></a></li>
															<li><a href="#"><span>Sport</span></a></li>
															<li><a href="#"><span>Science</span></a></li>
															<li><a href="#"><span>Health</span></a></li>
															<li><a href="#"><span>Fashion Shirts</span></a></li>
															<li class="last"><a href="./#"><span>CASUAL SHIRTS</span></a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li>
												<a href='#'><span>CHILDREN</span></a>
											</li>
											<li class='has-sub'>
												<a href='#'><span>Pages</span></a>
												<ul class="sub-nav">
													<li><a href="about.html"><i class="fa fa-angle-right"></i>About page</a></li>
													<li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact Page</a></li>
													<li><a href="blog-single-audio-post.html"><i class="fa fa-angle-right"></i>Blog with Aduio page</a></li>
													<li><a href="blog-single-link-post.html"><i class="fa fa-angle-right"></i>Blog with Link page</a></li>
													<li><a href="blog-single-post.html"><i class="fa fa-angle-right"></i>Blog with Post page</a></li>
													<li><a href="blog-single-quote-post.html"><i class="fa fa-angle-right"></i>Blog with Quote page</a></li>
													<li><a href="blog-single-slider-post.html"><i class="fa fa-angle-right"></i>Blog with Slider page</a></li>
													<li><a href="blog-single-twitter-post.html"><i class="fa fa-angle-right"></i>Blog with Twitter page</a></li>
													<li><a href="blog-single-video-post.html"><i class="fa fa-angle-right"></i>Blog with Video page</a></li>
												</ul>
											</li>
											<li>
												<a href='#'><span>Gadgets</span></a>
											</li>
											<li>
												<a href='#'><span>Lifestyle</span></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- ~~~=| Mobile Navigation START |=~~~ -->
						
						
					</div>
				</div>
			</div>
		</div>
		<!-- ~~~=| Main Navigation END |=~~~ -->
		
	</header>
	<!-- ~~~=| Header END |=~~~ -->
	
	<section class="main_news_wrapper cc_single_post_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12">
					<!-- ~~~=| Fashion area START |=~~~ -->
					<div class="cc_single_post">
						<div class="bsp_img">
							<img src="<?php echo e(URL::to('/')); ?>/uploads/<?php echo e($list->articlesimage); ?>" alt="" />
						</div>
						<div class="sp_details">
							<a href="">Sports</a>
							<h2><?php echo e($list->articlesname); ?></h2>
							<div class="post_meta">
								
							</div>
							<div class="post_text">
								<p><?php echo e($list->articlescontent); ?></p>
							</div>
							<div class="social_tags">
								<div class="social_tags_left">
									
								</div>
								<div class="social_tags_right">
									<ul>
										<li class="facebook"><a class="fa fa-facebook" href=""></a></li>
										<li class="twitter"><a class="fa fa-twitter" href=""></a></li>
										<li class="google-plus"><a class="fa fa-google-plus" href=""></a></li>
										<li class="linkedin"><a class="fa fa-linkedin" href=""></a></li>
									</ul>
								</div>
							</div>
							
							<div class="sp-comments-box">
								<h2>Comments</h2>
								<div class="single_comment">
									<div class="single_comment_pic">
										<img src="images/comment-pic1.png" alt="" />
										<img src="<?php echo e(URL::to('/')); ?>images/comment-pic1.png" alt="" />
									</div>
									<div class="single_comment_text">
										<div class="sp_title">
											<a href=""><h4>Chris Hemsworth</h4></a>
											<p>10 Min ago</p>
										</div>
										<p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
										<a href=""><i class="fa fa-reply"></i>Reply</a>
									</div>
								</div>
								<div class="single_comment single_comment_middle">
									<div class="single_comment_pic">
										<img src="images/comment-pic2.png" alt="" />
										<img src="<?php echo e(URL::to('/')); ?>images/comment-pic2.png" alt="" />

									</div>
									<div class="single_comment_text">
										<div class="sp_title">
											<a href=""><h4>Chris Hemsworth</h4></a>
											<p>10 Min ago</p>
										</div>
										<p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
										<a href=""><i class="fa fa-reply"></i>Reply</a>
									</div>
								</div>
								<div class="single_comment single_comment_last">
									<div class="single_comment_pic">
										<img src="images/comment-pic3.png" alt="" />
									</div>
									<div class="single_comment_text">
										<div class="sp_title">
											<a href=""><h4>Chris Hemsworth</h4></a>
											<p>10 Min ago</p>
										</div>
										<p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
										<a href=""><i class="fa fa-reply"></i>Reply</a>
									</div>
								</div>
							</div>
							<div class="comment-form">
								<h2>leave your comments</h2>
								<div class="comments_form">
									<form>
										<div class="inp_name">
											<input id="c_name" type="text" placeholder="Your Name" required/>
											<input type="text" placeholder="Your Name" required/>
										</div>
										<textarea cols="30" rows="10" placeholder="Message"></textarea>
										<input type="submit" value="Send Message"/>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- ~~~=| Fashion area END |=~~~ -->
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="home_sidebar">
						
						
						<div class="follow_us_side">



							<h2>Son Gönderiler</h2>
							<div class="all_news_right">


								<?php $__currentLoopData = $artic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<div class="fs_news_right">
									<div class="single_fs_news_img">
							<img src="<?php echo e(URL::to('/')); ?>/uploads/<?php echo e($art->articlesimage); ?>" alt="" />
										
									</div>
									<div class="single_fs_news_right_text">
										<h4><a href="content/<?php echo e($art->id); ?>"><?php echo e($art->articlesname); ?></a></h4>
										
									</div>
								</div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

						</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<?php echo $__env->make('frontend.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>