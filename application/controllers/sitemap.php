<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends CI_Controller{

	public function index(){
		$this->load->helper('url');
		$this->load->model('m_sitemap');
		$data['posts']=$this->m_sitemap->generate();
		$this->load->view('home/v_sitemap',$data);
	}
}