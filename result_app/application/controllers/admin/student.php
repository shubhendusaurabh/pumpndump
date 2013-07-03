<?php

	/**
	 * student Admin Pane'
	 */
	class Student extends MY_Controller {

		
		function __construct() {
			parent::__construct();
			$this->load->model('student_m');
		}
		
		public function index(){
			
			$this->data['students'] = $this->student_m->get(null, FALSE);
			
			$this->data['subview'] = 'admin/student/index';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function edit($id=null)
		{
			if( $id != NULL){
				$this->data['student'] = $this->student_m->get($id);
				count($this->data['student']) || $this->data['errors']['error'] = "No record could be found";
			} else {
				$this->data['student'] = $this->student_m->get_new();
			}
			
			
			$rules = $this->student_m->rules;
			
			$this->form_validation->set_rules($rules);
			
			if ($this->form_validation->run() == TRUE) {
				$data = $this->student_m->array_from_post(array('b_id', 'name', 'fathername', 'rollno', 'course', 'yearjoin'));
				$this->student_m->save($data, $id);
				redirect('admin/student');

			}
			
			$this->data['subview'] = 'admin/student/edit';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function delete($id = null){
			if ($id) {
				 if ( $data = $this->student_m->delete($id)){
				 	
				 	$this->session->set_flashdata('error', 'The student was deleted!');
				 } else {
					 $this->session->set_flashdata('error', 'Sorry, The student could not be deleted');
				 }				
			} else {
				$this->session->set_flashdata('error', 'The id field must be present');
			}
			redirect('admin/student/index');
		}
	}