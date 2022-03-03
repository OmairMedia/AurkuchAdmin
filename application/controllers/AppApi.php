<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppApi extends CI_Controller {

	public function __construct() {

        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('function_helper');
		$this->load->Model('AdminModel');
		//$this->load->Model('SiteModel');
		$this->load->library('image_lib');
		$this->load->library('upload');
		$this->load->library('email');
		
		
		
    }


	public function index()
	{
		echo "what are you doing here. GOTO";
	}
	
	public function getShippings()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     
	    $res['records'] = $this->AdminModel->getRows('e_delivery', array());
	   
	     if(sizeof($res['records']) > 0){
	         $appData = array(
	             'status' => 1,
	             'message' =>  $res['records']
	             );
	     }
	     else
	     {
	         $appData = array(
	             'status' => 0,
	             'message' => 'No Discount Found'
	             );
	     } 
	     echo json_encode($appData);
	 }
	
	   //number + password [para]
	   //return row
	}
	
	
	public function login()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     $password = $this->input->post('password');
	     $email   = $this->input->post('email');
	     $res = $this->AdminModel->getRow('e_users',array('email'=>$email,'password'=>$password));
	     if($res){
	         $appData = array(
	             'status' => 1,
	             'message' => $res
	             );
	     }
	     else
	     {
	         $appData = array(
	             'status' => 0,
	             'query' => $res,
	             'message' => 'Incorrect Credentials'
	             );
	     } 
	     echo json_encode($appData);
	 }
	
	   //number + password [para]
	   //return row
	}
		public function registration()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     $password = $this->input->post('password');
	     $email   = $this->input->post('email');
	     $name   = $this->input->post('name');
	     $address   = $this->input->post('address');
	     $unit_num   = $this->input->post('unit_num');
	     $postal_code   = $this->input->post('postal_code');
	     $mobile   = $this->input->post('mobile');
	    
	     $resemail=$this->AdminModel->getField('e_users',array('email'=>$_POST['email']),'email');
	    // print_r($resemail);exit();
	    if($resemail!=$email){
	        
	     $res = $this->AdminModel->insertData('e_users',array('email'=>$email,'name'=>$name,'password'=>$password,'address'=>$address,'unit_num'=>$unit_num,'postal_code'=>$postal_code,'mobile'=>$mobile));
	    if($res){
	         $appData = array(
	             'status' => 1,
	             'message' => $res
	             );
	     }
	     else
	     {
	         $appData = array(
	             'status' => 0,
	             'query' => $res,
	             'message' => 'Incorrect Credentials'
	             );
	     } 
	    } 
	     else{
	         $appData = array(
	             'status' => 2,
	             'message' => 'Email Alreadt registered'
	             );
	     }
	    
	     echo json_encode($appData);
	 }
	
	   //number + password [para]
	   //return row
	}
	
	public function updateUser()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     $password = $this->input->post('password');
	     $email   = $this->input->post('email');
	     $name   = $this->input->post('name');
	     $address   = $this->input->post('address');
	     $unit_num   = $this->input->post('unit_num');
	     $postal_code   = $this->input->post('postal_code');
	     $mobile   = $this->input->post('mobile');
	    $user_id = $this->input->post('user_id');
	     
	        
	     $res = $this->AdminModel->updateRow('e_users',array('id' => $user_id),'',array('email'=>$email,'name'=>$name,'password'=>$password,'address'=>$address,'unit_num'=>$unit_num,'postal_code'=>$postal_code,'mobile'=>$mobile));
	    if($res){
	         $appData = array(
	             'status' => 1,
	             'message' => $res
	             );
	     
	    } 
	     else{
	         $appData = array(
	             'status' => 2,
	             'message' => 'Unable To Update Data'
	             );
	     }
	    
	     echo json_encode($appData);
	 }
	
	   //number + password [para]
	   //return row
	}
	
	public function placeOrder()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     $user_id = $this->input->post('user_id');
	     $shipping_id   = $this->input->post('shipping_id');
	     $discount_id   = $this->input->post('discount_id');
	     $items   = $this->input->post('items');
	     $total   = $this->input->post('total');
	     $status   = $this->input->post('status');
	     $order_id   = $this->input->post('order_id');
	     $created_at   = $this->input->post('created_at');
	        
	        
	     $res = $this->AdminModel->insertReturn('e_orders',array('user_id'=>$user_id,'delivery_id'=>$shipping_id,'discount_id'=>$discount_id,'items'=>$items,'total'=>$total,'order_id'=>$order_id,'status'=>$status,'created_at'=>$created_at));
	  
	    if($this->orderemail($res,$user_id)){
	        
	         $appData = array(
	             'status' => 1,
	             'message' => $res
	             );
	     }
	     else
	     {
	         $appData = array(
	             'status' => 0,
	             'query' => $res,
	             'message' => 'Incorrect Credentials'
	             );
	     } 
	  
	    
	     echo json_encode($appData);
	 }
	   //number + password [para]
	   //return row
	}
		public function orderemail($order_id,$user_id)
	{
	

		$settings = $this->AdminModel->getSetting();
		$records = $this->AdminModel->getRow('e_orders',array('id'=>$order_id));
		$userData =array('user_id'=>$user_id);
		$to=$this->AdminModel->getField('e_users',array('id'=>$user_id),'email');
		$data =  array(
			'settings' => $settings,
			'userData' => $userData,
			'data1'  => $records
		);
	//	print_r($records); exit();
		$message=$this->load->view('admin_pages/invoice_email',$data,TRUE);	
	//	print_r($message);
		return  $this->E_mail($settings['siteName'],$settings['email'],$to,'NEw Task',$message);
	}
		public function E_mail($name,$from,$to,$title,$message)
	{
  $this->email->from($from,$name);
$this->email->to($to);
 $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
$this->email->set_header('Content-type', 'text/html');
$this->email->subject($title);
$this->email->message($message);
if($this->email->send()) 
      return 1;
         else 
         	return 0;
	}
	public function getUserOrders()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     
	     $user_id   = $this->input->post('user_id');
	     
	    $res['records'] = $this->AdminModel->getRows('e_orders', array('user_id' => $user_id));
	   
	     if(sizeof($res['records']) > 0){
	         $appData = array(
	             'status' => 1,
	             'message' =>  $res['records']
	             );
	     }
	     else
	     {
	         $appData = array(
	             'status' => 0,
	             'message' => 'No Order Found'
	             );
	     } 
	     echo json_encode($appData);
	 }
	
	   //number + password [para]
	   //return row
	}
		public function getCategory()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     
	    $res['records'] = $this->AdminModel->getRows('e_category', array());
	   
	     if(sizeof($res['records']) > 0){
	         $appData = array(
	             'status' => 1,
	             'message' =>  $res['records']
	             );
	     }
	     else
	     {
	         $appData = array(
	             'status' => 0,
	             'message' => 'No Category Found'
	             );
	     } 
	     echo json_encode($appData);
	 }
	
	   //number + password [para]
	   //return row
	}
		public function getDiscount()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     
	    $res['records'] = $this->AdminModel->getRows('e_discount', array());
	   
	     if(sizeof($res['records']) > 0){
	         $appData = array(
	             'status' => 1,
	             'message' =>  $res['records']
	             );
	     }
	     else
	     {
	         $appData = array(
	             'status' => 0,
	             'message' => 'No Discount Found'
	             );
	     } 
	     echo json_encode($appData);
	 }
	
	   //number + password [para]
	   //return row
	}
		public function getMenu()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     
	    $res['records'] = $this->AdminModel->getRows('e_menu', array());
	   
	     if(sizeof($res['records']) > 0){
	         $appData = array(
	             'status' => 1,
	             'message' =>  $res['records']
	             );
	     }
	     else
	     {
	         $appData = array(
	             'status' => 0,
	             'message' => 'No Menu Found'
	             );
	     } 
	     echo json_encode($appData);
	 }
	
	   //number + password [para]
	   //return row
	}
	
			public function getProducts()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	    $cat_id   = $this->input->post('cat_id');
	    $res['records'] = $this->AdminModel->getRows('e_products', array('cat_id'=> $cat_id));
	   
	     if(sizeof($res['records']) > 0){
	         $appData = array(
	             'status' => 1,
	             'message' =>  $res['records']
	             );
	     }
	     else
	     {
	         $appData = array(
	             'status' => 0,
	             'message' => 'No Product Found'
	             );
	     } 
	     echo json_encode($appData);
	 }
	
	   //number + password [para]
	   //return row
	}
	
	
public function saveData()
	{
	    
	         $appData = array(
	             'status' => 1,
	             'message' => 'Saved successfully',
	             );
	     $live_stock = (array)json_decode($_POST['live_stock']);
    
	     $household = (array)json_decode($_POST['household']);
	     $household['head_image'] = $this->processImg2($_FILES);
	     $household_id = $this->AdminModel->insertReturn('e_household',$household);
	     
	     if($household_id)
	     {
	        
	     	$live_stock['household_id'] = $generic_data['household_id'] = $member_data['household_id']= $household_id;
	     	$this->AdminModel->insertData('live_stock',$live_stock);
	     	$this->AdminModel->insertData('generic_data',$generic_data);
	     	$member_data_id = $this->AdminModel->insertReturn('member_data',$member_data);
	     	
	     	

	     }else{
	     	$appData['status'] = 0;
	     	$appData['message'] = 'Action Failed';
	     }
	       
       // $appData['message'] = $household['latitude'];
	     echo json_encode($appData);

	    	

	    
	     //echo json_encode($appData);
	}
	
	public function processImg2($files,$filename = 'head_image',$upload_path = 'assets/cms_images/')
	{
		$config['upload_path']          = $upload_path;
        $config['allowed_types']        = 'gif|jpg|png|ico|jpeg';
        $config['max_size']             = 3000;
       // $config['max_width']            = 3000 ;
        //$config['max_height']           = 2000;
        $new_name = time().mt_rand(1,99999);
		$config['file_name'] = $new_name;
        $photos = "";
        $dataInfo = array();
      	
      	
      	$this->upload->initialize($config);
      	

        if ( ! $this->upload->do_upload($filename))
        {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit();
            return false;
        }
        else
        {
             $data = array('upload_data' => $this->upload->data());
             return $data['upload_data']['file_name'];
        }
	}
	
	
	public function signup()
	{
	    //number + password + name + email ('optional')
	    //already check number
	    // email recheck if exist
	    //return row
	     if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     $data['email'] = $this->input->post('email');
	     $data['name']   = $this->input->post('name');
	     $data['phone']   = $this->input->post('number');
	     $data['password']   = md5($this->input->post('password'));
	     $number_check = $this->AdminModel->getRow('e_users',array('phone'=>$data['phone']));
	     if($number_check){
	          $appData = array(
	             'status' => 0,
	             'message' => 'Number already exist',
	             'data'=> (object) array()
	             );
	             echo json_encode($appData);
	             exit();
	     }
	    if($data['email'] != "")
	    {
	        $email_check = $this->AdminModel->getRow('e_users',array('email'=>$data['email']));
	        if($email_check){
	            $appData = array(
	             'status' => 0,
	             'message' => 'Email already exist',
	             'data'=> (object) array()
	             );
	             echo json_encode($appData);
	             exit();
	        }
	    }
	   $user_id = $this->AdminModel->insertReturn('e_users',$data);
	     if($user_id){
	         $user = $this->AdminModel->getRow('e_users',array('user_id'=>$user_id));
	         $appData = array(
	             'status' => 1,
	             'message' => 'Registeration  successfully',
	             'data'=>$user
	             );
	     }
	     else
	     {
	         $appData = array(
	             'status' => 0,
	             'message' => 'Registration failed',
	             'data'=> (object) array()
	             );
	     } 
	     echo json_encode($appData);
	 }
	}
	
	public function homeData()
	{
	  if ($this->input->server('REQUEST_METHOD') == 'POST')
	  {
	     $city = $this->input->post('location');
	     $ad_type = $this->input->post('ad_type');//Need and Sale
	     if($ad_type == '') $ad_type = 'Sale';
	     $data = array();
	     $data['categories'] = $this->AdminModel->getRows('e_category',array('level'=>'0'));
	     $appData = array(
	             'status' => 1,
	             'message' => 'Success',
	             'data'=> $data
	             );
	     echo json_encode($appData);
	  }
	    //para : location = all||city_name
	    // categories array 
	    // featured ad array [location based]
	    //latest ad array [location]
	}
	public function latestAds()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
	  {
	     $city = $this->input->post('location');
	     $ad_type = $this->input->post('ad_type');//Need and Sale
	     if($ad_type == '') $ad_type = 'Sale';
	     $data = array();
	  
	     $data = $this->AdminModel->getLatestAds($city,$ad_type);
	     $appData = array(
	             'status' => 1,
	             'message' => 'Success',
	             'data'=> $data
	             );
	     echo json_encode($appData);
	  }
	}
	public function featuredAds()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
	  {
	     $city = $this->input->post('location');
	     $ad_type = $this->input->post('ad_type');//Need and Sale
	     if($ad_type == '') $ad_type = 'Sale';
	     $data = array();
	     $data = $this->AdminModel->getFeaturedAds($city,$ad_type);
	     $appData = array(
	             'status' => 1,
	             'message' => 'Success',
	             'data'=> $data
	             );
	     echo json_encode($appData);
	  }
	}
	public function comboAds()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
	  {
	     $city = $this->input->post('location');
	     $ad_type = $this->input->post('ad_type');//Need and Sale
	     if($ad_type == '') $ad_type = 'Sale';
	     $data = array();
	  
	     $data['latest'] = $this->AdminModel->getLatestAds($city,$ad_type);
	     $data['featured'] = $this->AdminModel->getFeaturedAds($city,$ad_type);
	    
	     $appData = array(
	             'status' => 1,
	             'message' => 'Success',
	             'data'=> $data
	             );
	     echo json_encode($appData);
	  }
	}
	public function rejoinAds($adsArray)
	{
		
		$readyAds = array();
		foreach ($adsArray as $ad)
		{
			$readyAds[]  = array(
				'ad_id' => $ad['ad_id'], 
				'ad_title' => $ad['ad_title'],
				'image'	=>$ad['image'],
				'images'	=>$ad['images'],
				'ad_desc'	=>$ad['ad_desc'],
				'province'	=>$ad['province'],
				'city'	=>$ad['city'],
				'area'	=>$ad['area'],
				'price'	=>$ad['price'],
				'date_cre'	=>$ad['date_cre'],
				'area'	=>$ad['area'],
			);
		}
		
	}
	public function getSubCat()
	{
	    // para : cat_id
	    // all sub cat array + adcount
	    //return also brand array
	    if ($this->input->server('REQUEST_METHOD') == 'POST')
	    {
    	     $cat_id = $this->input->post('cat_id');
    	     $data = array();
    	    $appData = array(
    	             'status' => 0,
    	             'message' => 'No sub categories found',
    	             'data'=>  array()
    	             );
    	     $data['categories'] = $this->AdminModel->getRows('e_category',array('parent_id'=>$cat_id));
    	     if($data['categories'])
    	     {
    	         $cats = $data['categories'];
    	         $data['categories'] = array();
    	         foreach($cats as $cat){
    	             $brandArr = array();
    	            $brand = $this->AdminModel->getRows('e_cat_brands',array('cat_id'=>$cat['cat_id']));
    	            if($brand){
    	                
    	                foreach($brand as $b){
    	                    $brandArr[] = $b['brand'];
    	                }
    	            }
    	            $cat['brand'] = implode(';',$brandArr);
    	            $data['categories'][] = $cat;
    	         }
    	          $appData = array(
    	             'status' => 1,
    	             'message' => 'Success',
    	             'data'=> $data['categories']
    	             );
    	     }
    	    
    	     echo json_encode($appData);
	    }
	    
	}
	public function getAds()
	{
	    if ($this->input->server('REQUEST_METHOD') == 'POST')
	    {
    	     $sub_cat_id = $this->input->post('sub_cat_id');
    	     $brand = $this->input->post('brand');
    	     $location = $this->input->post('location');
    	     $page = $this->input->post('offset');
    	     $adType = $this->input->post('adType');
    	     if($adType == "") $adType = "Sale";

    	     --$page;
    	     $data = array();
    	    $appData = array(
    	             'status' => 0,
    	             'message' => 'No Ads Found',
    	             'data'=>  array()
    	             );
    	    
    	    $cond = array();
    	    $cond['ads.ad_type'] = $adType;
    	    if($brand != '0') $cond['ads.brand'] = $brand;
    	     $cond['ads.sub_cat_id'] = $sub_cat_id;
    	     if($location != "all") $cond['ads.city']=$location;
    	     $per_page = 4;
    	     $ads = $this->SiteModel->getAdsJoin($per_page,$per_page*$page,$cond);
    	     if($ads)
    	     {
    	          $appData = array(
    	             'status' => 1,
    	             'message' => 'Success',
    	             'data'=> $ads
    	             );
    	     }
    	    
    	     echo json_encode($appData);
	    }
	    
	    // sub_cat_id
	    // brand = 0|brand
	    //location
	    // city = all|specified
	}
	public function getAdFilter()
	{
		$sub_cat_id = $this->input->post('sub_cat_id');
		$filters = $this->AdminModel->getRow('');

	}
	public function getFilter()
	{
	    $data = $filters =  array();
	   
    	             
	    $cat_id = $this->input->post('cat_id');
	    $brand = $this->input->post('brand'); // if no brand then send brand = 0
	    
	    $cat = $this->AdminModel->getRow('e_category',array('cat_id'=>$cat_id));
	    $filterArr = array_values(explode(',',$cat['filter_tags']));
	    if($filterArr){
	        foreach($filterArr as $f){
	            if($f == 'brand') continue;
	             if($f == 'model') continue;
	            $tempFData= array();
	            $tempF= $this->AdminModel->getRow('general_filter',array('tag'=>$f));
	            if($tempF){
	                $tempFCodeObj = json_decode($tempF['code']);
	       // var_dump($tempFCodeObj);
	            //echo $tempFCodeObj->tag;
	            $tempFData['tag'] = $tempF['tag'];
	            $tempFData['type'] = $tempF['type'];
	            $tempFData['code'] = $tempF['code'];
	            $tempFData['tagName'] =   $tempFCodeObj->tag;
	           $tempFData['options'] = $tempFCodeObj->options;
	           $filters[] = $tempFData;
	            }
	           
	        }
	         $data['model'] = array();
	        $data['filters'] = $filters;
	        if(in_array('model',$filterArr) && in_array('brand',$filterArr) && $brand != '0'){
	            $models = $this->AdminModel->getRow('e_cat_brands',array('brand'=>$brand));
	           // print_r($models);
	            if($models)
	              $data['model'] = $models;
	        }
	       
	         $appData = array(
    	             'status' => 1,
    	             'message' => 'Success',
    	             'data'=> $data
    	             );
	        
	    }else{
	         $appData = array(
    	             'status' => 0,
    	             'message' => 'No filter found',
    	             'data'=> array()
    	             );
	        
	    }
	    echo json_encode($appData);
	   
	    
	    
	}
	public function postad()
	{
	   $data = $_POST;

		$user['name'] = $data['name'];
		$user['phone'] = $data['phone'];
		$user['reg'] = $data['reg'];
		unset($data['name']);
		unset($data['phone']);

		if (isset($_FILES) && $_FILES['files']['error'][0] == 0)
		{	
			 $imgs =  $this->processMultipleIamges($_FILES,'files',TRUE);
			$imgs2 = explode(';', $imgs);
			$imags3 = array_values($imgs2);

			if($imags3[0]){
				$image = $imags3[0];
				$data = $data + array('image'=>$image);
				unset($imags3[0]);
			}
			$images = implode(';', $imags3);
			$data = $data + array('images'=>$images);	
		}
		 $data['user_id'] = $this->AdminModel->insertReturn('e_users',$user);
		 // echo "<pre>";
		 // print_r($data);
		  $ad_id = $this->AdminModel->insertReturn('ads',$data);
		 if ($ad_id)
		{
		      $appData = array(
    	             'status' => 1,
    	             'message' => 'Your Ad is saved for approval. We will notify you via message when Ad will be approved',
    	             'data'=> array()
    	             );

		
		}
		else{

		  $appData = array(
    	             'status' => 0,
    	             'message' => 'Your ad is not submited contact admin',
    	             'data'=> array()
    	             );
		}
		 echo json_encode($appData);
	}
	 public function processImg($files,$filename = 'files')
	{
		$config['upload_path']          = "assets/cms_images/";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 3000;
       // $config['max_width']            = 3000 ;
        //$config['max_height']           = 2000;
        $new_name = time().mt_rand(1,999).trim($_FILES[$filename]['name']);
		$config['file_name'] = $new_name;
        $photos = "";
        $dataInfo = array();
      	
      	$this->load->library('upload', $config);


        if ( ! $this->upload->do_upload($filename))
        {
            $error = array('error' => $this->upload->display_errors());
            // print_r($error);
            // exit();
            // return false;
        }
        else
        {
             $data = array('upload_data' => $this->upload->data());
             return $data['upload_data']['file_name'];
        }
	}

		public function processMultipleIamges($files,$filename = 'files',$thumbnail = FALSE)
	{
		$config['upload_path']          = "assets/cms_images/";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 3000;
       // $config['max_width']            = 3000 ;
        //$config['max_height']           = 2000;
        
        $photos = array();
        $dataInfo = array();
        // echo "<pre>";
        // print_r($_FILES);
       
        
        $cpt = count($_FILES[$filename]['name']);
        for($i=0; $i<$cpt; $i++)
        {   
   			$new_name = time().rand(9,99999);
			$config['file_name'] = $new_name;       
            $_FILES[$filename]['name']= $files[$filename]['name'][$i];
            $_FILES[$filename]['type']= $files[$filename]['type'][$i];
            $_FILES[$filename]['tmp_name']= $files[$filename]['tmp_name'][$i];
            $_FILES[$filename]['error']= $files[$filename]['error'][$i];
            $_FILES[$filename]['size']= $files[$filename]['size'][$i];  

            $this->upload->initialize($config);
            // $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload($filename))
            {
                $error = array('error' => $this->upload->display_errors());
                // print_r($error);
            }
            else
            {  
                $dataInfo = array('upload_data' => $this->upload->data());
                $photos[] = $dataInfo['upload_data']['file_name'];
               
            }

            
        }
        if($thumbnail) $this->create_thumbnail($photos,TRUE);
        return implode(';',$photos );
	}
	 public function create_thumbnail($filename,$multi_images = FALSE)
   	{
   		
   		$target_path = $_SERVER['DOCUMENT_ROOT'] . '/'.CMS_PATH.'assets/cms_images/thumbnail';
      	$config = array(
          'image_library' => 'gd2',
          'source_image'  => '',
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '',
          'width' => 150,
          'height' => 150
      );
      if ($multi_images)
      {
      	foreach ($filename as $file)
      	{
      		 $source_path = $_SERVER['DOCUMENT_ROOT'].'/'.CMS_PATH.'assets/cms_images/'.$file;
      		$config['source_image'] = $source_path; 
      		 $this->image_lib->initialize($config);
		      if (!$this->image_lib->resize())
		          echo $this->image_lib->display_errors();
      	}
      }
      else
      {
 		$source_path = $_SERVER['DOCUMENT_ROOT'].'/'.CMS_PATH.'assets/cms_images/'.$filename;
      	$config['source_image'] = $source_path;
      	$this->image_lib->initialize($config);
		if (!$this->image_lib->resize())
		     echo $this->image_lib->display_errors();
		      
      }
      $this->image_lib->clear();
   	}
	
	
	
	
}
