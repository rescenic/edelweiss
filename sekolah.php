<html>

<head>
    <title><?php echo "Sekolah class";?></title>
</head>

<body>
    <?php
class Sekolah {
    public $kelas;
}

class Kelas extends Sekolah {
    public $id_kelas;
    public $guru;
    public $siswa;
    
    function __construct(){
        $this->id_kelas = rand (1,6); //Kelas 1 s.d. Kelas 6
        //echo $this->id_kelas . " adalah nomor id kelas. <br />";
    }
}

class Guru extends Kelas {
    public $mata_pelajaran;
}

class Siswa extends Kelas {
    protected $id_siswa;
    protected $nama_siswa;
    protected $umur_siswa;

    function __construct($nama_siswa){
        $this->nama_siswa = $nama_siswa;
        $this->id_siswa = rand (1, 20); //rentang id siswa
        $this->umur_siswa = rand (7, 12); //rentang umur siswa
        //echo $this->id_siswa . " adalah nomor id siswa. <br />";
    }

    function getnama(){
        return $this->nama_siswa;
    }

    function getid(){
        return $this->id_siswa;
    }

    function getumur(){
        return $this->umur_siswa;
    }

}

class Mata_Pelajaran {
    public $mata_pelajaran;
}

class Grade {
    public $grade;
}

$kelas_1 = new Kelas();
$kelas_2 = new Kelas();

$siswa_1 = new Siswa("Ridwan");
$siswa_2 = new Siswa("Maulana");
$siswa_3 = new Siswa("Hakim");
$siswa_4 = new Siswa("Alice");
$siswa_5 = new Siswa("Bob");
$siswa_6 = new Siswa("Tandal");

echo "<br /> Siswa yang bernama " . $siswa_1->getnama() . " memiliki no. id " .$siswa_1->getid() . " dan berusia " . $siswa_1->getumur() . " tahun. Siswa tersebut masuk ke dalam kelas " . $kelas_1->id_kelas . ". <br/><br/>";

echo "<br /> Siswa yang bernama " . $siswa_2->getnama() . " memiliki no. id " .$siswa_2->getid() . " dan berusia " . $siswa_2->getumur() . " tahun. Siswa tersebut masuk ke dalam kelas " . $kelas_1->id_kelas . ". <br/><br/>";

echo "<br /> Siswa yang bernama " . $siswa_3->getnama() . " memiliki no. id " .$siswa_3->getid() . " dan berusia " . $siswa_3->getumur() . " tahun. Siswa tersebut masuk ke dalam kelas " . $kelas_1->id_kelas . ". <br/><br/>";

echo "<br /> Siswa yang bernama " . $siswa_4->getnama() . " memiliki no. id " .$siswa_4->getid() . " dan berusia " . $siswa_4->getumur() . " tahun. Siswa tersebut masuk ke dalam kelas " . $kelas_2->id_kelas . ". <br/><br/>";

echo "<br /> Siswa yang bernama " . $siswa_5->getnama() . " memiliki no. id " .$siswa_5->getid() . " dan berusia " . $siswa_5->getumur() . " tahun. Siswa tersebut masuk ke dalam kelas " . $kelas_2->id_kelas . ". <br/><br/>";

echo "<br /> Siswa yang bernama " . $siswa_6->getnama() . " memiliki no. id " .$siswa_6->getid() . " dan berusia " . $siswa_6->getumur() . " tahun. Siswa tersebut masuk ke dalam kelas " . $kelas_2->id_kelas . ". <br/><br/>";

?>
</body>

</html>