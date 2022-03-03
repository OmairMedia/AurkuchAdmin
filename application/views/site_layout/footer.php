 <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>

                               
                                <p><?= substr($settings['about'], 0,300)?>.</p>
                                <ul class="footer-adress">
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        <?php $f=fo();

                        ?>
                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Quick links </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <?php foreach($f as $link){?>
                                    <li style="border-bottom: none"><a href="<?=$link['slug']?>"><?=$link['name']?></a>  </li> 
                                    <?php } ?>
                                    <?php   $footer_menu=getConditionData_array('e_menu',' display="yes" and  position LIKE "%footer%"'); 
                                             foreach ($footer_menu as $key => $value) {
                                                
                                          
                                    ?>
                                    <li style="border-bottom: none"><a href="<?=$value['slug']?>"><?=$value['name']?></a>  </li> 
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
                                <p>
                                    <?=$settings['address']?>
                                </p>

                                <form>
                                    
                                    <!-- /input-group -->
                                </form> 

                                <div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="<?=$settings['twitter']?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="<?=$settings['fb']?>" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="<?=$settings['googleplus']?>" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                        
                                        <li><a class="wow fadeInUp animated" href="<?=$settings['linkedin']?>" data-wow-delay="0.6s"><i class="fa fa-linkedin"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) <a href="https://www.solutionsplayer.com/">Powered by Solutions Player Pvt. Ltd</a> , All rights reserved 2018  </span> 
                        </div> 
                        <div class="bottom-menu pull-right"> 
                            <ul> 
                                <!-- <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.2s">Home</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.3s">Property</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.4s">Faq</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s">Contact</a></li> -->
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="<?= base_url()?>assets/site_assets/js/jquery-1.10.2.min.js"></script> 
        <script src="<?= base_url()?>assets/site_assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url()?>assets/site_assets/js/bootstrap-select.min.js"></script>
        <script src="<?= base_url()?>assets/site_assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="<?= base_url()?>assets/site_assets/js/easypiechart.min.js"></script>
        <script src="<?= base_url()?>assets/site_assets/js/jquery.easypiechart.min.js"></script>

        <script src="<?= base_url()?>assets/site_assets/js/owl.carousel.min.js"></script>
        <script src="<?= base_url()?>assets/site_assets/js/wow.js"></script>

        <script src="<?= base_url()?>assets/site_assets/js/icheck.min.js"></script>
        <script src="<?= base_url()?>assets/site_assets/js/price-range.js"></script>
      <script type="text/javascript" src="<?= base_url()?>assets/site_assets/js/lightslider.min.js"></script>
              <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
              <!--  <script src="<?= base_url()?>assets/site_assets/js/gmaps.js"></script>        
        <script src="<?= base_url()?>assets/site_assets/js/gmaps.init.js"></script> -->

        <script src="<?= base_url()?>assets/site_assets/js/main.js"></script>

    </body>
</html>