<?php
	/**
	* Book Controller to get book from db and show to page
	*/
	class Book extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('get_book');
			$this->load->model('get_category');
		}
		public function index() {
			$data['book'] = $this->get_book->books();
			$data['category'] = $this->get_category->categories();
			$this->load->view('header');
			$this->load->view('book',$data);
			$this->load->view('footer');
		}
	}
?>