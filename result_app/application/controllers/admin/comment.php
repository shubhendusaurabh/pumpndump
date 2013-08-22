<?php

	/**
	 * comment Admin Pane'
	 */
	class Comment extends MY_Controller {

		
		function __construct() {
			parent::__construct();
			$this->load->model('comment_m');
		}
		
		public function index(){
			
			$this->data['comments'] = $this->comment_m->get(null, FALSE);
			
			$this->data['subview'] = 'admin/comment/index';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function edit($id=null)
		{
			if( $id != NULL){
				$this->data['comment'] = $this->comment_m->get($id);
				count($this->data['comment']) || $this->data['errors']['error'] = "No record could be found";
			} else {
				$this->data['comment'] = $this->comment_m->get_new();
			}
			
			
			$rules = $this->comment_m->admin_rules;
			
			$this->form_validation->set_rules($rules);
			
			if ($this->form_validation->run() == TRUE) {
				$data = $this->comment_m->array_from_post(array('comment', 'name', 'email'));
				$this->comment_m->save($data, $id);
				redirect('admin/comment');

			}
			
			$this->data['subview'] = 'admin/comment/edit';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function delete($id = null){
			if ($id) {
				 if ( $data = $this->comment_m->delete($id)){
				 	
				 	$this->session->set_flashdata('error', 'The comment was deleted!');
				 } else {
					 $this->session->set_flashdata('error', 'Sorry, The comment could not be deleted');
				 }				
			} else {
				$this->session->set_flashdata('error', 'The id field must be present');
			}
			redirect('admin/comment');
		}
	}