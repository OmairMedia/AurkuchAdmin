<?php $this->load->view('site_layout/top');?>
<?php $this->load->view('site_layout/header');?>

 <div class="container-fluid">
            <div class="col-xs-12">

                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                </div>
                <div class="table-header table-bordered" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;">
                	<?=$plot?>
                   
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
                         <?php foreach($property as $p){ ?>
                        <tr>
                            <td><?php echo $p['plote_size'];?></td>
                            <td><?php echo $p['block']?></td>
                            <td><?php echo $p['plote_no']?></td>
                            <td>Rs.<?php echo number_format($p['price']); ?>/-</td>
                            <td><a href="<?php echo getField('e_category','id',$p['cat_id'],'slug').'/'.$p['id'].'-'.$this->uri->segment(1)?>-Plot">More Info</a></td>
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
        <div class="row container-fluid">
          <div class="col-sm-12"><div class="thumbnail card box_shadow">
      <div class="top_heading text-center" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;"><?= $adds_top['name'];?></div>
      <a href="<?=$adds_top['link']?>" target="_blank"><img src="<?php echo base_url().'assets/cms_images/'.$adds_top['image']?>" style="width: 100%"></a>    
    </div></div>
    
        </div>
        <div class="row container-fluid">
          <div class="col-sm-6">
            <div class="thumbnail card box_shadow">
      <div class="top_heading text-center" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;"><?= $add_left['name'];?></div>
      <a href="<?=$add_left['link']?>" target="_blank"><img src="<?php echo base_url().'assets/cms_images/'.$add_left['image']?>" style="width: 100%"></a>    
    </div></div>
          
          <div class="col-sm-6">
            <div class="thumbnail card box_shadow">
      <div class="top_heading text-center" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;"><?= $add_right['name'];?></div>
      <a href="<?=$add_right['link']?>" target="_blank"><img src="<?php echo base_url().'assets/cms_images/'.$add_right['image']?>" style="width: 100%"></a>    
    </div></div>
          </div>
        <?php $this->load->view('site_layout/footer');?>