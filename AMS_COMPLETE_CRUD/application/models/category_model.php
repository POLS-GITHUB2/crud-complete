<?php

class Category_Model extends AdminModel
{
	public function ViewCategory()
	{	
		
		$query = $this->db->query("select * from category_master");
							
		return $query->result();
	}


	/*function AddCategory()
	{
		$query="insert into category_master values('','$category_name')";
			$this->db->query($query);
	}*/

	public function AddCategory()
	{
		$cat_name 	=	$this->input->post('category_name');

$sql = "INSERT INTO category_master(category_name)VALUES(".$this->db->escape($cat_name).")";

		$result = $this->db->query($sql);

		if($this->db->affected_rows($sql) === 1)
		{
			return $cat_name;
		}
		else
		{
			return false;
		}
	}

	public function EditCat($id)
	{

		$query = $this->db->select(['id','category_name'])
						->where('id',$id)
						->get('category_master');

						return $query->row();

	}

	public function UpdateCat($id, Array $catmas )
	{
		return	$this->db
				->where('id',$id)
				//->where('status','ACTIVE')
				->update('category_master',$catmas);
	}

	public function DeleteCat($id)
	{
		return $this->db->delete('category_master',['id'=>$id]);

	}
}