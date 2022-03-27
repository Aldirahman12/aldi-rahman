 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$user = $this->session->userdata('id_user');
		$level = $this->session->userdata('level');
		if(!$user&&!$level){
			redirect('account/login');
		}else if($level!=1){
			redirect(base_url());
		}
	}
	public function index(){ 
		$data['list'] = $this->m_general->gDataJ('kamar','fasilitas','id_kota')->result();
		$this->load->view('src/header',$data);
		$this->load->view('kamar/index',$data);
		$this->load->view('src/footer');
	}
	public function add(){ 
		$data['title'] = "Tambah kamar";
		if(!empty($this->input->post())){
			$insert = $this->input->post();
			$foto = $_FILES['foto']['name'];
			if ($foto !== ""){
				$path = 'assets/images/apartement/';
				if (!file_exists($path)) {
					mkdir($path, 0777, true);
				}
				$config['upload_path'] = $path;   
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = '0';          
				$config['overwrite'] = false;
				$this->load->library('upload', $config);
				$this->upload->do_upload('foto');
				$upload_data = $this->upload->data();
				$insert['foto'] = $upload_data['file_name'];
			}else{
				$insert['foto'] = 'default.png';
			}
			$in = $this->m_general->iData('kamar',$insert);
			if($in){
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">kamar berhasil ditambahkan</div>');
				redirect('Kamar');
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Terjadi Kesalahan</div>');
			}
		}
		$data['fasilitas'] = $this->m_general->gDataA('fasilitas')->result();
		$this->load->view('src/header',$data);
		$this->load->view('kamar/add',$data);
		$this->load->view('src/footer');
	}
	public function edit($id_kamar){ 
		$data['title'] = "Edit Apartemen";
		if(!empty($this->input->post())){
			$update = $this->input->post();
			$foto = $_FILES['foto']['name'];
			if(!empty($foto)){
				if ($foto !== ""){
					$path = 'assets/images/apartement/';
					if (!file_exists($path)) {
						mkdir($path, 0777, true);
					}
					$config['upload_path'] = $path;   
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '0';          
					$config['overwrite'] = false;
					$this->load->library('upload', $config);
					$this->upload->do_upload('foto');
					$upload_data = $this->upload->data();
					$update['foto'] = $upload_data['file_name'];
				}else{
					$update['foto'] = 'default.png';
				}
			}
			$up = $this->m_general->uData('kamar',$update,array('id_kamar'=>$id_kamar));
			if($up){
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">kamar berhasil diupdate</div>');
				redirect('kamar');
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Terjadi Kesalahan</div>');
			}
		}
		$data['fasilitas'] = $this->m_general->gDataA('fasilitas')->result();
		$data['detail'] = $this->m_general->gDataW('kamar',array('id_kamar'=>$id_kamar))->row();
		$this->load->view('src/header',$data);
		$this->load->view('kamar/edit',$data);
		$this->load->view('src/footer');
	}
	public function delete($id_kamar){ 
		$del = $this->m_general->dData('kamar',array('id_kamar'=>$id_kamar));
		if($del){
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">kamar berhasil dihapus</div>');
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Terjadi Kesalahan</div>');
		}
		redirect('kamar');
	}
}
