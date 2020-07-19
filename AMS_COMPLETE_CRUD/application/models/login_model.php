<?php

class login_model extends AdminModel
{
	public function userlog($username, $password)
	{
        $sql = $this->db->where(['username'=>$username, 'password'=>$password])->get('admin_master');
		
		if( $sql->num_rows() )
		{
			return $sql->row()->id; 
		}
		else
		{
			return FALSE;
		}
	}
}