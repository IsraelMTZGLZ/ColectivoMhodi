<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DAO extends CI_Model{

	public function __construct()
	{
		
	}

	public function insertData($entityName,$data)
	{
		$this->db->insert($entityName,$data);
		if ($this->db->error()['message']!='') {
			$message = "";
			switch ($this->db->error()['code']) {
				case '1062':
					$message=$this->lang->line('error_1062_db');
					break;
				
				default:
					$message = $this->db->error()['message'];
					break;
			}
			$this->session->set_flashdata('dbMessage',array("status"=>"danger","message"=>$message));
			return $message;
		}
		else{
			$this->session->set_flashdata('dbMessage',array("status"=>"success","message"=>$this->lang->line('insert_db')));
			return $this->lang->line('insert_db');
		}
	}

	public function selectEntity($entityName,$whereClause = null,$uniqueResult =false)
	{
		if ($whereClause) {
			$this->db->where($whereClause);	
		}
		$result = $this->db->get($entityName);
		if ($this->db->error()['message']!='') {
			return null;
		}
		else{
			if ($uniqueResult) {
				return $result->row();
			}
			else{
				return $result->result();
			}
		}
	}

	public function updateData($entityName,$data,$whereClause)
	{
		$this->db->where($whereClause);
		$this->db->update($entityName,$data);
		if ($this->db->error()['message']!='') {
			$message = "";
			switch ($this->db->error()['code']) {
				case '1062':
					$message=$this->lang->line('error_1062_db');
					break;
				
				default:
					$message = $this->db->error()['message'];
					break;
			}
			$this->session->set_flashdata('dbMessage',array("status"=>"danger","message"=>$message));
			return $message;
		}
		else{
			$this->session->set_flashdata('dbMessage',array("status"=>"success","message"=>$this->lang->line('update_db')));
			return $this->lang->line('update_db');
		}
	}

	public function deleteData($entityName,$whereClause)
	{
		$this->db->where($whereClause);
		$this->db->delete($entityName);
		if ($this->db->error()['message']!='') {
			$message = "";
			switch ($this->db->error()['code']) {
				//si pones code en vez de mmessage te dice el codigo
				case '1062':
					$message=$this->lang->line('error_1062_db');
					break;
				case '1451':
				//foreign error
					$message=$this->lang->line('error_1451_db');
					break;
				default:
					$message = $this->db->error()['message'];
					break;
			}
			$this->session->set_flashdata('dbMessage',array("status"=>"danger","message"=>$message));
			return $message;
		}
		else{
			$this->session->set_flashdata('dbMessage',array("status"=>"success","message"=>$this->lang->line('delete_db')));
			return $this->lang->line('delete_db');
		}
	}

	function changeStockSale($id){
		$query =$this->db->query("UPDATE Products set stockProduct=stockProduct -1 where idProuct = ?",array($id));
	}

	function cancelChangeStockSale($quantity,$code){
		$query= $this->db->query("UPDATE Products SET stockProduct=stockProduct + ? where barcodeProduct = ?",array($quantity,$code));
	}

}