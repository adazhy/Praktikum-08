<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
// fungsi : menampilakna seluruh data
	public function index()
	{
		// load Model 
        $this->load->model('mahasiswa_model', 'mhs1');

        //pake class model
        $this->mhs1->id = 1;
        $this->mhs1->nim = "0110221075";
        $this->mhs1->nama = "Adzhim";
        $this->mhs1->gender = "P";
        $this->mhs1->ipk = "3.96";

        //Objek 2
        $this->load->model('mahasiswa_model', 'mhs2');
        
        //class + isi data    
        $this->mhs2->id = 2;
        $this->mhs2->nim = "0110221080";
        $this->mhs2->nama = "Ali";
        $this->mhs2->gender = "L";
        $this->mhs2->ipk = "3.70";

        //Objek 3
        $this->load->model('mahasiswa_model', 'mhs3');
        //data   
        $this->mhs3->id = 3;
        $this->mhs3->nim = "0110221083";
        $this->mhs3->nama = "Deri";
        $this->mhs3->gender = "P";
        $this->mhs3->ipk = "3.27";

        //Objek 4
        $this->load->model('mahasiswa_model', 'mhs4');
        //isi data    
        $this->mhs4->id = 4;
        $this->mhs4->nim = "0110221092";
        $this->mhs4->nama = "Elang";
        $this->mhs4->gender = "L";
        $this->mhs4->ipk = "3.62";

        //Objek 5
        $this->load->model('mahasiswa_model', 'mhs5');
        //isi data    
        $this->mhs5->id = 5;
        $this->mhs5->nim = "0110221096";
        $this->mhs5->nama = "Hera";
        $this->mhs5->gender = "P";
        $this->mhs5->ipk = "3.92";

        // simpan objek kedalam array
        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3, $this->mhs4, $this->mhs5];

        //menyiapkan data untuk dikirim ke view
        $data["list_mhs"] = $list_mhs;

        //mengirim data 
        $this->load->view('header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('footer');

	}
}
