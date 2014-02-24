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
	}
?>