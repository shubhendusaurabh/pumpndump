<?php
	
	/**
	 * Model class for database opertaions
	 */
	class Model {
		
		public $table_name = "";
		public $db ;
		
		function __construct() {
			$this->db = new PDO('mysql:host=localhost;dbname=test','root','');
		}
		/**
		 * @param string domain name
		 * @return array data for particular domain or domain names
		 */
		public function get($domain = null){
			if ($domain) {
				$sql = "SELECT price , time FROM scraper WHERE domain=:domain";
				$stmt = $this->db->prepare($sql);
				$stmt->execute(array(':domain' => $domain));
			} else {
				$sql = "SELECT DISTINCT(domain) FROM `scraper`";
				$stmt = $this->db->prepare($sql);
				$stmt->execute();
			}
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		/**
		 * @param array array containing data
		 * @return bool successful or not
		 * @author shubhu 
		 */
		public function insert($data = null){
			if ( ! $data) {
				return false;
			}
			$sql = "INSERT INTO `scraper` ( domain, price, time) VALUES (:domain, :price, :time)";
			$stmt = $this->db->prepare($sql);
			
			$stmt->execute(array(
				':domain' => $data['domain'],
				':price'  => $data['price'],
				':time'   => strftime("%Y-%m-%d %H:%M:%S", time())
			));
			return (bool) $this->db->lastInsertId();
		}
		
		public function delete(){
			
		}
	}
	
	