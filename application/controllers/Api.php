<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class Api extends CI_Controller   {

	public function __construct() {
        parent::__construct();
		$this->load->Model('AdminModel');
		  $this->load->library('image_lib');
          $this->load->library('upload');
		
        $this->load->helper(['jwt', 'authorization']);
        define( 'API_ACCESS_KEY', 'AIzaSyANXuf6YX0mW7gFMXpcy2G1VEcq_EduFWw');
		
		
    }

    private function verify_request()
    {
        // Get all the headers
        $headers = $this->input->request_headers();
       // print_r($headers);
        // Extract the token
        $token = $headers['Authorization'];
        
        // Use try-catch
        // JWT library throws exception if the token is not valid
        try {
            // Validate the token
            // Successfull validation will return the decoded user data else returns false
            $data = AUTHORIZATION::validateToken($token);
            return $data;
        } catch (Exception $e) {
            // Token is invalid
            $response = ['status' => $status, 'msg' => 'Unauthorized Access! Exception'];
            echo json_encode($response);
        }
        
    }
    
    public function getStatus($val, $message, $data, $token){
        if($val == 100){
            $appData = array(
	             'status' => $val,
	             'message' => 'Invalid email or password'
	             );
            
        }else if($val == 200){
            $appData = array(
	             'status' => $val,
	             'message' => $message,
	             'data' => $data,
	             'token' => $token
	             );
            
        }else if($val == 300){
            $appData = array(
	             'status' => $val,
	             'message' => 'Get Request Not Allowed'
	             );
            
        }else if($val == 400){
            $appData = array(
	             'status' => $val,
	             'message' => 'Incorrect Credentials'
	             );
            
        }else if($val == 500){
            $appData = array(
	             'status' => $val,
	             'message' => 'Unauthorized Access! '
	             );
        }else if($val == 501){
            $appData = array(
	             'status' => $val,
	             'message' => 'Unauthorized Referral Token! '
	             );
        }else if($val == 600){
            $appData = array(
	             'status' => $val,
	             'message' => 'No Data Found'
	             );
            
        }else if($val == 601){
            $appData = array(
	             'status' => $val,
	             'message' => 'No Chat Found'
	             );
            
        }else if($val == 602){
            $appData = array(
	             'status' => $val,
	             'message' => 'No Messages Found'
	             );
            
        }else if($val == 700){
            $appData = array(
	             'status' => $val,
	             'message' => 'Email Alreadt registered'
	             );
        }else if($val == 800){
            $appData = array(
	             'status' => $val,
	             'message' => 'Your Account has been temporary disabled'
	             );
        }else if($val == 900){
            $appData = array(
	             'status' => $val,
	             'message' => 'Unable to update data'
	             );
        }else if($val == 301){
            $appData = array(
	             'status' => $val,
	             'message' => 'Post request not allowed'
	             );
        }else if($val == 201){
            $appData = array(
	             'status' => $val,
	             'message' => 'You already received this reward'
	             );
        }else if($val == 202){
            $appData = array(
	             'status' => $val,
	             'message' => 'Your request is rejected, minimum withdraw is '.$data." Rupee"
	             );
        }else if($val == 203){
            $appData = array(
	             'status' => $val,
	             'message' => 'You Already have requested a transaction. You can not request another transaction untill previous get approved.',
	             'data' =>$data
	             );
        }else if($val == 204){
            $appData = array(
	             'status' => $val,
	             'message' => 'This refferal has been used 3 times. You can get reward with this refferal. Thanks. ',
	             'data' =>$data
	             );
        }else if($val == 205){
            $appData = array(
	             'status' => $val,
	             'message' => 'New User, haven not yet past his first 30 days in our application ',
	             'data' =>$data
	             );
        }else if($val == 206){
            $appData = array(
	             'status' => $val,
	             'message' => 'Transaction Request Canelled, please verify your number first.',
	             'data' =>$data
	             );
        }else if($val == 207){
            $appData = array(
	             'status' => $val,
	             'message' => 'Reward Limit Exceeded'
	             );
        }
        
        
	     echo json_encode($appData);
    }
    

	public function index()
	{
	    
		echo "This is the index of API, Concatinate API name as well. E.g. http://google.com/project_name/Api/function_name";
	}
	
	public function check_device()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     $imei = $this->input->post('imei');
	     
	     $res = $this->AdminModel->getRow('e_users',array('user_phone_iemi'=>$imei));
	     
	     if($res){
	         if($res['user_status'] == "Active"){
    	         $token = AUTHORIZATION::generateToken(['username' => $res['user_email'], 'user_id' => $res['user_id']]);
    	         
                
                $this->getStatus(200,'Logged in successfully', $res, $token);
	         }else{
	             $this->getStatus(800, '', '', '');
	         }
	         
	     }
	     else
	     {
	         $this->getStatus(100, '', '', '');
	     }
	     
	     
	 }else{
	     $this->getStatus(300, '', '', '');
	 }
	
	}
	
	public function registration()
	
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     $email   = $this->input->post('email');
	     $name   = $this->input->post('name');
	     $mobile   = $this->input->post('mobile');
	     $imei   = $this->input->post('imei');
	   
	    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $ref = "";
        for ($i = 0; $i < 10; $i++) {
            $ref .= $chars[mt_rand(0, strlen($chars)-1)];
        }
        
     	if (isset($_FILES) && !empty($_FILES['files']['name']))
		{     
			$photo =  $this->processImg($_FILES);
		}else{
		    $photo = "";
		}
		
		$data = array(
	         'user_email'=>$email,
	         'user_name'=>$name,
	         'user_phone'=>$mobile, 
	         'user_phone_iemi'=>$imei,
	         'user_refferal_code' => $ref,
	         'user_is_phone_verified' => 1);
	        
	     $res = $this->AdminModel->insertData('e_users', $data);
	     if($res){
	         
	         $res = $this->AdminModel->getRow('e_users',array('user_phone_iemi'=>$imei));
	         $token = AUTHORIZATION::generateToken(['username' => $res['user_email'], 'user_id' => $res['user_id']]);
	         
    	     $createChat = $this->AdminModel->getInsertWithLastId('e_chat', array('user_id'=>$res['user_id']));
    	     $createFirstMessage = $this->AdminModel->insertData('e_chat_messages', array('chat_id'=>$createChat,
    	     'sender_id'=>0, 'message_text'=>'Hello! How can I help you', 'message_status'=> 'Delivered'));
    	     
	         $this->getStatus(200, "Account Created Successfully",$res, $token);
	     }
	     else
	     {
	         $this->getStatus(400, '', '');
	     } 
	    
	     
	    
	 }else{
	     $this->getStatus(300, '', '');
	 }
	
	   //number + password [para]
	   //return row
	}
	
	public function update_user()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'POST')
	 {
	     $password = $this->input->post('password');
	     $email   = $this->input->post('email');
	     $name   = $this->input->post('name');
	     $address   = $this->input->post('address');
	     $mobile   = $this->input->post('mobile');
	     
	     $data = $this->verify_request();
    	     if($data == false){
    	         $appData = $this->getStatus(500, '', '','');
        	     }else{
            	     $res = $this->AdminModel->updateRow('e_users',array('id' => $data->{'user_id'}),'',array('email'=>$email,'name'=>$name,'password'=>$password,'address'=>$address,'number'=>$mobile));
            	    if($res){
            	         $this->getStatus(200, 'Data Updated Successfully', '', '');
            	    } 
            	     else{
            	         $appData = $this->getStatus(900, '', '', '');
            	     }
        	     }
	    
	 }else{
	    $appData = $this->getStatus(300, '', '', '');
	    }
	}
	
	
	public function get_user_status()
	{
	    
	    if ($this->input->server('REQUEST_METHOD') == 'GET')
    	 {
    	     $data = $this->verify_request();
    	     if($data == false){
    	         $this->getStatus(500, '', '');
    	         
        	     }else{
        	         
        	    $res['records'] = $this->AdminModel->getRows('e_user_status', array('user_id' => $data->{'user_id'}));
        	   
        	     if(sizeof($res['records']) > 0){
        	         $this->getStatus(200, $res['records'], '');
        	         
        	     }
        	     else
        	     {
        	          $this->getStatus(600, '', '');
        	         
        	     } 
        	     
        	 }
    	 }else{
    	     $this->getStatus(301, '', '');
    	     
    	 }
    	 
	    
	}


    public function get_wallet(){
        
        if ($this->input->server('REQUEST_METHOD') == 'GET')
    	 {
    	     $data = $this->verify_request();
    	     if($data == false){
    	         $this->getStatus(500,'', '', '');
    	         
        	     }else{
        	         $filter = $this->input->get('filter');
        	         $info = array();
        	         if($filter != ''){
        	             
        	         
            	         if($filter == 0){
            	             $res = $this->AdminModel->getJoinDataDESC('e_wallet', 'e_reward', '', 'wallet_reward_id', '', 'reward_id', '', array('wallet_user_id' => $data->{'user_id'}, 'wallet_reward_status' => 'Pending'), 'wallet_id');
            	         }else if($filter == 1){
            	             $res = $this->AdminModel->getJoinDataDESC('e_wallet', 'e_reward', '', 'wallet_reward_id', '', 'reward_id', '', array('wallet_user_id' => $data->{'user_id'}, 'wallet_reward_status' => 'Approved'), 'wallet_id');
            	         }else if($filter == 2){
            	             $res = $this->AdminModel->getJoinDataDESC('e_wallet', 'e_reward', '', 'wallet_reward_id', '', 'reward_id', '', array('wallet_user_id' => $data->{'user_id'}, 'wallet_reward_status' => 'Paid'), 'wallet_id');
            	         }else{
            	             $res = $this->AdminModel->getJoinDataDESC('e_wallet', 'e_reward', '', 'wallet_reward_id', '', 'reward_id', '', array('wallet_user_id' => $data->{'user_id'}), 'wallet_id');
            	         
            	         }
        	         }else{
        	             $res = $this->AdminModel->getJoinDataDESC('e_wallet', 'e_reward', '', 'wallet_reward_id', '', 'reward_id', '', array('wallet_user_id' => $data->{'user_id'}), 'wallet_id');        	         }
        	         
        	         
        	   
        	     if(sizeof($res) > 0){
        	         $this->getStatus(200,'success', $res, '');
        	         
        	     }
        	     else
        	     {
        	          $this->getStatus(600, '','', '');
        	         
        	     } 
        	     
        	 }
    	 }else{
    	     $this->getStatus(300,'', '', '');
    	     
    	 }
        
    }
    
    
    public function update_wallet(){
        
        if ($this->input->server('REQUEST_METHOD') == 'POST')
    	 {
    	     $data = $this->verify_request();
    	     if($data == false){
    	         $this->getStatus(500,'', '', '');
    	         
        	     }else{
        
                 $reward_id = $this->input->post('reward_id');
                 
                 if($reward_id == 0){
                     $referal = $this->input->post('referal');
                     
                     $isRefferalExsistInOurSystem = $this->AdminModel->getRow('e_users', array('user_refferal_code'=>$referal));
                     
                     if($isRefferalExsistInOurSystem && sizeof($isRefferalExsistInOurSystem) > 0){
                     
                         if($this->AdminModel->countRows('e_wallet', array('wallet_reward_id'=> $reward_id, 'wallet_user_id'=>$data->{'user_id'})) < 1){
                             
                             if($this->AdminModel->countRows('e_wallet', array('wallet_reward_id' => $reward_id ,'wallet_reffral_code'=>$referal)) < 3){
                         
                                 $rewardAmount = $this->AdminModel->getField('e_reward', array('reward_id'=>$reward_id), 'reward');
                                 
                                 
                                 //-------------------------------------------//
                                 $userWalletAmountQuery = $this->AdminModel->getLastRecord('e_wallet', array('wallet_user_id'=>$data->{'user_id'}, 'wallet_reward_status' => 'Pending'), 'wallet_id');
                        	     $userWalletAmount = $userWalletAmountQuery['wallet_total_amount'];
                        	     
                        	     $res = $this->AdminModel->insertData('e_wallet',array(
                	                 'wallet_user_id'=>$data->{'user_id'},
                	                 'wallet_reward_id'=>$reward_id,
                	                 'wallet_reffral_code' => $referal,
                	                 'wallet_total_amount' => $rewardAmount + $userWalletAmount));
                	                 
            	                 //-------------------------------------------//
            	                 
            	                 $referralUserWalletAmountQuery = $this->AdminModel->getLastRecord('e_wallet', array('wallet_user_id'=>$isRefferalExsistInOurSystem['user_id'], 'wallet_reward_status' => 'Pending'), 'wallet_id');
                    	         $referralUserWalletAmount = $referralUserWalletAmountQuery['wallet_total_amount'];
                    	     
                        	     $resreferral = $this->AdminModel->insertData('e_wallet',array(
                	                 'wallet_user_id'=>$data->{'user_id'},
                	                 'wallet_reward_id'=>$reward_id,
                	                 'wallet_reffral_code' => $referal,
                	                 'wallet_total_amount' => $rewardAmount + $referralUserWalletAmount));
            	                 
            	                 //-------------------------------------------//
            	                 
            	                 if($res && $resreferral){
            	                     $notificationData = array('notification_user_id'=>$isRefferalExsistInOurSystem['user_id'],
                                    	                 'notification_title'=>"Refferal Reward",
                                    	                 'notification_message' => 'Congratulation! You have earn a refferal award from '.$isRefferalExsistInOurSystem['user_name'],
                                    	                 'notification_type' => 'Referral');
            	                     $resNotification = $this->AdminModel->insertData('e_notification', $notificationData);
                                    	                 
                                     send_notification($isRefferalExsistInOurSystem['user_fcm_token'], $notificationData);
                                    	                 
            	                     
            	                     $this->getStatus(200,'success', $res, '');
            	                 }
            	                 else
            	                    $this->getStatus(900, '','', '');
                             }else{
                                 $this->getStatus('204', '', '', '');
                             }
            	                 
                         }else{
                             $this->getStatus('201', '', '', '');
                         }
                     }else{
                         $this->getStatus('501', '', '', '');
                     }
                     
                 }
                 else{
                     //print_r($reward_id);die();
                     if($this->AdminModel->countRows('e_wallet', array('wallet_reward_id'=> $reward_id, 'wallet_user_id'=>$data->{'user_id'})) < 1){
                     
                    //adding 1 to counter when user get reward
                        $current_counter_val = $this->AdminModel->getField('e_reward', array('reward_id'=>$reward_id), 'rewards_left');
                        //$max_reward_val = $this->AdminModel->getField('e_reward', array('reward_id'=>$reward_id), 'reward_divisions');
                        if($current_counter_val>0){
                            
                         $rewardAmount = $this->AdminModel->getField('e_reward', array('reward_id'=>$reward_id), 'reward');
                         
                         $userWalletAmountQuery = $this->AdminModel->getLastRecord('e_wallet', array('wallet_user_id'=>$data->{'user_id'}, 'wallet_reward_status' => 'Pending'), 'wallet_id');
                	     $userWalletAmount = $userWalletAmountQuery['wallet_total_amount'];
                	     
                	     $res = $this->AdminModel->insertData('e_wallet',array(
        	                 'wallet_user_id'=>$data->{'user_id'},
        	                 'wallet_reward_id'=>$reward_id,
        	                 'wallet_total_amount' => $rewardAmount + $userWalletAmount));
        	                 
        	                 if($res)
        	                 {
        	                     $current_counter_val=$current_counter_val-1;
        	                     $this->AdminModel->updateRow('e_reward','reward_id' , $reward_id,array('rewards_left' => $current_counter_val));
        	                     $this->getStatus(200,'success', $res, '');
        	                 }
        	                 else
        	                 $this->getStatus(900, '','', '');
                        }
                        else{
                            $this->getStatus(207, '','', '');
                        }
        	                 
                     }else{
                         $this->getStatus('201', '', '', '');
                     }
                     
                 }
	  
//        }else{
    	     
    	     
    	    }  
        }
    }
    
    
    public function get_profile(){
        if ($this->input->server('REQUEST_METHOD') == 'GET')
    	 {
    	     $data = $this->verify_request();
    	     if($data == false){
    	         $this->getStatus(500,'', '', '');
    	         
        	     }else{
        	         
        	         $info2 = array();
        	         
        	         $res = $this->AdminModel->getRows('e_category', array());
        	         
        	         $updatedInfo = array();
        	         
        	         foreach($res as $row){
        	             $info = array();
        	                 $pendingRewad1 = 0;
        	                  $approvedReward1 = 0;
        	                  $paidReward1 = 0;
        	                  $totalReward = 0;
        	                  
        	                  $info = array("pending" => 0
        	                            ,"approved"=>0
        	                            ,"paid"=>0
        	                            ,"total"=>0);
        	             
        	             $res2 = $this->AdminModel->getRows('e_reward', array('reward_category_id'=>$row['category_id']));
        	             foreach($res2 as $row2){
        	                  
        	                  
            	             $pendingRewad = (int)$this->AdminModel->countRows('e_wallet', array('wallet_user_id'=>$data->{'user_id'},'wallet_reward_id'=> $row2['reward_id'], 'wallet_reward_status' => 'Pending'));        
            	             $approvedReward = (int)$this->AdminModel->countRows('e_wallet', array('wallet_user_id'=>$data->{'user_id'},'wallet_reward_id'=> $row2['reward_id'], 'wallet_reward_status' => 'Approved'));
            	             $paidReward = (int)$this->AdminModel->countRows('e_wallet', array('wallet_user_id'=>$data->{'user_id'},'wallet_reward_id'=> $row2['reward_id'], 'wallet_reward_status' => 'Paid'));
        	             
        	             
        	                if($pendingRewad == 0 && $approvedReward == 0 && $paidReward == 0){
        	                     continue;
        	                }
        	                else
            	                {
        	             
        	                 
        	                if($pendingRewad > 0)
        	                    $pendingRewad1 = $pendingRewad1 + ($pendingRewad * $row2['reward']);
        	                
        	                 if($approvedReward > 0)
        	                    $approvedReward1 = $approvedReward1 + ($approvedReward * $row2['reward']);
        	                
        	                 if($paidReward > 0)
        	                    $paidReward1 = $paidReward1 + ($paidReward * $row2['reward']);
        	             
            	                }
        	                

        	             
        	             
        	             $info = array("pending" => $pendingRewad1
        	                            ,"approved"=>$approvedReward1
        	                            ,"paid"=>$paidReward1
        	                            ,"total"=>$pendingRewad1+$approvedReward1+$paidReward1);
        	             
        	             
        	             
        	             }
        	             
        	             
        	             
        	            
        	             
        	             array_push($updatedInfo, $info);
        	         }
        	         
        	   
        	     if(sizeof($updatedInfo) > 0){
        	         $this->getStatus(200,'success', $updatedInfo, '');
        	         
        	     }
        	     else
        	     {
        	          $this->getStatus(600, '','', '');
        	         
        	     } 
        	     
        	 }
    	 }else{
    	     $this->getStatus(300,'', '', '');
    	     
    	 }
    }
    
    
    public function request_redeem(){
        
        if ($this->input->server('REQUEST_METHOD') == 'GET')
    	 {
    	     $data = $this->verify_request();
    	     if($data == false){
    	         $this->getStatus(500,'', '', '');
    	         
        	     }else{
        	         $userData = $this->AdminModel->getRow('e_users', array('user_id'=> $data->{'user_id'}));
        	         
        	         if($userData['user_is_phone_verified'] == 1){
        	         
            	         $minmumWithdraw = $this->AdminModel->getField('e_settings', array(), 'minimum_withdraw');
            	         
            	         $userWalletAmountQuery = $this->AdminModel->getLastRecord('e_wallet', array('wallet_user_id'=>$data->{'user_id'}, 'wallet_reward_status' => 'Pending'), 'wallet_id');
                	     $userWalletAmount = $userWalletAmountQuery['wallet_total_amount'];
                	     
                	     if($userWalletAmount > $minmumWithdraw){
                	         
                	         $isExsits = $this->AdminModel->getRow('e_transaction', array('transaction_user_id'=>$data->{'user_id'}, 'transaction_status'=>'Approved'));
                	         
                	         if($isExsits < 1){
                	             $datau = array(
                	                        'transaction_user_id' => $data->{'user_id'},
                	                        'transaction_status' => 'Approved',
                	                        'transaction_wallet_amount' =>$userWalletAmount
                	                            );
                	             
    	                        $insertTransaction = $this->AdminModel->getInsertWithLastId('e_transaction',$datau);
    	                        if($insertTransaction > 0){
    	                            $res = $this->AdminModel->getRows('e_wallet',  array('wallet_user_id' => $data->{'user_id'}, 'wallet_reward_status' => 'Pending'));
    	                            //print_r($res);die();
    	                            foreach($res as $row){
    	                                $this->AdminModel->updateRowData('e_wallet', array('wallet_user_id'=> $data->{'user_id'},
    	                                                                                'wallet_id'=>$row['wallet_id']), 
    	                                                                         array('wallet_reward_status'=>'Approved', 
    	                                                                               'wallet_transaction_id'=>$insertTransaction
    	                                                                                                    ));
    	                            }
    	                            $resultdata = $this->AdminModel->getRow('e_transaction',  array('transaction_id' => $insertTransaction));
    	                            $this->getStatus(200,'success', $resultdata, '');
                	         
    	                            
    	                        }else{
    	                            
                	              $this->getStatus(900,'', '', '');
    	                            
    	                        }
                	             
                	         }else{
                	              $this->getStatus(203,'', $isExsits, '');
                	         }
                	         
                	         
                	     }else{
                	         $this->getStatus(202,'', $minmumWithdraw, '');
                	     }
            	         
            	         
            	         }else{
            	             
            	             $this->getStatus(206,'', '', '');
            	         }
        
        	     }
    	 }else{
    	     $this->getStatus(300,'', '', '');
    	     
    	 }
    }
    
    public function get_transactions(){
        
        
    if ($this->input->server('REQUEST_METHOD') == 'GET')
	 {
	     
	     $data = $this->verify_request();
    	     if($data == false){
    	         $this->getStatus(500,'', '', '');
    	         
        	     }else{
	     
            	    $res = $this->AdminModel->getRows('e_transaction', array('transaction_user_id' => $data->{'user_id'}));
            	   
            	     
            	     if($res){ 
            	            
            	          $this->getStatus(200, "Success" ,$res, '');
            	     }
            	     else
            	     {
            	          $this->getStatus(600, '','', '');
            	     }
	     
        	     }
	 }else{
	     $this->getStatus(301,'', '', '');
	 }
        
        
    }
	
// 	public function get_reward_categories()
// 	{
	    
// 	 if ($this->input->server('REQUEST_METHOD') == 'GET')
// 	 {
	     
// 	    $res = $this->AdminModel->getRows('e_category', array());
	   
// 	     if(sizeof($res) > 0){
// 	         $info = array();
// 	         foreach($res as $row){
	             
// 	             $rewardsCount = $this->AdminModel->countRows('e_reward', array('reward_category_id'=> $row['category_id']));        
            	             
	             
// 	             $data = array(
// 	                    'category_id' => $row['category_id'],
// 	                    'category_name' => $row['category_name'],
// 	                    'image' => $row['image'],
// 	                    'category_date' => $row['category_date'],
// 	                    'reward_count' => $rewardsCount
// 	                 );
	             
// 	             array_push($info, $data);
// 	         }
// 	          $this->getStatus(200, "Success" ,$info, '');
// 	     }
// 	     else
// 	     {
// 	          $this->getStatus(600, '','', '');
// 	     } 
// 	 }else{
// 	     $this->getStatus(301,'', '', '');
// 	 }
	
// 	}
	
	public function get_reward_categories()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'GET')
	 {
         $data = $this->verify_request();
         //$data=true;
         
         $userid=$data->{'user_id'};
         if($data == false){
             $this->getStatus(500,'', '', '');
    	            
         }else{ 
             $res = $this->AdminModel->getRows('e_category', array());
	    
             if(sizeof($res) > 0){
                 $info = array();
                 foreach($res as $row){
                     $reward_total = 0;
	                   $rescount = $this->AdminModel->countRows('e_reward', array('reward_category_id'=>$row['category_id']));
                     $res2 = $this->AdminModel->getRows('e_reward', array('reward_category_id'=>$row['category_id']));
        	             foreach($res2 as $row2){
        	                  
        	                //  print_r($row2['reward_id']. '  ');
            	             $reward_count = (int)$this->AdminModel->countRows('e_wallet', array('wallet_user_id'=>$userid,'wallet_reward_id'=> $row2['reward_id']));   
                           //  print_r($reward_count. '  ');
            	             
                             if($reward_count == 0 ){
        	                     continue;
        	                }
        	                else
            	                {
        	             
        	                 
        	                if($reward_count > 0)
        	                    $reward_total = $reward_total + $reward_count ;
        	                
        	             
            	                }
                         }
            	             
	             
                     $data = array(
                         'category_id' => $row['category_id'],
                         'category_name' => $row['category_name'],
                         'image' => $row['image'],
                         'category_date' => $row['category_date'],
                         'reward_count' => ($rescount-$reward_total)
                     );
	             
                     array_push($info, $data);
                 }
                 $this->getStatus(200, "Success" ,$info, '');
             }
             else
             {
                 $this->getStatus(600, '','', '');
             } 
         }
     }else{
	     $this->getStatus(301,'', '', '');
	 }
	
	}
	
// 	public function get_reward_sub_categories()
// 	{
	    
// 	 if ($this->input->server('REQUEST_METHOD') == 'GET')
// 	 {
	     
// 	    $catId = $this->input->get('cat_id');
	     
// 	    $res = $this->AdminModel->getRows('e_reward', array('reward_category_id' =>$catId));
	   
// 	     if(sizeof($res) > 0){
// 	          $this->getStatus(200, 'success',$res, '');
// 	     }
// 	     else
// 	     {
// 	          $this->getStatus(600, '', '', '');
// 	     } 
// 	 }else{
// 	     $this->getStatus(301, '','', '');
// 	 }
	
// 	}
	
	public function get_reward_sub_categories()
	{
	     
	    
	 if ($this->input->server('REQUEST_METHOD') == 'GET')
	 {
	     $data = $this->verify_request();
         //$data=true;
         
         $userid=$data->{'user_id'};
         if($data == false){
             $this->getStatus(500,'', '', '');
    	            
         }else{
             
	    $catId = $this->input->get('cat_id');
	       $data=array();
	    $res = $this->AdminModel->getRows('e_reward', array('reward_category_id' =>$catId));
         //print_r($userid);
	     if(sizeof($res) > 0){
	         $res2 = $this->AdminModel->getRows('e_wallet', array('wallet_user_id'=>$userid,'wallet_reward_id'=> $res[0]['reward_id']));
	       foreach($res as $row2){
        	                  
        	                //  print_r($row2['reward_id']. '  ');
            	             $reward_count = (int)$this->AdminModel->countRows('e_wallet', array('wallet_user_id'=>$userid,'wallet_reward_id'=> $row2['reward_id']));   
                             
            	             
                             if($reward_count == 0 ){
        	                     
                                 array_push($data, $row2);
                                 //print_r($data);
                             }
        	                
                         }
	          $this->getStatus(200, 'success',$data, '');
	     }
	     else
	     {
	          $this->getStatus(600, '', '', '');
	     } 
	 }
	 }else{
	     $this->getStatus(301, '','', '');
	 }
        
	}
	
	
	public function get_chat(){
	    
    	 if ($this->input->server('REQUEST_METHOD') == 'GET')
    	 {
    	     
    	     $data = $this->verify_request();
        	     if($data == false){
        	         
        	         $this->getStatus(500,'', '', '');
        	         
            	     }else{
            	         
            	         $res = $this->AdminModel->getRow('e_chat', array('user_id' => $data->{'user_id'}));
            	         
            	         if($res){
            	             $res1 = $this->AdminModel->getRowsDesc('e_chat_messages', array('chat_id' => $res['chat_id']), 'message_id');
            	             
            	             if($res1){
            	                 $this->getStatus(200, "Success" ,$res1, '');
            	             }else{
            	                  $this->getStatus(602, '','', '');
            	             }
            	         }else{
            	             //echo  $data->{'user_id'};
            	              $this->getStatus(601, '','', '');
            	         }
                	   
            	         
            	     }
    	    
    	}else{
    	     $this->getStatus(301,'', '', '');
    	 }
	}
	
	public function send_message (){
	    if ($this->input->server('REQUEST_METHOD') == 'POST')
    	 {
    	     
    	     $data = $this->verify_request();
        	     if($data == false){
        	         $this->getStatus(500,'', '', '');
        	         
            	     }else{
            	         $chatId = $this->input->post('chat_id');
            	         $text = $this->input->post('message');
            	         $insertMessage = $this->AdminModel->insertData('e_chat_messages', 
            	         array('chat_id'=>$chatId, 
            	         'sender_id'=> $data->{'user_id'}, 
            	         'message_text' => $text, 
            	         'message_status' => 'Delivered'
            	         ));
            	         
            	         if($insertMessage){
            	             $this->getStatus(200, "Message Sent Successfully" ,'', '');
            	         }else{
            	             $this->getStatus(602, '','', '');
            	         }
            	         
            	         
            	     }
    	 }else{
    	     $this->getStatus(300,'', '', '');
    	 }
	    
	    
	}
	
	public function get_notifications (){
	    
    	 if ($this->input->server('REQUEST_METHOD') == 'GET')
    	 {
    	     
    	     $data = $this->verify_request();
        	     if($data == false){
        	         $this->getStatus(500,'', '', '');
        	         
            	     }else{
            	         
            	         
        	             $res1 = $this->AdminModel->getRowsDesc('e_notification', array('notification_user_id' => $data->{'user_id'}), 'notification_id');
        	             
        	             if($res1){
        	                 $this->getStatus(200, "Success" ,$res1, '');
        	             }else{
        	                  $this->getStatus(602, '','', '');
        	             }
            	         
                	   
            	         
            	     }
    	    
    	}else{
    	     $this->getStatus(301,'', '', '');
    	 }
	}
	
	
	public function get_sliders (){
	    
    	 if ($this->input->server('REQUEST_METHOD') == 'GET')
    	 {
    	     
             $res1 = $this->AdminModel->getRowsDesc('e_slider', array(), 'slider_id');
             
             if($res1){
                 $this->getStatus(200, "Success" ,$res1, '');
             }else{
                  $this->getStatus(600, '','', '');
             }
    	    
    	}else{
    	     $this->getStatus(301,'', '', '');
    	 }
	}
	
	public function get_ssettings (){
	    
    	 if ($this->input->server('REQUEST_METHOD') == 'GET')
    	 {
    	     
             
             $res1 = $this->AdminModel->getRow('e_settings');
             if($res1){
                 $this->getStatus(200, "Success" ,$res1, '');
             }else{
                  $this->getStatus(600, '','', '');
             }
    	    
    	}else{
    	     $this->getStatus(301,'', '', '');
    	 }
	}
	
	
	public function update_notification (){
	    if ($this->input->server('REQUEST_METHOD') == 'GET')
    	 {
    	     $notificationId = $this->input->get('notification_id');
	        $res = $this->AdminModel->updateRow('e_notification',
	                                            array('notification_id' => $notificationId),
	                                            array('notification_status' => 'Seen'));
	                                            
            if($res){
                $this->getStatus(200, "Success" ,'', '');
            }else{
                $this->getStatus(602, '','', '');
            }
    	    
    	     
    	     
    	 }else{
    	     $this->getStatus(301,'', '', '');
    	 }
	    
	}
	
	public function update_message (){
	    if ($this->input->server('REQUEST_METHOD') == 'GET')
    	 {
    	     $notificationId = $this->input->get('message_id');
	        $res = $this->AdminModel->updateRow('e_chat_messages',
	                                            array('message_id' => $notificationId),
	                                            array('message_status' => 'Seen'));
	                                            
            if($res){
                $this->getStatus(200, "Success" ,'', '');
            }else{
                $this->getStatus(602, '','', '');
            }
    	    
    	     
    	     
    	 }else{
    	     $this->getStatus(301,'', '', '');
    	 }
	    
	}
	
	public function deduct_wallet(){
	    if ($this->input->server('REQUEST_METHOD') == 'POST')
    	 {
    	     
    	     $data = $this->verify_request();
        	     if($data == false){
        	         $this->getStatus(500,'', '', '');
        	         
            	     }else{
            	         
            	         $isUserOld = $this->AdminModel->get_data_between_30days('e_users',array('user_id' =>  $data->{'user_id'}), 'user_created_date');
            	         if(sizeof($isUserOld) < 1){
            	         
            	         
                	         $res = $this->AdminModel->get_data_between_30days('e_transaction',array('transaction_user_id' =>  $data->{'user_id'}), 'transaction_created_date');
                	         
                	         if(sizeof($res) > 0){
                	             $this->getStatus(200,'No need of deduction', '', '');
                	         }else{
                	             $userWalletAmountQuery = $this->AdminModel->getLastRecord('e_wallet', array('wallet_user_id'=>$data->{'user_id'}, 'wallet_reward_status' => 'Pending'), 'wallet_id');
                        	     $userWalletAmount = $userWalletAmountQuery['wallet_total_amount'];
                        	     
                        	     $userWalletAmount = $userWalletAmount - ($userWalletAmount*0.25);
                        	     
                        	     $res = $this->AdminModel->insertData('e_wallet',array(
                	                 'wallet_user_id'=>$data->{'user_id'},
                	                 'wallet_reward_id'=>-1,
                	                 'wallet_total_amount' => $userWalletAmount));
                	                 
                	                 if($res)
                	                     $this->getStatus(200,'success', $res, '');
                	                 else
                	                    $this->getStatus(900, '','', '');
                	         }
            	         }else{
            	             $this->getStatus(205, '','', '');
            	         }
            	         
            	         
            	     }
         }else{
    	     $this->getStatus(300,'', '', '');
    	 }
	    
	    
	}
	
	public function update_fcm(){
	    
	    if ($this->input->server('REQUEST_METHOD') == 'POST')
    	 {
    	     
    	     $data = $this->verify_request();
        	     if($data == false){
        	         $this->getStatus(500,'', '', '');
        	         
            	     }else{
            	         
            	         $fcm = $this->input->post("fcm_token");
            	         
            	         $res = $this->AdminModel->updateRow('e_users',
	                                            array('user_id' => $data->{'user_id'}),
	                                            array('user_fcm_token' => $fcm));
	                                            
	                        if($res){
                                $this->getStatus(200, "Success" ,'', '');
                            }else{
                                $this->getStatus(602, '','', '');
                            }
            	     }
            	     
    	 }else{
    	     $this->getStatus(300,'', '', '');
    	 }
	    
	}
	
	public function send_notification($token, $data){
	    
	    
        
        	$fields = array
        			(
        				'to'		=> $token,
        				'data'	=> $data
        			);
        	
        	
        	$headers = array
        			(
        				'Authorization: key=' . API_ACCESS_KEY,
        				'Content-Type: application/json'
        			);
        #Send Reponse To FireBase Server	
        		$ch = curl_init();
        		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        		curl_setopt( $ch,CURLOPT_POST, true );
        		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        		$result = curl_exec($ch );
        		curl_close( $ch );
        #Echo Result Of FireBase Server
        echo $result;
	    
	    
	}
	
	public function verify_number(){
	    
	    if ($this->input->server('REQUEST_METHOD') == 'POST')
    	 {
    	     
    	     $data = $this->verify_request();
    	     if($data == false){
    	         $this->getStatus(500,'', '', '');
    	         
        	     }else{
            	    $res = $this->AdminModel->updateRow('e_users',
        	                                            array('user_id' => $data->{'user_id'}),
        	                                            array('user_is_phone_verified' => 1));
        	                                            
                    if($res){
                        $this->getStatus(200, "Success" ,'', '');
                    }else{
                        $this->getStatus(602, '','', '');
                    }
    	    
        	     }
    	     
    	 }else{
    	     $this->getStatus(300,'', '', '');
    	 }
	    
	}
	
	public function test_notification(){
	   
    #API access key from Google API's Console
    
    $registrationIds = "fmugLs8UgBk:APA91bHHSPmtzXXueZhjXdVvL9nL4d-WcZ2-nuH_cIJ0f6ac7nqQorrnsuU2g-leDRPQHFT15IFhzZHtRDhph4ySj-46SvnZSjuIRF80ldXl_3BFw9DgUYOOSSFHhHu4HgxjCctZobTS";
    $notificationData = array('notification_user_id'=>1,
        	                 'notification_title'=>"Refferal Reward",
        	                 'notification_message' => 'Congratulation! You have earn a refferal award from test user',
        	                 'notification_type' => 'Referral');
            	                     
     
	$fields = array
			(
				'to'		=> $registrationIds,
				'data'	=> $notificationData
			);
	
	
	$headers = array
			(
				'Authorization: key=' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);
    #Send Reponse To FireBase Server	
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		curl_close( $ch );
    #Echo Result Of FireBase Server
    echo $result;   

    print_r($notificationData);

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
	
//Check user get rewards leass than 5

    public function checkUserRewards()
	{
	    
	 if ($this->input->server('REQUEST_METHOD') == 'GET')
	 {
	     
	     $data = $this->verify_request();
    	     if($data == false){
    	         $this->getStatus(500,'', '', '');
    	         
        	     }else{
        	         //print_r($data->{'user_id'});die();
        	         $daily_reward_limit = $this->AdminModel->getField('e_settings', array(), 'daily_reward_limit');
            	    $res = $this->AdminModel->get_data_by_current_date('e_wallet', array('wallet_user_id'=> $data->{'user_id'}));
        	            //print_r(sizeof($res));die();                               
                    if($res){
                        $data=array();
                        foreach($res as $row){
                            $result = $this->AdminModel->getRow('e_reward', array('reward_id'=> $row['wallet_reward_id']));
                            if($result['reward_category_id']=="1" || $result['reward_category_id']=="2" || $result['reward_category_id']=="4"){
                                array_push($data,$result);
                            }
                            else{
                                
                            }
                        }
                        if(sizeof($data)<$daily_reward_limit){
                            $this->getStatus(200, 'You can get reward' ,'', '');
                        }
                        else{
                            $this->getStatus(207, '' ,'', '');
                        }
                    }else{
                        $this->getStatus(200, 'No reward Found' ,'', '');
                    }
    	    
        	     }
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
