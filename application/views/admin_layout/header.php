<?php  
$CI =& get_instance();

$controler=$this->uri->segment(1);
$function=$this->uri->segment(2);

?>

<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Required meta tags -->
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<link rel="shortcut icon" href="<?=base_url().'assets/cms_images/'.$settings['icon'];?>" />
		<title> Admin Dashboard</title>
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		
		<!-- Common CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/cms_layout/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/cms_layout/fonts/icomoon/icomoon.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/cms_layout/css/main.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/cms_layout/css/datatable.css" />

		<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
		<!-- Data Tables -->
		<link rel="stylesheet" href="<?=base_url()?>assets/cms_layout/vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/cms_layout/vendor/datatables/dataTables.bs4-custom.css" />
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<!-- Chartist css -->
		<!-- <link href="<?=base_url()?>assets/cms_layout/vendor/chartist/css/chartist.min.css" rel="stylesheet" />
		<link href="<?=base_url()?>assets/cms_layout/vendor/chartist/css/chartist-custom.css" rel="stylesheet" /> -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/social-likes/dist/social-likes_flat.css">
 <script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
	</head>
	<body>

		<!-- Loading starts -->
		<!-- <div id="loading-wrapper">
			<div id="loader">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
			</div>
		</div> -->
		<!-- Loading ends -->

		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">
			<!-- BEGIN .app-heading -->
			<header class="app-header">
				<div class="container-fluid">
					<div class="row gutters">
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
							<a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
								<i class="icon-menu5"></i>
							</a>
							<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
								<i class="icon-chevron-thin-left"></i>
							</a>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-4">
							<a href="index-2.html" class="logo">
								<img src="<?=base_url().'assets/cms_images/'.$settings['image'];?>" alt="Admin Dashboard" />
							</a>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
							<ul class="header-actions">
							
								<li class="dropdown">
									<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<img class="avatar" src="<?=base_url()?>assets/cms_images/<?=$userData['image']?>" alt="User Thumb" />
										<span class="user-name"><?=$userData['name']?></span>
										<i class="icon-chevron-small-down"></i>
									</a>
									<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
										<ul class="user-settings-list">
											
											<li>
												<a href="<?=base_url().'admin/settings'?>">
													<div class="icon red">
														<i class="icon-cog3"></i>
													</div>
													<p>Settings</p>
												</a>
											</li>
											
										</ul>
										<div class="logout-btn">
											<a href="<?=base_url()?>adminlogin/logout" class="btn btn-primary">Logout</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- END: .app-heading -->
			<!-- BEGIN .app-container -->
			<div class="app-container">
				<!-- BEGIN .app-side -->
				<aside class="app-side" id="app-side">
					<!-- BEGIN .side-content -->
					<div class="side-content ">
						<!-- BEGIN .user-profile -->
						<div class="user-profile">
							<img src="<?=base_url()?>assets/cms_images/<?=$userData['image']?>" class="profile-thumb" alt="User Thumb">
							<h6 class="profile-name"><?=$userData['name']?></h6>
							<ul class="profile-actions">
							
								
								<li>
									<a href="<?=base_url()?>adminlogin/logout" >
										<i class="icon-export"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- END .user-profile -->
						<!-- BEGIN .side-nav -->
						<nav class="side-nav">
							<!-- BEGIN: side-nav-content -->
							<ul class="unifyMenu" id="unifyMenu">
								<li <?php if($controler=='admin' && ($function=='index' || $function == 'cms_user' || $function == 'menu')){echo 'class="active selected"';}?>>
									<a href="<?=base_url()?>admin/index" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Dashboards</span>
									</a>
									<ul aria-expanded="false" <?php if($controler=='admin' && ($function=='index' || $function == 'cms_user' || $function == 'menu')){echo 'class="collapse in"';}?>>
										<li>
											<a href='<?=base_url()?>admin/index' <?php if($controler=='admin' && $function=='index'){echo 'class="current-page"';}?>>Dashboard</a>
										</li>
										<li>
											<a href='<?=base_url()?>admin/cms_user' <?php if($controler=='admin' && $function=='cms_user'){echo 'class="current-page"';}?>>CMS User</a>
										</li>
										
									
									</ul>
								</li>
								<!-- 	<li <?php if($controler=='admin' && ($function=='Categories' || $function == 'sub_category')){echo 'class="active selected"';}?>>
									<a href="<?=base_url()?>admin/Categories" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-paperclip"></i>
										</span>
										<span class="nav-title">Categories</span>
									</a>
									<ul aria-expanded="false" <?php if($controler=='admin' && ($function=='Categories' || $function == 'sub_category')){echo 'class="collapse in"';}?>>
										<li>
											<a href='<?=base_url()?>admin/Categories' <?php if($controler=='admin' && $function=='Categories'){echo 'class="current-page"';}?>>Category</a>
										</li>
									<li>
											<a href='<?=base_url()?>admin/sub_category' <?php if($controler=='admin' && $function=='sub_category'){echo 'class="current-page"';}?>>Sub Category</a>
										</li> 
										
									
									</ul>
								</li> -->
									<li <?php if($controler=='admin' && $function=='Categories'){echo 'class="active selected"';}?>>
									<a href="<?=base_url()?>admin/Categories" >
										<span class="has-icon">
											<i class="icon-paperclip"></i>
										</span>
										<span class="nav-title">Category</span>
									</a>
								</li>
								<li <?php if($controler=='admin' && $function=='Sliders'){echo 'class="active selected"';}?>>
									<a href="<?=base_url()?>admin/Sliders" >
										<span class="has-icon">
											<i class="icon-tabs-outline "></i>
										</span>
										<span class="nav-title">Slider</span>
									</a>
								</li>
								<li <?php if($controler=='admin' && $function=='reward'){echo 'class="active selected"';}?>>
									<a href="<?=base_url()?>admin/reward" >
										<span class="has-icon">
											<i class="icon-add_shopping_cart"></i>
										</span>
										<span class="nav-title">Reward</span>
									</a>
								    </li>
								<li <?php if($controler=='admin' && $function=='user'){echo 'class="active selected"';}?>>
									<a href="<?=base_url()?>admin/user" >
										<span class="has-icon">
											<i class="icon-user"></i>
										</span>
										<span class="nav-title">User</span>
									</a>
								</li>
								<li <?php if($controler=='admin' && $function=='transaction'){echo 'class="active selected"';}?>>
									<a href="<?=base_url()?>admin/transaction" >
										<span class="has-icon">
											<i class="icon-coin-dollar"></i>
										</span>
										<span class="nav-title">Transaction</span>
									</a>
								</li>
									<li <?php if($controler=='admin' && $function=='wallet'){echo 'class="active selected"';}?>>
									<a href="<?=base_url()?>admin/wallet" >
										<span class="has-icon">
											<i class="icon-wallet"></i>
										</span>
										<span class="nav-title">Wallet</span>
									</a>
								</li>
									
								
							
							
						
								 <!--<li  <?php //if($controler=='admin' && $function=='feedback'){echo 'class="active selected"';}?>>-->
        <!--                                            <a href="<?=base_url()?>admin/feedback" >-->
								<!--		<span class="has-icon">-->
								<!--			<i class="fas fa-comment-alt"></i>-->
								<!--		</span>-->
								<!--		<span class="nav-title">Feedback</span>-->
								<!--	</a>-->
								<!--</li>-->
                                
                                <li <?php if($controler=='admin' && $function=='support'){echo 'class="active selected"';}?>>
									<a href="<?=base_url()?>admin/support" >
										<span class="has-icon">
											<i class="icon-chat_bubble_outline"></i>
										</span>
										<span class="nav-title">Support</span>
									</a>
								</li>
                                
								<li <?php if($controler=='admin' && $function=='settings'){echo 'class="active selected"';}?>>
									<a href="<?=base_url()?>admin/settings" >
										<span class="has-icon">
											<i class="icon-cog3"></i>
										</span>
										<span class="nav-title">Settings</span>
									</a>
								</li>
							</ul>
							<!-- END: side-nav-content -->
						</nav>
						<!-- END: .side-nav -->
					</div>
					<!-- END: .side-content -->
				</aside>
				<!-- END: .app-side -->

				
			