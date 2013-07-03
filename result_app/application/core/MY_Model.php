<?php

	/**
	 * MY_Model
	 */
	class MY_Model extends CI_Model {
		
		protected $_table 		= '';
		protected $_primary_key = 'id';
		protected $_primary_filter = "intval";
		public $order_by 	   = '';
		
		public $rules = array();
		protected $_timestamps = FALSE;
		
		function __construct() {
			parent::__construct();
		}
		
		/**
		 * @param int primary key
		 * @param bool single or multiple result
		 * @return array result set
		 */
		public function get($ids = false, $single = FALSE){
			
			$single = $ids == FALSE || is_array($ids) ? FALSE : TRUE;
			
			if ($ids != FALSE) {
				is_array($ids) || $ids = (array)$ids;
				
				$ids = array_map($this->_primary_filter, $ids);
				
				$this->db->where_in($this->_primary_key, $ids);
			}
			//TODO order_by not working
			count($this->db->ar_orderby) == 0 || $this->db->order_by($this->order_by);
			
			$single == FALSE || $this->db->limit(1);
			
			$method = $single ? 'row' : 'result';
			
			return $this->db->get($this->_table)->$method();
		}
		
		/**
		 * @param array where clause
		 * @param bool single or multiple result
		 * @return array result set 
		 */
		public function get_by($key, $val = false, $orwhere = FALSE, $single = FALSE){
			if ( ! is_array($key)) {
				$this->db->where(htmlentities($key), htmlentities($val));
			} else {
				$key = array_map('htmlentities', $key);
				$where_method = $orwhere == TRUE ? 'or_where' : 'where';
				$this->db->$where_method($key);
			}
			
			$single == FALSE || $this->db->limit(1);
			$method = $single ? 'row' : 'result';
			
			return $this->db->get($this->_table)->$method();
		}
		
		public function get_key_value(){
			
		}
		
		public function save($data, $id = false){
			if( ! $id){
				$this->db->set($data)->insert($this->_table);
			} else {
				$filter = $this->_primary_filter;
				$id = $filter($id);
				$this->db->set($data)->where($this->_primary_key, $id)->update($this->_table);
			}
			
			return $id == FALSE ? $this->db->insert_id() : $id;
		}
		
		public function delete($id = null)
		{
			$filter = $this->_primary_filter;
			$id 	= $filter($id);
			
			if ($id != NULL) {
				$data = $this->db->where($this->_primary_key, $id)->limit(1)->delete($this->_table);
				return $data;
			}
			
			if ( ! $id ) {
				return FALSE;
			}
		}
		
		public function array_from_post($fields = null)
		{
			$data = array();
			foreach ($fields as $field) {
				$data[$field] = $this->input->post($field);
			}
			
			return $data;
		}
	}
	