<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
			parent::__construct();
			$this->load->helper('html');
			$this->load->view('header');
	} 
	public function index()
	{
		
		$this->load->view('welcome_message');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function timeline()
	{
		$this->db->from('timeline');
		$this->db->select('date, description');
		$this->db->order_by('date', 'desc');
		$query = $this->db->get();
		$data['logs'] = $query->result_array();
		//var_dump($data);
		$this->load->library('table');
		$this->table->set_heading(array("Date", "Description"));
		$this->load->view('timeline.php', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */