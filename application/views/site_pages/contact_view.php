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
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                    	<div class="col-sm-4"></div>
                    	<div class="col-sm-4">
                    		<div class=""><h4 style="margin-left: 30px">CONTACT US</h4></div>
                        <div style="background-color: #b3d4fc;width: 200px;margin-left:0px" class="footer-title-line"></div>
                    	</div>
                    	<div class="col-sm-4"></div>
                    </div> 
                         <div class="col-md-12">
                         	<p class=""><?=$pageData['details']?></p>
                         </div> 

                        <div class="" id="contact1">                        
                           
                            <!-- /.row -->
                          
                           
                            <hr>
                            <h2>Contact form</h2>
                            <?php if($msg>0){?>
                              <div class="alert alert-success"><h5 class="text-center">Action Success</h5></div>
                          <?php }?>
                            <form method="POST" action="Contact">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" required="" name="name" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" name="last" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" required="" name="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" name="subject" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" name="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button style="background-color: #b3d4fc;border:none;" type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <?=adds();?>
        <?php $this->load->view('site_layout/footer');?>