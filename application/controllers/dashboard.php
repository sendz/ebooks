<?php
	/**
	* 
	*/
	class Dashboard extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('get_book');
			$this->load->model('get_category');
		}
		function index() {
			$data['categories'] = $this->get_category->categories();
			$this->load->view('header');
			$this->load->view('auth_user');
			if ($this->ion_auth->logged_in()) {
				# code...
				$this->load->view('navbar');
				$this->load->view('dashboard-nav');
				$this->load->view('dashboard-index', $data);
			}
			$this->load->view('footer');
		}
		function ebooks() {
			$data['book'] = $this->get_book->books();
			$data['categories'] = $this->get_category->categories();
			$this->load->view('header');
			$this->load->view('auth_user');
			if ($this->ion_auth->logged_in()) {
				$this->load->view('navbar');
				$this->load->view('dashboard-nav');
				$this->load->view('dashboard-ebooks', $data);
			}
			$this->load->view('footer');
		}
		function categories() {
			$data['categories'] = $this->get_category->categories();
			$this->load->view('header');
			$this->load->view('auth_user');
			if ($this->ion_auth->logged_in()) {
				$this->load->view('navbar');
				$this->load->view('dashboard-nav');
				$this->load->view('dashboard-categories', $data);
			}
			$this->load->view('footer');
		}
	}
?>