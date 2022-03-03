<?php $this->load->view('admin_layout/header');?>
<!-- BEGIN .app-main -->
				<div class="app-main">
					<!-- BEGIN .main-heading -->
					<header class="main-heading"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
									<div class="page-icon">
										<i class="icon-laptop_windows"></i>
									</div>
									<div class="page-title"> 
										<h5>Dashboard</h5>
										<h6 class="sub-heading">Welcome to <?php echo $settings['siteName']; ?></h6>
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
						<div class="row gutters">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
								<div class="card">
								    <a href="<?=base_url()?>admin/reward">
									<div class="card-body">
										<div class="stats-widget">
											<div class="stats-widget-header">
												<i class="icon-pricetags"></i>
											</div>
											<div class="stats-widget-body">
												<!-- Row start -->
												<ul class="row no-gutters">
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h6 class="title">Rewards</h6>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h4 class="total"><?php echo countRows('e_reward'); ?></h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
								<div class="card">
								    <a href="<?=base_url()?>admin/Categories">
									<div class="card-body">
										<div class="stats-widget">
											<div class="stats-widget-header">
												<i class="icon-paperclip"></i>
											</div>
											<div class="stats-widget-body">
												<!-- Row start -->
												<ul class="row no-gutters">
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h6 class="title">Categories</h6>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h4 class="total"><?php echo countRows('e_category'); ?></h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
								<div class="card">
								    <a href="<?=base_url()?>admin/user">
									<div class="card-body">
										<div class="stats-widget">
											
											<div class="stats-widget-header">
												<i class="icon-profile-male"></i>
											</div>
											<div class="stats-widget-body">
												<!-- Row start -->
												<ul class="row no-gutters">
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h6 class="title">Users</h6>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h4 class="total"><?php echo countRows('e_users'); ?></h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
								<div class="card">
								    <a href="<?=base_url()?>admin/transaction">
									<div class="card-body" style="cursor: pointer;" onclick="">
										<div class="stats-widget">
											
											<div class="stats-widget-header">
												<i class="icon-coin-dollar"></i>
											</div>
											<div class="stats-widget-body">
												<!-- Row start -->
												<ul class="row no-gutters">
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h6 class="title">Transaction</h6>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h4 class="total"><?php echo countRows('e_transaction'); ?></h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
									</a>
								</div>
							</div>
						</div>
						<!-- Row end -->
						<!-- Row start -->
					<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">Users</div>
									<div class="card-body">
										<ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
										  <li class="nav-item">
										    <a class="nav-link active" onclick="myFunction('user1-tab1','e_users','');"  id="user1-tab1" data-toggle="tab" href="#user1" role="tab" aria-controls="user1" aria-selected="true" aria-expanded="false">New Users</a>
										  </li>
										  <li class="nav-item">
										    <a class="nav-link" id="user2-tab1"  onclick="myFunction('user2-tab1','e_users','user2');"  data-toggle="tab" href="#user2" role="tab" aria-controls="user2" aria-selected="false" aria-expanded="false">Last Week</a>
										  </li>
										  <li class="nav-item">
										    <a class="nav-link" id="user3-tab1" onclick="myFunction('user3-tab1','e_users','user3');"  data-toggle="tab" href="#user3" role="tab" aria-controls="user3" aria-selected="false" aria-expanded="false">Last Month</a>
										  </li>
										</ul>
										<div class="tab-content" id="myTabContent1">
											<div id="user1_data" style="">
										  <div class="tab-pane fade active show" id="user1" role="tabpanel" aria-labelledby="user1-tab1" aria-expanded="false">
										  
										<table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th width="1%">ID</th>
												
													<th>Name</th>
													<th>status</th>
													<th>email</th>
													<th>Email Verified</th>
													<th>Phone</th>
													<th>Phone Verified</th>
													<th>User Refferal Code</th>
													<th>Created Date</th>
												
												</tr>
											</thead>
											<tbody>
											<?php $i=0; foreach ($newuser as $row): extract($row);if($i==55)break;$i++;?>
											  <tr id="row<?=$user_id?>">
												<td><?=$user_id?></td>
												<td><?=$user_name?></td>
												<td><?=$user_status?></td>
												<td><?=$user_email?></td>
												<td><?=$user_is_email_verified?></td>
												<td><?=$user_phone?></td>
												<td><?=$user_is_phone_verified?></td>
												<td><?=$user_refferal_code?></td>
												<td><?=$user_created_date?></td>
												
										
												
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
										  </div>
										</div>
										<div id="user2_data" style="display: none">
										  <div class="tab-pane fade" id="user2" role="tabpanel" aria-labelledby="user2-tab1" aria-expanded="false">
										  <table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th width="1%">ID</th>
												
													<th>Name</th>
													<th>status</th>
													<th>email</th>
													<th>Email Verified</th>
													<th>Phone</th>
													<th>Phone Verified</th>
													<th>User Refferal Code</th>
													<th>Created Date</th>
												
												</tr>
											</thead>
											<tbody>
											<?php $i=0; foreach ($weeklyuser as $row): extract($row);if($i==55)break;$i++;?>
											  <tr id="row<?=$user_id?>">
												<td><?=$user_id?></td>
												<td><?=$user_name?></td>
												<td><?=$user_status?></td>
												<td><?=$user_email?></td>
												<td><?=$user_is_email_verified?></td>
												<td><?=$user_phone?></td>
												<td><?=$user_is_phone_verified?></td>
												<td><?=$user_refferal_code?></td>
												<td><?=$user_created_date?></td>
												
										
												
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
									</div>
									</div>
									<div id="user3_data" style="display: none">
										  <div class="tab-pane fade" id="user3" role="tabpanel" aria-labelledby="user3-tab1" aria-expanded="false">
										
										<table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th width="1%">ID</th>
												
													<th>Name</th>
													<th>status</th>
													<th>email</th>
													<th>Email Verified</th>
													<th>Phone</th>
													<th>Phone Verified</th>
													<th>User Refferal Code</th>
													<th>Created Date</th>
												
												</tr>
											</thead>
											<tbody>
											<?php $i=0; foreach ($monthlyuser as $row): extract($row);if($i==55)break;$i++;?>
											  <tr id="row<?=$user_id?>">
												<td><?=$user_id?></td>
												<td><?=$user_name?></td>
												<td><?=$user_status?></td>
												<td><?=$user_email?></td>
												<td><?=$user_is_email_verified?></td>
												<td><?=$user_phone?></td>
												<td><?=$user_is_phone_verified?></td>
												<td><?=$user_refferal_code?></td>
												<td><?=$user_created_date?></td>
												
										
												
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
										  </div>
										</div>
										</div>
									</div>
								</div>
							</div>
					</div>
					
				
					
						<!-- Row end -->
					</div>
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
<?php $this->load->view('admin_layout/footer');?>
<script>
		function myFunction(action,tableName,viewType) {     
//alert(action);
  //get_table(viewType,tableName,0);
    if(action == 'user1-tab1'){
    
    	document.getElementById("user3_data").style.display = "none"; 
    	document.getElementById("user2_data").style.display = "none";
    	document.getElementById("user1_data").style.display = "";  
     
        $('#user3-tab1').removeClass('active');
        $('#user2-tab1').removeClass('active');
        $('#user1-tab1').addClass('active');

         $('#user1').addClass('active show');
         $('#user2').removeClass('active show');
         $('#user3').removeClass('active show');

    }
     else if(action == 'user2-tab1'){
     document.getElementById("user3_data").style.display = "none"; 
    	document.getElementById("user2_data").style.display = "";
    	document.getElementById("user1_data").style.display = "none";    
         $('#user3-tab1').removeClass('active');
        $('#user1-tab1').removeClass('active');
        $('#user2-tab1').addClass('active');

         $('#user2').addClass('active show');
         $('#user1').removeClass('active show');
         $('#user3').removeClass('active show');
    }
     else if(action == 'user3-tab1'){
        document.getElementById("user3_data").style.display = ""; 
    	document.getElementById("user2_data").style.display = "none";
    	document.getElementById("user1_data").style.display = "none";  
        $('#user1-tab1').removeClass('active');
        $('#user2-tab1').removeClass('active');
        $('#user3-tab1').addClass('active');

         $('#user3').addClass('active show');
         $('#user2').removeClass('active show');
         $('#user1').removeClass('active show');

    }
      else if(action == 'group1-tab1'){
    
    	document.getElementById("group3_data").style.display = "none"; 
    	document.getElementById("group2_data").style.display = "none";
    	document.getElementById("group1_data").style.display = "";  
     
        $('#group3-tab1').removeClass('active');
        $('#group2-tab1').removeClass('active');
        $('#group1-tab1').addClass('active');

         $('#group1').addClass('active show');
         $('#group2').removeClass('active show');
         $('#group3').removeClass('active show');

    }
     else if(action == 'group2-tab1'){
     document.getElementById("group3_data").style.display = "none"; 
    	document.getElementById("group2_data").style.display = "";
    	document.getElementById("group1_data").style.display = "none";    
         $('#group3-tab1').removeClass('active');
        $('#group1-tab1').removeClass('active');
        $('#group2-tab1').addClass('active');

         $('#group2').addClass('active show');
         $('#group1').removeClass('active show');
         $('#group3').removeClass('active show');
    }
     else if(action == 'group3-tab1'){
        document.getElementById("group3_data").style.display = ""; 
    	document.getElementById("group2_data").style.display = "none";
    	document.getElementById("group1_data").style.display = "none";  
        $('#group1-tab1').removeClass('active');
        $('#group2-tab1').removeClass('active');
        $('#group3-tab1').addClass('active');

         $('#group3').addClass('active show');
         $('#group2').removeClass('active show');
         $('#group1').removeClass('active show');

    }
   
 
}
</script>
									  <script type="text/javascript">
	$(document).ready( function () {
    $('.table-bordered').DataTable();
} );
</script>