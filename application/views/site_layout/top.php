<?php  
$CI =& get_instance();
$controler=$this->uri->segment(1);
//$function=$this->uri->segment(2);
//print_r(getRow('e_menu','slug',$controler));
if (!empty( $tag=getRow('e_menu','slug',$controler)))
{
	
    $pageTitle = $tag['pagetitle'];
    $metaKeyword = $tag['keywords'];
    $description = $tag['discription'];
}
elseif (!empty( $tag=getRow('e_category','slug',$controler))) {
     $pageTitle = $tag['pagetitle'];
    $metaKeyword = $tag['keywords'];
    $description = $tag['discription'];
}
else
{ $tag=getRow('e_menu','slug','home');
	$pageTitle = $tag['pagetitle'];
    $metaKeyword = $tag['keywords'];
    $description = $tag['discription'];
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$pageTitle?></title>
        <meta name="description" content="<?=$description?>">
        <meta name="author" content="Qaiasar Kayani">
        <meta name="keyword" content="<?=$metaKeyword?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="shortcut icon" href="<?=base_url().'assets/cms_images/'.$settings['icon'];?>" />
<!--             link !-->


        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/normalize.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/fontello.css">
        <link href="<?= base_url()?>assets/site_assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/site_assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/site_assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/price-range.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/style.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/responsive.css">
          <link rel="stylesheet" href="<?= base_url()?>assets/site_assets/css/lightslider.min.css">
    </head>
		<!-- End topbar -->