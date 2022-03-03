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
                        <h1 class="page-title"><?php echo $pageData['heading']?></h1>  
                       
                      <!--   <img src="<?php echo base_url().'assets/cms_images/'.$pageData['image']?>"> -->          
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <div class="content-area blog-page padding-top-40">
            <div class="container">
                <div class="row">
                    
                     
                    
                    <div class="blog-lst col-md-12  ">

                        <div class="post-header single">
                                <div class="">
                                   <!--  <h2 class="wow fadeInLeft animated"><?php echo $pageData['heading'];?></h2> -->
                                </div>
                            </div>
                        <section id="id-100" class="post single">


                            <div id="post-content" class="post-body single wow fadeInLeft animated">
                             <p>   <?php echo $pageData['details']?>
                               </p>

                               
                            </div>
                               

                        </section> 
                    </div></div></div></div>
                                <?php $this->load->view('site_layout/footer');?>