<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
// fungsi : menampilakna seluruh data
	public function index()
	{
		// load Model 
        $this->load->model('dosen_model', 'dsn1');

        //pake class model
        $this->dsn1->id = 1;
        $this->dsn1->nama = "Sirojul Munir";
        $this->dsn1->gender = "L";
        $this->dsn1->tmp_lahir = "Depok";
        $this->dsn1->pendidikan = "S3";

        // load Model 
        $this->load->model('dosen_model', 'dsn2');

        //pake class model
        $this->dsn2->id = 2;
        $this->dsn2->nama = "Tiffany Nabarian";
        $this->dsn2->gender = "P";
        $this->dsn2->tmp_lahir = "Jakarta";
        $this->dsn2->pendidikan = "S1";

        // load Model 
        $this->load->model('dosen_model', 'dsn3');

        //pake class model
        $this->dsn3->id = 3;
        $this->dsn3->nama = "Luqman Rosyidi";
        $this->dsn3->gender = "L";
        $this->dsn3->tmp_lahir = "Surabaya";
        $this->dsn3->pendidikan = "S3";

        // load Model 
        $this->load->model('dosen_model', 'dsn4');

        //pake class model
        $this->dsn4->id = 4;
        $this->dsn4->nama = "Ahmat Rio";
        $this->dsn4->gender = "L";
        $this->dsn4->tmp_lahir = "Medan";
        $this->dsn4->pendidikan = "S1";

        // load Model 
        $this->load->model('dosen_model', 'dsn5');

        //pake class model
        $this->dsn5->id = 5;
        $this->dsn5->nama = "Aulia Rahmah";
        $this->dsn5->gender = "P";
        $this->dsn5->tmp_lahir = "Riau";
        $this->dsn5->pendidikan = "S2";

        // simpan objek kedalam array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4, $this->dsn5];

        //menyiapkan data untuk dikirim ke view
        $data["list_dsn"] = $list_dsn;

        //mengirim data 
        $this->load->view('header');
        $this->load->view('dosen/indexd', $data);
        $this->load->view('footer');

	}
}
