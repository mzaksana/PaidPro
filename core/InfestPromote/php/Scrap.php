<?php
namespace Scrap;
class Scrap{
	private $sheet;
	private $result;
	private $page;
	/* parameter is array*/
	function __construct($data) {
		$this->result = array();
		$this->page = array();
		$this->sheet=$data;
	}

	public function scrap(){
		$temp=0;
		foreach ($this->sheet as $line){
			$data = $this->scrapingUser($line);
			$uid = $data->{'graphql'}->{'user'}->{'id'};
			$name=$data->{'graphql'}->{'user'}->{'full_name'};
			$stats = "private";
			if($data->{'graphql'}->{'user'}->{'is_private'}==false){
				$stats = "open";
			}
			array_push($this->result,array('username'=>$line,'name'=>$name,'uid'=>$uid,'stats'=>$stats));
			$temp++;
		}
	}

	private function scrapingUser($id){
		$uri = "https://www.instagram.com/" . $id . "/?__a=1";
		return $this->curlData($uri);
	}

	private function curlData($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		$response = curl_exec($ch);
		return json_decode($response);
	}

	public function getResult(){
		return $this->result;
	}

	public function getData(){
		return $this->sheet;
	}

	public function getPage(){
		return $this->page;
	}
}
