<?php $this->load->view('site_layout/top');?>
<?php $this->load->view('site_layout/header');?>

<!-- Camera- Slider -->
	<section class="camera_slider_container">
		<div class="camera_wrap camera_azure_skin without_thumbs" id="camera_wrap_1">
			<?php foreach ($slider as $row): ?>
				<div data-thumb="<?=base_url().'assets/cms_images/'.$row['image']?>" data-src="<?=base_url().'assets/cms_images/'.$row['image']?>">
					<div class="camera_caption fadeFromBottom">
					   <?=$row['title']?>
					</div>
				</div>
			<?php endforeach ?>
		</div><!-- #camera_wrap_1 -->
		
	</section>
	<!-- End Camera Slider -->
	
	<!-- Icon Boxes Style 1 A -->
	<section class="content_section">
		<div class="container icons_spacer">
			<div class="main_title centered upper">
				<h2><span class="line"><span class="dot"></span></span>About Retail Consultant</h2>
			</div>
			<div class="icon_boxes_con style1 clearfix">
				<?php foreach ($services as $service): ?>
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class="<?=$service['icon']?>"></i></span>
						<div class="service_box_con centered">
							<h3><?=$service['title']?></h3>
							<span class="desc"><?=$service['details']?></span>
							<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>
	<!-- End Icon Boxes Style 1 A -->
	
	
	<!-- Features Slider 1-->
	<section class="content_section bg_fixed white_section bg2">
	    <span class="section_icon"><i class="ico-tools"></i></span>
	    <div class="bg_overlay1">
		<div class="content row_spacer_t clearfix">
		
		    <div class="main_title centered upper">
			<h2><span class="line"></span>Featured Projects</h2>
		    </div>
		    
		   <!--  <span class="description4 centered">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour of this randomised words which don't look even slightly believable.</span> -->
		    
		    <div class="png_slider">
		    	<?php $i=0; foreach ($projects as $project):$i++;if($i==6)break;
		    	if (empty($project['image'])) continue;
				 	$images = explode(';', $project['image']); ?>
		    		<div class="png_slide">
				     <div class="desc centered italic">
					<div class="main_title has_bg blue_bg centered upper medium">
					    <h2><span class="line"></span><a style="color:white" href="<?=base_url().'projects/'.$project['slug']?>"><?=$project['title']?></a></h2>
					</div>
					    <span><?=$project['description']?></span>
				    </div>
				    <img src="<?=base_url().'assets/cms_images/'.$images[0]?>" alt="Device1">
			    </div>
		    	<?php endforeach ?>
		    </div>
		    
		</div>
	    </div>
	</section>
	<!-- End Features Slider 1 -->
   
    <!-- Isotope Filter 1 Three columns with padding -->
    <section class="content_section bg_gray">
        <div class="row_spacer clearfix">
        
            <div class="content">
                <div class="main_title centered upper">
                    <h2><span class="line"><i class="ico-book5"></i></span>Our Portfolio</h2>
                </div>
            </div>
            
                <!-- Filter Content -->
                <div class="hm_filter_wrapper three_blocks project_text_nav boxed_portos has_sapce_portos nav_with_nums upper_title upper_title">
                    <div id="options" class="sort_options clearfix">
                        <ul data-option-key="filter" class="option-set clearfix" id="filter-by">
                            <li><a data-option-value="*" class="selected" href="#"><span>all</span><span class="num"></span></a></li>
                            <?php foreach ($portfolioCategories as $category): ?>
                            	<li><a data-option-value=".<?=$category['id'].'cat'?>" class="" href="#"><span><?=$category['name']?></span><span class="num"></span></a></li>
                            <?php endforeach ?>
                        </ul>
                        <div class="sort_list">
                            <a href="#" class="sort_selecter">
                                <span class="text">Sort By</span>
                                <span class="arrow"><i class="ico-arrow-back"></i></span>
                            </a>
                            <ul data-option-key="sortBy" class="option-set clearfix" id="sort-by">
                                <!-- <li><a data-option-value="original-order" class="selected" href="#"><span class="text">original order</span></a></li> -->
                                <li><a data-option-value="name" href="#" class=""><span class="text">name</span></a></li>
                                <li><a data-option-value="number" href="#" class=""><span class="text">date</span></a></li>
                              
                            </ul>
                        </div>
                        <ul data-option-key="sortAscending" class="option-set clearfix" id="sort-direction">
                            <li><a class="selected" data-option-value="true" href="#">
                                <span><i class="ico-keyboard-arrow-up"></i></span></a>
                            </li>
                            <li><a data-option-value="false" href="#" class="">
                                <span><i class="ico-keyboard-arrow-down"></i></span></a>
                            </li>
                        </ul>
                    </div>     
                               
                    <div class="hm_filter_wrapper_con">
                    	<?php foreach ($gallery as $row): ?>
                    		 <div class="filter_item_block <?=$row['category'].'cat'?>">
							<div class="porto_block">
								<div class="porto_type">
									<a data-rel="magnific-popup" href="<?=base_url().'assets/cms_images/'.$row['image']?>">
										<img src="<?=base_url().'assets/cms_images/'.$row['image']?>" alt="Portfolio Name">
									</a>
									<div class="porto_nav">
									    <a href="#" class="expand_img">View Larger</a>
									    <!-- <a href="#" class="detail_link">More Details</a> -->
									</div>
								</div>
								<div class="porto_desc">
								    <h6 class="name"><?=$row['title']?></h6>
								    <div class="porto_meta clearfix">
									<span class="porto_date"><span class="number"><?=$row['tdate']?></span><?=Date('F m,Y',strtotime($row['tdate']))?></span>
									<span class="porto_nums">
									   <!--  <span class="comm"><i class="ico-comments"></i><span class="comm_counter">45</span></span>
									    <span class="like"><i class="ico-heart2"></i><span class="like_counter">120</span></span> -->
									</span>
								    </div>
								</div>
							</div>
                        </div><!-- Item -->
                    	<?php endforeach ?>
                       
                       
                    </div>
                </div>
                <!-- End Filter Content -->
            
        </div>    
    </section>
    <!-- End Isotope Filter 1 Three columns with padding -->	
	
	<!-- Google Map -->
	 <section class="content_section">
		<div class="title_banner t_b_color1 upper centered">
			<div class="content">
				<h2>Our Location</h2>
			</div>
		</div>
		<div class="bordered_content">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.602776859177!2d73.07382331478924!3d33.66745298071235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95fefd02beef%3A0x9e24fbf541e2d78c!2sSolutions+Player+Pvt.+Ltd.!5e0!3m2!1sen!2s!4v1522318204674" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section> 
	<!-- End Google Map -->
	
<?php $this->load->view('site_layout/footer');?>