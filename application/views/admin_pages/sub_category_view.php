+<?php $this->load->view('admin_layout/header');?> 
<?php 
$pageName = "sub_category";
$calledName = "subcategory";
$heading = "Sub Category";
$key = "id";
$tableName = "e_category";
$fields = array('Title','Date');
$indexes = array('title','created_date');

 ?>
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
										<h5><?=$heading?></h5>
										<h6 class="sub-heading">Welcome to <?=$heading?> Managment</h6>
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
									<div class="card-header"><?=$heading?>  <button class='btn btn-primary btn-sm float-right' onclick="addNew()">Add</button></div>
									<div class="card-body">
										<?php echo show_flash_data();?>
										<span id="flash_data"></span>
										<table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<?php foreach ($fields as $field): ?>
														<th><?=$field?></th>
													<?php endforeach ?>
													<th>Image</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($data as $row):?>
											  <tr id="row<?=$row[$key]?>">
												<?php foreach ($indexes as $index): ?>
													<td><?=$row[$index]?></td>
												<?php endforeach ?>
												
											<td><img src='<?=base_url().'assets/cms_images/thumbnail/'.$row['image']?>' width=100></td>
												<td style="padding: 2px;text-align: center;" width="15%">
													<button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="update(<?=$row[$key]?>)" class="btn btn-outline-success btn-sm"><span class="icon-enlarge" ></span>
													</button>
													
													<button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('<?=$key?>',<?=$row[$key]?>,'<?=$tableName?>')"><span class="icon-trash2" ></span>
													</button>
															
												</td>
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
					</div>
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
				<?php $this->load->view('admin_layout/footer');?>
<script type="text/javascript">
function update(id)
{
	var viewType  = 'edit<?=$calledName?>';
	var tableName = '<?=$tableName?>';
	var key       = '<?=$key?>';

	$("#extraModel").modal();
	$("#extraTitle").html("Edit <?=$heading?>");
	$("#extraBoday").html("<h2 class='text-center'><span class='icon-spinner3'></span></h2>");
	$.post("<?php echo base_url(); ?>function_control/getView2",{viewType,id,tableName,key}, 
		function(data)
		{
			$("#extraBoday").html(data); 	
			//$('#myModal').modal('hide');
		});

}
function deleteRecord(key,value,tableName)
{
	var file = 'image';
	var file_path = 'assets/cms_images/';
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

function form_validation() 
{   
   // var value = CKEDITOR.instances['editor1'].getData();
   // $("#editorReplace").val(value);
    var form = new FormData($('#myForm')[0]);
    $.ajax({
      type: "POST",
      url: '<?php echo base_url(); ?>function_control/saveCategory',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function(res)
      {
      	//alert(res);
       window.setTimeout(window.location='<?php echo base_url(); ?>admin/<?=$pageName?>',1000);
      }
       
    });
      return false;
}  

function update_validation() 
{   
   // var value = CKEDITOR.instances['editor1'].getData();
   // $("#editorReplace").val(value);
    var form = new FormData($('#updateForm')[0]);
    $.ajax({
      type: "POST",
      url: '<?php echo base_url(); ?>function_control/Simplecategory',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function(res)
      {
      	//alert(res);
       window.setTimeout(window.location='<?php echo base_url(); ?>admin/<?=$pageName?>',1000);
      }
       
    });
      return false;
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
		<div class="modal-content brad0 ">
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
		              <input type="text" required name="title"  class="form-control-sm form-control">
		            </div> 
		            <div class="col-md-6">
		              <label class="col-form-label">Level</label>
		              <input type="text" required name="level"  class="form-control-sm form-control">
		            </div>
		            
		          </div>
		           <div class="form-group row">
		           	<div class="col-md-6">
		              <label class="col-form-label"> image</label>
		         <input type="file" id="image"  name="files" class="form-control-sm input-sm form-control">
		         <span class="preview-area"></span>
		            </div>
		              
		              <div class="col-md-6">
		              <label class="col-form-label">Category</label>
		              <select required name="cat_id" class="form-control form-control-sm">
		              	<option value="0">No parent</option>
		              	<?php getOption('e_category','id','title','',array('cat_id'=>0)); ?>
		              </select>
		            </div>
		            
		        </div>
		     
		        
		           
		           	 

		         
		 		<div class="form-group row">
		            <div class="col-md-12">
		                                     <input type="hidden" name="tableName" value="<?=$tableName?>">
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
			</div>					
		</div>
	</div>
</div>

<!-- <script type="text/javascript" src="<?=base_url();?>assets/cms_layout/vendor/editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/cms_layout/vendor/editor/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
var editor = CKEDITOR.replace( 'editor1', {

  language: 'en'
    
});
//CKFinder.setupCKEditor( editor, '../' );



</script> -->


