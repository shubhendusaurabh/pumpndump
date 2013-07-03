<?php

	/**
	 * timeline Admin Pane'
	 */
	class Timeline extends MY_Controller {

		
		function __construct() {
			parent::__construct();
			$this->load->model('timeline_m');
		}
		
		public function index(){
			
			$this->data['timelines'] = $this->timeline_m->get(null, FALSE);
			
			$this->data['subview'] = 'admin/timeline/index';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function edit($id=null)
		{
			if( $id != NULL){
				$this->data['timeline'] = $this->timeline_m->get($id);
				count($this->data['timeline']) || $this->data['errors']['error'] = "No record could be found";
			} else {
				$this->data['timeline'] = $this->timeline_m->get_new();
			}
			
			
			$rules = $this->timeline_m->rules;
			
			$this->form_validation->set_rules($rules);
			
			if ($this->form_validation->run() == TRUE) {
				$data = $this->timeline_m->array_from_post(array('date', 'description'));
				$this->timeline_m->save($data, $id);
				redirect('admin/timeline');

			}
			
			$this->data['subview'] = 'admin/timeline/edit';
			$this->load->view('admin/_layout_main', $this->data);
		}
		
		public function delete($id = null){
			if ($id) {
				 if ( $data = $this->timeline_m->delete($id)){
				 	
				 	$this->session->set_flashdata('error', 'The timeline was deleted!');
				 } else {
					 $this->session->set_flashdata('error', 'Sorry, The timelines could not be deleted');
				 }				
			} else {
				$this->session->set_flashdata('error', 'The id field must be present');
			}
			redirect('admin/timeline/index');
		}
	}