<!-- Mengingatkan untuk tugas pekan ini kalian diminta buat class pada php. 
Berikut detailnya:
 1. Buat class Motor
 2. Isi atributnya: merk, bensin, topSpeed, cc
 3. Dibuatkan constructornya
 4. Buat method `jalan` yang menerima parameter `jarak`.
 * Fungsi method berisi: mengurangi bensin sesuai jarak. 
 * 1 liter untuk 30km -->

<?php
class Motor
{
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;

    public function __construct($merk, $bensin, $topSpeed, $cc)
    {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }

    public function getInfo()
    {
        echo "<br>Merk : " . $this->merk;
        echo "<br>Bensin : " . $this->bensin . " Liter";
        echo "<br>Top Speed : " . $this->topSpeed . " km/H";
        echo "<br>CC : " . $this->cc;
    }

    public function jalan($jarak)
    {
        $pemakaianBensin = $jarak / 30;
        if ($pemakaianBensin > $this->bensin) {
            echo "Bensin Tidak Cukup, Harap Isi Ulang di SPBU!";
        } else {
            $this->bensin -= $pemakaianBensin;
            echo "Berhasil Berjalan sejauh " . $jarak . " km";
        }
    }
}

$Motor1 = new Motor('Honda', 4, 100, 150);

$Motor1->getInfo();
echo "<br> Keterangan : ";
$Motor1->jalan(200);
?>