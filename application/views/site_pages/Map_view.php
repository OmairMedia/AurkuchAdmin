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


.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.5); 
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
                    <?php  foreach ($packeg as $key => $value){
                        # code...
                    
                    ?>
                    <div class="col-md-11 col-md-offset-1">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-6">
                            <div class=""><h4 style="margin-left: 30px"><?=$value['name']?></h4></div>
                        <div style="background-color: #b3d4fc;width: 200px;margin-left:0px" class="footer-title-line"></div>
                        </div>
                        <div class="col-sm-4"></div>
                    </div> 
                       <?=Map($value['id']);?>  
 
 
                        
                    </div>
                    <?php } ?>    
                </div>
            </div>
        </div>
        <?=adds();?>
        <?php $this->load->view('site_layout/footer');?>
 




















