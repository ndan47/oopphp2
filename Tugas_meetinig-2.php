<?php
// definisi kelas 
class Dosen {
    // attribute atau properti 
    public $nama;
    public $nip;
    public $mataKuliah;

    // metode atau function 
    public function tampilkanDosen() {
        return "Nama : $this->nama <br>Nip : $this->nip <br>Matakulliah : $this->mataKuliah</br>";
    }

    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
}

$dosen = new Dosen("Pak Abda'u", "32436554", "Praktikuk WEB-2");
echo $dosen->tampilkanDosen();
?>
