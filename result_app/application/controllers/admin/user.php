<?php

	/**
	 * User Controller
	 */
	class User extends MY_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('user_m');
		}
		
		public function index()
		{
			$this->data['users'] = $this->user_m->get();
			
			$this->data['subview'] = 'admin/user/index';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function edit($id=null)
		{
			if ($id != NULL) {
				$this->data['user'] = $this->user_m->get($id, TRUE);
				count($this->data['user']) || $this->data['errors']['error'] = "We could not find requested user";
			} else {
				$this->data['user'] = $this->user_m->get_new();
			}
			
			$rules = $this->user_m->rules_admin;
			if( ! $id ){
				$rules['email']['rules'] .= "|is_unique[users.email]";
				$rules['password']['rules'] .= "|required";
			}
			
			$this->form_validation->set_rules($rules);
			
			if ($this->form_validation->run() == TRUE) {
				$data = $this->user_m->array_from_post(array('name', 'email', 'password'));
				$data['password'] = hash(md5, $data['password']);
				if ($newid = $this->user_m->save($data, $id)){
					$str = '<span class="label label-success">Success</span>';
					$str .= " The user with id ";
					$str .= $id ? "{$id} was updated." : "{$newid} was created.";
					$this->session->set_flashdata('error', $str);
					redirect('admin/user/index');
				}
			}
			
			$this->data['subview'] = 'admin/user/edit';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function delete($id=null)
		{
			if ($id != NULL) {
				$this->user_m->delete($id);
				$this->session->set_flashdata('error', "The user with id {$id} was deleted!");
				redirect('admin/user/index');
			}
		}

		public function login()
		{
			$dashboard = 'admin/dashboard';
			$this->user_m->loggedin() == false || redirect($dashboard);

			$rules = $this->user_m->rules;
			$this->form_validation->set_rules($rules);
			if ($this->form_validation->run() == TRUE) {
				// we can login
				if ($this->user_m->login() == true) {
					# code...
					redirect($dashboard);
				} else {
					$this->session->set_flashdata('error', 'The email/password combination is not valid!');
					redirect('admin/user/login', 'refresh');
				}
			}
			$this->data['subview'] = 'admin/user/login';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function logout()
		{
			$this->user_m->logout();
			redirect('admin/user/login');
		}
	}
	