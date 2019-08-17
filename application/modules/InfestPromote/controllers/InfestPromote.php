<?php

use Scrap\Scrap;

defined('BASEPATH') OR exit('No direct script access allowed');

class InfestPromote extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->_public_view = $this->config->item('public_view');
		$this->load->model('Model');
	}

	public function index()
	{
		if($this->session->userdata('email') == '') {
			$this->login();
		}else{
			$this->load->view('index');
		}
	}

	public function login(){
		return $this->load->view('pages/login');
	}

	public function logout(){
		$this->session->unset_userdata('email');
	}

	public function doLogin(){
		$data["email"] = $this->input->post("email");
		$data["password"] = stripslashes($this->input->post("password"));
		$query=array("fieldName"=>"email","condition"=>"=","value"=>$data['email']);
		$result = $this->Model->SelectWhere('user',$query);
		if (count($result)>=1){
			if(strcmp($data["password"],$result[0]["password"])==0){
				$this->session->set_userdata('email',$data["email"]);
			}
		}
		echo json_encode('mza ~ 2019');
	}

	public function monitor()
	{
		$target=$this->Model->SelectWhere("target",array("fieldName"=>"email","condition"=>"=","value"=>$this->session->userdata("email")));
		$page = $this->load->view('pages/monitor',array("target"=>$target));
		return $page;
	}

	public function hashtag()
	{
		$hashtag = $this->Model->SelectWhere("hashtag",array("fieldName"=>"email","condition"=>"=","value"=>$this->session->userdata("email")));
		$page = $this->load->view('pages/hashtag', array('hashtag' => $hashtag));
		return $page;
	}

	public function addHashtag($hashtag)
	{
		$hashtag = $this->Model->insert("hashtag", array("email"=>$this->session->userdata("email"),"name"=>$hashtag,"time"=>time()));
		return $this->hashtag();
	}

	public function getHashtag(){
		$hashtag = $this->Model->SelectWhere("hashtag",array("fieldName"=>"email","condition"=>"=","value"=>$this->session->userdata("email")));
		echo json_encode($hashtag);
	}

	public function target(){
		$target = $this->Model->SelectWhere("target",array("fieldName"=>"email","condition"=>"=","value"=>$this->session->userdata("email")));
		return $this->load->view('pages/target',array("target"=>$target));
	}

	public function addTarget($target){
		$result = $this->Model->insert("target", array("email"=>$this->session->userdata("email"),"name"=>$target,"time"=>time()));
		$result["time"]=date("Y-m-d",$result['time']);
		echo json_encode(array($result));
	}

	public function targetList($id){
		$targetList = $this->Model->SelectWhere("target",array("fieldName"=>"_id","condition"=>"=","value"=>$id));
		return $this->load->view('pages/target_list',array("target"=>$targetList[0]));
	}

	public function addUserTarget($id){
		$dataOld = $this->Model->SelectWhere("target",array("fieldName"=>"_id","condition"=>"=","value"=>$id));
		$data=$this->input->post("data");
		if(isset($dataOld[0]["user"])){
			$data = array_merge($data, $dataOld[0]["user"]);
		}
		$result= $this->Model->Update("target",array("fieldName"=>"_id","condition"=>"=","value"=>$id),array("user"=>$data));
		echo json_encode($result);
	}


	/* Legendary Function ------------------------------------------------------
	 * */
	/**/
	public function scrap($id){
		require_once FCPATH . "/core/InfestPromote/php/Scrap.php";
		$sheet = $this->Model->SelectWhere("target",array("fieldName"=>"_id","condition"=>"=","value"=>$id));
		$scrap=new Scrap($sheet[0]["user"]);
		$scrap->scrap();
		$this->Model->Update("target",array("fieldName"=>"_id","condition"=>"=","value"=>$id),array("data"=>$scrap->getResult()));
	}

	/* UTILITIES
	 * for references
	 * how and quick use
	 * databases sleekDB
	*/
	public function database($store)
	{
		$result = $this->Model->all($store);
		print_r($result);
	}

	public function dbDel($store)
	{
		$this->Model->delDB($store);
	}

	public function addUser($username,$password)
	{
		$this->Model->insert("user",array("email"=>$username,"password"=>stripslashes($password)));
	}

	public function temp($email,$password){
		$data["email"]=$email;
		$data["password"]=$password;
		$query=array("fieldName"=>"email","condition"=>"=","value"=>$data['email']);
		$result = $this->Model->SelectWhere('user',$query);
		if (count($result)>=1){
			echo "count\n";
			if(strcmp($data["password"],$result[0]["password"])==0){
				print_r($result);
			}
		}
	}
}