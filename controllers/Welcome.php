<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}
//tablesiswa---------------------------------------------------------------------
	public function DataSiswa()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_siswa','nis',$nis)->row();
			$data['detail']['nis']= $tampil->nis;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='VFormUpdateSiswa';
		}
		else
		{	
			$data['DataSiswa']=$this->MSudi->GetData('tbl_siswa');
			$data['content']='VSiswa';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSiswa()
	{
		$data['content']='VFormAddSiswa';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSiswa()
	{
		 $add['nis']=$this->input->post('nis');
         	 $add['nama']= $this->input->post('nama');
         	 $add['alamat']= $this->input->post('alamat');  
        	 $this->MSudi->AddData('tbl_siswa',$add);
        	 redirect(site_url('Welcome/DataSiswa'));
	}



	public function UpdateDataSiswa()
	{
		 $nis=$this->input->post('nis');
		 	$update['nama']= $this->input->post('nama');
         	 	$update['alamat']= $this->input->post('alamat');
          	 $this->MSudi->UpdateData('tbl_siswa','nis',$nis,$update);
		 redirect(site_url('Welcome/DataSiswa'));
	}


	public function DeleteDataSiswa()
	{
		 $nis=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_siswa','nis',$nis);
        	 redirect(site_url('Welcome/DataSiswa'));
	}
//tablesiswa-------------------------------------------------------------




//tableprofile-----------------------------------------------------------------
public function DataProfile()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$kd_profile=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_profile','kd_profile',$kd_profile)->row();
			$data['detail']['kd_profile']= $tampil->kd_profile;
            $data['detail']['nama_profile']= $tampil->nama_profile;
			$data['content']='VFormUpdateProfile';
		}
		else
		{	
			$data['DataProfile']=$this->MSudi->GetData('tbl_profile');
			$data['content']='VProfile';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddProfile()
	{
		$data['content']='VFormAddProfile';
		$this->load->view('VBackend',$data);
	}
	public function AddDataProfile()
	{
		 $add['kd_profile']=$this->input->post('kd_profile');
         	 $add['nama_profile']= $this->input->post('nama_profile'); 
        	 $this->MSudi->AddData('tbl_profile',$add);
        	 redirect(site_url('Welcome/DataProfile'));
	}



	public function UpdateDataProfile()
	{
		 $kd_profile= $this->input->post('kd_profile');
         	 $update['nama_profile']= $this->input->post('nama_profile');
          	 $this->MSudi->UpdateData('tbl_profile','kd_profile',$kd_profile,$update);
		 redirect(site_url('Welcome/DataProfile'));
	}


	public function DeleteDataProfile()
	{
		 $kd_profile=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_profile','kd_profile',$kd_profile);
        	 redirect(site_url('Welcome/DataProfile'));
	}
//tableprofile--------------------------------------------------------------------------



//tablekontak---------------------------------------------------------------------------
public function DataKontak()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$kd_kontak=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_kontak','kd_kontak',$kd_kontak)->row();
			$data['detail']['kd_kontak']= $tampil->kd_kontak;
            		$data['detail']['nama_kontak']= $tampil->nama_kontak;
			$data['content']='VFormUpdateKontak';
		}
		else
		{	
			$data['DataKontak']=$this->MSudi->GetData('tbl_kontak');
			$data['content']='VKontak';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKontak()
	{
		$data['content']='VFormAddKontak';
		$this->load->view('VBackend',$data);
	}
	public function AddDataKontak()
	{
		 $add['kd_kontak']=$this->input->post('kd_kontak');
         	 $add['nama_kontak']= $this->input->post('nama_kontak'); 
        	 $this->MSudi->AddData('tbl_kontak',$add);
        	 redirect(site_url('Welcome/DataKontak'));
	}



	public function UpdateDataKontak()
	{
		  $kd_kontak= $this->input->post('kd_kontak');
         	 $update['nama_kontak']= $this->input->post('nama_kontak');
          	 $this->MSudi->UpdateData('tbl_kontak','kd_kontak',$kd_kontak,$update);
		 redirect(site_url('Welcome/DataKontak'));
	}


	public function DeleteDataKontak()
	{
		 $kd_kontak=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_kontak','kd_kontak',$kd_kontak);
        	 redirect(site_url('Welcome/DataKontak'));
	}
//tablekontak--------------------------------------------------------------------------



//tableberita---------------------------------------------------------------------------
public function DataBerita()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$kd_berita=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_berita','kd_berita',$kd_berita)->row();
			$data['detail']['kd_berita']= $tampil->kd_berita;
            		$data['detail']['nama_berita']= $tampil->nama_berita;
			$data['content']='VFormUpdateBerita';
		}
		else
		{	
			$data['DataBerita']=$this->MSudi->GetData('tbl_berita');
			$data['content']='VBerita';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddBerita()
	{
		$data['content']='VFormAddBerita';
		$this->load->view('VBackend',$data);
	}
	public function AddDataBerita()
	{
		 $add['kd_berita']=$this->input->post('kd_berita');
         	 $add['nama_berita']= $this->input->post('nama_berita'); 
        	 $this->MSudi->AddData('tbl_berita',$add);
        	 redirect(site_url('Welcome/DataBerita'));
	}



	public function UpdateDataBerita()
	{
		 $kd_berita=$this->input->post('kd_berita');
		 $update['nama_berita']= $this->input->post('nama_berita');
          	 $this->MSudi->UpdateData('tbl_berita','kd_berita',$kd_berita,$update);
		 redirect(site_url('Welcome/DataBerita'));
	}


	public function DeleteDataBerita()
	{
		 $kd_berita=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_berita','kd_berita',$kd_berita);
        	 redirect(site_url('Welcome/DataBerita'));
	}
//tableberita--------------------------------------------------------------------------
	

//tableguru---------------------------------------------------------------------------
public function DataGuru()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nip=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_guru','nip',$nip)->row();
			$data['detail']['nip']= $tampil->nip;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['no_hp']= $tampil->no_hp;
            		$data['detail']['email']= $tampil->email;
			$data['content']='VFormUpdateGuru';
		}
		else
		{	
			$data['DataGuru']=$this->MSudi->GetData('tbl_guru');
			$data['content']='VGuru';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddGuru()
	{
		$data['content']='VFormAddGuru';
		$this->load->view('VBackend',$data);
	}
	public function AddDataGuru()
	{
		 $add['nip']=$this->input->post('nip');
         	 $add['nama']= $this->input->post('nama');
         	 $add['no_hp']= $this->input->post('no_hp');  
         	  $add['email']= $this->input->post('email');
        	 $this->MSudi->AddData('tbl_guru',$add);
        	 redirect(site_url('Welcome/DataGuru'));
	}



	public function UpdateDataGuru()
	{
		 $nip=$this->input->post('nip');
		 	$update['nama']= $this->input->post('nama');
         	 	$update['no_hp']= $this->input->post('no_hp');
         	 		$update['email']= $this->input->post('email');
          	 $this->MSudi->UpdateData('tbl_guru','nip',$nip,$update);
		 redirect(site_url('Welcome/DataGuru'));
	}


	public function DeleteDataGuru()
	{
		 $nip=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_guru','nip',$nip);
        	 redirect(site_url('Welcome/DataGuru'));
	}
//tableguru--------------------------------------------------------------------------



//tablematpel---------------------------------------------------------------------------
public function DataMatpel()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$kd_matpel=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_matpel','kd_matpel',$kd_matpel)->row();
			$data['detail']['kd_matpel']= $tampil->kd_matpel;
            		$data['detail']['nama_matpel']= $tampil->nama_matpel;
            		$data['detail']['kkm']= $tampil->kkm;
			$data['content']='VFormUpdateMatpel';
		}
		else
		{	
			$data['DataMatpel']=$this->MSudi->GetData('tbl_matpel');
			$data['content']='VMatpel';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddMatpel()
	{
		$data['content']='VFormAddMatpel';
		$this->load->view('VBackend',$data);
	}
	public function AddDataMatpel()
	{
		 $add['kd_matpel']=$this->input->post('kd_matpel');
         	 $add['nama_matpel']= $this->input->post('nama_matpel');
         	 $add['kkm']= $this->input->post('kkm');  
        	 $this->MSudi->AddData('tbl_matpel',$add);
        	 redirect(site_url('Welcome/DataMatpel'));
	}



	public function UpdateDataMatpel()
	{
		 $kd_matpel=$this->input->post('kd_matpel');
		 	$update['nama_matpel']= $this->input->post('nama_matpel');
         	 	$update['kkm']= $this->input->post('kkm');
          	 $this->MSudi->UpdateData('tbl_matpel','kd_matpel',$kd_matpel,$update);
		 redirect(site_url('Welcome/DataMatpel'));
	}


	public function DeleteDataMatpel()
	{
		 $kd_matpel=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_matpel','kd_matpel',$kd_matpel);
        	 redirect(site_url('Welcome/DataMatpel'));
	}
//tablematpel--------------------------------------------------------------------------



//tablekelas---------------------------------------------------------------------------
public function DataKelas()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$kd_kelas=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_kelas','kd_kelas',$kd_kelas)->row();
			$data['detail']['kd_kelas']= $tampil->kd_kelas;
            		$data['detail']['nama_kelas']= $tampil->nama_kelas;
			$data['content']='VFormUpdateKelas';
		}
		else
		{	
			$data['DataKelas']=$this->MSudi->GetData('tbl_kelas');
			$data['content']='VKelas';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKelas()
	{
		$data['content']='VFormAddKelas';
		$this->load->view('VBackend',$data);
	}
	public function AddDataKelas()
	{
		 $add['kd_kelas']=$this->input->post('kd_kelas');
         	 $add['nama_kelas']= $this->input->post('nama_kelas');
        	 $this->MSudi->AddData('tbl_kelas',$add);
        	 redirect(site_url('Welcome/DataKelas'));
	}



	public function UpdateDataKelas()
	{
		 $kd_kelas=$this->input->post('kd_kelas');
		 	$update['nama_kelas']= $this->input->post('nama_kelas');
          	 $this->MSudi->UpdateData('tbl_kelas','kd_kelas',$kd_kelas,$update);
		 redirect(site_url('Welcome/DataKelas'));
	}


	public function DeleteDataKelas()
	{
		 $kd_kelas=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_kelas','kd_kelas',$kd_kelas);
        	 redirect(site_url('Welcome/DataKelas'));
	}
//tablekelas--------------------------------------------------------------------------



//tablejadwal---------------------------------------------------------------------------
public function DataJadwal()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$kd_jadwal=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_jadwal','kd_jadwal',$kd_jadwal)->row();
			$data['detail']['kd_jadwal']= $tampil->kd_jadwal;
            		$data['detail']['kd_kelas']= $tampil->kd_kelas;
            		$data['detail']['kd_matpel']= $tampil->kd_matpel;
            		$data['detail']['nip']= $tampil->nip;
			$data['content']='VFormUpdateJadwal';
		}
		else
		{	
			$data['DataJadwal']=$this->MSudi->GetData('tbl_jadwal');
			$data['content']='VJadwal';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddJadwal()
	{
		$data['content']='VFormAddJadwal';
		$this->load->view('VBackend',$data);
	}
	public function AddDataJadwal()
	{
		 $add['kd_jadwal']=$this->input->post('kd_jadwal');
         	 $add['kd_kelas']= $this->input->post('kd_kelas');
         	 $add['kd_matpel']= $this->input->post('kd_matpel');  
         	  $add['nip']= $this->input->post('nip');
        	 $this->MSudi->AddData('tbl_jadwal',$add);
        	 redirect(site_url('Welcome/DataJadwal'));
	}



	public function UpdateDataJadwal()
	{
		 $kd_jadwal=$this->input->post('kd_jadwal');
		 	$update['kd_kelas']= $this->input->post('kd_kelas');
         	 	$update['kd_matpel']= $this->input->post('kd_matpel');
         	 		$update['nip']= $this->input->post('nip');
          	 $this->MSudi->UpdateData('tbl_jadwal','kd_jadwal',$kd_jadwal,$update);
		 redirect(site_url('Welcome/DataJadwal'));
	}


	public function DeleteDataJadwal()
	{
		 $kd_jadwal=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_jadwal','kd_jadwal',$kd_jadwal);
        	 redirect(site_url('Welcome/DataJadwal'));
	}
//tablejadwal--------------------------------------------------------------------------

	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}