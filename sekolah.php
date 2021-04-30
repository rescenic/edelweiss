<html>

<head>
    <title><?php echo "Sekolah class";?></title>
</head>

<body>
    <?php
class Sekolah {
    protected $kelas;
}

class Kelas extends Sekolah {
    protected $guru;
    protected $siswa;
}

class Guru extends Kelas {
    public $mata_pelajaran;
}

class Siswa extends Kelas {
    public $id_siswa;
    public $nama_siswa;
    public $umur_siswa;

    function __construct(){
        $this->id_siswa = rand (1, 30);
        //echo $this->id_siswa . " adalah nomor id siswa. <br />";
    }

    function getNamaSiswa(){
        return $this->nama_siswa;
    }

    function getUmurSiswa(){
        return $this->umur_siswa;
    }
}

class Mata_Pelajaran {
    public $mata_pelajaran;
}

class Grade {
    public $grade;
}

$siswa_satu = new Siswa();

$siswa_satu->nama_siswa = "Ridwan";
$siswa_satu->umur_siswa = 15;

$siswa_dua = new Siswa();

$siswa_dua->nama_siswa = "Maulana";
$siswa_dua->umur_siswa = 16;

$siswa_tiga = new Siswa();

$siswa_tiga->nama_siswa = "Hakim";
$siswa_tiga->umur_siswa = 17;

//print_r($siswa_satu);

echo "<br /> Siswa yang bernama " . $siswa_satu->nama_siswa . " memiliki no. id " .$siswa_satu->id_siswa . " dan berusia " . $siswa_satu->umur_siswa . " tahun.<br/><br />";

echo "<br /> Siswa yang bernama " . $siswa_dua->nama_siswa . " memiliki no. id " .$siswa_dua->id_siswa . " dan berusia " . $siswa_dua->umur_siswa . " tahun.<br/><br />";

echo "<br /> Siswa yang bernama " . $siswa_tiga->nama_siswa . " memiliki no. id " .$siswa_tiga->id_siswa . " dan berusia " . $siswa_tiga->umur_siswa . " tahun.<br/><br />";

?>
</body>

</html>