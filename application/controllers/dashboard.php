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
		function add_book() {
			$config['upload_path'] = "./files/";
			$config['allowed_types'] = "*"; //gif|jpg|png|doc|docx|odt|xls|xlsx|ods|ppt|pptx|odp|pdf
			$config['max_size'] = 3000;
			$config['remove_spaces'] = TRUE;
			$config['overwrite'] = FALSE;
			$this->upload->initialize($config);
			$field = 'userfile';
			$upload = $this->upload->do_upload($field);
			$error = $this->upload->display_errors('<p>','</p>');
			$fileinfo = $this->upload->data();
			// Collecting data
			$date 		= $this->input->post('date');
			$title		= $this->input->post('title');
			$file 		= base_url() . 'files/' . $fileinfo['file_name'];
			$mirror1	= $this->input->post('mirror1');
			$mirror2	= $this->input->post('mirror2');
			$category 	= $this->input->post('category');
			$data = array(
				'date'		=> $date,
				'title' 	=> $title,
				'file'		=> $file,
				'mirror1'	=> $mirror1,
				'mirror2'	=> $mirror2,
				'category'	=> $category
				);
			if ($upload) {
				$this->db->insert('book', $data);
			} else {
				echo $error;
			}
		}
		function add_category() {
			$name = $this->input->post('name');
			$data = array(
				'name'	=> $name
				);
			$this->db->insert('category', $data);
			redirect('/dashboard/categories','refresh');
		}
	}
?>