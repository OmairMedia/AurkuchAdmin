 <?php $this->load->view('site_layout/top');?>
<?php $this->load->view('site_layout/header');?>
<?php  $image=$property['image'];
  $image=explode(";",$image); ?>
 
 <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-1 ">
                        <div class="row">
                            <div class="light-slide-item">            
                                <div class="clearfix">
                                    

                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                    <?php foreach($image as $img){?>
                                        <li data-thumb="<?php echo base_url().'assets/cms_images/'.$img?>"> 
                                            <img src="<?php echo base_url().'assets/cms_images/'.$img?>" />
                                        </li>
                                       <?php }?>                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single-property-wrapper">
                            <div class="single-property-header">                                          
                                <h1 class="property-title pull-left"><?php echo  getField('e_category','slug',$this->uri->segment(1, 0),'name') //print_r($currentPage);?></h1>
                                <span class=" pull-right"><h5>Rs.<?= number_format($property['price']);?>/-</h5></span>
                            </div>

                            
                            <!-- .property-meta -->

                            <div class="section">
                                <h4 class="s-property-title">Description</h4>
                                <div class="s-property-content">
                                    <p><?=$property['feature']?>                                </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>


                    <div class="col-md-4 p0">
                        <div class="col-xs-12">

              
                <div class="table-header table-bordered" style="background-color: #337ab7;color: white;font-weight: bold;padding: 9px;text-align: center;">
                <h5>    PLOT DETAIL</h5>
                </div>

                <!-- div.table-responsive -->

                <!-- div.dataTables_borderWrap -->
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Plot No</th>
                                <td><?=$property['plote_no']?></td>
                            </tr>
                            <tr>
                                <th>Plot Size</th>
                                <td><?= $property['plote_size']?></td>
                                </tr>
                                <?php if(!$property['street']==''){?>
                                <tr>
                                <th>Street No</th>
                                <td><?=$property['street']?></td>
                                </tr>
                                <?php }?>
                                <?php if(!$property['block']==''){?>
                                <tr>
                                <th>Block No</th>
                                <td><?=$property['block']?></td>
                                </tr>
                                <?php }?>
                                <tr>
                                <th>Plot Type</th>
                                <td><?=$property['type']?></td>
                                
                            </tr>
                        </thead>
                        

                        <tbody>
                            
                                    <tr>
                                        
                                        
                                    </tr>
                              
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- second tabel-->
           
            <div class="clearfix container col-xs-12" >
            <div class="panel panel-primary">
      <div class="panel-heading center"><h5>CONTACT PERSON</h5></div>
      <div class="panel-body">
          <div class="row">
              <div class="col-xs-6"><strong> Name</strong></div>
              <div class="col-xs-6"><?=$property['name_person']?></div>
          </div>
           <div class="row">
              <div class="col-xs-6"><strong> Phone/Whatsapp</strong></div>
              <div class="col-xs-6"><?=$property['phone']?></div>
          </div>
      </div>
    </div>
</div>



                    </div>

                </div>

            </div>
<?php adds();?>
       

        <?php $this->load->view('site_layout/footer');?>
        <script>
            $(document).ready(function () {

                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function () {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>