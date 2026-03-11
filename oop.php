<?php
class SivitasAkademik{
 protected $nama;
 
 public function __construct($nama){
    $this-> nama = $nama;
 }

 public function getNama(){
    return $this->nama;
 }
}

class Dosen extends SivitasAkademik{
    private $nidn;

    public function __construct($nama,$nidn){
        parent::__construct($nama);
            $this-> nidn = $nidn;
    }


    public function getInfoDosen(){
        return "Nama: ". $this->getNama() . ", NID: " . $this->nidn;
    }
    
}

class Mahasiswa extends SivitasAkademik{
    private $npm;

    public function __construct($nama,$npm){
        parent::__construct($nama);
        $this-> npm = $npm;
    }

    public function getInfoMahasiswa(){
        return "Nama: ". $this->getNama() . ", NPM: " . $this->npm;
    }
}


$dosen = new Dosen("Ajib Abdul Kholiq, S.Kom", "123456789");
echo $dosen->getInfoDosen();
echo("\n");
$mahasiswa = new Mahasiswa("Wildan Aditia", "2306700001");
echo $mahasiswa->getInfoMahasiswa();
?>