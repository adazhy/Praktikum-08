<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
// fungsi : menampilakna seluruh data
	public function index()
	{
		// load Model 
        $this->load->model('matakuliah_model', 'mtk1');

        //pake class model
        $this->mtk1->nama = "Pemograman Web";
        $this->mtk1->sks = "3 sks";
        $this->mtk1->kode = "020";

        $this->load->model('matakuliah_model', 'mtk2');

        //pake class model
        $this->mtk2->nama = "UI & UX";
        $this->mtk2->sks = "1 sks";
        $this->mtk2->kode = "231";

        $this->load->model('matakuliah_model', 'mtk3');

        //pake class model
        $this->mtk3->nama = "Basis Data";
        $this->mtk3->sks = "3 sks";
        $this->mtk3->kode = "342";

        $this->load->model('matakuliah_model', 'mtk4');

        //pake class model
        $this->mtk4->nama = "DDP";
        $this->mtk4->sks = "2 sks";
        $this->mtk4->kode = "453";

        $this->load->model('matakuliah_model', 'mtk5');

        //pake class model
        $this->mtk5->nama = "Jaringan Komputer";
        $this->mtk5->sks = "3 sks";
        $this->mtk5->kode = "564";
        // simpan objek kedalam array
        $list_mtk = [$this->mtk1, $this->mtk2, $this->mtk3, $this->mtk4, $this->mtk5];

        //menyiapkan data untuk dikirim ke view
        $data["list_mtk"] = $list_mtk;

        //mengirim data 
        $this->load->view('header');
        $this->load->view('matakuliah/indexmk', $data);
        $this->load->view('footer');

	}
}
