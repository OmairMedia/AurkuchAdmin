<?php $this->load->view('site_layout/top');?>
<?php $this->load->view('site_layout/header');?>
<style type="text/css">
    .page-head{
        background-image:url(<?php echo base_url().'assets/cms_images/'.$pageData['image']?>);
        color:#FFF;
    position: relative;
    background-color: #FCFCFC;
    padding-bottom: 55px;
    color: gray;
       
    }
</style>
<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title"><?=$pageData['heading']?></h1>               
                    </div>
                </div>
            </div>
        </div>

                       
                           
                            <!-- /.row -->
                            <div class="container">
                          <div class="content-area recent-property padding-top-40">
                            <div class="col-md-10  col-md-offset-1">
                                <div class="col-md-12">
                            <p class=""><?=$settings['about']?></p>
                         </div>
                         <div class="col-md-12"><?=$settings['phone2']?></div>
                            <div class="row ">
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-map-marker"></i> Address</h3>
                                    <p><?=$settings['address'];?>
                                    </p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-phone"></i> Call center</h3>
                                    
                                    <p><strong><?=$settings['phone'];?></strong></p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                    <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                                    <ul>
                                        <li><strong><a href="mailto:"><?=$settings['email'];?></a></strong>   </li>
                                        
                                    </ul>
                                </div>
                                <!-- /.col-sm-4 -->
                           
                        </div>
                    </div>
                </div></div>
                <?=adds();?>
                         <?php $this->load->view('site_layout/footer');?>