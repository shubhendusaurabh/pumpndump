<?php

	/**
	 * Dashboard for all admin activities
	 */
	class Dashboard extends MY_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('analytic_m');
		}
		
		public function index(){
			
			$this->data['students'] = $this->analytic_m->get(NULL, FALSE);
			$this->output->enable_profiler(TRUE);
			$this->data['subview'] = 'admin/user/dashboard';
			$this->load->view('admin/_layout_main', $this->data);
		}
	}
	