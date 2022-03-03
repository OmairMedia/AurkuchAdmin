<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Function_control extends CI_Controller {

	public function __construct() {

        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('function_helper');
		$this->load->Model('AdminModel');
		$this->load->Model('SiteModel');

                $this->load->library('image_lib');
                $this->load->library('upload');
		login_check();
    }

	public function index()
	{
	  echo "Nothing to show. Function_control";
	}
	///////////////////cms related function /////////////////////
	public function getView()
	{
		extract($_POST);
		switch ($viewType) 
		{
			case 'editCmsUser':
				$data2 = $this->AdminModel->getRow('e_admin',array('userid'=>$id));
				if ($data2)
				{
					$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
					$this->load->view('called_views/admin_views',$data);
				}
				else
				echo "No record found in databae";
				break;
				case 'editUser':
				$data2 = $this->AdminModel->getRow('e_users',array('id'=>$id));
				if ($data2)
				{
					$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
					$this->load->view('called_views/admin_views',$data);
				}
				else
				echo "No record found in databae";
				break;
				// case 'editGroup':
				// $data2 = $this->AdminModel->getRow('e_groups','id',$id);
				// if ($data2)
				// {
				// 	$data = array(
				// 		'viewType'	=> $viewType,
				// 		'data'		=> $data2
				// 	);
				// 	$this->load->view('called_views/admin_views',$data);
				// }
				// else
				// echo "No record found in databae";
				break;
					case 'editNews':
				$data2 = $this->AdminModel->getRow('e_group_post',array('id'=>$id));
				if ($data2)
				{
					$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
					$this->load->view('called_views/admin_views',$data);
				}
				else
				echo "No record found in databae";
				break;
			case 'editMenu':
				$data2 = $this->AdminModel->getRow('e_menu','menuid',$id);
				if ($data2)
				{
					$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
					$this->load->view('called_views/admin_views',$data);
				}
				else
				echo "No record found in databae";
				break;
			case 'editUserStatus':
				$data2 = $this->AdminModel->getRow('e_user_status','id',$id);
				if ($data2)
				{
					$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
					$this->load->view('called_views/admin_views',$data);
				}
				else
				echo "No record found in databae";
				break;
			case 'editServices':
				$data2 = $this->AdminModel->getRow('e_services2','id',$id);
				if ($data2)
				{
					$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
					$this->load->view('called_views/admin_views',$data);
				}
				else
				echo "No record found in databae";
				break;
			case 'editProjects':
				$data2 = $this->AdminModel->getRow('e_projects','id',$id);
				if ($data2)
				{
					$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
					$this->load->view('called_views/admin_views',$data);
				}
				else
				echo "No record found in databae";
				break;

			case 'editPortfolio_categories':
				$data2 = $this->AdminModel->getRow('e_category','id',$id);
				if ($data2)
				{
					$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
					$this->load->view('called_views/admin_views',$data);
				}
				else
				echo "No record found in databae";
				break;
			case 'editPortfolio_gallery':
				$data2 = $this->AdminModel->getRow('e_gallery','id',$id);
				if ($data2)
				{
					$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
					$this->load->view('called_views/admin_views',$data);
				}
				else
				echo "No record found in databae";
				break;
			default:
				echo "No view defined";
				break;
		}
	}
	###############generic for getView para by post : tableName,key,value and viewType
	public function getView2()
	{ 
		
		extract($_POST);
		//print_r($_POST);
		$data2 = $this->AdminModel->getRow($tableName,[$key=>$id]);
               
		if ($data2)
		{
			$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
			$this->load->view('called_views/admin_views',$data);
		}
		else
		{
		echo "No Data found";	
		}

	}
    
    public function getMessages()
	{ 
		
		extract($_POST);
		$chat_data = $this->AdminModel->getRow('e_chat',array('chat_id' => $_POST['id']));
		//print_r($chat_data);die();
		$user_data = $this->AdminModel->getRow('e_users',array('user_id' =>$chat_data['user_id']));
		$data2['user_name']=$user_data['user_name'];
		$data2['messages'] = $this->AdminModel->getMessages($_POST['id']);
        $data2['chat_id'] = $_POST['id'];
        //   print_r($data2['user_name']);  die();
        
		if ($data2)
		{
			$this->load->view('called_views/message_view',$data2);
			//print_r($data2['messages'][0]);
		}
		else
		{
		    $this->load->view('called_views/message_view',$data2);
		    //echo "No Data found";	
		    
		}

	}
    public function sendMessage()
	{
		$data = $_POST;
		//echo "<pre>";
		print_r($data);
		
		if ($this->AdminModel->insertData('e_chat_messages',$data))
		{
			//echo $this->db->last_query();
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query sendMessage)"
				));
	}
    
	#####################Qr###########
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
			QRcode::png($text,$file_name, 100, 10);
			
			echo"<img src=".base_url().'assets/cms_images/'.$file_name1.">";

			//echo('<img src="'.base_url().'assets/cms_images/'.$data['img_url'].'"/>');

		}
		else
		{
			echo 'No Text Entered';
		}	
	}
	
	public function getQRimage()
	{
		 	//$qr_image=rand().'.png';
		//print_r($_POST);
		
		 $reward_id = $this->input->post('reward_id');
			//$qrtext = 'saima';
		//print_r($reward_id);die();
		if(isset($reward_id))
		{

			//file path for store images
		    $data1 = $this->AdminModel->getRow('e_reward',array('reward_id' => $reward_id,'reward_category_id' => 1));
		    $data2 = $this->AdminModel->getRow('e_reward',array('reward_id' => 29,'reward_category_id' => 1));
		    $data=array(
		        'reward_qr' => $data1['reward_qr'],
		        'app_qr' => $data2['reward_qr']
		        );
		    if($data)
			    print_r(json_encode($data));
			else
			    echo '';

			//echo('<img src="'.base_url().'assets/cms_images/'.$data['img_url'].'"/>');

		}
		else
		{
			echo 'No Text Entered';
		}	
	}
	################generic save and update
	public function saveSimple()
	{
            $data = $_POST;
            //print_r($data);
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{     
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
                        $data = $data + array('image' => $photo);
                        
		}
		               
	 $tableName = $data['tableName'];
		unset($data['tableName']);
		
		//   echo "<pre>";
		//  print_r($data);
		// echo $tableName;
                
		if ($this->AdminModel->insertData($tableName,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
	}
    public  function simplesave() {
           
            
		//$data = $data + array('image' => $photo);
		//   echo "<pre>";
        $data = $_POST;
		
		// echo $tableName;
                 $tableName = $data['tableName'];
                 unset($data['tableName']);
		if ($this->AdminModel->insertData($tableName,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
            
        }
	public function updateSimple()
	{    //print_r($_POST);
            $data = $_POST;
		$index 		= $_POST['keyIndex'];
		 $tableName 	= $_POST['tableName'];
		$id = $this->input->post($index);
		
             //   print_r($data);
                 
		unset($data['keyIndex']);
		unset($data['tableName']);
        //print_r($id);
                
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$this->deleteImage($tableName,$index,$id,'image','assets/cms_images/');
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
			$data = $data + array('image'=>$photo);
		}

		// echo "<pre>";
               //  print_r($data);
		
		
		if ($this->AdminModel->updateRow($tableName,$index,$id,$data))
		{
		
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateSimple)"
				));

	}
	###############update setting#########
	public function updateSetting()
	{
		$id = $this->input->post('id');
		$data = $_POST;
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$this->deleteImage('e_settings','id',$id,'image','assets/cms_images/');
			$photo =  $this->processImg($_FILES);
			//$this->create_thumbnail($photo);
			$data = $data + array('image'=>$photo);
		}
		
		if (isset($_FILES) && !empty($_FILES['files2']['name']))
		{
			$this->deleteImage('e_settings','id',$id,'icon','assets/cms_images/');
			$photo2 =  $this->processImg($_FILES,'files2');
			$data = $data + array('icon'=>$photo2);
		}

		//echo "<pre>";
		//print_r($data);
		
		if ($this->AdminModel->updateRow('e_settings','id',$id,$data))
		{
			//echo $this->db->last_query();
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateSetting)"
				));
	}
	############cms_user_view
	public function saveCmsUser()
	{
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
		}
		else
			$photo = "";

		$duties_arr = $this->input->post('duties[]');
		$duties = implode(',', $duties_arr);
		
		$data = array(
			'name'		 => $this->input->post('name'),
			'username'	 => $this->input->post('username'),
			'password' 	 => md5($this->input->post('password')),
			'email'		 => $this->input->post('email'),
			'role'		 => $this->input->post('role'),
			'status'	 => $this->input->post('status'),
			'duties'	 => $duties,
			'image'	 => $photo
		);
		if ($this->AdminModel->insertData('e_admin',$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));

	}

	public function updateCmsUser()
	{
		$userid = $this->input->post('userid');
		$duties_arr = $this->input->post('duties[]');
		$duties = implode(',', $duties_arr);
		
		$data = array(
				'name'		 => $this->input->post('name'),
				'username'	 => $this->input->post('username'),
				'email'		 => $this->input->post('email'),
				'role'		 => $this->input->post('role'),
				'status'	 => $this->input->post('status'),
				'duties'	 => $duties
			);
                     
                        
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$this->deleteImage('e_admin','userid',$userid,'image','assets/cms_images/');
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
			$data = $data + array('image'=>$photo);
		}
                
                		

		$password = $this->input->post('password');
		if($password != 'fk0001' && !empty($password))
		{
			$data = $data + array('password'=>md5($password));
		}

		if ($this->AdminModel->updateRow('e_admin','userid',$userid,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}
	public function updateUser()
	{
		//print_r($_POST);
		$id = $this->input->post('id');	
		$data = array(
				'user_status'	 => $this->input->post('status')
				
			);
                     
		if ($this->AdminModel->updateRow('e_users','user_id',$id,$data))
		{
			//echo $this->db->last_query();
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}
		public function updateRewardStatus()
	{
		//print_r($_POST);
		$id = $this->input->post('id');	
		$data = array(
				'reward_status'	 => $this->input->post('status')
				
			);
                     
		if ($this->AdminModel->updateRow('e_reward','reward_id',$id,$data))
		{
			//echo $this->db->last_query();
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}
		public function updateTransectionStatus()
	{
		//print_r($_POST); exit();
		$id = $this->input->post('id');	
		$reward_id = $this->input->post('reward_id');	
		$data = array(
				'transaction_status'	 => $this->input->post('status')
				
			);
                   
            $updateArray = array(
            	
				'wallet_reward_status'	 => $this->input->post('status')
				
			);
			//$detail= $this->AdminModel->getRows('e_wallet',array('wallet_reward_status'=>'Pending','wallet_reward_id'=>6));

			$this->AdminModel->updateRow('e_wallet','wallet_reward_id',$reward_id,$updateArray ); 
			//echo $this->db->last_query();
			////print_r($detail); exit();
			

		if ($this->AdminModel->updateRow('e_transaction','transaction_id',$id,$data))
		{ 
			
			//echo $this->db->last_query();
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}
		public function updateNews()

	{
		//print_r($_POST);
		$id = $this->input->post('id');	
		$data = array(
				'post_status'	 => $this->input->post('post_status')
				
			);
                     
		if ($this->AdminModel->updateRow('e_group_post','id',$id,$data))
		{
			//echo $this->db->last_query();
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}
	######################saving slider
	public function saveSlider()
	{
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
		}
		else
			$photo = "";
		$data = $_POST;

		$data = $data + array('image' => $photo);
		  //echo "<pre>";
		 //print_r($data);

		if ($this->AdminModel->insertData('e_slider',$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
	}
    
    public function updateSlider()
	{    //print_r($_POST);
            $data = $_POST;
		$index 		= $_POST['keyIndex'];
		 $tableName 	= $_POST['tableName'];
		$id = $this->input->post($index);
		
                
                 
		unset($data['keyIndex']);
		unset($data['tableName']);
        print_r($data);
                
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$this->deleteImage($tableName,$index,$id,'image','assets/cms_images/');
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
			$data = $data + array('image'=>$photo);
		}

		// echo "<pre>";
               //  print_r($data);
		
		
		if ($this->AdminModel->updateRow($tableName,$index,$id,$data))
		{
		
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateSimple)"
				));

	}
	public function updateUserStatus()
	{
		$id = $this->input->post('id');
		$data = $_POST;

		if ($this->AdminModel->updateRow('e_user_status','id',$id,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}
   	public function updateGroup()
	{
		$id = $this->input->post('id');
		$data = $_POST;

		if ($this->AdminModel->updateRow('e_groups','id',$id,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}  
	  	public function updateMember()
	{
		$id = $this->input->post('id');
		$data = $_POST;

		if ($this->AdminModel->updateRow('e_groups_members','id',$id,$data))
		{
			//echo $this->db->last_query() ;
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}

		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}       
   
	//////////////// GENERIC Function for delete row//////////////
	public function deleteImage($tableName,$key,$value,$fieldName,$filePath)
	{
		 $filename = $this->AdminModel->getField($tableName,$key,$value,$fieldName);
		if (!empty($filename) && $filename != '0') 
		{
			$image = $_SERVER['DOCUMENT_ROOT'].'/'.CMS_PATH.$filePath.$filename;
			$image_thumbnail = $_SERVER['DOCUMENT_ROOT'].'/'.CMS_PATH.$filePath.'thumbnail/'.$filename;
			if (file_exists($image)) unlink($image);
			if (file_exists($image_thumbnail)) unlink($image_thumbnail);
		}
	}
	public function deleteMultipleImage($tableName,$key,$value,$fieldName,$filePath)
	{
		 $filename = $this->AdminModel->getField($tableName,$key,$value,$fieldName);
		if (!empty($filename) && $filename != '0') 
		{
			$images = explode(';', $filename);
			foreach ($images as $file)
			{
				$image = $_SERVER['DOCUMENT_ROOT'].'/'.CMS_PATH.$filePath.$file;
				//$image_thumbnail = $_SERVER['DOCUMENT_ROOT'].'/'.CMS_PATH.$filePath.'thumbnail/'.$file;
				if (file_exists($image)) unlink($image);
				//if (file_exists($image_thumbnail)) unlink($image_thumbnail);
			}
			
		}
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
      	
      	  $this->upload->initialize($config);


        if ( ! $this->upload->do_upload($filename))
        {
            $error = array('error' => $this->upload->display_errors());
            //print_r($error);
            //exit();
            //return false;
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
                //print_r($error);
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
   	 public function processFile($files,$filename = 'files')
	{
		$config['upload_path']          = "assets/lib/uploads";
        $config['allowed_types']        = 'docx|doc|pdf';
        $config['max_size']             = 4000;
       // $config['max_width']            = 3000 ;
        //$config['max_height']           = 2000;
        $new_name = time().mt_rand(1,999000); 
		$config['file_name'] = $new_name;
        $photos = "";
        $dataInfo = array();
      	
      	$this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($filename))
        {
            $error = array('error' => $this->upload->display_errors());
             //print_r($error);
             //exit();
            //return false;
        }
        else
        {
             $data = array('upload_data' => $this->upload->data());
             return $data['upload_data']['file_name'];
        }
	}


	public function deleteRecord()
	{

		if (isset($_POST['tableName']) && isset($_POST['key']) && isset($_POST['value']))
		{
			if (!empty($_POST['tableName']) && !empty($_POST['key']) && !empty($_POST['value']))
			{
				if (isset($_POST['file']) && !empty($_POST['file']))
				{
					 $this->deleteImage($_POST['tableName'],$_POST['key'],$_POST['value'],$_POST['file'],$_POST['file_path']);
				}
				$this->AdminModel->delRow($_POST['tableName'],$_POST['key'],$_POST['value'],$_POST['file_path']);
				$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success."
				));
				echo show_flash_data();
			}
			else
			{
				$this->session->set_flashdata('alert_data', array(
				'type' => 'warning', 
				'details' => " Developer Error! Empty Parameter"
				));
				echo show_flash_data();
			}
		}
		else
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Developer Error: Parameter Missing"
				));
			echo show_flash_data();
		}
		
	}
        public function delete() {
            
		if (isset($_POST['tableName']) && isset($_POST['key']) && isset($_POST['value']))
		{
			
				$this->AdminModel->delRow($_POST['tableName'],$_POST['key'],$_POST['value']);
				$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success."
				));
				echo show_flash_data();
			}
			
        
		
		else
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Developer Error: Parameter Missing"
				));
			echo show_flash_data();
		}
        }
        
	######################save portfolio pics
	
	public function savePortfolio_gallery()
	{
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
		}
		else
			$photo = "";
		$data = $_POST;

		$data = $data + array('image' => $photo);
		  //echo "<pre>";
		 //print_r($data);

		if ($this->AdminModel->insertData('e_gallery',$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
	}
	public function updatePortfolio_gallery()
	{
		$id = $this->input->post('id');
		$data = $_POST;
		
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$this->deleteImage('e_slider','id',$id,'image','assets/cms_images/');
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
			$data = $data + array('image'=>$photo);
		}

		// echo "<pre>";
		// print_r($data);
		
		if ($this->AdminModel->updateRow('e_gallery','id',$id,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updatePortfolio_gallery)"
				));

	}
	#######################Services
	public function saveServices()
	{
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
		}
		else
			$photo = "";
		$data = $_POST;

		$data = $data + array('image' => $photo);
		  //echo "<pre>";
		 //print_r($data);

		if ($this->AdminModel->insertData('e_services2',$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
	}
	public function updateServices()
	{
		$id = $this->input->post('id');
		$data = $_POST;
		
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$this->deleteImage('e_services2','id',$id,'image','assets/cms_images/');
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
			$data = $data + array('image'=>$photo);
		}

		// echo "<pre>";
		// print_r($data);
		
		if ($this->AdminModel->updateRow('e_services2','id',$id,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}
	#####################Portfolio_categories
	public function savePortfolio_categories()
	{
		$data = $_POST;
		if ($this->AdminModel->insertData('e_category',$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
	}
	public function updatePortfolio_categories()
	{
		$data = $_POST;
		$id = $this->input->post('id');
		// echo "<pre>";
		// print_r($data);
		
		if ($this->AdminModel->updateRow('e_category','id',$id,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}
	######################saving projects
	public function saveProjects()
	{
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			 $photo =  $this->processMultipleIamges($_FILES);
			//$this->create_thumbnail($photo);
		}
		else
			$photo = "";
		$data = $_POST;

		$data = $data + array('image' => $photo);
		 //  echo "<pre>";
		 // print_r($data);

		if ($this->AdminModel->insertData('e_projects',$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
	}
	public function updateProjects()
	{
		$id = $this->input->post('id');
		$data = $_POST;
		if (isset($_FILES) && $_FILES['files']['error'][0] == 0)
		{	
			$this->deleteMultipleImage('e_projects','id',$id,'image','assets/cms_images/');
			$photo =  $this->processMultipleIamges($_FILES);
			$data = $data + array('image'=>$photo);
		}


		// echo "<pre>";
		// print_r($data);
		
		if ($this->AdminModel->updateRow('e_projects','id',$id,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}
	###################### saving menu
	public function saveMenu()
	{
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$photo =  $this->processImg($_FILES);
                       
			$this->create_thumbnail($photo);
		}
		else
			$photo = "";
		$data = $_POST;
		
		$parent_id = $this->input->post('parent_id');
		if (!$parent_id) {
			$level = 0;
		}
		elseif (is_numeric($parent_id) && $parent_id)
		{
			$level = 1;
		}
		else
		{
			$level = 2;
			$parent_id = substr($parent_id, 4);
			$data['parent_id'] = $parent_id;
		} 
		

		//echo $parent_id;
		// if ($parent_id != '0') $level = 1;
		// else $level = 0;

		$duties_arr = $this->input->post('position[]');
		if (!empty($duties_arr)) 
			$position = implode(',', $duties_arr);
		else
			$position = "";
		
		
		
		unset($data['position']);
		$data = $data + array('image' => $photo,
								'position' => $position,
								'level'=>$level);
		 // echo "<pre>";
		 // print_r($data);

		if ($this->AdminModel->insertData('e_menu',$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
	}

	public function updateMenu()
	{
		$menuid = $this->input->post('menuid');
		
		$parent_id = $this->input->post('parent_id');
		if ($parent_id != '0') $level = 1;
		else $level = 0;

		$duties_arr = $this->input->post('position[]');
		if (!empty($duties_arr)) 
			$position = implode(',', $duties_arr);
		else
			$position = "";
		
		
		$data = $_POST;
		$parent_id = $this->input->post('parent_id');
		if (!$parent_id) {
			$level = 0;
		}
		elseif (is_numeric($parent_id) && $parent_id)
		{
			$level = 1;
		}
		else
		{
			$level = 2;
			$parent_id = substr($parent_id, 4);
			$data['parent_id'] = $parent_id;
		} 
		
		unset($data['position']);
		$data = $data + array('position' => $position,'level'=>$level);

		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$this->deleteImage('e_menu','menuid',$menuid,'image','assets/cms_images/');
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
			$data = $data + array('image'=>$photo);
		}

		//echo "<pre>";
		//print_r($data);exit;
		
		if ($this->AdminModel->updateRow('e_menu','menuid',$menuid,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}

	////////////////////saving career application
	public function saveApplication()
	{
		echo "entered";
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			 $file =  $this->processFile($_FILES);
		}
		else
			$file = "";
		$data = $_POST;

		$data = $data + array('cv' => $file);
		   echo "<pre>";
		  print_r($data);

		if ($this->AdminModel->insertData('e_applications',$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
	}



        //////savepackage
        public function plote() {
            
             $data = $_POST;
             print_r($_POST);
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{     
			$photo =  $this->processMultipleIamges($_FILES,'files',TRUE);
			//$this->create_thumbnail($photo);
                        $data = $data + array('image' => $photo);
                        
		}
	
			
		
              
                
	 $tableName = $data['tableName'];
		unset($data['tableName']);
		
		//   echo "<pre>";
		//  print_r($data);
		// echo $tableName;
                
		if ($this->AdminModel->insertData($tableName,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
        }
        ######################update plot
        public function updateplot()
	{
		$id = $this->input->post('id');
		$data = $_POST;
                $tableName = $data['tableName'];
		unset($data['tableName']);
              
		if (isset($_FILES) && $_FILES['files']['error'][0] == 0)
		{	
			$this->deleteMultipleImage($tableName,'id',$id,'image','assets/cms_images/');
			$photo =  $this->processMultipleIamges($_FILES);
			$data = $data + array('image'=>$photo);
		}


		// echo "<pre>";
		
		
		if ($this->AdminModel->updateRow($tableName,'id',$id,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateCmsUser)"
				));

	}

	public function phase(){
	
	echo $id = $this->input->post('cat');
	getOption('e_phase','id','phase_name','',array('cat_id'=>$id));

	}
	//category
	public function saveCategory()
	{
            $data = $_POST;
           // print_r($data);
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{     
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
                        $data = $data + array('image' => $photo);
                        
		}
		// if (isset($_FILES) && !empty($_FILES['map']['name']))
		// {     
		// 	$map =  $this->processImg($_FILES,'map');
		// 	$this->create_thumbnail($map);
  //                       $data = $data + array('map' => $map);
                        
		// }
		//print_r($data);exit;
	
			
		
                
                
	 $tableName = $data['tableName'];
		unset($data['tableName']);
		
		//   echo "<pre>";
		//  print_r($data);
		// echo $tableName;
                
		if ($this->AdminModel->insertData($tableName,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
	}

	public function Simplecategory()
	{    //print_r($_POST);
            $data = $_POST;
		$index 		= $_POST['keyIndex'];
		 $tableName 	= $_POST['tableName'];
		$id = $this->input->post($index);
		
                print_r($data);
                 
		unset($data['keyIndex']);
		unset($data['tableName']);
                
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{
			$this->deleteImage($tableName,$index,$id,'image','assets/cms_images/');
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
			$data = $data + array('image'=>$photo);
		}
		if (isset($_FILES) && !empty($_FILES['map']['name']))
		{
			$this->deleteImage($tableName,$index,$id,'image','assets/cms_images/');
			$map =  $this->processImg($_FILES,'map');
			$this->create_thumbnail($map);
			$data = $data + array('map'=>$map);
		}

		// echo "<pre>";
               //  print_r($data);
		
		
		if ($this->AdminModel->updateRow($tableName,$index,$id,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed(@query updateSimple)"
				));

	}
	
	//Slider
	public function saveSliderData()
	{
            $data = $_POST;
           // print_r($data);
		if (isset($_FILES) && !empty($_FILES['files']['name']))
		{     
			$photo =  $this->processImg($_FILES);
			$this->create_thumbnail($photo);
                        $data = $data + array('image' => $photo);
                        
		}
		// if (isset($_FILES) && !empty($_FILES['map']['name']))
		// {     
		// 	$map =  $this->processImg($_FILES,'map');
		// 	$this->create_thumbnail($map);
  //                       $data = $data + array('map' => $map);
                        
		// }
		//print_r($data);exit;
	
			
		
                
                
	 $tableName = $data['tableName'];
		unset($data['tableName']);
		
		//   echo "<pre>";
		//  print_r($data);
		// echo $tableName;
                
		if ($this->AdminModel->insertData($tableName,$data))
		{
			$this->session->set_flashdata('alert_data', array(
				'type' => 'success', 
				'details' => "Action Success"
				));
		}
		else
			$this->session->set_flashdata('alert_data', array(
				'type' => 'danger', 
				'details' => "Action Failed"
				));
	}
	
       

	
}

