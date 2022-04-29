<?php
class Mahasiswa_model extends  cI_Model{
    public $id, $nama, $nim, $gender, $tmp_lahir, $ipk;

    public function predikat(){
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Bagus";
        // if ($this->ipk >= 3.75) {
        //     echo "Cumlaude";
        // } else {
        //     echo "Bagus";
        // }
        return $predikat;
    }
}
?>