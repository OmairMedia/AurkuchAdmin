<?php 
	$controler=$this->uri->segment(1);
$function=$this->uri->segment(2);
 ?>
			

	    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <div class="header-connect" style="background-color: #337ab7;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call" >
                            <p style="color:GhostWhite ;">
                                <span><i class="pe-7s-call"></i> <?=$settings['phone']?></span>
                                <span><i class="pe-7s-mail"></i> <?=$settings['email']?></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li ><a href="<?=$settings['fb']?>"><i style="color: GhostWhite " class="fa fa-facebook"></i></a></li>
                                <li><a href="<?=$settings['twitter']?>"><i style="color: GhostWhite " class="fa fa-twitter"></i></a></li>
                                <li><a href="<?=$settings['googleplus']?>"><i style="color: GhostWhite " class="fa fa-google-plus"></i></a></li>
                                <li><a href="<?=$settings['linkedin']?>"><i style="color: GhostWhite " class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" style="margin-bottom: 50px">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand " href="<?= base_url();?>"><img class=""  src="<?= base_url()?>assets/cms_images/<?=$settings['image']?>" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=" collapse navbar-collapse yamm" id="navigation">
                    
                    <ul class=" main-nav nav navbar-nav navbar-right">
                        <?= getNavMenu($controler, $function)?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

        <!-- End Main Header -->	