<?php  $CI =& get_instance(); 

 ?>
<?php if ($viewType == "editCmsUser"): extract($data) ?>
	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">

		           <div class="form-group row">
		            <div class="col-md-6">
		            	<input type="hidden" name="userid" value="<?=$userid?>">
		              <label class="col-form-label">Name</label>
		              <input type="text" required name="name" value="<?=$name?>"  class="form-control-sm form-control">
		            </div>
		            <div class="col-md-6">
		               <label class="col-form-label">Email</label>
		              <input type="email"  name="email" value="<?=$email?>" class="form-control-sm form-control">
		            </div>
		          </div>
		          <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Username</label>
		              <input type="username" required name="username"  value="<?=$username?>" class="form-control-sm form-control">
		            </div>
		            <div class="col-md-6">
		               <label class="col-form-label">Password</label>
		              <input type="password" required name="password" value="fk0001" class="form-control-sm form-control">
		            </div>
		          </div>  
		          <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Status</label>
		              <select name="status" class="form-control form-control-sm">
		              	<option value="Active">Active</option>
		              	<option value="Disable"  <?php if($status == 'Disable') echo "selected"?> >Disable</option>
		              </select>
		            </div>
		            <div class="col-md-6">
		               <label class="col-form-label">Role</label>
		              <select name="role" class="form-control form-control-sm">
		              	<option value="Admin">Admin</option>
		              	<option value="User" <?php if($status == 'User') echo "selected"?>>User</option>
		              </select>
		            </div>
		          </div>  

		           <div class="form-group row">
		            <div class="col-md-6">
					<label class="col-form-label">Image</label>
		              <input type="file" id="image2" onchange="preview()"  name="files"  class="form-control-sm input-sm form-control">
		            </div>
		             <div class="col-md-6" style="display: none;">
		             	<label class="col-form-label">Duties</label>
		          		<br>
		          		<?php $duties = explode(',', $duties) ?>
		          		<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="checkbox"   name='duties[]' value="Add" <?php if(in_array('Add', $duties)) echo 'checked' ?> > Add
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name='duties[]' value="Edit" <?php if(in_array('Edit', $duties)) echo 'checked' ?>> Edit
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name='duties[]' value="Del" <?php if(in_array('Del', $duties)) echo 'checked' ?>> Delete
							</label>
						</div>
		            </div>
		           </div>
		           <span class="preview-area2">
		           <?php if ($image): ?>
		           	<img src="<?=base_url().'assets/cms_images/thumbnail/'.$image?>">
		           <?php endif ?>

		           </span>
		          
		           	 
		         
		 		<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
<script type="text/javascript">
var inputLocalFont2= document.getElementById("image2");
inputLocalFont2.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').html('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>
<?php endif ?>
<?php if ($viewType == "editUser"): extract($data) ?>
	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">
                   	<input type="hidden" name="id" value="<?=$id?>">
		          
		          <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Status</label>
		              <select name="status" class="form-control form-control-sm">
		              <option value="Active"  <?php if($status == 'Active') echo "selected"?> >Active</option>
		              	<option value="Disable"  <?php if($status == 'Disable') echo "selected"?> >Disable</option>
		              </select>
		            </div>
		           
		          </div>  
		 		<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
<?php endif ?>
<?php if ($viewType == "editNews"): extract($data) ?>
	<form method="POST" name="updateForm2" id="updateForm2"  enctype="multipart/form-data" onsubmit="return update_News()">
                   	<input type="hidden" name="id" value="<?=$id?>">
		          
		          <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Status</label>
		              <select name="post_status" class="form-control form-control-sm">
		              	 <option value="Active"  <?php if($post_status == 'Active') echo "selected"?> >Active</option>
		              	<option value="Disable"  <?php if($post_status	 == 'Disable') echo "selected"?> >Disable</option>
		              </select>
		            </div>
		           
		          </div>  
		 		<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
<?php endif ?>


<?php if ($viewType == "editMenu"): extract($data) ?>
	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">
		           <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Name</label>
		              <input type="text" required name="name" value="<?=$name?>"  class="form-control-sm form-control">
		              <input type="hidden"  name="menuid" value="<?=$menuid?>" >
		            </div>
		            <div class="col-md-6">
		               <label class="col-form-label">Page Title</label>
		              <input type="text"  value="<?=$pagetitle?>" name="pagetitle"  class="form-control-sm form-control">
		            </div>
		          </div>
		          <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Slug</label>
		              <input type="text" value="<?=$slug?>"  name="slug"  class="form-control-sm form-control">
		            </div>
		            <div class="col-md-6">
		               <label class="col-form-label">Keywords</label>
		              <input type="text"  value="<?=$keywords?>"   name="keywords"  class="form-control-sm form-control">
		            </div>
		          </div>  
		          <div class="form-group row">
		            <div class="col-md-12">
		              <label class="col-form-label">Description</label>
		              <input type="text" value="<?=$discription?>" name="discription"  class="form-control-sm form-control">
		            </div>
		          </div>  
		          <div class="form-group row">
		          	 <div class="col-md-6">
		              <label class="col-form-label">Select Parent </label>
		              <select name="parent_id"  class="form-control form-control-sm">
		              	<option value="0">No parent</option>		
		              	<?php getParentOption($parent_id); ?>
		              </select>
		             
		            </div>
		            <div class="col-md-6">
		              <label class="col-form-label">Heading</label>
		              <input type="text" value="<?=$heading?>"  name="heading"  class="form-control-sm form-control">
		            </div>
		          </div>  
		              <div class="form-group row">
		            <div class="col-md-6">
		            <div class="row">
		            	<div class="col-md-4">Display</div>
		            	<div class="col-md-8">
		            		<select class="form-control-sm form-control" name="display">
		            			<option <?php if($display == 'yes') echo 'selected'; ?> value="yes">Yes</option>	
		            			<option <?php if($display == 'no') echo 'selected'; ?>  value="no">No</option>	
		            		</select>
		            	</div>
		            </div>

		            </div>
		            <div class="col-md-6">
		             <div class="row">
		            	<div class="col-md-4">Display Order</div>
		            	<div class="col-md-8">
		            		<input type="number" value="<?=$displayorder?>" name="displayorder" class="form-control-sm form-control">
		            	</div>
		            </div>
		            </div>
		          </div>  
		           <div class="form-group row">
		            <div class="col-md-12">
		              <label class="col-form-label">Details</label>
		              <input type="hidden"     name="details" id="editorReplace">
          			<textarea id="editor1"  class="form-control my-2" rows="7"><?=$details?></textarea>
		            </div>
		          </div>  
		           <div class="form-group row">
		            <div class="col-md-6">
					<label class="col-form-label">Image</label>
		              <input type="file" id="image2"  name="files"  class="form-control-sm input-sm form-control">
		            </div>
		             <div class="col-md-6">
		             	<label class="col-form-label">Position</label>
		             	<?php $position = explode(',', $position) ?>
		          		<br>
		          		<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" <?php if (in_array('navigation', $position))echo 'checked'?> type="checkbox"   name='position[]' value="navigation">Navigation
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name='position[]' value="footer" <?php if (in_array('footer', $position))echo 'checked'?> >Footer
							</label>
						</div>
		            </div>
		           </div>
		           	 <span class="preview-area2">
		           	  <?php if ($image): ?>
		           	<img src="<?=base_url().'assets/cms_images/thumbnail/'.$image?>">
		           <?php endif ?>
		           	 </span>
		         
		 		<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>

<script type="text/javascript" src="<?=base_url();?>assets/cms_layout/vendor/editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/cms_layout/vendor/editor/ckfinder/ckfinder.js"></script>

<script type="text/javascript">
var editor = CKEDITOR.replace( 'editor1', {

  language: 'en'
    
});
</script>
<script type="text/javascript">
var inputLocalFont2= document.getElementById("image2");
inputLocalFont2.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').html('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>
<?php endif ?>

<?php if ($viewType == "editUserStatus"): extract($data) ?>

	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">

		          <input type="hidden"  name="id" value="<?=$id?>" >
		           <div class="form-group row">
		          
		            <div class="col-md-6">
		              <label class="col-form-label">Status</label>
		              <select name="status" class="form-control form-control-sm">
		              	<option value="Approved" <?php if($status=='Approved')echo 'selected';?> >Approved</option>
		              	<option value="Block" <?php if($status=='Block')echo 'selected';?>>Block</option>
		              </select>
		            </div>
		             
		        </div>
					<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div> 
		          
		 		 
		        </form>
<script type="text/javascript">
var inputLocalFont2= document.getElementById("image2");
inputLocalFont2.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').html('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>
<?php endif ?>

<?php if ($viewType == "editServices"): extract($data) ?>

	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">

		          <div class="form-group row">
		            <div class="col-md-8">
		              <label class="col-form-label">Title</label>
		              <input type="text"  name="title" value="<?=$title?>"   class="form-control-sm form-control">
		              <input type="hidden"  name="id" value="<?=$id?>" >

		            </div>
		            <div class="col-md-4">
		              <label class="col-form-label">Display Order</label>
		              <input type="number"  name="displayorder" value="<?=$displayorder?>"   class="form-control-sm form-control">
		            </div>
		        </div>
		         <div class="form-group row">
		            <div class="col-md-8">
		              <label class="col-form-label">Details</label>
		             <textarea class="form-control form-control-sm" name="details"><?=$details?></textarea>
		            </div>
		            <div class="col-md-4">
					<label class="col-form-label">Icon Class </label>
		              <input type="text" name="icon"  value="<?=$icon?>" class="form-control-sm input-sm form-control">
		            </div>
		        </div>

		           <div class="form-group row">
		            <div class="col-md-6">
					<label class="col-form-label">Image</label>
		              <input type="file" id="image2"   name="files"  class="form-control-sm input-sm form-control">
		            </div>
		            <div class="col-md-6">
		              <label class="col-form-label">Display</label>
		              <select name="display" class="form-control form-control-sm">
		              	<option value="yes" <?php if($display=='yes')echo 'selected';?> >Yes</option>
		              	<option value="no" <?php if($display=='no')echo 'selected';?>>NO</option>
		              </select>
		            </div>
		             <span class="preview-area2">
		           <?php if ($image): ?>
		           	<img src="<?=base_url().'assets/cms_images/thumbnail/'.$image?>">
		           <?php endif ?>
		           </span>  
		        </div>
					<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div> 
		          
		 		 
		        </form>
<script type="text/javascript">
var inputLocalFont2= document.getElementById("image2");
inputLocalFont2.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').html('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>
<?php endif ?>



<?php if ($viewType == "editPortfolio_categories"): extract($data) ?>

	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">

		          <div class="form-group row">
		            <div class="col-md-12">
		              <label class="col-form-label">Title</label>
		              <input type="text"  name="name" value="<?=$name?>"   class="form-control-sm form-control">
		              <input type="hidden"  name="id" value="<?=$id?>" >
		            </div>     
		        </div>
					<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div> 
		        </form>

<?php endif ?>
<?php if ($viewType == "editFaq_categories"): extract($data) ?>

	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">
		 <input type="hidden"  name="id" value="<?=$id?>" >
		<input type="hidden" name="tableName" value="e_faqcategory">
		<input type="hidden" name="keyIndex" value="id">

		          <div class="form-group row">
		            <div class="col-md-12">
		              <label class="col-form-label">Title</label>
		              <input type="text"  name="name" value="<?=$name?>"   class="form-control-sm form-control">
		             
		            </div>     
		        </div>
					<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div> 
		        </form>

<?php endif ?>



<?php if ($viewType == "editFaq"): extract($data) ?>
	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">
		<input type="hidden" name="tableName" value="e_faq">
		<input type="hidden" name="keyIndex" value="id">
		<input type="hidden" name="id" value="<?=$id?>">
		   <div class="form-group row">
		            <div class="col-md-8">
		              <label class="col-form-label">Question</label>	
		              <input type="text" required  name="question" value="<?=$question?>"  class="form-control-sm form-control">
		            </div>
		            <div class="col-md-4">
		              <label class="col-form-label">Category</label>
		              <select name="category" class="form-control form-control-sm">
		              	<?php getOption('e_faqcategory','id','name',$category); ?>
		              </select>
		            </div>
		           
		        </div>
		         <div class="form-group row">
		            <div class="col-md-12">
		            	 <label class="col-form-label">Answer</label>	
		            	 <textarea name="details" required class="form-control form-control-sm"><?=$details?></textarea>
		            </div>
		        </div>

					<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div> 
		        </form>
<?php endif ?>
<?php if ($viewType == 'editCareers'):extract($data) ?>
	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">
		<input type="hidden" name="tableName" value="e_careers">
		<input type="hidden" name="keyIndex" value="id">
		<input type="hidden" name="id" value="<?=$id?>">
		           <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Title</label>	
		              <input type="text" required  name="title" value="<?=$title?>"  class="form-control-sm form-control">
		            </div>
		            <div class="col-md-3">
		              <label class="col-form-label">Type</label>
		              <input type="text"  value="<?=$type?>"  name="type" placeholder="Part Time or Full" class="form-control-sm form-control">
		            </div>
		            <div class="col-md-3">
		              <label class="col-form-label">Experience</label>
		              <input type="text"   name="exp" value="<?=$exp?>" class="form-control-sm form-control">
		            </div>
		        </div>
		         <div class="form-group row">
		            <div class="col-md-12">
		              <label class="col-form-label">Details</label>
		              <input type="hidden" name="details" id="editorReplace">
          			<textarea id="editor1"  class="form-control my-2" rows="7"> <?=$details?></textarea>
		            </div>
		        </div>
		        <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Due Date</label>	
		              <input type="date"  name="duedate"  class="form-control-sm form-control" value="<?=$duedate?>">
		            </div>
		            <div class="col-md-3">
		              <label class="col-form-label">Display</label>
		               <select name="display" class="form-control form-control-sm">
		              	<option value="yes" <?php if($display=='yes')echo 'selected';?> >Yes</option>
		              	<option value="no" <?php if($display=='no')echo 'selected';?>>NO</option>
		              </select>
		            </div>
		             <div class="col-md-2">
		              <label class="col-form-label">Display Order</label>
		              <input type="number" name="displayorder" value="<?=$displayorder?>" class="form-control form-control-sm">
		            </div>
		        </div>
		 		<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
		        <script type="text/javascript" src="<?=base_url();?>assets/cms_layout/vendor/editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/cms_layout/vendor/editor/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
var editor = CKEDITOR.replace( 'editor1', {

  language: 'en'
    
});
//CKFinder.setupCKEditor( editor, '../' );

</script>

<?php endif ?>
   
<?php if($viewType=='editpackage'):extract($data)?>
<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return  update_validation();">
				<div class="form-group row">
		            <div class="col-md-6">
                          <input type="hidden" name="tableName" value="e_packeg">
		<input type="hidden" name="keyIndex" value="id">
		<input type="hidden" name="id" value="<?=$id?>">
		              <label class="col-form-label">Package Name</label>
                              <input type="text" required name="name"  value="<?=$name?>"class="form-control-sm form-control">
		            </div>
                            <div class="col-md-6">
                                    <label class="col-form-label">parent</label>
                                    <select class="form-control" name="parent_id">
                                       <?= getOption('e_menu', 'menuid', 'name',$parent_id,array('display'=>'yes'))?>
                                   </select>
                                   
                               </div>
                               <div class="col-md-6">
                                   <button style="margin-top:40px" type="submit" class=" btn btn-primary btn-sm ">Save Data</button>
		            </div>
		            
		          </div>
		        
		           	 <span class="preview-area"></span>
		           
		        </form>
			
<?php endif;?>
<?php if($viewType=='editLevel'):extract($data)?>
	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return  update_validation();">
		<input type="hidden" name="id" value="<?=$id?>">
		<input type="hidden" name="keyIndex" value="id">
		<input type="hidden" name="tableName" value="e_level">
		           <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Level Name</label>
		              <input type="text" required name="level_name" value="<?=$level_name?>"  class="form-control-sm form-control">
		            </div> 
		            <div class="col-md-6">
		              <label class="col-form-label">Level Amount</label>
		              <input type="text" required name="level_amount"  value="<?=$level_amount?>" class="form-control-sm form-control">
		            </div>
		            
		          </div>
		       
		 		<div class="form-group row">
		            <div class="col-md-12">
		                                    
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
 
</script>

 
<?php endif;?>
<?php if($viewType=='editReward'):extract($data)?>
	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return  update_validation();">
		<input type="hidden" name="reward_id" value="<?=$reward_id?>">
		<input type="hidden" name="keyIndex" value="reward_id">
		<input type="hidden" name="tableName" value="e_reward">
		           <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Reward Name</label>
		              <input type="text" required name="reward_name" value="<?=$reward_name?>"   class="form-control-sm form-control">
		            </div> 
		           <div class="col-md-6">
		              <label class="col-form-label">Description</label>
		           
		              <textarea  class="form-control" name="reward_description"  rows="2"><?=$reward_description?></textarea>
		            </div> 
		            
		          </div>
		          <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Reward Amount</label>
		              <input type="number" id="reward_amount" readonly name="reward_amount" value="<?=$reward_amount?>"   class="form-control-sm form-control">
		            </div> 
		            <div class="col-md-6">
		              <label class="col-form-label">Reward Divions</label>
		              <input type="number" readonly id="reward_divisions" name="reward_divisions"  value="<?=$reward_divisions?>"  class="form-control-sm form-control" onchange="calculate_count()">
		            </div>
		        </div> 
		          <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Reward</label>
		              <input type="text" readonly name="reward" value="<?=$reward?>"   class="form-control-sm form-control">
		            </div> 
		             <!--  <div class="col-md-6">
		              <label class="col-form-label">Category</label>
		              <select required name="reward_category_id" onchange="change_view(this.value)"  class="form-control form-control-sm">
		              	<option value="0">No parent</option>
		              	<?php getPorfolioCategoriesOption($reward_category_id); ?>
		              </select>
		            </div> -->
		             <div class="col-md-6">
		              <label class="col-form-label">Category</label>
		              <select required onchange="change_view(this.value)" name="reward_category_id" id="security_question_1" class="form-control form-control-sm">
		              	<option value="0">No parent</option>
		              	<?php getPorfolioCategoriesOption($reward_category_id); ?>
		              </select>
		            </div>
		        </div>
		 
		            
		       <!--       <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">QR code</label>
		              <input type="text"  id="myInput"  class="form-control-sm form-control">

		                <button type="button" style="margin-top: 20px;" class="btn btn-outline-primary btn-rounded" onclick="getInputValue();">Genrate Code</button>

		            </div>
		             <div class="col-md-6">
		                <div id="showqr"></div>
		                 <?php if ($reward_qr): echo $reward_qr ;  endif ?>

		                <input type="hidden" name="reward_qr" id="reward_qr" >
		            </div>
		            
		          </div> -->
		            <div class="form-group row">
		            <div class="col-md-6" id="d1">
		              <label class="col-form-label">QR code</label>
		              <input type="text"  id="myInput"  class="form-control-sm form-control">

		                <button type="button" style="margin-top: 20px;" class="btn btn-outline-primary btn-rounded" onclick="getInputValue();">Genrate Code</button>

		            </div>

		             <div class="col-md-6">
		                <div id="showqr"></div>

		              <?php if ($reward_qr): echo $reward_qr ;  endif ?>
		                <input type="hidden" name="reward_qr" id="reward_qr" >
		            </div>
		            
		          </div>
		           
		         <div class="form-group row" id="d2">
		            <div class="col-md-6">
		              <label class="col-form-label">Download Link</label>
		              <input type="text"   class="form-control-sm  form-control" <?php if ($reward_category_id==2): echo $reward_qr ;  endif ?>  id="qr1">
		            </div> 
		           
		        </div>
		         <div class="form-group row" id='d3'>
		            <div class="col-md-6">
		              <label class="col-form-label">Youtube link</label>
		              <input type="text"  class="form-control-sm form-control " <?php if ($reward_category_id==3): echo $reward_qr ;  endif ?>   id="qr_11"> 
		            </div> 
		           
		            </div>
		            
		        
		           <div class="form-group row">
		           	<div class="col-md-6">
		              <label class="col-form-label"> image</label>
		         <input type="file" id="image"  name="files" class="form-control-sm input-sm form-control">
		        <span class="preview-area2">
		           <?php if ($image): ?>
		           	<img src="<?=base_url().'assets/cms_images/thumbnail/'.$image?>">
		           <?php endif ?>
		           </span> 
		            </div>
		            
		          </div>
		     
		           
		           	 

		         
		 		<div class="form-group row">
		            <div class="col-md-12">
		                                     <input type="hidden" name="tableName" value="e_reward">
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
 
</script>
   <script type="text/javascript">
var inputLocalFont2= document.getElementById("image");
inputLocalFont2.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').html('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>
<script>
// 	var elem = document.getElementById("security_question_1");
// elem.onchange = function(){
//     var hiddenDiv = document.getElementById("showMe");
//     hiddenDiv.style.display = (this.value == "") ? "none":"block";
// };
var a=[1,2,3];
$.each(a,function(index, el) {
	 
	 //if(id==el){$('#d'+id+'').show();}else{}
	 $('#d'+el+'').hide();

		
	});
function change_view(id) {
	// body...
	
	$.each(a,function(index, el) {
	 
	 if(id==el){$('#d'+id+'').show();}else{$('#d'+el+'').hide();}

		
	});
}
</script>
 
<?php endif;?>
<?php if($viewType=='editcategory'):extract($data)?>
	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return  update_validation();">
		<input type="hidden" name="category_id" value="<?=$category_id?>">
		<input type="hidden" name="keyIndex" value="category_id">
		<input type="hidden" name="tableName" value="e_category">
		           <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Name</label>
		              <input type="text" required name="category_name" value="<?=$category_name?>"  class="form-control-sm form-control">
		            </div> 
		          </div>
		     
		          <div class="form-group row">
		          	<div class="col-md-6">
		              <label class="col-form-label"> image</label>
		         <input type="file" id="image"  name="files" class="form-control-sm input-sm form-control">
		        <span class="preview-area2">
		           <?php if ($image): ?>
		           	<img src="<?=base_url().'assets/cms_images/thumbnail/'.$image?>">
		           <?php endif ?>
		           </span> 
		            </div>
		             
		            
		          </div>
		           
		           	 

		         
		 		<div class="form-group row">
		            <div class="col-md-12">
		                                    
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
 
</script>
    <script type="text/javascript">
var inputLocalFont2= document.getElementById("image");
inputLocalFont2.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').html('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>
 
<?php endif;?>
<?php if($viewType=='editslider'):extract($data)?>
	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return  update_validation();">
		<input type="hidden" name="slider_id" value="<?=$slider_id?>">
		<input type="hidden" name="keyIndex" value="slider_id">
		<input type="hidden" name="tableName" value="e_slider">
		           <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Name</label>
		              <input type="text" required name="slider_name" value="<?=$slider_name?>"  class="form-control-sm form-control">
		            </div> 
		          </div>
		     
		          <div class="form-group row">
		          	<div class="col-md-6">
		              <label class="col-form-label"> image</label>
		         <input type="file" id="image"  name="files" class="form-control-sm input-sm form-control">
		        <span class="preview-area2">
		           <?php if ($image): ?>
		           	<img src="<?=base_url().'assets/cms_images/thumbnail/'.$image?>">
		           <?php endif ?>
		           </span> 
		            </div>
		             
		            
		          </div>
		           
		           	 

		         
		 		<div class="form-group row">
		            <div class="col-md-12">
		                                    
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
 
    <script type="text/javascript">
var inputLocalFont2= document.getElementById("image");
inputLocalFont2.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').html('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>
 
<?php endif;?>
<?php if($viewType=='editsubcategory'):extract($data)?>
	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return  update_validation();">
		<input type="hidden" name="id" value="<?=$id?>">
		<input type="hidden" name="keyIndex" value="id">
		<input type="hidden" name="tableName" value="e_category">
		           <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Name</label>
		              <input type="text" required name="title" value="<?=$title?>"  class="form-control-sm form-control">
		            </div> 
		            <div class="col-md-6">
		              <label class="col-form-label">Level</label>
		              <input type="text" required name="level"  value="<?=$level?>" class="form-control-sm form-control">
		            </div>
		            
		          </div>
		           <div class="form-group row">
		           	 	<div class="col-md-6">
		              <label class="col-form-label"> image</label>
		         <input type="file" id="image"  name="files" class="form-control-sm input-sm form-control">
		        <span class="preview-area2">
		           <?php if ($image): ?>
		           	<img src="<?=base_url().'assets/cms_images/thumbnail/'.$image?>">
		           <?php endif ?>
		           </span> 
		            </div>
		           <div class="col-md-6">
                                    <label class="col-form-label">parent</label>
                                    <select class="form-control" name="cat_id">
                                       <?= getOption('e_category', 'id', 'title',$cat_id,array('cat_id'=>0))?>
                                   </select>
                                   
                               </div>
                       
                           </div>
		           
		           	 

		         
		 		<div class="form-group row">
		            <div class="col-md-12">
		                                    
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		        </form>
 
</script>
    <script type="text/javascript">
var inputLocalFont2= document.getElementById("image");
inputLocalFont2.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').html('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>
 
<?php endif;?>
   
<?php if($viewType=='editplot'):extract($data)?>

<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">
		           <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Person Name</label>
                              <input type="text" required value="<?=$name_person?>" name="name_person"  class="form-control-sm form-control">
		            </div>
                               <div class="col-md-6">
		              <label class="col-form-label">Contact Number</label>
                              <input type="text" required name="phone"  value="<?=$phone?>"class="form-control-sm form-control">
		            </div>
		          </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
		              <label class="col-form-label">Date</label>
                              <input type="date" required name="date" value="<?=$date?>" class="form-control-sm form-control">
		            </div>
                                              <div class="col-md-6">
		              <label class="col-form-label">Block</label>
                              <input type="text"  name="block" value="<?=$block?>" class="form-control-sm form-control">
		            </div>
                                    </div>
                                    
		          <div class="form-group row">
		            
		            <div class="col-md-6">
		               <label class="col-form-label">Street</label>
                               <input type="text" name="street" value="<?=$street?>" class="form-control-sm form-control">
		            </div>
                              <div class="col-md-6">
		               <label class="col-form-label">Plot#</label>
                               <input type="text"   name="plote_no" value="<?=$plote_no?>" class="form-control-sm form-control">
		            </div>
                              <div class="col-md-6">
		              <label class="col-form-label">Select Category</label>
		              <select required  id="cat3" name="cat_id" class="form-control form-control-sm">
		              	<option value="0">No parent</option>
		              	<?php getOption('e_category','id','name',$cat_id); ?>
		              </select>
		             
		            </div>
		            <div class="col-md-6">
		              <label class="col-form-label">Select Phase</label>
		              <select required id="phase" name="phase_id" class="form-control form-control-sm">
		              	
		              		<?php getOption('e_phase','id','phase_name',$phase_id); ?>
		              </select>
		             
		            </div>
                              <div class="col-md-6">
		              <label class="col-form-label">Plot Type</label>
		              <select required name="type" class="form-control form-control-sm">
		              	<option value="0">No parent</option>
		              	<?php getOption('e_plot_type','name','name',$type); ?>
		              </select>
		             
		            </div>
                              <div class="col-md-6">
		              <label class="col-form-label">Plot Size</label>
                              <select required name="plote_size" class="form-control form-control-sm">
		              	<option value="0">No parent</option>
		              	<?php getOption('e_plot_size','name','name',$plote_size); ?>
		              </select>
		            </div>
		             <div class="col-md-6">
		              <label class="col-form-label">Price</label>
		              <input type="Number"   name="price" value="<?=$price?>" class="form-control-sm form-control">
		            </div>
		          </div>  
		           
		          <div class="form-group row">
		          	 <div class="col-md-12">
		              <label class="col-form-label">Details</label>
                              <input type="hidden" name="feature"  id="editorReplace">
          			<textarea id="editor1"  class="form-control my-2" rows="7"><?=$feature?></textarea>
		            </div> 
		             <div class="col-md-3">
		              <label class="col-form-label"> image</label>
		         <input type="file" id="image"  name="files[]" multiple class="form-control-sm input-sm form-control">
                         
		            </div>
                           
                          </div>
		           <div class="form-group row">
		           
		           <?php if ($image): $image=explode(';', $image)?>
                               <?php foreach ($image as $key => $value) {
                                       
                                   ?>
                               <div class="col-sm-2">
                               <span class="preview-area2">
                                   <img width="60px"height="60px" src="<?=base_url().'assets/cms_images/'.$value?>">
                                </span>
                               </div>
		           <?php } endif ?>
		            
		          </div>  
		           
		     
		<input type="hidden" name="id" value="<?=$id?>">
                <input type="hidden" name="tableName" value="e_item">
		         
		 		<div class="form-group row">
		            <div class="col-md-12">
		                                     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
    
    <script src="<?=base_url()?>assets/cms_layout/js/jquery.js"></script>
       <script type="text/javascript" src="<?=base_url();?>assets/cms_layout/vendor/editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/cms_layout/vendor/editor/ckfinder/ckfinder.js"></script>

<script type="text/javascript">
var editor = CKEDITOR.replace( 'editor1', {

  language: 'en'
    
});
</script>
    <script type="text/javascript">
var inputLocalFont2= document.getElementById("image");
inputLocalFont2.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').html('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>

<script type="text/javascript">
	
	$("#cat3").change(function(){
var cat=$("#cat3").val();

$.post("<?php echo base_url(); ?>function_control/phase",{cat}, 
			function(data)
			{
				//alert(data);
				$("#phase").html(data);
			
			});




	});
</script>

			
<?php endif;?>
<?php if($viewType=='editadds'):extract($data)?>
<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">
		           <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Add Name</label>
                              <input type="text" required name="name"value="<?=$name?>" class="form-control-sm form-control">
		            </div>
                               <div class="col-md-6">
		              <label class="col-form-label">Add Active Date</label>
                              <input type="date" required name="from_date"value="<?=$from_date?>"  class="form-control-sm form-control">
		            </div>
		          </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
		              <label class="col-form-label">Add Disable Date</label>
                              <input type="date" required name="to_date"value="<?=$to_date?>"  class="form-control-sm form-control">
		            </div>
                                              <div class="col-md-6">
		              <label class="col-form-label">Add Direction</label>
                              <select name="diraction" class="form-control">
                                  <?php if($diraction!=NULL){
                                     echo'<option value="'.$diraction.'">'.$diraction.'</option>'; 
                                  }
?>
                                     <option value="top">Top</option>
                                   <option value="bottom_left">Bottom Left</option>
                                    <option value="bottom_right">Bottom Right</option>
                                  
                              </select>
		            </div>
                                    </div>
                             
		           
		          <div class="form-group row">
		          	 <div class="col-md-6">
		              <label class="col-form-label">Link</label>
		              <input type="text" required name="link" value="<?=$link?>" class="form-control-sm form-control">
		            </div>
		             <div class="col-md-3">
		              <label class="col-form-label"> image</label>
		         <input type="file" id="image"  name="files"  class="form-control-sm input-sm form-control">
		         <span class="preview-area2">
		           <?php if ($image): ?>
		           	<img src="<?=base_url().'assets/cms_images/thumbnail/'.$image?>">
		           <?php endif ?>
		           </span> 
		            </div>
                            
                          </div>
		           <div class="form-group row">
		           
		          </div>  
		           
		           	 
		         
		 		<div class="form-group row">
		            <div class="col-md-12">
                                <input type="hidden" name="keyIndex" value="id">
                                <input type="hidden" name="id" value="<?=$id?>">
		                        <input type="hidden" name="tableName" value="e_adds">
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div>  
		      
								
	  </form>

<?php endif;?>
<?php if($viewType=='editphase'):extract($data)?>
<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return  update_validation();">
				<div class="form-group row">
		            <div class="col-md-6">
                          <input type="hidden" name="tableName" value="e_phase">
		<input type="hidden" name="keyIndex" value="id">
		<input type="hidden" name="id" value="<?=$id?>">
		              <label class="col-form-label">Phase Name</label>
                              <input type="text" required name="phase_name"  value="<?=$phase_name?>"class="form-control-sm form-control">
		            </div>
                            <div class="col-md-6">
                                    <label class="col-form-label">Category Name</label>
                                    <select class="form-control" name="cat_id">
                                     <?= getOption('e_category', 'id', 'name',$cat_id,array('display'=>'yes'))?>
                                   </select>
                                   
                               </div>
                               <div class="col-md-6">
                                   <button style="margin-top:40px" type="submit" class=" btn btn-primary btn-sm ">Save Data</button>
		            </div>
		            
		          </div>
		        
		           	 <span class="preview-area"></span>
		           
		        </form>
			
<?php endif;?>
<?php if($viewType=='editplot_type'):extract($data)?>
<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return  update_validation();">
				<div class="form-group row">
		            <div class="col-md-6">
                          <input type="hidden" name="tableName" value="e_plot_type">
		<input type="hidden" name="keyIndex" value="id">
		<input type="hidden" name="id" value="<?=$id?>">
		              <label class="col-form-label">Plot Type Name</label>
                              <input type="text" required name="name"  value="<?=$name?>"class="form-control-sm form-control">
		            </div>
                           
                    <div class="col-md-6">
                                   <button style="margin-top:40px" type="submit" class=" btn btn-primary btn-sm ">Save Data</button>
		            </div>          
		            
		          </div>
		           
		        
		           	 <span class="preview-area"></span>
		           
		        </form>
			
<?php endif;?>
<?php if($viewType=='editplot_size'):extract($data)?>
<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return  update_validation();">
				<div class="form-group row">
		            <div class="col-md-6">
                          <input type="hidden" name="tableName" value="e_plot_size">
		<input type="hidden" name="keyIndex" value="id">
		<input type="hidden" name="id" value="<?=$id?>">
		              <label class="col-form-label">Plot Type Name</label>
                              <input type="text" required name="name"  value="<?=$name?>"class="form-control-sm form-control">
		            </div>
                           
                    <div class="col-md-6">
                                   <button style="margin-top:40px" type="submit" class=" btn btn-primary btn-sm ">Save Data</button>
		            </div>          
		            
		          </div>
		           
		        
		           	 <span class="preview-area"></span>
		           
		        </form>
			
<?php endif;?>
<?php if ($viewType == "editgallery"): extract($data) ?>

	<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">
     
       <input type="hidden" name="tableName" value="e_gallery">
		<input type="hidden" name="keyIndex" value="id">
		<input type="hidden" name="id" value="<?=$id?>">
		          <div class="form-group row">
		            <div class="col-md-8">
		              <label class="col-form-label">Title</label>
		              <input type="text"  name="title" value="<?=$title?>"   class="form-control-sm form-control">
		             

		            </div>
		            
		        </div>
		           <div class="form-group row">
		            <div class="col-md-6">
					<label class="col-form-label">Image</label>
		              <input type="file" id="image2"   name="files"  class="form-control-sm input-sm form-control">
		            </div>
		            
		             <span class="preview-area2">
		           <?php if ($image): ?>
		           	<img src="<?=base_url().'assets/cms_images/thumbnail/'.$image?>">
		           <?php endif ?>
		           </span>  
		        </div>
					<div class="form-group row">
		            <div class="col-md-12">
		     
		                 <button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
		            </div>
		          </div> 
		          
		 		 
		        </form>
<script type="text/javascript">
var inputLocalFont2= document.getElementById("image2");
inputLocalFont2.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').html('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>
<?php endif ?>
