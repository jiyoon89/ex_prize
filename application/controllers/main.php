<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper("url");
		/*페이스북 공통*/
		$config = array();
		$config['appId'] = '259707104177177';
		$config['secret'] = '7975bf34b3e83d0b9d964052fc07f079';
		$config['cookie'] = true;

		$this->load->library('facebook', $config);

	}

	public function web()
	{	
		if (isset($_REQUEST['signed_request'])) {
			$encoded_sig = null;
			$payload = null;
			list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
			$sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
			$signed_request = json_decode(base64_decode(strtr($payload, '-_', '+/'), true),true);
		}else {echo "";}


		$base_url = base_url();

		$this->load->view('index',array("root"=>$base_url));
	}

	public function photo(){	
		$this->load->model('model_db');

		$num = $this->input->get('n');
	
		$items = $this->model_db->viewPhoto($num);
		
		$base_url=base_url();
		$this->load->view('view_photo',array("base_url"=>$base_url,"items"=>$items));
	}

	public function start(){

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */