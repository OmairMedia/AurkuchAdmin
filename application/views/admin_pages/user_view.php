<?php $this->load->view('admin_layout/header');?>  
<!-- BEGIN .app-main -->
				<div class="app-main">
					<!-- BEGIN .main-heading -->
					<header class="main-heading">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
									<div class="page-icon">
										<i class="icon-laptop_windows"></i>
									</div>
									<div class="page-title">
										<h5>Web User</h5>
										<h6 class="sub-heading">Welcome to Web User Managment</h6>
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
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header"> Users <button class='btn btn-primary btn-sm float-right' onclick="addNew()">Add</button></div>
									<div class="card-body">
										<?php echo show_flash_data();?>
										<span id="flash_data"></span>
										<!-- Search area start -->
										<!-- <div class="gutters row " style="padding: 20px">
											<div class="col-md-2 p-0">
												<select id="searchType" class="form-control form-control-sm">
													<option value="like">Like Case Query</option>
													<option value="match">Match Case Query</option>
												</select>
											</div>
											<div class="col-md-2 p-0">
												<select class="form-control form-control-sm" id="searchLimit">
													<option value="10">Record Limit 10</option>
													<option value="25">25</option>
													<option value="50">50</option>
													<option value="100">100</option>
													<option value="500">500</option>
													
												</select>
											</div>
											<div class="col-md-3 p-0">
												<select class="form-control form-control-sm" id="searchColmn">
													<option value="userid">Search Colmn(User ID)</option>
													<option value="username">Username</option>
													<option value="email">Email</option>
													<option value="number">Number</option>													
												</select>
											</div>
											<div class="col-md-4 p-0">
												<input type="text" placeholder="Search Keyword" class="form-control-sm form-control" id="searchKey" onkeyup="search()">
											</div>

										</div> -->
										<span id="searchResult"></span>
										<br>
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
												
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php $i=0; foreach ($data as $row): extract($row);if($i==55)break;$i++;?>
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
												
										
												<td style="padding: 2px;text-align: center;" width="15%">
													<!-- <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="update(<?=$id?>)" class="btn btn-outline-success btn-sm"><span class="icon-enlarge" ></span>
													</button> -->
														<button data-toggle="tooltip" data-placement="top" title="" data-original-title="View Record"  onclick="view_detail(<?=$user_id?>)" class="btn btn-outline-success btn-sm"><span class="icon-eye" ></span>
													</button>
													
														
												 		<?php if ($row['user_status']=='Active') {
												   		 ?>
												   		   <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="update_validation(<?=$user_id?>,'Disable')" class="btn btn-outline-danger btn-sm">Disable
													</button>
												 <?php }  else{?>
												 	 <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="update_validation(<?=$user_id?>,'Active')" class="btn btn-outline-success btn-sm">Active
													</button>
												 	<?php }?>
													
													<button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('user_id',<?=$user_id?>,'e_users')"><span class="icon-trash2" ></span>
													</button>
															
												</td>
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
										<?php if (!empty($links)) {
											?>
										<nav aria-label="Page navigation example">
										  <ul class="pagination">
										  	<?php echo $links; ?>
										  </ul>
										</nav>
											<?php
										} ?>
									</div>
								</div>
							</div>
					</div>
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
<script type="text/javascript">
function view_detail(id)
{
	window.location='<?php echo base_url(); ?>Admin/Detail_Page/'+id;

}
function search()
{
	var searchTable = 'e_user';
	var searchColmn = $("#searchColmn").val(); 
	var searchType = $("#searchType").val();
	var searchLimit = $("#searchLimit").val();
	var searchKey = $("#searchKey").val();
	if (searchKey.length != 0)
	{
		$("#searchResult").html("<br><div class='text-center'><img src='<?=base_url()?>assets/lib/spinner.gif' width=60></div>");
		$.post("<?php echo base_url(); ?>function_control/search",{searchLimit,searchType,searchKey,searchTable,searchColmn}, 
		function(data)
		{
			$("#searchResult").html(data); 	
			
		});
	}
}

function deleteRecord(key,value,tableName)
{
	//var file = 'image';
	//var file_path = 'assets/cms_images/';
	if (confirm("Are you sure to delete?"))
	{  
		$.post("<?php echo base_url(); ?>function_control/delete",{key,value,tableName}, 
			function(data)
			{
				//alert(data);
				$("#row"+value).hide();
				$("#flash_data").html(data);
			});
	}
}
function addNew()
{
	$("#addModal").modal();
}
function update_validation(id,status) 
{   
   //var value = CKEDITOR.instances['editor1'].getData();
   //$("#editorReplace").val(value);
   // var form = new FormData($('#updateForm')[0]);
   
   $.post("<?php echo base_url(); ?>function_control/updateUser",{id,status}, function( data ) {
    location.reload();
   
});
    
      //return false;
}   

   
</script>

<!-- modals area -->
<div class="modal fade " id="extraModel" tabindex="-1" role="dialog" aria-labelledby="extraModel12" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content brad0">
			<div class="modal-header brad0">
				<h5 class="modal-title" id="extraTitle">Add New</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body" id="extraBoday">
			</div>					
		</div>
	</div>
</div>

<div class="modal fade " id="addModal" tabindex="-1" role="dialog" aria-labelledby="map12" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content brad0">
			<div class="modal-header brad0">
				<h5 class="modal-title" id="addTitle">Add New</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body" id="addBody">
				<form method="POST" name="myForm" id="myForm"  enctype="multipart/form-data" onsubmit="return form_validation()">
		           <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Name</label>
		              <input type="text" required name="name"  class="form-control-sm form-control">
		            </div>
		            <div class="col-md-6">
		               <label class="col-form-label">Email</label>
		              <input type="email"  name="email"  class="form-control-sm form-control">
		            </div>
		          </div>
		          <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Username</label>
		              <input type="username" required name="username"  class="form-control-sm form-control">
		            </div>
		            <div class="col-md-6">
		               <label class="col-form-label">Password</label>
		              <input type="text" required name="password"  class="form-control-sm form-control">
		            </div>
		          </div>  
		          <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Status</label>
		              <select name="status" class="form-control form-control-sm">
		              	<option value="Active">Active</option>
		              	<option value="Disable">Disable</option>
		              </select>
		            </div>
		            <div class="col-md-6">
		               <label class="col-form-label">Role</label>
		              <select name="role" class="form-control form-control-sm">
		              	<option value="Admin">Admin</option>
		              	<option value="User">User</option>
		              </select>
		            </div>
		          </div>  

		           <div class="form-group row">
		            <div class="col-md-6">
					<label class="col-form-label">Image</label>
		              <input type="file" id="image"  name="files"  class="form-control-sm input-sm form-control">
		            </div>
		             <div class="col-md-6">
		             	<label class="col-form-label">Duties</label>
		          		<br>
		          		<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="checkbox" checked  name='duties[]' value="Add"> Add
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name='duties[]' value="Edit"> Edit
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name='duties[]' value="Del"> Delete
							</label>
						</div>
		            </div>
		           </div>
		           	 <span class="preview-area"></span>
		         
		 		<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
			</div>					
		</div>
	</div>
</div>

<?php $this->load->view('admin_layout/footer');?>
