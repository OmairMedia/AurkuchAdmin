<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{

//////////////////generic function area-- dont add project modal function//////fk//////
public function getRow($tableName,$cond = array())
	{
   // print_r($cond);
		if($cond) $this->db->where($cond);
		$query = $this->db->get($tableName);
		return $query->row_array();
	}
	
	public function getLastRecord($tableName,$cond = array(), $key)
	{
		if($cond) $this->db->where($cond);
		$this->db->order_by($key, "desc");
		$query = $this->db->get($tableName);
		return $query->row_array();
	}
	public function getRows($tableName,$cond = array())
	{
		$this->db->where($cond);
		$query = $this->db->get($tableName);
		return $query->result_array();
	}
	
	public function getRowsDesc($tableName,$cond = array(), $key)
	{
		$this->db->where($cond);
		$this->db->order_by($key, "desc");
		
		$query = $this->db->get($tableName);
		return $query->result_array();
	}
	
// 	public function get_monthly() {
//     $this->db->select('*');
//     $this->db->from('e_users');
//             $this->db->where('date BETWEEN NOW() - INTERVAL 30 DAY AND NOW()');
//     $query = $this->db->get();
//     if ($query->num_rows() > 0) {
//         return $query->result();
//     } else {
//         return FALSE;
//     }
// }
public function get_data_between_30days($table, $condition, $key)
   { 

    $this->db->select('*');
    $this->db->where($key.' >= now() - INTERVAL 30 DAY');
    $this->db->where($condition);
    $result = $this->db->get($table);


    if($result)
      {
     // echo	$this->db->last_query();
        return $result->result_array();
      }
   }
   public function get_data_between_7days($table, $condition)
   { 

   $this->db->select('*');
$this->db->where('user_created_date BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE()');
$this->db->where($condition);
$result = $this->db->get($table);


    if($result)
      {
     // echo	$this->db->last_query();
        return $result->result_array();
      }
   }
      public function get_data_between_7days2($table, $condition)
   { 

   $this->db->select('*');
//$this->db->where('wallet_reward_date BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE()');
$this->db->where('wallet_reward_date > CURDATE() - INTERVAL 7 DAY AND CURDATE()');
$this->db->where($condition);
$result = $this->db->get($table);


    if($result)
      {
     // echo	$this->db->last_query();
        return $result->result_array();
      }
   }
   
   public function get_count_between_7days($table,$cond=array())
   {
        $data=array();
        $this->db->where($cond);
        $this->db->where('wallet_reward_date < CURDATE() AND wallet_reward_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY)');
	    $data['1']=$this->db->count_all_results($table);
        $this->db->where($cond);
	    $this->db->where('wallet_reward_date < DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND wallet_reward_date > DATE_SUB(CURDATE(), INTERVAL 2 DAY)');
	    $data['2']=$this->db->count_all_results($table);
	    $this->db->where($cond);
	    $this->db->where('wallet_reward_date < DATE_SUB(CURDATE(), INTERVAL 2 DAY) AND wallet_reward_date > DATE_SUB(CURDATE(), INTERVAL 3 DAY)');
	    $data['3']=$this->db->count_all_results($table);
	    $this->db->where($cond);
	    $this->db->where('wallet_reward_date < DATE_SUB(CURDATE(), INTERVAL 3 DAY) AND wallet_reward_date > DATE_SUB(CURDATE(), INTERVAL 4 DAY)');
	    $data['4']=$this->db->count_all_results($table);
	    $this->db->where($cond);
	    $this->db->where('wallet_reward_date < DATE_SUB(CURDATE(), INTERVAL 4 DAY) AND wallet_reward_date > DATE_SUB(CURDATE(), INTERVAL 5 DAY)');
	    $data['5']=$this->db->count_all_results($table);
	    $this->db->where($cond);
	    $this->db->where('wallet_reward_date < DATE_SUB(CURDATE(), INTERVAL 5 DAY) AND wallet_reward_date > DATE_SUB(CURDATE(), INTERVAL 6 DAY)');
	    $data['6']=$this->db->count_all_results($table);
	    $this->db->where($cond);
	    $this->db->where('wallet_reward_date < DATE_SUB(CURDATE(), INTERVAL 6 DAY) AND wallet_reward_date > DATE_SUB(CURDATE(), INTERVAL 7 DAY)');
	    $data['7']=$this->db->count_all_results($table);
	    
	    return $data;
   }
   
   public function get_data_by_current_date($table, $condition)
   { 

    $this->db->select('*');
    $this->db->where('wallet_reward_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY)');
    $this->db->where($condition);
    $result = $this->db->get($table);


    if($result)
      {
     // echo	$this->db->last_query();
        return $result->result_array();
      }
   }
   
      public function get_data_between_1days($table, $condition)
   { 

   $this->db->select('*');
$this->db->where('user_created_date BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE()');
$this->db->where($condition);
$result = $this->db->get($table);


    if($result)
      {
     // echo	$this->db->last_query();
        return $result->result_array();
      }
   }
	public function getRowstable($tableName,$con=array())
	{
		$this->db->where($con);
		$query = $this->db->get($tableName);
		
		return $query->result_array();
	}
	public function delRow($tableName,$row_key,$row_value)
	{
		$this->db->where($row_key,$row_value);
		$this->db->delete($tableName);
	}
	public function updateRow($tableName,$index,$id,$data)
	{
        //print_r($cond);
		$this->db->where($index,$id);
		if($this->db->update($tableName,$data))
			return true;
	}
	
	public function updateRowData($tableName,$cond=array(),$data)
	{
        //print_r($cond);
		$this->db->where($cond);
		if($this->db->update($tableName,$data))
			return true;
	}
public function getField($tableName,$cond = array(),$field)
	{
		$this->db->where($cond);
		$query = $this->db->get($tableName);
		$record = $query->row_array();
		if (!empty($record)) {
			return $record[$field];
		}
		else
			return 'Not found';
		
	}
	public function countRows($table,$cond = array())
	{
		 $this->db->where($cond);
		return $this->db->count_all_results($table);
	}
	public function insertData($tableName,$data)
	{
		if($this->db->insert($tableName,$data))
		return true;
	}
	public function getTableData($tableName,$cond = array())
	{ 
                $this->db->where($cond);
		$query = $this->db->get($tableName);
		
		 return $query->result_array();
		
	}
	public function getTableDataLimit($tableName,$limit,$start_index)
	{	$this->db->limit($limit,$start_index);
		$query = $this->db->get($tableName);
		 return $query->result_array();
	}
	// public function countRows($table)
	// {
	// 	return $this->db->count_all_results($table);
	// }
//////////////////genric funcion area -------- ends///////////////////////////////////
///////////////// cms-related function/////////////////////////////////////////////////
public function validateLogin($username,$password)
{
	$this->db->where('username',$username);
	$this->db->where('password',$password);
	$query = $this->db->get('e_admin');
	return $query->row_array();
}
public function getSetting()
{
	$query = $this->db->get('e_settings');
	return $query->row_array();
}
    
public function getSupportChat()
{
    
     $sql = "SELECT *,"
            ." (SELECT CONCAT(user_name) FROM e_users WHERE user_id=e_chat.user_id) as user_name,"
            ." (SELECT CONCAT(user_phone) FROM e_users WHERE user_id=e_chat.user_id) as user_phone  FROM e_chat WHERE 1 ";
    //return $this->db->query($sql);  
     $query = $this->db->query($sql);
	//$query = $this->db->get('e_settings');
	$row_cnt = $query->num_rows;
	//print_r($row_cnt);
	if($query->result()){
	    foreach($query->result() as $row):
        $data[] = $row;
    endforeach;
   // print_r($query->row_array());
	//return $query->row_array();
	    
	}
	else{
        $data[]='';
	}
	
    return $data;
}
	
function getJoinDataDESC($fromTable, $toTable, $toTable2, $key1, $key11, $key2, $key3, $cond = array())
{
    $this->db->select('*')
     ->from($fromTable)
     ->join($toTable, $fromTable.'.'.$key1.' = '.$toTable.'.'.$key2, 'LEFT');
     
     if($toTable2 != '')
     $this->db->join($toTable2, $fromTable.'.'.$key11.' = '.$toTable2.'.'.$key3, 'LEFT');
     
     //echo $this->db->query;
     
     if($cond != '')
        $this->db->where($cond);
        
        
		$this->db->order_by($fromTable.'.wallet_reward_date', "desc");
        $query=$this->db->get();
          if($query->num_rows() > 0)
          {
          return $query->result();
          }
     return array();
    
}
	function getInsertWithLastId($table, $post_data){
       $this->db->insert($table, $post_data);
       $insert_id = $this->db->insert_id();
    
       return  $insert_id;
    }
    
    public function getMessages($id)
	{
	    
        $this->db->where('chat_id',$id);
        //$this->db->order_by('message_id', 'DESC');
		$query = $this->db->get('e_chat_messages');
		foreach($query->result() as $row):
        $data[] = $row;
        endforeach;
        if($query->result() == null){
            $data[]=null;
        }
        return $data;
	}
	
	function get_items()
    {
        //$this->db->order_by("it_created", "asc");
        $result = $this->db->get("e_chat_messages");
        return $result->result_array();
    }

    	public function getActiveUsers30days($tableName)
	{
		$sql="SELECT DISTINCT wallet_user_id as user_id FROM $tableName WHERE wallet_reward_date > CURDATE() - INTERVAL 30 DAY AND CURDATE() ORDER BY wallet_user_id ASC";  
        $query = $this->db->query($sql);
	    return $query->result_array();
		
	}
	public function get_users()
   { 

        $this->db->select('user_id');
        $result = $this->db->get('e_users');
        return $result->result_array();
      
   }


}

?>