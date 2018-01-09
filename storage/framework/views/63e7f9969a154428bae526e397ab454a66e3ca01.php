<!-- ~~~=| Footer START |=~~~ -->
	<footer class="footer_area">
		<div class="footer_top">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="footer_top_box">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="footer_top_left">
							<img width="100px" src="<?php echo e(URL::to('/')); ?>/uploads/<?php echo e($listele->logo); ?>" alt="Footer Logo" />

										<p><?php echo e($listele->aboutus); ?></p>
										<br>
										<div class="ft_connected">
											<h4>BİZİ TAKİP EDİN</h4>
											<p>Bizi Takip Etmek İstemez misiniz ?...</p>
											<ul>
												<li><a class="fa fa-facebook" href="<?php echo e($listele->facebook); ?>"></a></li>
												<li><a class="fa fa-twitter" href="<?php echo e($listele->twitter); ?>"></a></li>
												<li><a class="fa fa-google-plus" href="<?php echo e($listele->google); ?>"></a></li>
												<li><a class="fa fa-linkedin" href="<?php echo e($listele->linkedin); ?>"></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="footer_top_middle">
										<div class="ftm_realted_post">
											<h4>Popular post</h4>
											<div class="single_related_post">
												<div class="srp_img">
													<a href="blog-single-slider-post.html">
														<img src="frontend/images/s_rl_pic1.jpg" alt="" />
													</a>
												</div>
												<div class="rel_post_text">
													<span>Jun 24,2015</span>
													<p>We can design for your desire.We are here...</p>
												</div>
											</div>
											<div class="single_related_post">
												<div class="srp_img">
													<a href="blog-single-slider-post.html">
														<img src="frontend/images/s_rl_pic2.jpg" alt="" />
													</a>
												</div>
												<div class="rel_post_text">
													<span>Jun 24,2015</span>
													<p>We can design for your desire.We are here...</p>
												</div>
											</div>
											<div class="single_related_post">
												<div class="srp_img">
													<a href="blog-single-slider-post.html">
														<img src="frontend/images/s_rl_pic3.jpg" alt="" />
													</a>
												</div>
												<div class="rel_post_text">
													<span>Jun 24,2015</span>
													<p>We can design for your desire.We are here...</p>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="footer_top_right">
										<div class="ftr_video">
											<h4>Günün Videosu</h4>
											<div class="results_video embed-responsive embed-responsive-16by9">
												<iframe width="854" height="480" src="<?php echo e($listele->dailyvideo); ?>" frameborder="0" allowfullscreen></iframe>
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
		<div class="footer_bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="footer_bottom_box">
							<p> &copy; <?php echo e($listele->footer); ?> </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ~~~=| Footer END |=~~~ -->
	
	<!-- ~~~=| Latest jQuery |=~~~ -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
	
	<!-- ~~~=| Bootstrap jQuery |=~~~ -->
    <?php echo e(Html::script('frontend/js/bootstrap.min.js')); ?>

	
	<!-- ~~~=| Opacity & Other IE fix for older browser |=~~~ -->
	<!--[if lte IE 8]>
		<script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
	<![endif]-->
	
	<!-- ~~~=| Theme jQuery |=~~~ -->
    <?php echo e(Html::script('frontend/js/main.js')); ?>

  </body>
</html>
