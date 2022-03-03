<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {

        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('function_helper');
		$this->load->Model('SiteModel');
    }

	public function index()
	{
		$settings = $this->SiteModel->getSetting();
		$pageData = $this->SiteModel->getPageData('home');
		$slider = $this->SiteModel->getTableDataSorted('e_slider','displayorder','yes');
		//$projects = $this->SiteModel->getTableDataSorted('e_projects','id','yes');
		//$services = $this->SiteModel->getTableDataSorted('e_services2','displayorder','yes');
		$date= date('Y-m-d');
		$add_top = $this->SiteModel->getConditionData('e_adds','"'.$date.'"between from_date and to_date and diraction="top" group by diraction');
		$add_left = $this->SiteModel->getConditionData('e_adds','"'.$date.'"between from_date and to_date and diraction="bottom_left" group by diraction');
		$add_right = $this->SiteModel->getConditionData('e_adds','"'.$date.'"between from_date and to_date and diraction="bottom_right" group by diraction');
		//$portfolioCategories = $this->SiteModel->getTableData('e_category');
            //    $pageData = $this->SiteModel->getPageData('index');
		//$this->session->set_userdata('ali','hi kayabi');
		
		$data =  array(
			'settings' => $settings,
			'pageData' => $pageData,
			'controller'=> 'Home',
			'slider'	=> $slider,
			'adds_top'=>$add_top,
			'add_left'=>$add_left,
			'add_right'=>$add_right,
			//'services'  => $services,
			//'projects'  => $projects,
			//'gallery' => $gallery,
			//'portfolioCategories' => $portfolioCategories
                            );
                		//$this->load->view('site_pages/project_home_view',$data);
		
		$this->load->view('site_pages/project_home_view',$data);
	}
	public function type(){
		
		 $id = $this->input->post('tid');
		 echo $id;
 //         $cond="";
	$plot=$this->SiteModel->getConditionData_array('e_item',"type='".$id."' group by cat_id");
      // print_r($plot);
        foreach ($plot as $key => $value) {
        	getOption('e_category','id','name','',array('id'=>$value['cat_id']));
        }
	
	}
        
}
