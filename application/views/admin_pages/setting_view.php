<?php $this->load->view('admin_layout/header');?>
<?php extract($settings) ?>
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
										<h5>Settings</h5>
										<h6 class="sub-heading">Welcome to Settings Managment</h6>
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
									<div class="card-header">Settings </div>
									<div class="card-body">
										<?php echo show_flash_data();?>
										<span id="flash_data"></span>
										<form method="POST" name="updateForm" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">
		      
		          <input type="hidden" name="id" value="10">
		            <div class="form-group row">
		            <div class="col-md-12">
		              <label class="col-form-label">App Version  link</label>
		              <input type="text" value="<?=$app?>" name="app"  class="form-control-sm form-control">
		              
		            </div>
		           
		          </div> 
                    <div class="form-group row">
		            <div class="col-md-12">
		              <label class="col-form-label">Minimum Withdrwal</label>
		              <input type="text" value="<?=$minimum_withdraw?>" name="minimum_withdraw"  class="form-control-sm form-control">
		              
		            </div>
		           
		          </div>
		          <div class="form-group row">
		            <div class="col-md-12">
		              <label class="col-form-label">Daily Reward Limit </label>
		              <input type="text" value="<?=$daily_reward_limit?>" name="daily_reward_limit"  class="form-control-sm form-control">
		              
		            </div>
		           
		          </div>
                  <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Twitter UserID</label>
		              <input type="text" value="<?=$twitter_userid?>" name="twitter_userid"  class="form-control-sm form-control">
		              
		            </div>
		            <div class="col-md-6">
		              <label class="col-form-label">Instagram Link</label>
		              <input type="text" value="<?=$instagram?>" name="instagram"  class="form-control-sm form-control">
		              
		            </div>
		          </div>    
                  <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Linkedin Profile</label>
		              <input type="text" value="<?=$linkedin?>" name="linkedin"  class="form-control-sm form-control">
		              
		            </div>
		            <div class="col-md-6">
		              <label class="col-form-label">Facebook Page</label>
		              <input type="text" value="<?=$facebook?>" name="facebook"  class="form-control-sm form-control">
		              
		            </div>
		          </div>  
                  <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Youtube Link</label>
		              <input type="text" value="<?=$youtube?>" name="youtube"  class="form-control-sm form-control">
		              
		            </div>
		          </div>                          
                                            
		           <div class="form-group row">
		            <div class="col-md-6">
					<label class="col-form-label">Logo</label>
		              <input type="file" id="image"  name="files"  class="form-control-sm input-sm form-control">
		           	 <span class="preview-area">
		           	 	<?php if (!empty($image)): ?>
		           	 		<img src="<?=base_url()?>assets/cms_images/<?=$image?>" width=100>
		           	 	<?php endif ?>
		           	 </span>

		            </div>
		             <div class="col-md-6">
		             	<label class="col-form-label">Favicon</label>
		              <input type="file" id="image2"  name="files2"  class="form-control-sm input-sm form-control">
		           	 <span class="preview-area2">
		           	 	<?php if (!empty($icon)): ?>
		           	 		<img src="<?=base_url()?>assets/cms_images/<?=$icon?>" width=100>
		           	 	<?php endif ?>
		           	 </span>

		            </div>
		           </div>
                 <div class="form-group row">
		        <div class="col-md-12">
                    <label class="col-form-label">About Us</label>
                    <textarea style="direction: rtl;" name="about_us" id="about_us" class="form-control"><?=$about_us?></textarea>

                    <script>CKEDITOR.replace( 'about_us' );</script>
                  </div>
                     <div class="col-md-12">
                    <label class="col-form-label">Privacy Policy</label>
                    <textarea style="direction: rtl;" name="privacy_policy" id="privacy_policy" class="form-control"><?=$privacy_policy?></textarea>

                    <script>CKEDITOR.replace( 'privacy_policy' );</script>
                  </div>
                          </div>
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
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
<script type="text/javascript">

function update_validation() 
{   
   // var privacy_policy = CKEDITOR.get('privacy_policy').getContent();
//    var terms_conditions = CKEDITOR.get('about_us').getContent();
    var privacy_policy = CKEDITOR.instances['privacy_policy'].getData();
    var about_us = CKEDITOR.instances['about_us'].getData();
   // $("#editorReplace").val(value);
    var form = new FormData($('#updateForm')[0]);
    form.append("privacy_policy", privacy_policy);
    form.append("about_us", about_us);
    $.ajax({
      type: "POST",
      url: '<?php echo base_url(); ?>function_control/updateSetting',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function(res)
      {
      	//alert(res);
       window.setTimeout(window.location='<?php echo base_url(); ?>admin/settings',1000);
      }
       
    });
      return false;
}   
</script>

<!-- modals area -->




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
  var inputLocalFont = document.getElementById("image2");
inputLocalFont.addEventListener("change",previewImages2,false);
function previewImages2(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
$('.preview-area2').html('');
        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
          $('.preview-area2').append('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    }

</script>

<?php $this->load->view('admin_layout/footer');?>
