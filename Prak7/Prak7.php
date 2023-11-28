<!-- Andreyan Renaldi -->
<!-- 121140186 -->
<!-- Kelas RB  -->

<?php
class Manusia{
    private $Nama;
             
    public function setNama($Nama) {
        $regex = "/^[a-zA-Z\s]+$/";
        if(!preg_match($regex, $Nama)) {
            throw new Exception("Salah Input");
        }
        $this->Nama = $Nama;
    }
    
    public function getNama() {   
        return $this->Nama;
    }
}

class Mahasiswa extends Manusia { 
    private $NIM;
    private $Angkatan;
    private $Prodi;
    public function __construct($nama,$NIM,$Angkatan,$Prodi) { 
        parent::setNama($nama);    
        $this->NIM = $NIM;
        $this->Angkatan = $Angkatan;
        $this->Prodi = $Prodi;
    }

    public function setNIM($NIM) { 
        $this->NIM = $NIM;
    }
    public function getNIM() {    
        return $this->NIM;
    }

    public function setAngkatan($Angkatan) {    
        $this->Angkatan = $Angkatan;
    }
    public function getAngkatan() {    
        return $this->Angkatan;
    }

    public function setProdi($Prodi) {    
        $this->Prodi = $Prodi;
    }
    public function getProdi() {    
        return $this->Prodi;
    }

    public function displayInfo() {    
        echo "Nama: " . $this->getNama() . "<br>";
        echo "NIM: " . $this->getNIM() . "<br>";
        echo "Angkatan: " . $this->getAngkatan() . "<br>";
        echo "Prodi: " . $this->getProdi() . "<br>";
    }
    }

$Manusia1 = new Mahasiswa("Rio Aditya", 121140140, 2021, "Teknik Informatika");

echo "data lama:<br>";
$Manusia1->displayInfo();

$Manusia1->setProdi("Teknik Material");
echo "<br>info terbaru:<br>";
$Manusia1->displayInfo();

try{
    $Manusia1->setNama("RenaL");
    $Manusia1->displayInfo();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>