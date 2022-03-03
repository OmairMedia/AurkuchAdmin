</div>
			<!-- END: .app-container -->
			<!-- BEGIN .main-footer -->
			<footer class="main-footer fixed-btm">
				Copyright <?php echo $settings['siteName']; ?> 2018.
			</footer>
			<!-- END: .main-footer -->
		</div>
		<!-- END: .app-wrap -->

		<!-- jQuery first, then Tether, then other JS. -->
		<script src="<?=base_url()?>assets/cms_layout/js/jquery.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/js/tether.min.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/unifyMenu/unifyMenu.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/onoffcanvas/onoffcanvas.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/js/moment.js"></script>

		<!-- Slimscroll JS -->
		<script src="<?=base_url()?>assets/cms_layout/vendor/slimscroll/slimscroll.min.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Chartist JS -->
		<!-- <script src="<?=base_url()?>assets/cms_layout/vendor/chartist/js/chartist.min.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/chartist/js/chartist-tooltip.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/chartist/js/custom/custom-line-chart.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/chartist/js/custom/custom-line-chart1.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/chartist/js/custom/custom-area-chart.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/chartist/js/custom/donut-chart2.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/chartist/js/custom/custom-line-chart4.js"></script> -->

		<!-- Data Tables -->
		<script src="<?=base_url()?>assets/cms_layout/vendor/datatables/dataTables.min.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/datatables/dataTables.bootstrap.min.js"></script>
		
		<!-- Custom Data tables -->
		<script src="<?=base_url()?>assets/cms_layout/vendor/datatables/custom/custom-datatables.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/datatables/custom/fixedHeader.js"></script>

		<!-- Common JS -->
		<script src="<?=base_url()?>assets/cms_layout/js/common.js"></script>
		<!-- Flot Charts -->
		<script src="<?=base_url()?>assets/cms_layout/vendor/flot/jquery.flot.min.js"></script>
		<script src="<?=base_url()?>assets/cms_layout/vendor/flot/jquery.flot.time.min.js"></script>
	<!-- 	<script src="<?=base_url()?>assets/cms_layout/vendor/flot/jquery.flot.pie.min.js"></script> -->
		<!-- <script src="<?=base_url()?>assets/cms_layout/vendor/flot/jquery.flot.stack.min.js"></script> -->
		<!-- <script src="<?=base_url()?>assets/cms_layout/vendor/flot/jquery.flot.tooltip.min.js"></script> -->
<!-- 		<script src="<?=base_url()?>assets/cms_layout/vendor/flot/jquery.flot.resize.min.js"></script> -->
		<script src="<?=base_url()?>assets/cms_layout/vendor/flot/custom/line.js"></script>

	<!-- image and editor script-->
	<script type="text/javascript" src="<?=base_url();?>assets/cms_layout/vendor/editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/cms_layout/vendor/editor/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
var editor = CKEDITOR.replace( 'editor1', {

  language: 'en'
    
});
//CKFinder.setupCKEditor( editor, '../' );



</script>
<!-- <script type="text/javascript">
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

</script> -->

		
	</body>
</html>