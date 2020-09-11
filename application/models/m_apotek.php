<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_apotek extends CI_model
{
	function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	function get_data($table){
        return $this->db->get($table);
	}
	function insert_data($data,$table){
        return $this->db->insert($table,$data);
	}
	function update_data($where,$data,$table){
        return $this->db->where($where);
        return $this->db->update($table,$data);

	}
	function delete_data($where,$table){
	    return $this->db->where($where);
        return $this->db->delete($table);
}
}