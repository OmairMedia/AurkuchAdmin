

<?php $this->load->view('site_layout/top');?>
<?php $this->load->view('site_layout/header');?>
<style type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style type="text/css">
  

  @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
body{
    font-family: 'Quicksand', sans-serif;
}
.gal-container{
  padding: 12px;
}
.gal-item{
  overflow: hidden;
  padding: 3px;
}
.gal-item .box{
  height: 350px;
  overflow: hidden;
}
.box img{
  height: 100%;
  width: 100%;
  object-fit:cover;
  -o-object-fit:cover;
}
.gal-item a:focus{
  outline: none;
}
.gal-item a:after{
  content:"\e003";
  font-family: 'Glyphicons Halflings';
  opacity: 0;
  background-color: rgba(0, 0, 0, 0.75);
  position: absolute;
  right: 3px;
  left: 3px;
  top: 3px;
  bottom: 3px;
  text-align: center;
    line-height: 350px;
    font-size: 30px;
    color: #fff;
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.gal-item a:hover:after{
  opacity: 1;
}
.modal-open .gal-container .modal{
  background-color: rgba(0,0,0,0.4);
}
.modal-open .gal-item .modal-body{
  padding: 0px;
}
.modal-open .gal-item button.close{
    position: absolute;
    width: 25px;
    height: 25px;
    background-color: #000;
    opacity: 1;
    color: #fff;
    z-index: 999;
    right: -12px;
    top: -12px;
    border-radius: 50%;
    font-size: 15px;
    border: 2px solid #fff;
    line-height: 25px;
    -webkit-box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
  box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
}
.modal-open .gal-item button.close:focus{
  outline: none;
}
.modal-open .gal-item button.close span{
  position: relative;
  top: -3px;
  font-weight: lighter;
  text-shadow:none;
}
.gal-container .modal-dialogue{
  width: 80%;
}
.gal-container .description{
  position: relative;
  height: 40px;
  top: -40px;
  padding: 10px 25px;
  background-color: rgba(0,0,0,0.5);
  color: #fff;
  text-align: left;
}
.gal-container .description h4{
  margin:0px;
  font-size: 15px;
  font-weight: 300;
  line-height: 20px;
}
.gal-container .modal.fade .modal-dialog {
    -webkit-transform: scale(0.1);
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    transform: scale(0.1);
    top: 100px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.gal-container .modal.fade.in .modal-dialog {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transform: translate3d(0, -100px, 0);
    transform: translate3d(0, -100px, 0);
    opacity: 1;
}
@media (min-width: 768px) {
.gal-container .modal-dialog {
    width: 55%;
    margin: 50 auto;
}
}
@media (max-width: 768px) {
    .gal-container .modal-content{
        height:250px;
    }
}
/* Footer Style */
i.red{
    color:#BC0213;
}
.gal-container{
    padding-top :75px;
    padding-bottom:75px;
}
footer{
    font-family: 'Quicksand', sans-serif;
}
footer a,footer a:hover{
    color: #88C425;
}
.page-head{
        background-image:url(<?php echo base_url().'assets/cms_images/'.$pageData['image']?>);
        color:#FFF;
    position: relative;
    background-color: #FCFCFC;
    padding-bottom: 55px;
    color: gray;
       
    }
</style>



  <div class="container gal-container">
    <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title"><?php echo $pageData['heading']?></h1>  
                       
                      <!--   <img src="<?php echo base_url().'assets/cms_images/'.$pageData['image']?>"> -->          
                    </div>
                </div>
            </div>
        </div>
  <?php foreach ($packeg as $key => $value) {

    $category=getRows('e_category','parent_id',$value['id']);
    echo '<div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title"><h2>'.$value['name'].'</h2></div>';
    # code...
    
  foreach ($category as $key => $va) {
  ?>

    
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#<?=$va['id']?>">
          <img src="<?php echo base_url().'assets/cms_images/'.$va['image'].''?>">
        </a>
        <div class="col-md-12 description">
                  <h4><?=$va['name']?></h4>
                </div>
        <div class="modal fade " id="<?=$va['id']?>" tabindex="-1" role="dialog">
          <div class="modal-dialog " role="document">
            <div class="modal-content ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <div class="col-md-12 description">
                  <h4><?=$va['name']?></h4>
                </div>
                <div class="row">
                   <?php $item=getRows('e_item','cat_id',$va['id']);
                      foreach ($item as $key => $value) {
                        $img=explode(';', $value['image']);
                      foreach ($img as $key => $v) {
                        # code...
                        
                    ?>

                  <div class="col-xs-6" style="margin-bottom: 20px">
                   
                <img src="<?php echo base_url().'assets/cms_images/'.$v.''?>">
                
              </div>
              
            <?php }}?>
              </div>
              </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } } ?>
   


    </div>
     <div class="container gal-container">
      <div class="col-md-12 center ">
                  <h2>Associates Photos</h2>
                </div>
  <?php foreach ($gallery as $key => $value) {
    # code...
   
  ?>
    
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#<?=$key?>">
          <img src="<?php echo base_url().'assets/cms_images/'.$value['image'].''?>">
        </a>
        <div class="col-md-12 description">
                  <h4><?=$value['title']?></h4>
                </div>
        <div class="modal fade" id="<?=$key?>" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="<?php echo base_url().'assets/cms_images/'.$value['image'].''?>">
              </div>
                <div class="col-md-12 description">
                  <h4><?=$value['title']?></h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
   </div>
   <?php $this->load->view('site_layout/footer');?>