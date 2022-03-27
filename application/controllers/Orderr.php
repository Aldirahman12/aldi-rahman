<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderr extends CI_Controller {
	public function fasilitasr()
	{ 
		if(isset($_GET['id_kota'])){
			$data['list'] = $this->m_general->gDataJW('hotel','umum','id_kota',array('umum.id_kota'=>$_GET['id_kota']))->result();
		}else{

			$data['list'] = $this->m_general->gDataJ('hotel','umum','id_kota')->result();
		}
		$data['umum'] = $this->m_general->gDataA('umum')->result();
		$this->load->view('src/header',$data);
		$this->load->view('kamars',$data);
		$this->load->view('src/footer');
	}
	
}
