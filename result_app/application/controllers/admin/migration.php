<?php
/**
 *
 */
class Migration extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load-> library('migration');
		if (!$this -> migration -> current()) {
			show_error($this -> migration -> error_string());
		} else {
			$this->data['msg'] = 'Migration Successful';
			$this->data['subview'] = 'admin/user/migration';
			$this->load->view('admin/_layout_main', $this->data);
		}
	}

}