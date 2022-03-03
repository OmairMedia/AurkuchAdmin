<?php $this->load->view('site_layout/top');?>
<?php $this->load->view('site_layout/header');?>
<div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                   <?php 
                   foreach ($slider as $value) {
                      
                      echo' <div class="item"><img src="'. base_url().'assets/cms_images/'.$value['image'].'" alt="GTA V"></div>
                   ';  
                    }?>
                    
                </div>
            </div>
        </div>

        <!-- property area -->
        <div class="container-fluid">
            <div class="row">
                    <div class=" col-sm-10 col-sm-offset-1 text-center ">
                        <!-- /.feature title -->
                        <h2><?=$pageData['heading']?></h2>
                        <p><?=$pageData['details']?> . </p>
                    </div>
                </div>
                <div class="row">
                   <div class="col-sm-4"></div>
                   <div class=" col-sm-4" style="margin-left: 30px">
                     
                    <h2 class="single-footer" style="margin-left: 100px">Projects</h2>
                    <div style="background-color: #b3d4fc;width: 200px;margin-left:60px" class="footer-title-line"></div>
                 
                   </div>
                   <div class="col-sm-4"></div>
                  
                </div>
          
        <div class="row">
             <?= category();?>

        </div>

        <div class="row container-fluid">
          
          <div class="col-sm-8">
            <?php if(!empty($adds_top['name'])){?>
            <div class="thumbnail card box_shadow">
      <div class="top_heading text-center" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;"><?= $adds_top['name'];?></div>
      <a href="<?=$adds_top['link']?>" target="_blank"><img src="<?php echo base_url().'assets/cms_images/'.$adds_top['image']?>" style="width: 100%"></a>    
    </div><?php } ?>
  </div>
  
    <form method="post" action="Find_property">
          <div class="col-sm-4 card " style="color: #777">
            <div  class="thumbnail card box_shadow" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;"><h5 style="text-align: center;"><i style="margin-right: 10px" class="fa fa-search "></i>Find Property</h5></div>
            <div class="row form-group">
              <div class="col-sm-4"><strong> Property Type</strong></div>
              <div class="col-sm-8"> 
<select class="form-control" name="plot" id="type1" onchange="data(this.value)">
  <option>Select Type</option>
  <?=getOption('e_plot_type','name','name');?>
</select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-4"><strong>Project</strong> </div>
              <div class="col-sm-8"> 
<select class="form-control" name="project" id="pro">
  
</select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-4"><strong>price From </strong> </div>
              <div class="col-sm-8"> <input class="form-control" type="number" name="price_from" ></div>
            </div>
            <div class="row form-group">
              <div class="col-sm-4"><strong>Price To</strong> </div>
              <div class="col-sm-8"> <input class="form-control" type="number" name="Price_to" ></div>
            </div>
            <div class="row form-group">
              <div class="col-sm-6 col-sm-offset-4">
              <input type="submit" class="btn-search" style="background-color:#0074D9;color: white " name="submit" value="Search Property">
            </div>
            </div>
            </div>



          </div>
          </form>
        </div>
        <div class="row container-fluid">
          <?php if(!empty($add_left['name'])){?>
          <div class="col-sm-6">
            <div class="thumbnail card box_shadow">
      <div class="top_heading text-center" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;"><?= $add_left['name'];?></div>
      <a href="<?=$add_left['link']?>" target="_blank"><img src="<?php echo base_url().'assets/cms_images/'.$add_left['image']?>" style="width: 100%"></a>    
    </div></div>
  <?php }   if(!empty($add_right['name'])){?>
          
          <div class="col-sm-6">
            <div class="thumbnail card box_shadow">
      <div class="top_heading text-center" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;"><?= $add_right['name'];?></div>
      <a href="<?=$add_right['link']?>" target="_blank"><img src="<?php echo base_url().'assets/cms_images/'.$add_right['image']?>" style="width: 100%"></a>    
    </div></div>
  <?php } ?>
          </div>
        </div>
        </div>
        
<?php $this->load->view('site_layout/footer');?>
<script type="text/javascript">
  
 function data(id)
 {
  var tid=id;
  
  $.post("<?php echo base_url(); ?>Home/type",{tid}, 
      function(data)
      {
        //alert(data);
       //  console.log(data);
       //  //alert(data);
       // // $("#row"+value).hide();
       //  //$("#flash_data").html(data);
        $("#pro").html(data);
      });



 }
</script>