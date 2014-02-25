<?php
	/**
	* Class Get Book, to get all data in book database
	*/
	class Get_category extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function categories() {
			$result = $this->db->get('category');
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
		public function chain_category() {
			$category = $this->input->post('category');
			//$result = array();
			$this->db->select('*');
			$this->db->from('book');
			$this->db->where('category',$category);
			$this->db->order_by('date','ASC');
			$result = $this->db->get();
			//$result = $this->db->query('SELECT * FROM book LIKE category "Struktur"');
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
	}
?>