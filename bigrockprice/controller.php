<?php
require_once "libraries/simple_html_dom.php";
require_once 'model.php';
	/**
	 * Controller class 
	 */
	class Controller {
		
		public $url = "http://bigrock.in";
		public $model ;
		
		function __construct() {
			$this->model = new Model();
		}
		
		public static function fetch(){
			
			$doc = new DOMDocument;
			$xpath = new DOMXPath($doc);
			$html = new simple_html_dom();
			$oldSetting = libxml_use_internal_errors(true);
			$errors = libxml_get_errors();
			
			//TODO replace file get contents with curl
			$content = file_get_contents($this->url);
			
			$doc->loadHTML($content);			
			
			$lists = $xpath->query(".//*[@id='content-wrapper']/table[1]/tbody/tr/td[1]");			
			
			$xml = "";
			$length = $lists->length;
			for ($i=0; $i < $length; $i++) { 
				$xml .= $doc->saveHTML($lists->item($i)). "<br />";	
				
			}			
			
			$html->load($xml);

			foreach($html->find('.tld-col')as $ret){
				$subject = $ret->plaintext;
				
				$domain = "/\.([a-z\.]{2,6})/";
				$price = "/\d+/";
				preg_match($domain, $subject, $match);
				preg_match($price, $subject, $arr);
				
				$pair['domain'] = $match[0];
				$pair['price'] = $arr[0];
				
				echo $this->model->insert($pair);				
						
			}
		}
		
		public function get_data(){
			$domains = $this->model->get();
			$i = 0;
			foreach($domains as $domain){
				$temp = $this->model->get($domain['domain']);
				
				$lol = array();
				foreach($temp as $t){
					
					$arr['y'] = intval($t['price']);
					$arr['x'] = strtotime($t['time']);
					$lol[] = $arr;
				}
				
				$data['data'] = $lol;
				$data['color'] = "#c05020";
				$data['name'] = $domain['domain'];
				$s[] = $data;
			}
			
			return json_encode($s);
		}
	}
	