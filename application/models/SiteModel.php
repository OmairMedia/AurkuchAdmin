<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteModel extends CI_Model{

//////////////////generic function area-- dont add project modal function//////fk//////
public function getRow($tableName,$row_key,$row_value)
	{
		$this->db->where($row_key,$row_value);
		$query = $this->db->get($tableName);
		return $query->row_array();
	}
	public function getRows($tableName,$row_key,$row_value)
	{
		$this->db->where($row_key,$row_value);
		$query = $this->db->get($tableName);
		return $query->result_array();
	}
	public function delRow($tableName,$row_key,$row_value)
	{
		$this->db->where($row_key,$row_value);
		$this->db->delete($tableName);
	}
	public function updateRow($tableName,$key,$value,$data)
	{
		$this->db->where($key,$value);
		if($this->db->update($tableName,$data))
			return true;
	}
	public function getField($tableName,$row_key,$row_value,$field)
	{
		$this->db->where($row_key,$row_value);
		$query = $this->db->get($tableName);
		$record = $query->row_array();
		if ($record) {
			return $record[$field];
		}
		else
			return 'Not found';
		
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
		//return $this->db->last_query();
		
	}
	public function getConditionData($tableName,$cond)
	{ 
                $this->db->where($cond);
		$query = $this->db->get($tableName);
		
		 return $query->row_array();
	//	return $this->db->last_query();
		
	}
	public function getConditionData_array($tableName,$cond)
	{ 
                $this->db->where($cond);
		$query = $this->db->get($tableName);
		
		 return $query->result_array();
		//return $this->db->last_query();
		
	}
	public function getTableDataSorted($tableName,$order_field,$display = 'yes')
	{
		$this->db->order_by($order_field,'asc');
		$this->db->where('display',$display);
		$query = $this->db->get($tableName);
		 return $query->result_array();
	}
	public function getTableDataLimit($tableName,$limit,$start_index)
	{	$this->db->limit($limit,$start_index);
		$query = $this->db->get($tableName);
		 return $query->result_array();
	}
	public function countRows($table)
	{
		return $this->db->count_all_results($table);
	}
//////////////////genric funcion area -------- ends///////////////////////////////////
///////////////// cms-related function/////////////////////////////////////////////////
public function getSetting()
{
	$query = $this->db->get('e_settings');
	return $query->row_array();
}
public function getPageData($page_slug)
{	
	$this->db->where('slug',$page_slug);
	$query = $this->db->get('e_menu');
	return $query->row_array();
}
public function getPageData_with_slug($table_name,$page_slug)
{	
	$this->db->where('slug',$page_slug);
	$query = $this->db->get($table_name);
	return $query->row_array();
}
public function getMenuRows($tableName,$row_key,$row_value)
{
	$this->db->order_by('displayorder','asc');
	$this->db->where('display','yes');
	$this->db->where($row_key,$row_value);
	$query = $this->db->get($tableName);
	return $query->result_array();
}
///////////////// cms-related function area ends///////////////////////////////////////

///////////////// project realted function (----project name-----)/////////////////////

}
?>