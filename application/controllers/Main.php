<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
		$this->load->helper('file');  
    }
	
	public function index()
	{		
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');

		if($this->input->post('action')=="search")
		{
			$latitude = $this->input->post('locLatitude');
			$longitude = $this->input->post('locLongitude');
			redirect('main/search/'.$latitude.'/'.$longitude,'location');
		}
		
		$readFile = read_file('./uploads/affiliates.txt');
		$allLocations=json_decode($readFile, true);
		usort($allLocations, function($a, $b) {
			return $a["affiliate_id"] > $b["affiliate_id"] ? -1 : 1;
		});
		$data["allLocations"] = $allLocations;

		$this->load->view('index',$data);
	}
	
	public function search($latitude,$longitude)
	{		
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
		
		$readFile = read_file('./uploads/affiliates.txt');
		$allLocations=json_decode($readFile, true);
		usort($allLocations, function($a, $b) {
			return $a["affiliate_id"] > $b["affiliate_id"] ? -1 : 1;
		});
		$data["allLocations"] = $allLocations;
		$data["latitude"]=$latitude;
		$data["longitude"]=$longitude;

		$this->load->view('search',$data);
	}
}