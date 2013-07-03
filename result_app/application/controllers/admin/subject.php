<?php

	/**
	 * Subject Admin Pane'
	 */
	class Subject extends MY_Controller {

		
		function __construct() {
			parent::__construct();
			$this->load->model('subject_m');
		}
		
		public function index(){
			
			$this->data['subjects'] = $this->subject_m->get(null, FALSE);
			
			$this->data['subview'] = 'admin/subject/index';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function edit($id=null)
		{
			if( $id != NULL){
				$this->data['subject'] = $this->subject_m->get($id);
				count($this->data['subject']) || $this->data['errors']['error'] = "No record could be found";
			} else {
				$this->data['subject'] = $this->subject_m->get_new();
			}
			
			
			$rules = $this->subject_m->rules;
			
			$this->form_validation->set_rules($rules);
			
			if ($this->form_validation->run() == TRUE) {
				$data = $this->subject_m->array_from_post(array('b_id', 'semester', 'subject1', 'subject2', 'subject3', 'subject4', 'subject5', 'lab1', 'lab2', 'lab3'));
				$this->subject_m->save($data, $id);
				redirect('admin/subject');

			}
			
			$this->data['subview'] = 'admin/subject/edit';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function delete($id = null){
			if ($id) {
				 if ( $data = $this->subject_m->delete($id)){
				 	
				 	$this->session->set_flashdata('error', 'The subjects were deleted!');
				 } else {
					 $this->session->set_flashdata('error', 'Sorry, The subjects could not be deleted');
				 }				
			} else {
				$this->session->set_flashdata('error', 'The id field must be present');
			}
			redirect('admin/subject/index');
		}
	}