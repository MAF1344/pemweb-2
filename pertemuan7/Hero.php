<?php
class Hero
{
    /**
     * Access modifier pada OOP PHP ada 3:
     * 1. Public : attribut atau method dapat di akses oleh siapapun
     * 2. Privated : attribut atau method hanya dapat diakses oleh class saat ini aja
     * 3. Protected : mirip seperti private bedanya, dia dapat diakses pula oleh anak classnya
     */

    // atribute / property
    public $nama;
    public $health;
    public $damage;
    public $level = 1;
    public $xp = 0;

    // method yang dijalankan otomatis pada pertama kali object dibuat 
    public function __construct($nama, $health, $damage)
    {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }

    // method
    public function getInfo()
    {
        echo "<hr>Nama :" . $this->nama;
        echo "<br>HP :" . $this->health;
        echo "<br>Damage :" . $this->damage;
        echo "<br>XP :" . $this->xp;
        echo "<br>Level :" . $this->level;
    }

    // method untuk naik 1 level 
    public function levelUp()
    {
        $this->level = $this->level + 1;
        $this->health = $this->health + 250;
        $this->damage = $this->damage + 45;

        // kurangi xp
        $this->xp = 0;
    }

    public function farming()
    {
        $this->xp = $this->xp + 55;
        echo "<br>----- $this->nama Telah Melakukan Farming -----";

        if ($this->xp >= 100) {
            $this->levelUp();
        }
    }

    public function attack($target){
        $target->health = $target->health - $this->damage;
    }
}

// Membuat object / instansiasi
$hero1 = new Hero("Alucard", 3200, 250);
$hero2 = new Hero("Franco", 5000, 50);

// panggil method pada objek
$hero1->getInfo();
$hero2->getInfo();

$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();

$hero2->farming();

$hero1->attack($hero2);
echo "<br>";
$hero1->getInfo();
$hero2->getInfo();
