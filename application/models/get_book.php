<?php
	/**
	* Class Get Book, to get all data in book database
	*/
	class Get_book extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function books() {
			$this->db->from('book');
			$this->db->order_by('date','DESC');
			$result = $this->db->get();
			if ($result->num_rows() > 0) {
				foreach ($result->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
	}
?>