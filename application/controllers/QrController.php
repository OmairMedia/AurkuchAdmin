<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class QrController extends CI_Controller {

	function __construct ()
	{	
		parent::__construct();
		//$this->load->library('Infiqr');
		$this->load->helper('url');
	}


	public function index()  
	{	
		// $this->load->library('Ciqrcode');
		// 	$qr_image=rand().'.png';
		// 	$params['data'] = 'kayani';
		// 	$params['level'] = 'H';
		// 	$params['size'] = 8;
		// 	$params['savename'] =FCPATH."assets/cms_images/".$qr_image;
		// 	if($this->ciqrcode->generate($params))
		// 	{
		// 		$data['img_url']=$qr_image;	
		// 	}
			
			echo('<img src="'.base_url().'assets/cms_images/'.$data['img_url'].'"/>');
	}
	public function qrcodeGenerator ( )
	{
		 	//$qr_image=rand().'.png';
		//print_r($_POST);
		$this->load->library('Ciqrcode');
		
		 $qrtext = $this->input->post('inputVal');
			//$qrtext = 'saima';
		
		if(isset($qrtext))
		{

			//file path for store images
		    $SERVERFILEPATH = FCPATH."assets/cms_images/";
		   
			$text = $qrtext;
			$text1= substr($text, 0,9);
			
			$folder = $SERVERFILEPATH;
			$file_name1 = $text1."-Qrcode" . rand(2,200) . ".png";
			$file_name = $folder.$file_name1;
			QRcode::png($text,$file_name);
			
			echo"<center><img src=".base_url().'assets/cms_images/'.$file_name1."></center>";
			//echo('<img src="'.base_url().'assets/cms_images/'.$data['img_url'].'"/>');

		}
		else
		{
			echo 'No Text Entered';
		}	
	}

	
}
