<?php echo $__env->make('frontend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- ~~~=| Main Navigation START |=~~~ -->
		<nav class="mainnav">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="main_nav_box">
							<ul id="nav">

								<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $men): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<li class="<?php echo e($men->menuicon); ?>"><a href="<?php echo e(url($men->menulink)); ?>"><?php echo e($men->menuname); ?></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


							</ul>
						</div>
						
						<!-- ~~~=| Mobile Navigation END |=~~~ -->
						<div class="only-for-mobile">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<ul class="ofm">
									<li class="m_nav"><i class="fa fa-bars"></i> Hash</li>
								</ul>

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
		</nav>
		<!-- ~~~=| Main Navigation END |=~~~ -->
		
	</header>
	<!-- ~~~=| Header END |=~~~ -->
	





	<!-- ~~~=| Banner END |=~~~ -->
	
	<section class="main_news_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-xs-12">
					<!-- ~~~=| Fashion area START |=~~~ -->
					<div class="fashion_area">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								

								<?php $__currentLoopData = $techno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<div class="fashion_area_box">
									<div class="row">
										<div class="col-md-8 col-sm-8 col-xs-12">
											<div class="fs_news_left ht_fs_news_left">
												<div class="single_fs_news_left_text">
													<div class="single_fs_news_img_h2">
														<img src="uploads/<?php echo e($tech->articlesimage); ?>" alt="" />
														<div class="br_cam">
															<a class="fa fa-camera" href=""></a>
														</div>
													</div>
													<h4><a href="content/<?php echo e($tech->id); ?>"><?php echo e($tech->articlesname); ?></a></h4>
													<p>
														
													</p>
												</div>
											</div>
										</div>
									
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

								<?php echo e($allarticles->links()); ?>





								<div class="ht_add_box">
									<div class="row">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="ht_add_inner_box">
												<img src="uploads/<?php echo e($reklam->ads2); ?>" alt="add" />
											</div>
										</div>
									</div>
								</div>
								
								


							</div>
						</div>
					</div>
					<!-- ~~~=| Fashion area END |=~~~ -->
				</div>

				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="cc_home_two_middle">


						<div class="cc_middle_h_two_add">
							<img src="uploads/<?php echo e($reklam->ads3); ?>" alt="" />
						</div>
						<div class="cc_middle_h_two_blank"></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="home_sidebar">
						
						<div class="follow_us_side">
							<h2>Takip Edin</h2>
							<div class="all_single_follow">
							<div class="single_follow_us">
								<a href="<?php echo e($listele->facebook); ?>">
								<i class="fa fa-facebook"></i><br>
								Tıkla
								</a>
							</div>
							<div class="single_follow_us twit">
								<a href="<?php echo e($listele->twitter); ?>">
								<i class="fa fa-twitter"></i><br>
								Tıkla
								</a>
							</div>
							<div class="single_follow_us goopl">
								<a href="<?php echo e($listele->google); ?>">
								<i class="fa fa-google-plus"></i><br>
								Tıkla
								</a>
							</div>
							<div class="single_follow_us last_one">
								<a href="<?php echo e($listele->linkedin); ?>">
								<i class="fa fa-linkedin"></i><br>
								Tıkla
								</a>
							</div>
							</div>
						</div>
						<div class="follow_us_side">
							<h2>Son Gönderiler</h2>
							<div class="all_news_right">


								<?php $__currentLoopData = $artic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<div class="fs_news_right">
									<div class="single_fs_news_img">
										<img alt="Single News" src="uploads/<?php echo e($art->articlesimage); ?>">
									</div>
									<div class="single_fs_news_right_text">
										<h4><a href="content/<?php echo e($art->id); ?>"><?php echo e($art->articlesname); ?></a></h4>
										
									</div>
								</div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

						</div>
						<br>
						<div class="follow_us_side">
							<h2>Image Gallery</h2>
							
							
							
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
								<div class="item active">
								   <div class="br_single_news">
										<img alt="" src="frontend/images/side_slider.jpg">
										<div class="br_cam">
											<a class="fa fa-camera" href=""></a>
										</div>
									</div>
								</div>
								<div class="item">
								   <div class="br_single_news">
										<img alt="" src="frontend/images/side_slider.jpg">
										<div class="br_cam">
											<a class="fa fa-camera" href=""></a>
										</div>
									</div>
								</div>
								<div class="item">
								   <div class="br_single_news">
										<img alt="" src="frontend/images/side_slider.jpg">
										<div class="br_cam">
											<a class="fa fa-camera" href=""></a>
										</div>
									</div>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php echo $__env->make('frontend.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	