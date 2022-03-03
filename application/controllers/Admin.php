<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Admin extends CI_Controller {
 
	public function __construct() {

        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('function_helper');
		$this->load->Model('AdminModel');
		$this->load->library('pagination');
		$userData = $this->session->get_userdata();
		login_check();
    }

	public function index()
	{
		$settings = $this->AdminModel->getSetting();
		$userData = $this->session->get_userdata();
		//$feedback = $this->AdminModel->getTableData('e_feedback');
		$onlineusers = $this->AdminModel->getTableData('e_users');
		//$monthlyuser=$this->AdminModel->get_monthly();
		$monthlyuser=$this->AdminModel->get_data_between_30days('e_users',array('user_status'=>'Active'), 'user_created_date');
		$weeklyuser=$this->AdminModel->get_data_between_7days('e_users',array('user_status'=>'Active'));
		$newuser=$this->AdminModel->get_data_between_1days('e_users',array('user_status'=>'Active'));
// 		$monthlygroups=$this->AdminModel->get_data_between_30days('e_groups',array('group_status'=>'Active'));
// 		$weeklygroups=$this->AdminModel->get_data_between_7days('e_groups',array('group_status'=>'Active'));
// 		$newgroups=$this->AdminModel->get_data_between_1days('e_groups',array('group_status'=>'Active'));
		//$newgroups = $this->AdminModel->getRows('e_groups', array('date' =>'desc' ));
		$data =  array(
			'settings' => $settings,
			'onlineusers' => $onlineusers,
			'monthlyuser'=>$monthlyuser,
			'weeklyuser'=>$weeklyuser,
			'newuser'=>$newuser,
// 			'monthlygroups'=>$monthlygroups,
// 			'weeklygroups'=>$weeklygroups,
// 			'newgroups' => $newgroups,
//			'feedback' => $feedback,
			'userData' => $userData
		);
		
		$this->load->view('admin_pages/index',$data);
	}
	function mpdf_item()
    {
        
        $mpdf = new \Mpdf\Mpdf(['debug' => true]);
        //$mpdf->showImageErrors = true;
        $html = $this->load->view('mypdf',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
    }
    
    function dompdf_item()
    {
        // Include autoloader 
        require_once $_SERVER['DOCUMENT_ROOT'].'/rewardadmin/assets/dompdf/autoload.inc.php'; 
 
        // Reference the Dompdf namespace 
        //use Dompdf\Dompdf; 
 
        // Instantiate and use the dompdf class 
        $dompdf = new Dompdf\Dompdf();
        $html = $this->load->view('mypdf',[],true);

        $dompdf->loadHtml($html);
        //print_r($html);die();
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();
        $time = time();
    
        // Output the generated PDF to Browser
        $dompdf->stream("welcome-". $time);
    }
    
	function print_item()
    {
        $reward_id=36;
        $this->load->library('Pdf');
        $data=$this->getQRimage($reward_id);
        ob_start();
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->AddPage();
        //$html = $this->load->view('mypdf',[],true);
        $html='<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Aur Kuch PDF</title></head><body style="background: linear-gradient(45deg,rgba(72,44,191,1) 0%,rgba(106,198,240,1) 100%);"><div style="margin:10px; background: white; padding: 20px 0px; border-bottom-left-radius:50%; border-bottom-right-radius:50%;"><h1 style="color: rgba(72,44,191,1); text-align:center; font-size: 50px;">Aur Kuch</h1><h2 style=" text-align:center">Scan this QR Code to get the Reward</h2><div id="showqr" style="color:red; text-align:center"></div><input type="hidden" name="reward_qr" id="reward_qr" >'.$data['reward_qr'].'</div><div><table style="width:100%"><tbody><tr><td style="width:25%"><div id="appqr" style="color:red; text-align:center">'.$data['app_qr'].'</div></td><td style="width:40%"><h2 style="font-size: 15px;">Scan this QR Code to download</h2></td><td><h1 style="color: white;  font-size: 30px;">Aur Kuch</h1></td></tr></tbody></table></div></body></html>';
        //print_r($html);die();
        $pdf->writeHTML($html, true, false, true, false, '');
        ob_end_clean();
        $pdf->Output('example_006.pdf', 'I');
        
    }
    
    public function getQRimage($reward_id)
	{
		 	//$qr_image=rand().'.png';
		//print_r($_POST);
		
		 //$reward_id = $this->input->post('reward_id');
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
		        return $data;
			    //print_r(json_encode($data));
			else
			    return null;
			    //echo '';

			//echo('<img src="'.base_url().'assets/cms_images/'.$data['img_url'].'"/>');

		}
		else
		{
			echo 'No Text Entered';
		}	
	}
    function print_view()
    {
        
        $reward_id = $this->input->get('id');
			//$qrtext = 'saima';
		//print_r($reward_id);die();
		$data=array(
		    'reward_id' => $reward_id
		    );
// 		if(isset($reward_id))
// 		{

// 			//file path for store images
// 		    $data = $this->AdminModel->getRow('e_reward',array('reward_id' => $reward_id,'reward_category_id' => 1));
// 		    if($data)
// 			    $data=$data['reward_qr'];
// 			else
// 			    $data='QR';
// 		}
        $this->load->view('mypdf',$data);
    }
	
	public function support()
	{
	    $SupportChat=array();
        $settings = $this->AdminModel->getSetting();
		$SupportChat = $this->AdminModel->getSupportChat();
        //print_r($SupportChat);
		$userData = $this->session->get_userdata();
		$data =  array(
            'settings' => $settings,
			'supportChat' => $SupportChat,
			'userData' => $userData
		);
		
		$this->load->view('admin_pages/support_view',$data);
	}
    
    public function settings()
	{
		$settings = $this->AdminModel->getSetting();
		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'userData' => $userData
		);
		
		$this->load->view('admin_pages/setting_view',$data);
	}
    
	public function cms_user()
	{
		$settings = $this->AdminModel->getSetting();
		$cmsUser = $this->AdminModel->getTableData('e_admin');
		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'userData' => $userData,
			'cmsUser'  => $cmsUser
		);
	//	print_r($userData);
		$this->load->view('admin_pages/cms_user_view',$data);
	}
		public function apk()
	{
		// $settings = $this->AdminModel->getSetting();
		// $cmsUser = $this->AdminModel->getTableData('e_admin');
		// $userData = $this->session->get_userdata();
		// $data =  array(
		// 	'settings' => $settings,
		// 	'userData' => $userData,
		// 	'cmsUser'  => $cmsUser
		// );
		echo system('JAVA_HOME=' . escapeshellarg('C:\Program Files\Java\jdk1.8.0_40\bin')
   . ' PATH=' . escapeshellarg('C:\Program Files\Java\jdk1.8.0_40\bin'
   . PATH_SEPARATOR . getenv('PATH'))
   . ' C:\xampp\htdocs\project\FirstProject\gradlew.bat assembledebug');
		
		$this->load->view('admin_pages/apk');
	}

		public function Categories()
	{
		$settings = $this->AdminModel->getSetting();
		$records = $this->AdminModel->getTableData('e_category');
		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'userData' => $userData,
			'data'  => $records
		);
		
		$this->load->view('admin_pages/category_view',$data);
	}
	
	    public function Sliders()
	{
		$settings = $this->AdminModel->getSetting();
		$records = $this->AdminModel->getTableData('e_slider');
		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'userData' => $userData,
			'data'  => $records
		);
		
		$this->load->view('admin_pages/slider_view',$data);
	}
	
		public function sub_category()
	{
		$settings = $this->AdminModel->getSetting();
		$records = $this->AdminModel->getRows('e_category',array('cat_id'<='0'));
		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'userData' => $userData,
			'data'  => $records
		);
		
		$this->load->view('admin_pages/sub_category_view',$data);
	}
			public function wallet()
	{
		$settings = $this->AdminModel->getSetting();
		$records = $this->AdminModel->getTableData('e_wallet');
		if(!$records){
		    $records=array();
		}
		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'userData' => $userData,
			'data'  => $records
		);
		
		$this->load->view('admin_pages/wallet_view',$data);
	}
			public function transaction()
	{
		$settings = $this->AdminModel->getSetting();
		$records = $this->AdminModel->getTableData('e_transaction');
		if($records){
	    $reward_id=$records[0]['transaction_wallet_amount'];
		$wallet= $this->AdminModel->getRow('e_wallet',array('wallet_id'=>$reward_id));
		}
		else{
		    $records=array();
		    $wallet=array();
		}
		//print_r($wallet);
		$userData = $this->session->get_userdata();
		$data =  array(
			'wallet' => $wallet,
			'settings' => $settings,
			'userData' => $userData,
			'data'  => $records
		);
		
		$this->load->view('admin_pages/transaction_view',$data);
	}
				public function reward()
	{
		$settings = $this->AdminModel->getSetting();
		$records = $this->AdminModel->getTableData('e_reward');
		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'userData' => $userData,
			'data'  => $records
		);
		
		$this->load->view('admin_pages/reward_view',$data);
	}
	
		public function Detail_Page($id)
	{ 
		
		$settings = $this->AdminModel->getSetting();
		$detail= $this->AdminModel->getRow('e_users',array('user_id'=>$id));
		$user_id=$detail['user_id'];
		//echo $user_id;
		$wallet= $this->AdminModel->getTableData('e_wallet',array('wallet_user_id'=>$user_id));
		//print_r($wallet);
            $walletDetails['Pending']=0;
            $walletDetails['Paid']=0;
            $walletDetails['Approved']=0;
            $walletDetails['Total']=0;
            foreach($wallet as $row)
            {
                if($row['wallet_reward_status']=='Pending')
                {
                    $walletDetails['Pending']+=$row['wallet_total_amount'];
                    $walletDetails['Total']+=$row['wallet_total_amount'];
                }
                if($row['wallet_reward_status']=='Paid')
                {
                    $walletDetails['Paid']+=$row['wallet_total_amount'];
                    $walletDetails['Total']+=$row['wallet_total_amount'];
                }
                if($row['wallet_reward_status']=='Approved')
                {
                    $walletDetails['Approved']+=$row['wallet_total_amount'];
                    $walletDetails['Total']+=$row['wallet_total_amount'];
                }
            }
            
		//$group_member= $this->AdminModel->getRow('e_groups_members',array('id'=>$id));
	   // $member_post= $this->AdminModel->getRow('e_group_post',array('id'=>$id));
	     //$member_status= $this->AdminModel->getRow('e_user_status',array('id'=>$id));
	      // $member_likes= $this->AdminModel->getRow('e_post_likes',array('id'=>$id));
	      //  $member_comments= $this->AdminModel->getRow('e_group_comments',array('id'=>$id));



	       // $member_allpost= $this->AdminModel->getRows('e_group_post',array('user_id'=>$id));
	       //  $member_allcomment= $this->AdminModel->getRows('e_group_comments',array('user_id'=>$id));
	       //   $member_alllikes= $this->AdminModel->getRows('e_post_likes',array('user_id'=>$id));
	        //  $member_allstatus= $this->AdminModel->getRows('e_user_status',array('user_id'=>$id));

		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'detail'=>$detail,
			'wallet'=>$wallet,
			'walletDetails'=>$walletDetails,
			//'group_member'=>$group_member,
			// 'member_post'=>$member_post,
			// 'member_allpost'=>$member_allpost,
			// 'member_allcomment'=>$member_allcomment,
			// 'member_alllikes'=>$member_alllikes,
			//'member_allstatus'=>$member_allstatus,
			// 'member_likes'=>$member_likes,
			// 'member_comments'=>$member_comments,
			//'member_status'=>$member_status,
			'userData' => $userData
		);
		
		 $this->load->view('admin_pages/detail_view',$data);
	}
			public function  Reward_detail($id)
	{ 
		$settings = $this->AdminModel->getSetting();
		$detail= $this->AdminModel->getRow('e_reward',array('reward_id'=>$id));
		$wallet= $this->AdminModel->getRows('e_wallet',array('wallet_reward_id'=>$id));
		$chart_data= $this->AdminModel->get_count_between_7days('e_wallet',array('wallet_reward_id'=>$id));
		$wallet_count = $this->AdminModel->countRows('e_wallet',array('wallet_reward_id'=>$id));
		//   echo "<pre>";
		 //print_r($wallet);print_r($chart_data);die();
		if($wallet){
		$user_id=$wallet[0]['wallet_user_id'];
		$users= $this->AdminModel->getRows('e_users',array('user_id'=>$user_id));
		
		
		}
		else{
		    $users=array();
		    $wallet=array();
		}

		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'detail'=>$detail,
			'wallet'=>$wallet,
			'users'=>$users,
			'userData' => $userData,
			'chart_data' => $chart_data,
			'wallet_count' => $wallet_count
		);
		//print_r($data['wallet']);die();
		 $this->load->view('admin_pages/reward_detail_view',$data);
	}
	
		public function news()
	{
            $userData = $this->session->get_userdata();
		$settings = $this->AdminModel->getSetting();
		//$groups = $this->AdminModel->getTableData('e_groups');
		$comments = $this->AdminModel->getTableData('e_group_comments');
		$posts = $this->AdminModel->getTableData('e_group_post');
		$likes = $this->AdminModel->getTableData('e_post_likes');
		//$members = $this->AdminModel->getTableData('e_groups_members');
                
		
		$data =  array(
			'settings' => $settings,
			'userData' => $userData,
			'comments' => $comments,
			'posts' => $posts,
			'likes' => $likes
			//'members' => $members,
			//'data'  => $groups
		);
		
		$this->load->view('admin_pages/groups_view',$data);
	}

		public function user()
	{
		$settings = $this->AdminModel->getSetting();
		
		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'userData' => $userData
		);
		$config = array();
		$config["base_url"] = base_url()."admin/user";
		$total_row = $this->AdminModel->countRows('e_users');
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = $total_row;
		$config['attributes'] = array('class' => 'page-link');
		$config['cur_tag_open'] =  '<li class="page-item active"><a class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
		//$config['first_link'] = 'First';
		//$config['next_link'] = 'Next';
		//$config['prev_link'] = 'Previous';
		$config['num_links'] = 3;
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3))
		$page = ($this->uri->segment(3)) ;
		else
		$page = 0;
		$data["data"] = $this->AdminModel->getTableDataLimit('e_users',$config["per_page"],$config["per_page"]*$page);
		$data["links"]  = $this->pagination->create_links();
		//$data["links"] = explode(',',$str_links );

		$this->load->view('admin_pages/user_view',$data);
		
	}
	

        public function feedback(){
        	$settings = $this->AdminModel->getSetting();
		$cmsUser = $this->AdminModel->getTableData('e_feedback');
		$userData = $this->session->get_userdata();
		$data =  array(
			'settings' => $settings,
			'userData' => $userData,
			'data'  => $cmsUser
		);
		$this->load->view('admin_pages/feedback_view',$data);
        }
        
//reward deduction of inactive users        
        public function reward_deduction(){
            
		    $activeUsers = $this->AdminModel->getActiveUsers30days('e_wallet');
		    $allUsers = $this->AdminModel->get_users();
		    $userLists=array();
		    foreach($activeUsers as $row){
		        array_push($userLists,$row['user_id']);
		    }
		    $inActiveUsers=array();
		    foreach($allUsers as $row){
		        if(!in_array($row['user_id'], $userLists))
		        {
		            array_push($inActiveUsers,$row);
		        }
		            
		    }
		  
		  //$inActiveUsers=array_diff($allUsers,$activeUsers);
		  // print_r($inActiveUsers);die();
		   
		   foreach($inActiveUsers as $row){
		        
		        print_r($row);
		        
		            
		    }
		
        }

public function get_view()
{
	extract($_POST);
	if($id>0){
	
		if($viewType=='post')
	{
		$con= array('id' => $id,);
	}
		if($viewType=='comment')
	{
		$con= array('group_post_id' => $id,);
	}
		if($viewType=='likes')
	{
		$con= array('comment_id' => $id,);
	}
		if($viewType=='allpost')
	{
		$con= array('id' => $id,);
	}
	
}else
{
	$con=array();
}


		$data2 = $this->AdminModel->getRowstable($tableName,$con);
            //  print_r($data2);exit; 
		if ($data2)
		{
			$data = array(
						'viewType'	=> $viewType,
						'data'		=> $data2
					);
			$this->load->view('admin_pages/my_tables',$data);
		}
}
}
