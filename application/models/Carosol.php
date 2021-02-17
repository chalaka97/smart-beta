<?php


class Carosol extends CI_Model
{

	public function get_caro_imgs()
	{
		return $this->db->get('caro');
	}


}
