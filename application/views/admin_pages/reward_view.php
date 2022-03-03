<?php $this->load->view('admin_layout/header');?>
<?php  
//print_r($data); exit();
$pageName = "reward";
$calledName = "Reward"; 
$heading = "Reward";
$key = "reward_id";
$tableName = "e_reward";
$fields = array('Reward Name','Reward','Description','QR Code','Date');
$indexes = array('reward_name','reward','reward_description','reward_qr','reward_created_date');


 ?>
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
												<td>Image</td>
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
														<?php if ($row['reward_status']=='Active') {
												   		 ?>
												   		   <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="update_status(<?=$row[$key]?>,'Disable')" class="btn btn-outline-danger btn-sm">Disable
													</button>
												 <?php }  else{?>
												 	 <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="update_status(<?=$row[$key]?>,'Active')" class="btn btn-outline-success btn-sm">Active
													</button>
												 	<?php }?>
														<button data-toggle="tooltip" data-placement="top" title="" data-original-title="View Record"  onclick="view_reward(<?=$row[$key]?>)" class="btn btn-outline-success btn-sm"><span class="icon-eye" ></span>
													</button>

													<button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="update(<?=$row[$key]?>)" class="btn btn-outline-success btn-sm"><span class="icon-enlarge" ></span>
													</button>
													
													<button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('<?=$key?>',<?=$row[$key]?>,'<?=$tableName?>')"><span class="icon-trash2" ></span>
													</button>
										<?php if ($row['reward_category_id']=='1') { ?>			
													<button class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print Record" onclick="printRecord('<?=$row[$key]?>')"><span class="fas fa-print" ></span>
													</button>
														<?php } ?>	
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
	function view_reward(id)
{
	window.location='<?php echo base_url(); ?>Admin/Reward_detail/'+id;

}
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
function printRecord(key)
{
 
		window.open("<?php echo base_url(); ?>admin/print_view?id="+key);
	
}
function addNew()
{
	$("#addModal").modal();
}

function form_validation() 
{   
   // var value = CKEDITOR.instances['editor1'].getData();
   // $("#editorReplace").val(value);
   
  var c= $("#qr").val();
  var y= $("#qr_1").val();

  if(c!='')
  {
  	$("#reward_qr").val(c);
  }else if(y!='')
  {
  	$("#reward_qr").val(y);
  }

    var form = new FormData($('#myForm')[0]);
    $.ajax({
      type: "POST",
      url: '<?php echo base_url(); ?>function_control/saveSimple',
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

     var c= $("#qr1").val();
   var y= $("#qr_11").val();
    //var x= $('input[type=hidden]').val();
  //alert(y);

//  x=$(':hidden#reward_qr').val();
//   //alert($('input:hidden[name=reward_qr]').val());
// $("#reward_qr").remove();
// var p=$(x).val('');
// alert(p);

  if(c!='')
  {  	//alert('app');
  
  	$("#reward_qr").val(c);
 }else if(y!='')
  {
  	//alert('you');
  	$("#reward_qr").val(y);
  }
    var form = new FormData($('#updateForm')[0]);
    $.ajax({
      type: "POST",
      url: '<?php echo base_url(); ?>function_control/updateSimple',
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
function update_status(id,status){
   //var value = CKEDITOR.instances['editor1'].getData();
   //$("#editorReplace").val(value);
   // var form = new FormData($('#updateForm')[0]);
   
   $.post("<?php echo base_url(); ?>function_control/updateRewardStatus",{id,status}, function( data ) {
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
		              <label class="col-form-label">Reward Name</label>
		              <input type="text" required name="reward_name"  class="form-control-sm form-control">
		            </div> 
		            <div class="col-md-6">
		              <label class="col-form-label">Description</label>
		           
		              <textarea  class="form-control" name="reward_description" rows="2"></textarea>
		            </div> 
		            
		          </div>
                   <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Reward Amount</label>
		              <input type="number" id="reward_amount" required name="reward_amount"  class="form-control-sm form-control">
		            </div> 
		            <div class="col-md-6">
		              <label class="col-form-label">Reward Divions</label>
		              <input type="number" required id="reward_divisions" name="reward_divisions"  class="form-control-sm form-control" onchange="calculate_count()">
		              <input type="hidden" required id="rewards_left" name="rewards_left"  class="form-control-sm form-control">
		            </div>
		        </div> 
		          <div class="form-group row">
		            <div class="col-md-6">
		              <label class="col-form-label">Reward</label>
		              <input type="text" required name="reward"  class="form-control-sm form-control" id="reward_calc" readonly>
		            </div> 
		              <div class="col-md-6">
		              <label class="col-form-label">Category</label>
		              <select required onchange="change_view(this.value)" name="reward_category_id" id="security_question_1" class="form-control form-control-sm">
		              	<option value="0">No parent</option>
		              	<?php getPorfolioCategoriesOption(0); ?>
		              </select>
		            </div>
		        </div>
		        <div class="form-group row">
		            <div class="col-md-6" id="d1">
		              <label class="col-form-label">QR code</label>
		              <input type="text"  id="myInput"  class="form-control-sm form-control" style="display:none">

		                <button type="button" style="margin-top: 20px;" class="btn btn-outline-primary btn-rounded" onclick="getInputValue();">Genrate Code</button>

		            </div>
		             <div class="col-md-6">
		                <div id="showqr"></div>
		                <input type="hidden" name="reward_qr" id="reward_qr" >
		            </div>
		            
		          </div>
		           
		         <div class="form-group row" id="d2">
		            <div class="col-md-6">
		              <label class="col-form-label">Download Link</label>
		              <input type="text"   class="form-control-sm  form-control" id="qr">
		            </div> 
		           
		        </div>
		         <div class="form-group row" id='d3'>
		            <div class="col-md-6">
		              <label class="col-form-label">Youtube link</label>
		              <input type="text"  class="form-control-sm form-control " id="qr_1"> 
		            </div> 
		           
		            </div>
		           <div class="form-group row">
		          	<div class="col-md-6">
		              <label class="col-form-label"> image</label>
		         <input type="file" id="image"  name="files" class="form-control-sm input-sm form-control">
		         <span class="preview-area"></span>
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


<script type="text/javascript">
function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
}
	  function getInputValue(){
            // Selecting the input element and get its value 
            
            var inputVal = randomString(32, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
                    // Shufle the $str_result and returns substring 
                        // of specified length 
            //var inputVal =  
            // Displaying the value
            document.getElementById("myInput").value=inputVal;
            //alert(inputVal);
            $.post("<?php echo base_url(); ?>function_control/qrcodeGenerator",{inputVal}, function( data ) {

            //location.reload();
            $("#showqr").html(data); 
            $('#reward_qr').val(data);	
                 
            });



        }

</script>
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

function calculate_count(id) {
	// body...
	if(document.getElementById("reward_amount").value==0 || document.getElementById("reward_amount").value==null || document.getElementById("reward_divisions").value==0 || document.getElementById("reward_divisions").value==null)
    	{
    	    alert('Enter Reward amount and division not zero');
	    }
	    else{
	        var amount=document.getElementById("reward_amount").value;
	var divions=document.getElementById("reward_divisions").value;
	document.getElementById("rewards_left").value=divions;
	document.getElementById("reward_calc").value=amount/divions;
	//alert(amount/divions);
	    }
}
</script>