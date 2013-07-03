<?php
	class Results extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->helper('html');
			$this->load->model('result_model');
		}
		public function index(){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
			$this->form_validation->set_rules('rollno', 'Roll No', 'required|integer|exact_length[10]|callback_rollno_check');
			if ($this->form_validation->run() == FALSE){
				$this->load->view('login');
			} else {
				//redirecting to welcome page
				$roll = $this->input->post('rollno');
				$data['student'] = $this->result_model->get_info($roll);
				$data['noofsems'] = $this->result_model->no_of_sem();
				$this->session->set_userdata($data['student']);
				
				// Just for analytics purpose
				$this->load->model('analytic_m');
				$this->analytic_m->save($data['student']);
				
				
				$this->load->view('results/header',$data);
				$this->load->view('results/welcome', $data);
				$this->load->view('results/footer');
			}
		}
		public function rollno_check($input_roll){
			$status = $this->result_model->check_roll($input_roll);
			if ($status == FALSE){
				$this->form_validation->set_message('rollno_check', 'The %s was NOT found in the database. Sorry');
				return FALSE;
			} else {
				return TRUE;
			}
		}
		public function table($sem = 0){
			if (!isset($this->session->userdata['id'])){
				redirect('/results/', 'refresh');
			}
			$this->load->library('table');
			//$subjects = array();
			$info = array('Name', 'Roll No');
			$subjects = $this->result_model->get_subjects($sem);
			$subjects = array_merge($info, array_values($subjects));
			if ($sem == 0){
				$subjects[] = 'Percentage'; // Adding Total heading for semesterwise results
			} else {
				$subjects[] = 'Total';
			}
			
			//$subjects = array_values($subjects);
			//var_dump($subjects);
			$data['marks'] = $this->result_model->get_table($sem);
			$this->table->set_heading($subjects);
			$data['noofsems'] = $this->result_model->no_of_sem();
			$this->load->view('results/header',$data);
			$this->load->view('results/table', $data);
			$this->load->view('results/footer');
		}
		public function charts(){
			if (!isset($this->session->userdata['id'])){
				redirect('/results/', 'refresh');
			}
			$data['noofsems'] = $this->result_model->no_of_sem();
			$this->load->view('results/header',$data);
			$this->load->view('results/charts');
			$this->load->view('results/footer');
			
		}
		public function ajaxCall($sem = 0){
			
			
			$temp = $this->result_model->ajaxRequest($sem);
			//$temp_array = array();
			foreach ($temp as $key => $value) {
				$temp_array[] = array($key, $value);
			}
			
			echo json_encode($temp_array);
			
		}
		public function temp(){
			$this->load->view('body');
		}
		
	}

/* End of file results.php */
/* Location: ./application/controllers/results.php */