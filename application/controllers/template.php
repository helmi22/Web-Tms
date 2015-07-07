<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('mdata','mposts','mcats','madmins',true);
		
	}	

	public function index()
	{
		$data['judul']="Beranda | Jual GPS Tracker Tramigo Harga Murah | PT. Tramindo Mitra Sarana";
		$data['main']="home/home";
		$data['aktif']='class="active"';
		$data['posts'] = $this->mposts->getLivePosts(3);
		$data['cats'] = $this->mcats->getTopCategories();
		$this->load->view('home/template',$data);
	}
	public function contact()
	{
		$data['judul']="Kontak Kami | Jual GPS Tracker Tramigo Harga Murah | PT. Tramindo Mitra Sarana";
		$data['main']="home/contact";
		$data['aktif']='class="active"';
		$data['posts'] = $this->mposts->getLivePosts(3);
		$data['cats'] = $this->mcats->getTopCategories();
		$this->load->view('home/contact',$data);
	}
	public function about()
	{
		$data['judul']="Tentang Kami | Jual GPS Tracker Tramigo Harga Murah | PT. Tramindo Mitra Sarana";
		
		$data['aktif']='class="active"';
		$data['posts'] = $this->mposts->getLivePosts(3);
		$data['cats'] = $this->mcats->getTopCategories();
		$this->load->view('home/about',$data);
	}
	public function produk()
	{
		$data['judul']="Produk | Jual GPS Tracker Tramigo Harga Murah | PT. Tramindo Mitra Sarana";
		
		$data['aktif']='class="active"';
		$data['posts'] = $this->mposts->getLivePosts(3);
		$data['cats'] = $this->mcats->getTopCategories();
		$this->load->view('home/produk',$data);
	}
	public function blog()
	{
		$data['judul']="Blog | Jual GPS Tracker Tramigo Harga Murah | PT. Tramindo Mitra Sarana";
		
		$data['aktif']='class="active"';
		$data['posts'] = $this->mposts->getLivePosts(3);
		$data['cats'] = $this->mcats->getTopCategories();
		$this->load->view('home/blog',$data);
	}
	public function order()
	{
		$data['judul']="Cara Order | Jual GPS Tracker Tramigo Harga Murah | PT. Tramindo Mitra Sarana";
		
		$data['aktif']='class="active"';
		$data['posts'] = $this->mposts->getLivePosts(3);
		$data['cats'] = $this->mcats->getTopCategories();
		$this->load->view('home/order',$data);
	}
	function addcomment(){
		if ($this->input->post('isi')){
			$this->mcomments->addComment();
		}
  	
  	redirect('template/post/'.$this->input->post('post_id'), 'refresh');
  
  }
	public function login()
	{
		$data['judul']="Halaman Login PT. Tramindo Mitra Sarana";
		//$data['main']="home/login";
		$data['aktif']='class="active"';
		$data['cats'] = $this->mcats->getTopCategories();
		$this->load->view('home/login',$data);
	}
	function ceklogin(){
  	$this->load->library('encrypt');
	if ($this->input->post('username')){
		$u = $this->input->post('username');
		$pw = $this->input->post('password');
		$row = $this->madmins->verifyUser($u,$pw);
		if (count($row)){
			$_SESSION['userid'] = $row['id'];
			redirect('admin/dashboard','refresh');
		}else{
			$this->session->set_flashdata('result','maap username atau password Anda salah!');
			redirect('template/login','refresh');
		}
	}else{
		$this->session->set_flashdata('result','Isi Username dan password dulu!');
		redirect('template/login','refresh');
	}  
   
	}
	
	
	function logout()
	{
		$sesi_items = array ('user' => '');
		$this->session->unset_userdata($sesi_items);
		$this->session->set_flashdata('result','Anda wes logout');
		header('location:'.base_url().'template/login');
	}	
	function post($id){
		// $data['main'] = "home/post";
		$data['posts'] = $this->mposts->getLivePosts(3);
		$data['post'] = $this->mposts->getPost($id);
		$data['comments'] = $this->mcomments->getComments($id);
		$data['cats'] = $this->mcats->getTopCategories();
		$data['judul'] = $data['post']['title'];
		$this->load->vars($data);
		$this->load->view('home/post');  
  
    }
    
	function category($id){
		$data['category'] = $this->mcats->getCategory($id);
		$data['posts'] = $this->mposts->getAllPostsByCategory($id);
		$data['cats'] = $this->mcats->getTopCategories();
		$data['judul'] = $data['category']['name'];
		$data['main'] = 'home/blog';
		$this->load->vars($data);
		$this->load->view('home/blog');  
	}
	
	
	
}
?>