<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($listele->title); ?></title>
	
	<!-- ~~~=| Fonts files |==-->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900,700italic,400italic,300italic,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,500,700,700italic,900' rel='stylesheet' type='text/css'>
	
	<!-- ~~~=| Font awesome |==-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	
	<!-- ~~~=| Bootstrap css |==-->
    <?php echo e(Html::style('frontend/css/bootstrap.css')); ?>

	
	<!-- ~~~=| Theme files |==-->
    <?php echo e(Html::style('frontend/style.css')); ?>

    <?php echo e(Html::style('frontend/css/responsive.css')); ?>


	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" href="frontend/images/apple-touch-icon-precomposed.png">
	<link rel="shortcut icon" type="image/ico" href="frontend/images/favicon.ico"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
	<!-- ~~~=| Header START |=~~~ -->
	<header class="header_area">
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="header_top_left">
							<div class="news_twiks">
								<h4>DUYURU</h4>
							</div>
							<div class="news_twiks_items">
								<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
								  
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
									<div class="item active">
									  <p><?php echo e($listele->not1); ?></p>
									</div>
									<div class="item">
									  <p><?php echo e($listele->not2); ?></p>
									</div>
									
								  </div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="header_top_right">
							<div class="social_header">
								<ul>
									<li><a class="fa fa-facebook" href="<?php echo e($listele->facebook); ?>"></a></li>
									<li><a class="fa fa-twitter" href="<?php echo e($listele->twitter); ?>"></a></li>
									<li><a class="fa fa-google-plus" href="<?php echo e($listele->google); ?>"></a></li>
									<li><a class="fa fa-linkedin" href="<?php echo e($listele->linkedin); ?>"></a></li>
									<li><a class="fa fa-behance" href=""></a></li>
								</ul>
							</div>
							<div class="header_search_box">
								<form class="header_search hidden-xs" action="index.html">
									<input type="text" placeholder="Search">
									<input type="submit" value="">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- ~~~=| Logo Area START |=~~~ -->
		<div class="header_logo_area">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="logo">
							<a href="<?php echo e(url('/')); ?>"><img width="100px" src="<?php echo e(URL::to('/')); ?>/uploads/<?php echo e($listele->logo); ?>" alt="Site Logo" /></a>
						</div>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="header_add">
							<img  src="<?php echo e(URL::to('/')); ?>/uploads/<?php echo e($reklam->ads1); ?>" alt="ads" />

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ~~~=| Logo Area END |=~~~ -->