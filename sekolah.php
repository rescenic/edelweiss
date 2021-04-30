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

$kelas_satu = new Kelas();
$kelas_dua = new Kelas();

$siswa_satu = new Siswa("Ridwan");
$siswa_dua = new Siswa("Maulana");
$siswa_tiga = new Siswa("Hakim");


echo "<br /> Siswa yang bernama " . $siswa_satu->getnama() . " memiliki no. id " .$siswa_satu->getid() . " dan berusia " . $siswa_satu->getumur() . " tahun. Siswa tersebut masuk ke dalam kelas " . $kelas_satu->id_kelas . ". <br/><br/>";

echo "<br /> Siswa yang bernama " . $siswa_dua->getnama() . " memiliki no. id " .$siswa_dua->getid() . " dan berusia " . $siswa_dua->getumur() . " tahun. Siswa tersebut masuk ke dalam kelas " . $kelas_satu->id_kelas . ". <br/><br/>";

echo "<br /> Siswa yang bernama " . $siswa_tiga->getnama() . " memiliki no. id " .$siswa_tiga->getid() . " dan berusia " . $siswa_tiga->getumur() . " tahun.Siswa tersebut masuk ke dalam kelas " . $kelas_satu->id_kelas . ". <br/><br/>";

?>
</body>

</html>