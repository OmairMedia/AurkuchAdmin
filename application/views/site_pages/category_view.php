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
                            <div class="row">
                                <div class="col-xs-8">
                                    <p>   <?php echo $pageData['details']?>
                               </p>
                                </div>
                                <div class="col-xs-4">
                                    
                                      
    
   
  <img class="img" src="<?=base_url()?>assets/cms_images/<?=$pageData['map']?>"  alt="image">




                               </div>
                            </div>
                             

                               
                            </div>
                               

                        </section> 
<h4 class="center"><?php if(!empty($phase)){ echo $pageData['name'];}?></h4>
                     
                    </div>  
                    <?php foreach($phase as $value){
                 
              $plots=  getRows('e_item','phase_id',$value['id']);
                
                // echo $value['id'];
       if(!empty($plots)){
                        ?>                  
                 <div class="row">
            <div class="col-xs-12">

                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                </div>
                <div class="table-header table-bordered" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;">
                    <?php echo $value['phase_name']?>
                </div>

                <!-- div.table-responsive -->

                <!-- div.dataTables_borderWrap -->
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Plot Size</th>
                                <th>Street No</th>
                                <th>Plot No</th>
                                <th>Price</th>
                                <th>More Detail</th>
                            </tr>
                        </thead>
                        <?php foreach($plots as $p){ ?>
                        <tr>
                            <td><?php echo $p['plote_size'];?></td>
                            <td><?php echo $p['street']?></td>
                            <td><?php echo $p['plote_no']?></td>
                            <td>Rs.<?php echo number_format($p['price']); ?>/-</td>
                            <td><a href="<?php echo $this->uri->segment(1).'/'.$p['id'].'-'.$this->uri->segment(1)?>-Plot">More Info</a></td>
                        </tr>
                    <?php } ?>

                        <tbody>
                            
                                    <tr>
                                        
                                        
                                    </tr>
                              
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php } } ?>
                </div>


            </div>
        </div>
        <?php $this->load->view('site_layout/footer');?>
       