<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('__send_curl_request'))
{
	
	if(!function_exists('_get_SESSION_VAL'))
	{
	  function _get_SESSION_VAL($KEY)
	  {
	    if(isset($_SESSION[$KEY]))
	      return $_SESSION[$KEY];
	    else
	      return false;
	  }
	}

	function get_user_credentials()
	{
		$CI = & get_instance();
		$apiuser = $CI->session->username;
		$apipass = $CI->session->password;
		$credentials_arr = array();
		$credentials_arr['username'] = $apiuser;
		$credentials_arr['password'] = $apipass;
		return $credentials_arr;
	}
	
	
	function login_check()
	{
		$CI = & get_instance();
		if (!isset($_SESSION))
		session_start();
		
		if (  $CI->session->logged_in == 'yes' && $CI->session->username != '' && $CI->session->password != '')
		{
			// logged in...
			return true;
		}
		else
		{
			// unauthorized...
			if($CI->router->class != 'adminlogin')
			{
				$_SESSION = array();
				@session_destroy();
				redirect('adminlogin');
				exit;
			}
		}
	}
	
	function show_time_difference_from_timestamp($timestamp)
	{
		//Function by Ahmed ...
		//returns the verbal time that is past by until the timestamp , 
		
		//ammount of seconds ... 
		//60  3600  86400 2592000 31536000
		//min hour  day   month   year
		
		$secs = time()-strtotime($timestamp);
		
		if($secs<=20)
			$time_msg = 'just now';
		else if($secs < 60)
			$time_msg  = 'about '.floor($secs).' seconds ago';
		else if($secs < 3600)
			$time_msg  = 'about '.floor($secs/60).' mins ago';							
		else if($secs < 86400)
			$time_msg  = 'over '.floor($secs/(60*60)).' hours ago';
		else if($secs < 2592000)
			$time_msg  = 'over '.floor($secs/(60*60*24)).' days ago';
		else if($secs < 31104000)
			$time_msg  = 'over'.floor($secs/(60*60*24*30)).' months ago';
		else if($secs < 31536000)
			$time_msg  = 'about 1 year ago'; // just to handle the discrepency of 365 days AND 30*12 days issue
		else 
			$time_msg  = 'over '.floor($secs/(60*60*24*365)).' years ago';
				
		return $time_msg;
	}
	
	
	function show_flash_data()
	{
		$CI = & get_instance();
		$resp='';
		 if($CI->session->flashdata('alert_data'))
		 {
				$alert = $CI->session->flashdata('alert_data');
				$resp .= '<div class="alert alert-'.$alert['type'].'">';
				$resp .= ' <a class="close" data-dismiss="alert" aria-label="close">&times;</a>';
				$resp .= $alert['details'];
				$resp .= '</div>';
				
         }  
		 return $resp;
	}
	function in_hours($minutes) {
	    //floor($minutes / 60).':'.($minutes -   floor($minutes / 60) * 60);
	    if(!isset($minutes) || empty($minutes) || $minutes == null)
	    {
	    	return '00:00';
	    }
	    $h = ($minutes / 60);
	    $h = floor($h);
	    $m = $minutes -   floor($minutes / 60) *60;
	    if($h<10) {
	        $h = '0'.$h;
	    }
	    $m = floor($m);
	    if($m < 10) {
	        $m = '0'.$m;
	    }
	    $time = $h.':'.$m;
	    return $time;
	}

	function send_curl_by_post($req_url, $post_data)
	{
		$ch = curl_init($req_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

		$returnedData = curl_exec($ch);

		if ($returnedData === false)
		{
			$CI->errors['curl'] = 'curl error #' . curl_errno($ch) . ': ' . curl_error($ch);
			$log_msg = $CI->errors['curl'];
			//$CI->_defined_issues($log_msg, $file . LINE, 2);
			return FALSE;
			die();
		}

		curl_close($ch);
		return $returnedData;

	}
	//cms helper function
	function getParent($level,$parent_id)
	{
		if ($level == 0) {
			return "No Parent";
		}
		else {
			$CI =& get_instance();
			$CI->load->model('AdminModel');
			$record = $CI->AdminModel->getField('e_menu','menuid',$parent_id,'name');
			return $record;
		}
	}
	function getParentOption($select_id)
	{
		$CI =& get_instance();
		$CI->load->model('AdminModel');
		$records = $CI->AdminModel->getRows('e_menu','level','0');
		$selected = "";
		foreach ($records as $row) 
		{
			if($row['menuid'] == $select_id) $selected= "selected";
			else $selected ="";
			echo "<option value=".$row['menuid']." ".$selected." >".$row['name']."</option>";
			
				$records2 = $CI->AdminModel->getRows('e_menu','parent_id',$row['menuid']);
				if ($records2)
				{
					foreach ($records2 as $row2)
					{
						if($row2['menuid'] == $select_id) $selected= "selected";
						else $selected ="";
						echo "<option value='sub-".$row2['menuid']."' ".$selected.">-- &nbsp;".$row2['name']."</option>";
					}
				}
				
			
		}
	}
	function getPorfolioCategoriesOption($select = '')
	{
		$CI =& get_instance();
		$CI->load->model('AdminModel');
		$records2 = $CI->AdminModel->getTableData('e_category');
		if ($records2)
		{
			foreach ($records2 as $row2)
			{
				if($row2['category_id'] == $select) $selected= "selected";
				else $selected ="";
				echo "<option value='".$row2['category_id']."' ".$selected.">".$row2['category_name']."</option>";
			}
		}

	}
	
	function getgetPorfolioCategoryName($id)
	{
		$CI =& get_instance();
		$CI->load->model('AdminModel');
        return  $record = $CI->AdminModel->getField('e_category','id',$id,'name');
	}


	//////////////////generic function for get option
	function getOption($tableName,$value='id',$showValue='name',$select="",$cond = array())
	{
		$CI =& get_instance();
		$CI->load->model('AdminModel');
		$records2 = $CI->AdminModel->getTableData($tableName,$cond);

		if ($records2)
		{
			foreach ($records2 as $row2)
			{
				if($row2[$value] == $select) $selected= "selected";
				else $selected ="";
				echo "<option value='".$row2[$value]."' ".$selected.">".$row2[$showValue]."</option>";
			}
		}
	}
	///////////////generic function for get field
function getField($tableName,$cond = array(),$field)
	{
		$CI =& get_instance();
		$CI->load->model('AdminModel');
		return $records2 = $CI->AdminModel->getField($tableName,$cond,$field);
	}
	// function countRows($tableName)
	// {
	// 	$CI =& get_instance();
	// 	$CI->load->model('AdminModel');
	// 	return $records2 = $CI->AdminModel->countRows($tableName);
	// }
	function countRows($tableName,$cond = array())
	{
		$CI =& get_instance();
		$CI->load->model('AdminModel');
		return $records2 = $CI->AdminModel->countRows($tableName,$cond);
	}
	function getRows($tableName,$row_key,$row_value){
		
		$CI =& get_instance();
		$CI->load->model('AdminModel');
		return $records2 = $CI->AdminModel->getRows($tableName,$row_key,$row_value);

	}

   function getRow($tableName,$row_key,$row_value)
   {
     
		
		$CI =& get_instance();
		$CI->load->model('AdminModel');
		 $records2 = $CI->AdminModel->getRow($tableName,$row_key,$row_value);
       return $records2;
		// print_r($records2);

	
   }
   function getConditionData($tableName,$cond){
         $CI =& get_instance();
		$CI->load->model('siteModel');
		 $records2 = $CI->siteModel->getConditionData($tableName,$cond);
          return $records2;
   }
  function getConditionData_array($tableName,$cond)
   {
   	$CI =& get_instance();
		$CI->load->model('siteModel');
		 $records2 = $CI->siteModel->getConditionData_array($tableName,$cond);
		 return $records2;
   }

	//site helper

	 function getNavMenu($controler,$function,$pageSlug = '')
	{  		$CI =& get_instance();
		$CI->load->model('siteModel');
		$records = $CI->siteModel->getMenuRows('e_menu','level','0');
		foreach ($records as $row)
		{
			extract($row);
			if (in_array('navigation',explode(',', $position)))
			{   
                     
				if($row['slug'] == $controler && $row['slug'] != "") $selected ='active';
				else $selected = "";
				
				$records2 = $CI->siteModel->getRows('e_packeg','parent_id',$menuid);
                               
				if ($records2)
				{
                                   echo '  <li class="dropdown yamm-fw" data-wow-delay="0.4s">
                            <a  class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200" href="'.base_url().$slug.'"><b>'.$name.'</b> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">';
                                   foreach ($records2 as $value) {
                                   
                                       
                                       echo '
                                            <div class="col-sm-3">
                                                <h5>'.$value['name'].'</h5>
                                                <ul>';
                                   $records3 = $CI->siteModel->getRows('e_category','parent_id',$value['id']);
                                  if($records3){
                                   foreach ($records3 as $p) {
                                       echo '<li>
                                                      <a href="'.base_url().$p['slug'].'">'.$p['name'].'</a>
                                                    </li>';
                                   }
                                  }
                                   echo'
                                                    
                                                  
                                                </ul>
                                            </div>
                                            ';
                                   }
                                   
                                   echo '
                                        </div>
                                    </div>
                                    <!-- /.yamm-content -->
                                </li>
                            </ul>
                        </li>';
                                   
				} else {
                                    echo '<li class="wow fadeInDown" data-wow-delay="0.2s">
						<a class="'.$selected.'" href="'.base_url().$slug.'"><b>'.$name.'</a></b>'; echo   '</li>';
          
                                }
				
			}
		}
	}
	function getFooterLinks()
	{
		$CI =& get_instance();
		$CI->load->model('siteModel');
		$records = $CI->siteModel->getMenuRows('e_menu','level','0');
		foreach ($records as $row)
		{
                    
			extract($row);
			if (in_array('footer',explode(',', $position)))
			{
				echo "<li><a href='$row[slug]'><span>$row[name]</span></a></li>
						<li>/</li>";
			}
		}
		echo "<li><a href='".base_url().'home'."'><span>Home</span></a></li>";
	}
        function category(){
            $CI=&get_instance();
            $CI->load->model('siteModel');
            $cat=$CI->siteModel->getConditionData_array('e_category',"parent_id >'0' ORDER BY id DESC Limit 3");
            foreach ($cat as $value) {
               
                echo '<div class="item col-sm-4">

                                    <div class="client-text"> 
                                    <h5 class="center">'.$value['name'].'</h5>
                                    <div class="item-thumb">
                                    <a href="'.$value['slug'].'" ><img style=" width:1000px;height:100px" src="'. base_url().'assets/cms_images/'.$value['image'].'" alt="GTA V"></a>
                                </div>
                                       ';
                                //  $data= $cat=$CI->siteModel->getRows('e_item','cat_id',$value['id']);
                                 
                                        
                echo'                        <p>'.substr($value['details'], 0,200).'</p>
                                        <a style="background-color:#0074D9;color:white" href="'.$value['slug'].'" class="btn btn-default">More</a>
                                    </div>
                                    
                                </div>';
            }
        }
        function fo(){
   	  $CI =& get_instance();
		$CI->load->model('siteModel');
	 $records2 =$CI->siteModel->getConditionData_array('e_category',"parent_id >'0' ORDER BY id DESC Limit 7");
	 return $records2;


   }
   function adds(){

 $CI =& get_instance();
		$CI->load->model('siteModel');

   	$date= date('Y-m-d');
		$add_top = $CI->siteModel->getConditionData('e_adds','"'.$date.'"between from_date and to_date and diraction="top" group by diraction');

		$add_left = $CI->siteModel->getConditionData('e_adds','"'.$date.'"between from_date and to_date and diraction="bottom_left" group by diraction');
		$add_right = $CI->siteModel->getConditionData('e_adds','"'.$date.'"between from_date and to_date and diraction="bottom_right" group by diraction');

 if(!empty($add_top)){
		echo ' <div class=" container-fluid">
          <div class="col-sm-10 col-sm-offset-1"><div class="thumbnail card box_shadow">
      <div class="top_heading text-center" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;">'.$add_top['name'].'</div>
      <a href="'.$add_top['link'].'" target="_blank"><img src="'.base_url().'assets/cms_images/'.$add_top['image'].'" style="width: 100%"></a>    
    </div></div>
    
        </div>
        ';
    }
    echo '<div class="row" >
    <div class="col-sm-10 col-sm-offset-1" >
    '
    ;
    
    if(!empty($add_left)){
    echo'

       
          <div class="col-sm-6">
            <div class="thumbnail card box_shadow">
      <div class="top_heading text-center" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;">'.$add_left['name'].'</div>
      <a href="'.$add_left['link'].'" target="_blank"><img src="'.base_url().'assets/cms_images/'.$add_left['image'].'" style="width: 100%"></a>    
    </div></div>
          ';}
      if(!empty($add_right)){
          echo '
          <div class="col-sm-6">
            <div class="thumbnail card box_shadow">
      <div class="top_heading text-center" style="background-color: #0074D9;color: white;font-weight: bold;padding: 9px;text-align: center;">'. $add_right['name'].'</div>
      <a href="'.$add_right['link'].'" target="_blank"><img src="'. base_url().'assets/cms_images/'.$add_right['image'].'" style="width: 100%"></a>    
    </div></div>
          </div>

';
}
echo "</div></div>";


   }
   function Map($id){
            $CI=&get_instance();
            $CI->load->model('siteModel');
            $cat=$CI->siteModel->getConditionData_array('e_category',"parent_id =".$id."");
            foreach ($cat as $value) {
               
                echo '<div class="item col-sm-4 zoom">

                                    <div class="client-text"> 
                                    <h5 class="center">'.$value['name'].'</h5>
                                    <div class="item-thumb">
                                    <a target="blank" href="'. base_url().'assets/cms_images/'.$value['map'].'" ><img class="" style=" width:100%;height:100%" src="'. base_url().'assets/cms_images/'.$value['map'].'" alt="GTA V"></a>
                                </div>
                                       ';
                                //  $data= $cat=$CI->siteModel->getRows('e_item','cat_id',$value['id']);
                                 
                                        
                echo'                       
                                    </div>
                                    
                                </div>';
            }
        }
	
}
