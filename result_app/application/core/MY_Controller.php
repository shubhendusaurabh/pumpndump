<?php
	
	/**
	 * MY_Controller for admin controller
	 */
	class MY_Controller extends CI_Controller {
		
		public $data = array();
		
		function __construct() {
			parent::__construct();
			$this->data['errors'] = '';
			$this->load->library('form_validation');
			$prefix = '<div class="alert alert-error"><span class="label label-important">Warning </span>';
			$suffix = ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
			$this->form_validation->set_error_delimiters($prefix, $suffix);
			
			
			$this->load->model('user_m');
			$exception_urls = array('admin/user/login', 'admin/user/logout' );
            if (in_array(uri_string(), $exception_urls) == false) {
                # code...
                if ($this->user_m->loggedin() == false) {
                    # code...
                    redirect('admin/user/login');
                }
            }
		}
	}
	