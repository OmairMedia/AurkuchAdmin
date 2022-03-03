<?php $this->load->view('admin_layout/header');  
?>
  <!-- BEGIN .app-container -->
      <div class="app-container">
    
        <!-- END: .app-side -->

        <!-- BEGIN .app-main -->
        <div class="app-main">
          <!-- BEGIN .main-heading -->
          <header class="main-heading">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                  <div class="page-icon">
                    <i class="icon-tabs-outline"></i>
                  </div>
                  <div class="page-title">
                    <h5>User Profile</h5>
                    <h6 class="sub-heading">Welcome User Profile</h6>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="right-actions">
                    <a href="#" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left" title="Download Reports">
                      <i class="icon-download4"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <!-- END: .main-heading -->
          <!-- BEGIN .main-content -->
          <div class="main-content">
            <!-- Row start -->
            <!-- Row start -->
            <div class="row gutters">
          <!--     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="card block-300">
                  <div class="card-body">
                    <div id="mapAfrica" class="chart-height-md"></div>
                    <div class="info-stats">
                      <span class="info-label red"></span>
                      <p class="info-title">Overall Sales in Africa</p>
                      <h4 class="info-total">62,800</h4>
                    </div>
                  </div>
                </div>
              </div> -->
              <?php  //print_r($detail); ?>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <a class="block-300 center-text">
                  <div class="user-profile">
                  <!--   <img src="<?//=base_url().'assets/cms_images/'.$detail['image'];?>" class="profile-thumb" alt="User Thumb"> -->
                     <div class="info-stats">
                      <?php if ($detail['user_status']=='Disable') {?>
                      <span class="info-label red"></span>
                     <?php  } else {?>
                      <span class="info-label green"></span>
                    <?php } ?>
                    
                    </div>
                    <h5 class="profile-name"><?=$detail['user_name']?></h5>
                    <h6 class="profile-designation"><?=$detail['user_email']?></h6>
                    <!-- <p class="profile-location"><?=$detail['address']?></p> -->
                      <p class="profile-location"><?=$detail['user_phone']?></p>
                    <div class="ml-5 mr-5 chartist custom-two">
                      <div class="team-act"></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col">
                <a class="block-140">
                  <div class="icon violet">
                    <i class="icon-users"></i>
                  </div>
                  <h5><?php print_r($walletDetails['Pending']);
                 // $group_member_count=countRows('e_groups_members',array('group_id'=>$group_member['group_id'],'user_id'=>$group_member['user_id']));
                 // echo $group_member_count;
                   ?></h5>
                  <p>Pending</p>
                </a>
                <a class="block-140">
                  <div class="icon pink">
                    <i class="icon-thumbs-up2"></i>
                  </div>
                  <h5><?php print_r($walletDetails['Approved']);
                  // $member_likes_count=countRows('e_post_likes',array('user_id'=>$member_likes['user_id']));
                  // echo $member_likes_count;
                   ?></h5>
                  <p>Approved</p>
                </a>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col">
                <a class="block-140">
                  <div class="icon success">
                    <i class="icon-document3"></i>
                  </div>
                  <h5><?php print_r($walletDetails['Paid']);
                  // $member_post_count=countRows('e_group_post',array('user_id'=>$member_post['user_id']));
                  // echo $member_post_count;
                   ?></h5>
                  <p>Paid</p>
                </a>
                <a  class="block-140">
                  <div class="icon warning">
                    <i class="icon-chat2"></i>
                  </div>
                  <h5><?php print_r($walletDetails['Total']);
                  // $member_comments_count=countRows('e_group_comments',array('user_id'=>$member_comments['user_id']));
                  // echo $member_comments_count;
                   ?></h5>
                  <p>Total</p>
                </a>
              </div>
  
            
            </div>
            <!-- Row end -->
            <!-- Row end -->
            <!-- Row start -->
           <div class="row gutters">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                  <!-- <div class="card-header"><?=$heading?>  <button class='btn btn-primary btn-sm float-right' onclick="addNew()">Add</button></div> -->
                  <div class="card-body">
                    <?php echo show_flash_data();?>
                    <span id="flash_data"></span>
          <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Wallet Id</th>
                          <th>User Name</th>
                                  <th>Reward Amount</th>
                                  <th>Reward Name</th>
                          <th>Wallet Status</th>
                          <th>Date</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($wallet as $row): extract($row);?>
                        <tr id="row<?=$wallet_id?>">
                        <td><?=$wallet_id?></td>
                        <td><?=$name=getField('e_users',array('user_id'=>$row['wallet_user_id']),'user_name');
                                                      
                        ?></td>

                        <td><?=$wallet_total_amount?></td>
                       
                        <td><?=$reward_name=getField('e_reward',array('reward_id'=>$row['wallet_reward_id']),'reward_name');
                                                      
                        ?></td>
                        <td><?=$wallet_reward_status?></td>
                        <td><?=$wallet_reward_date?></td>
                    
                       
                      </tr>
                      <?php endforeach ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
            <!-- Row end -->
            
          
           
          </div>
          <!-- END: .main-content -->
        </div>
        <!-- END: .app-main -->
      </div>
      <!-- END: .app-container -->
			
				<!-- END: .app-main -->


<?php $this->load->view('admin_layout/footer');?>


                    <script type="text/javascript">
  $(document).ready( function () {
    $('.table-bordered').DataTable();
} );
</script>