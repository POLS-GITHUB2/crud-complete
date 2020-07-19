<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Admin //admin
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('category_Model');
	} 

	public function ViewCategory()
	{
		$result['data']=$this->category_Model->ViewCategory();
		//print_r($result);exit();
		$this->load->view('admin/dataTable',$result);
	}

	public function addCategory()
	{
		//$this->load->view('admin/components/cate_add');
		$this->load->helper('form');

		//******************* CREATE form_validatioon  ************************ //


		$this->form_validation->set_rules('category_name','Your Name','trim|required|is_unique[category_master.category_name]');

	
		// ************* END form_validatioon  ************************ //


		if($this->form_validation->run() == TRUE)
		{


			/*********load Model******/

			$this->load->model('category_model');

			//print_r($pk); exit();

			$cat_name = $this->input->post('category_name');
			
			$result	= $this->category_Model->AddCategory($cat_name);

			//print_r($result);exit();

			if($result)
			{
				$this->session->set_flashdata('item','Successfully added new data');
				return redirect('DATATABLE');
			}
			else
			{
				$this->session->set_flashdata('item2','please Try Again...');
				//echo "Sorry";
			}
		}
		else
		{
			$this->load->view('admin/components/cate_add');
		}

	}

	public function EditCategory($id)
	{

		

		$this->load->model('category_model','camo');

		$camo = $this->camo->EditCat($id);

		$this->load->view('admin/components/cate_edit',['catmod'=>$camo]);
		/*echo "<pre>";

		print_r($camo);
*/
	}

	public function UpdateCategory($id)
	{
		//exit($id);
		$this->load->helper('form');
		$this->form_validation->set_rules('category_name','Category Name','trim|required|is_unique[category_master.category_name]');
		if($this->form_validation->run() == TRUE)
		{
			$post = $this->input->post();
			$result	=	$this->load->model('Category_Model');

			unset($post['save']);
			//exit($post_name);
			//print_r($post_name);exit();
			$UpCat	= $this->Category_Model->UpdateCat($id, $post);
			//print_r($UpCat);exit();
			if($UpCat)
			{
				$this->session->set_flashdata('item','Successfully Update Data');
				return redirect('DATATABLE');
			}
			else
			{
				$this->session->set_flashdata('item2','please Try Again...');
				//echo "Sorry";
			}
		}
		else
		{
			$this->load->view('admin/components/cate_edit');
		}

	}

	public function DeleteCategory()
	{
		$id	=$this->input->post('id');
		$this->load->model('category_model','camo');
		$DelCat	=	$this->camo->DeleteCat($id);

		//print_r($DelCat);exit;

		if($DelCat)
		{
			$this->session->set_flashdata('item',' Successfully Delete Data ');
			return redirect('DATATABLE');
		}
		else
		{
			$this->session->set_flashdata('item2','please Try Again...');
			//echo "Sorry";
		}
	}
}