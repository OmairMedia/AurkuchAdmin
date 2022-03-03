<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {

        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('function_helper');
		$this->load->Model('SiteModel');
    }
    public function _remap($page,$para = array())
    {   
    	$this->subPages($page,$para);
    }
	public function index()
	{
		echo "pages cotnroller index";
	}	
	public function subPages($page,$para)
	{
        



		if ($page == 'About')
		{
			$settings = $this->SiteModel->getSetting();
			$pageData = $this->SiteModel->getPageData('About');
			//$faqCategories = $this->SiteModel->getTableData('e_faqcategory');
			$data =  array(
				'settings' => $settings,
				'pageData' => $pageData,
				'controller'=> 'Pages',
			);
			
			$this->load->view('site_pages/about_view',$data);
		}
		elseif ($page=='Maps') {

			$settings = $this->SiteModel->getSetting();
			$pageData = $this->SiteModel->getPageData('Maps');
			$packeg = $this->SiteModel->getTableData('e_packeg');


			//$faqCategories = $this->SiteModel->getTableData('e_faqcategory');
			$data =  array(
				'settings' => $settings,
				'pageData' => $pageData,
				'packeg'   =>$packeg,
				'controller'=> 'Pages',
			);
			
			$this->load->view('site_pages/Map_view',$data);
		}
		
		elseif ($page == 'Contact')
		{
			$count=0;
			if($_POST){
				
		$settings = $this->SiteModel-> insertData('e_feedback',$_POST);
		$count++;
			}
			$settings = $this->SiteModel->getSetting();
			$pageData = $this->SiteModel->getPageData($page);
			if ($pageData)
			{
				$data =  array(
				'settings' => $settings,
				'pageData' => $pageData,
				'controller'=> 'Pages',
				'msg'=>$count,
				'currentPage'=>$page
				);
				
				$this->load->view('site_pages/contact_view',$data);
			}
		}
		elseif ($page=='gallery') 
			{
			$settings = $this->SiteModel->getSetting();
			$gallery = $this->SiteModel->getTableData('e_gallery');
			$pageData = $this->SiteModel->getPageData($page);
			$packeg = $this->SiteModel->getTableData('e_packeg');
			//$faqCategories = $this->SiteModel->getTableData('e_faqcategory');
			$data =  array(
				'settings' => $settings,
				'pageData' => $pageData,
				'gallery'=>$gallery,
				'packeg'=>$packeg
			
			);
			
			$this->load->view('site_pages/gallery_view',$data);

		}
		else
		{
			$settings = $this->SiteModel->getSetting();
			$cat = end($this->uri->segments); 
			$pageData = $this->SiteModel->getPageData_with_slug('e_category',$cat);
			$menu = $this->SiteModel->getPageData_with_slug('e_menu',$cat);

			//print_r($pageData);
          //  $pageData=$pageData+array('discription'=>'kj' );
                    $id= $pageData['id']; 
                $phase=$this->SiteModel->getrows('e_phase','cat_id',$id); 
                 $da= explode("-", $cat);
               
                $property=$this->SiteModel->getRow('e_item','id',$da[0]);  
                   
 //echo $last = end($this->uri->segments); 

             
			if ($phase)
			{    
				
                       $id= $pageData['id']; 
				$data =  array(
				'settings' => $settings,
				'pageData' => $pageData,
				'controller'=> 'Pages',
				'phase'=>$phase,
				'currentPage'=>$page
				);


				
			$this->load->view('site_pages/category_view',$data);
			}
elseif ($pageData && empty($phase)&& empty($property)) {
	          $id= $pageData['id']; 
				$data =  array(
				'settings' => $settings,
				'pageData' => $pageData,
				'controller'=> 'Pages',
				'phase'=>$phase,
				'currentPage'=>$page
				);


				
	$this->load->view('site_pages/category_view',$data);
}


	else if ($property) {
				//$pageData=$pageData+array('discription'=>'kj' );
				
		$pageData = $this->SiteModel->getPageData('home');
              $data =  array(
				'settings' => $settings,
				'pageData' => $pageData,
				'controller'=> 'Pages',
				'property'=>$property,
				'currentPage'=>$page
				

				);

                 
				$this->load->view('site_pages/property_view',$data);
				//echo $property;
			}
			elseif ($menu) {



	$data =  array(
				'settings' => $settings,
				'pageData' => $menu,
				'controller'=> 'Pages',
				
				'currentPage'=>$page
				);
	$this->load->view('site_pages/menu_view',$data);
}



			else
			{ 
				$data =  array(
				'settings' => $settings,
				'pageData' => $pageData,
				'controller'=> 'Pages',
				);
				
				$this->load->view('site_pages/404',$data);
			}

			
		}

	}
}
