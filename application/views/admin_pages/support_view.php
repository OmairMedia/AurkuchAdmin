<?php $this->load->view('admin_layout/header');?>
<?php extract($settings) ?>
<?php $chatnumber=null; ?>
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
										<h5>Support</h5>
										<h6 class="sub-heading">Welcome to Suppport Managment</h6>
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
							<div class="col-sm-3">
								<div class="card">
									<div class="card-header">Users</div>
									<div class="customScroll" style="height:500px !important;">
										<div class="card-body">
											<ul >
											    <?php if($supportChat[0]!=null){?>
											    <?php foreach ($supportChat as $row): extract((array)$row);?>
												<li class="chats-left">
													<a  onclick="messages(<?=$row->chat_id?>)" class="block-140">
                                                        <div class="icon violet">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                        <h5><?=$row->user_name?></h5>
                                                        <p><?=$row->user_phone?></p>
                                                    </a>
												</li>
												<?php endforeach ?>
											    
											    <?php } else { ?>
                                                <p>No Support Chat</p>
												<?php }  ?>
											</ul>
										</div>
									</div>
								</div>
                                
							</div>
							<div class="col-sm-9">
								<div class="card" id="messageDetail">
									<div class="card-header">Chat</div>
                                    
                                    <div class="card-body" >
                                        <p>Select a user to chat</p>
                                    </div>
                                    
								</div>
							</div>
							
						</div>
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
</div>
<script type="text/javascript">
function messages(id)
{
    
    $.post("<?php echo base_url(); ?>function_control/getMessages",{id}, 
		function(data)
		{
			$("#messageDetail").html(data); 	
			//$('#myModal').modal('hide');
		});

}
function sendmessage() 
{   
   // var value = CKEDITOR.instances['editor1'].getData();
   // $("#editorReplace").val(value);
    var form = new FormData($('#messageForm')[0]);
    if(form.get('message_text')!='' && form.get('chat_id')!=0)
        {
    $.ajax({
      type: "POST",
      url: '<?php echo base_url(); ?>function_control/sendMessage',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function(res)
      {
      	//alert(res);
          messages(form.get('chat_id'));
      }
       
    });
      return false;
        }
    else{
        alert("Please enter a messaget to send");
        return false;
    }
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
