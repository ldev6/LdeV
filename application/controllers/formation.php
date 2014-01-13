<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formation extends CI_Controller {

	public function index()
	{
		$this->load->view('formation');
	}
	
	public function projet()
	{
		$this->load->view('projet');
	}
	
	public function cv()
	{
		$this->load->view('cv');
	}
	public function calendar(){
		$this->load->view('calendar');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	
	public function news()
	{
		$this->load->view('news');
	}
	
	public function blog()
	{
		$this->load->view('blog');
	}
	
	public function portfolio(){
		$this->load->view('portfolio');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */