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
										<h5>News</h5>
										<h6 class="sub-heading">Welcome to News Managment</h6>
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
									<div class="card-header">News</div>
									<div class="card-body">
										<div class="custom-tabs">
											<ul class="nav nav-tabs" id="myTab3" role="tablist">
									
											  <li class="nav-item">
											    <a class="nav-link" onclick="myFunction('post-tab2','e_group_post','post');"  id="post-tab2" data-toggle="tab" href="#post2" role="tab" aria-controls="post2" aria-selected="false" aria-expanded="false">News</a>
											  </li>
											   <li class="nav-item">
											    <a class="nav-link" onclick="myFunction('comment2-tab2','e_group_comments','comment');"  id="comment2-tab2" data-toggle="tab" href="#comment2" role="tab" aria-controls="comment2" aria-selected="false" aria-expanded="false">Comments</a>
											  </li>
											   <li class="nav-item">
											    <a class="nav-link" onclick="myFunction('likes-tab2','e_post_likes','likes');"  id="likes-tab2" data-toggle="tab" href="#likes2" role="tab" aria-controls="likes2" aria-selected="false" aria-expanded="false">Likes</a>
											  </li>
											</ul>
											<div class="tab-content" id="myTabContent2">
											
											 
											<div id="post_data" style="">
											  <div class="tab-pane fade active show" id="post2" role="tabpanel" aria-labelledby="post-tab2" aria-expanded="false">
											  	 <?php echo show_flash_data();?>
										        <span id="flash_data"></span>
											  	<table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>User Name</th>
									                <th>Type</th>
									                <th>Description</th>
													<th>News Status</th>
													<th>Date</th>
													<th>Image</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($posts as $row): extract($row);?>
											  <tr id="row<?=$id?>">
												<td><?=$title?></td>
												<td><?=$name=getField('e_users',array('id'=>$row['user_id']),'name');
                                                      
												?></td>

												<td><?=$type?></td>
												<td><?=$descriptions?></td>
												<td><?=$post_status?></td>
												<td><?=$post_date?></td>
												<td><img src='<?=base_url().'assets/cms_images/thumbnail/'.$image?>' width=100></td>
												<td style="padding: 2px;text-align: center;" width="15%">
														 <?php
													 $count= countRows('e_group_comments',array('user_id'=>$row['user_id'],'group_post_id'=>$id)); 
												$count_comment	= countRows('e_post_likes',array('post_id'=>$id,'user_id'=>$row['user_id']));
                                                     
                                                 if ($count==0) {?>

                                                 <button type="button" disabled="disabled" onclick="get_table('comment','e_group_comments','<? echo $id?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-commenting"></i>
                                                     <sup><span class="badge badge-pill badge-info"><?php 
                                                      echo $count;
                                                     ?></span></sup>
													</button>
                                               <?php   } else{
                                                 ?>
                                                 	<button type="button" onclick="get_table('comment','e_group_comments','<? echo $id?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-commenting"></i>
                                                     <sup><span class="badge badge-pill badge-info"><?php
                                                      echo $count;
                                                     ?></span></sup>
													</button>
												<?php } ?>
															<?php if ($row['post_status']=='Active') {
												   		 ?>
												   		   <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="updatemember(<?=$id?>,'Disabe')" class="btn btn-outline-danger btn-sm">Disable
													</button>
												 <?php }  else{?>
												 	 <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="updatemember(<?=$id?>,'Active')" class="btn btn-outline-success btn-sm">Active
													</button>
												 	<?php }?>

													<button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('id',<?=$id?>,'e_group_post')"><span class="icon-trash2" ></span>
													</button>
													<?php   if ($row['type']=='Video') {  ?>
													<div class="social-likes social-likes_single social-likes_light" data-url="<?=base_url().$file?>" data-title="House Moving and Packing" data-single-title="Share">
	<div class="facebook" title="Share link on Facebook">Facebook</div>
	<div class="twitter" data-via="Unibyte" data-related="Jalal Touseef" title="Share link on Twitter">Twitter</div>
</div>
<?php } ?>
															
												</td>
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
											  </div>
											</div>
											<div id="comment_data" style="display: none">>
											    <div class="tab-pane fade" id="comment2" role="tabpanel" aria-labelledby="comment-tab2" aria-expanded="false">
											  	 <?php echo show_flash_data();?>
										        <span id="flash_data"></span>
											  	<table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>User Name</th>
													<th>News Name</th>
													<th>Date</th>
													<th>Comment</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($comments as $row): extract($row);?>
											  <tr id="row<?=$id?>">
												<td><?=$name=getField('e_users',array('id'=>$row['user_id']),'name');
                                                      
												?></td>
												<td><?=$name=getField('e_group_post',array('id'=>$row['group_post_id']),'title');
                                                      
												?></td>
												<td><?=$date?></td>
												<td><?=$message?></td>
												
												<td style="padding: 2px;text-align: center;" width="15%">
													<button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('id',<?=$id?>,'e_group_comments')"><span class="icon-trash2" ></span>
													</button>			
												</td>
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
											  </div>
											</div>
											<div id="likes_data" style="display: none">
											    <div class="tab-pane fade" id="likes2" role="tabpanel" aria-labelledby="likes-tab2" aria-expanded="false">
											  	 <?php echo show_flash_data();?>
										        <span id="flash_data"></span>
											  	<table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>User Name</th>
													<th>News Name</th>
													<th>Like</th>
													<th>Date</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($likes as $row): extract($row);?>
											  <tr id="row<?=$id?>">
												<td><?=$name=getField('e_users',array('id'=>$row['user_id']),'name');
                                                      
												?></td>
												<td><?=$name=getField('e_group_post',array('id'=>$row['post_id']),'title');
                                                      
												?></td>
												<td><?=$like_count?></td>
												<td><?=$date?></td>
												<td style="padding: 2px;text-align: center;" width="15%">
													<button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('id',<?=$id?>,'e_post_likes')"><span class="icon-trash2" ></span>
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
								</div>
							</div>
						</div>
					<!-- END: .main-content -->
				</div>

				<!-- END: .app-main -->
				<?php $this->load->view('admin_layout/footer');?>
<script type="text/javascript">
	function myFunction(action,tableName,viewType) {     
//alert(viewType);
  get_table(viewType,tableName,0);
  
  if(action == 'post-tab2'){
   	
     document.getElementById("likes_data").style.display = "none"; 
  
     document.getElementById("comment_data").style.display = "none"; 
     document.getElementById("post_data").style.display = ""; 
        $('#likes-tab2').removeClass('active');
   
        $('#comment2-tab2').removeClass('active');
  
        $('#post-tab2').addClass('active');


         $('#post2').addClass('active show');
         $('#comment2').removeClass('active show');
         $('#likes2').removeClass('active show');
        

    }
     else if(action == 'comment2-tab2'){


     document.getElementById("likes_data").style.display = "none"; 
     document.getElementById("post_data").style.display = "none";
     document.getElementById("comment_data").style.display = "";  
        $('#likes-tab2').removeClass('active');
        $('#post-tab2').removeClass('active');
     
        $('#comment2-tab2').addClass('active');


         $('#comment2').addClass('active show');
         $('#member2').removeClass('active show');
       
         $('#post2').removeClass('active show');

    }
     else if(action == 'likes-tab2'){

      document.getElementById("post_data").style.display = "none";
      document.getElementById("comment_data").style.display = "none"; 
      document.getElementById("likes_data").style.display = "";  
     
        $('#post-tab2').removeClass('active');
        $('#comment2-tab2').removeClass('active');
 
        $('#likes-tab2').addClass('active');


         $('#likes2').addClass('active show');
         $('#comment2').removeClass('active show');
         $('#member2').removeClass('active show');
         $('#group2').removeClass('active show');
         $('#post2').removeClass('active show');

    }
 
}

function update(id)
{
	var viewType = 'editGroup';
	$("#extraModel").modal();
	$("#extraTitle").html("Edit Group");
	$("#extraBoday").html("<h2 class='text-center'><span class='icon-spinner3'></span></h2>");
	$.post("<?php echo base_url(); ?>function_control/getView",{viewType,id}, 
		function(data)
		{
			$("#extraBoday").html(data); 	
			//$('#myModal').modal('hide');
		});

}

function updatemember(id,post_status)
{
    
    
    $.post("<?php echo base_url(); ?>function_control/updateNews",{id,post_status}, function( data ) {
   location.reload();
   
   
});
// 	var viewType = 'editNews';
// 	$("#extraModel").modal();
// 	$("#extraTitle").html("Edit News");
// 	$("#extraBoday").html("<h2 class='text-center'><span class='icon-spinner3'></span></h2>");
// 	$.post("<?php echo base_url(); ?>function_control/getView",{viewType,id}, 
// 		function(data)
// 		{
// 			$("#extraBoday").html(data); 	
// 			//$('#myModal').modal('hide');
// 		});

}

function deleteRecord(key,value,tableName)
{
	var file = 'image';
	var file_path = 'assets/cms_images/';
	if (confirm("Are you sure to delete?"))
	{  
		$.post("<?php echo base_url(); ?>function_control/deleteRecord",{key,value,tableName,file,file_path}, 
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
   //var value = CKEDITOR.instances['editor1'].getData();
   //$("#editorReplace").val(value);
    var form = new FormData($('#myForm')[0]);
    $.ajax({
      type: "POST",
      url: '<?php echo base_url(); ?>function_control/saveSlider',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function(res)
      {
      	//alert(res);
       window.setTimeout(window.location='<?php echo base_url(); ?>admin/slider',1000);
      }
       
    });
      return false;
}  


function update_validation() 
{   
   //var value = CKEDITOR.instances['editor1'].getData();
   //$("#editorReplace").val(value);
    var form = new FormData($('#updateForm')[0]);
    $.ajax({
      type: "POST",
      url: '<?php echo base_url(); ?>function_control/updateGroup',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function(res)
      {
      	//alert(res);
       window.setTimeout(window.location='<?php echo base_url(); ?>admin/groups',1000);
      }
       
    });
      return false;
}  
function update_News() 
{   
   //var value = CKEDITOR.instances['editor1'].getData();
   //$("#editorReplace").val(value);
    var form = new FormData($('#updateForm2')[0]);
    $.ajax({
      type: "POST",
      url: '<?php echo base_url(); ?>function_control/updateNews',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function(res)
      {
      	//alert(res);
     window.setTimeout(window.location='<?php echo base_url(); ?>admin/news',1000);
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
		            <div class="col-md-8">
		              <label class="col-form-label">Title</label>
		              <input type="text"  name="title"  class="form-control-sm form-control">
		            </div>
		            <div class="col-md-4">
		              <label class="col-form-label">Display Order</label>
		              <input type="number"  name="displayorder"  class="form-control-sm form-control">
		            </div>
		        </div>
		           <div class="form-group row">
		            <div class="col-md-6">
					<label class="col-form-label">Image</label>
		              <input type="file" id="image" required  name="files"  class="form-control-sm input-sm form-control">
		            </div>
		            <div class="col-md-6">
		              <label class="col-form-label">Display</label>
		              <select name="display" class="form-control form-control-sm">
		              	<option value="yes">Yes</option>
		              	<option value="no">NO</option>
		              </select>
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


<script type="text/javascript">
  var inputLocalFont = document.getElementById("image");
inputLocalFont.addEventListener("change",previewImages,false);
function previewImages(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area').append('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>



<script type="text/javascript">
	
	function get_table(viewType,tableName,id) {
		//alert(viewType);
		
 $.post( "<?=base_url()?>Admin/get_view",{viewType,id,tableName},function( data ) {
 	//alert(data);
 	

    if (viewType == 'post'){
  	$("#post_data").html('');
  $( "#post_data" ).html( data );

  document.getElementById("comment_data").style.display = "none"; 
    document.getElementById("likes_data").style.display = "none"; 
 document.getElementById("post_data").style.display = ""; 
  	$('#member-tab2').removeClass('active');
  		$('#comment2-tab2').removeClass('active');
  			$('#likes-tab2').removeClass('active');
        $('#post-tab2').addClass('active');
         $('#post2').addClass('active show');
     
            $('#comment2').removeClass('active show');
             $('#likes2').removeClass('active show');
  }
      if (viewType == 'comment'){
  	$("#comment_data").html('');
  $( "#comment_data" ).html( data );
 document.getElementById("post_data").style.display = "none"; 

 document.getElementById("comment_data").style.display = ""; 
  	$('#post-tab2').removeClass('active');
        $('#comment2-tab2').addClass('active');
         $('#comment2').addClass('active show');
          $('#post2').removeClass('active show');
  }
        if (viewType == 'likes'){
  	$("#likes_data").html('');
  $( "#likes_data" ).html( data );
 document.getElementById("post_data").style.display = "none"; 
 document.getElementById("comment_data").style.display = "none"; 
 document.getElementById("likes_data").style.display = ""; 
  	$('#comment2-tab2').removeClass('active');
  		$('#post-tab2').removeClass('active');
        $('#likes-tab2').addClass('active');
         $('#likes2').addClass('active show');
          $('#comment2').removeClass('active show');
           $('#post2').removeClass('active show');
  }
          if (viewType == 'allpost'){
  	$("#post_data").html('');
  $( "#post_data" ).html( data );
   document.getElementById("group_data").style.display = "none"; 
  document.getElementById("comment_data").style.display = "none"; 
   document.getElementById("likes_data").style.display = "none"; 
 document.getElementById("post_data").style.display = ""; 
  	$('#comment2-tab2').removeClass('active');
  	$('#group-tab2').removeClass('active');
$('#likes-tab2').removeClass('active');
        $('#post-tab2').addClass('active');
         $('#post2').addClass('active show');
           $('#comment2').removeClass('active show');
           $('#group2').removeClass('active show');
            $('#likes2').removeClass('active show');
  }

       
})
	}
		
   ;

</script>
										  <script type="text/javascript">
	$(document).ready( function () {
    $('.table-bordered').DataTable();
} );
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/social-likes/dist/social-likes.min.js"></script>

