<?php

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];

    function skor_skill($skills)
    {
        $skill_list = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 30,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50,
        ];
        $result = 0;
        foreach ($skills as $skill) {
            $result = $result + $skill_list[$skill];
        }

        return $result;
    };

    function kategori_skill($kategori)
    {
        // if ($kategori == 0) {
        //     $grade = "Tidak Memadai";
        // } elseif ($kategori >= 1 and $kategori <= 40) {
        //     $grade = "Kurang";
        // } elseif ($kategori >= 41 and $kategori <= 60) {
        //     $grade =  "Cukup";
        // } elseif ($kategori >= 61 and $kategori <= 100) {
        //     $grade = "Baik";
        // } elseif ($kategori >= 101 and $kategori <= 150) {
        //     $grade = "Sangat Baik";
        // } else {
        //     $grade = "Error";
        // }
        // return $grade;

        switch ($kategori) {
            case $kategori == 0:
                $grade = "Tidak Memadai";
                break;
            case $kategori >= 1 == $kategori <= 40:
                $grade = "Kurang";
                break;
            case $kategori >= 41 == $kategori <= 60:
                $grade = "Cukup";
                break;
            case $kategori >= 61 == $kategori <= 100:
                $grade = "Baik";
                break;
            case $kategori >= 101 == $kategori <= 150:
                $grade = "Sangat Baik";
                break;
            default:
                echo "Jumlah Skor Tidak Sesuai Predikat Yang Terdata";
        }
        return $grade;


        // if (skor_skill($skills) == 0) {
        //     echo "Tidak Memadai";
        // } elseif (skor_skill($skills) >= 1 and skor_skill($skills) <= 40) {
        //     echo "Kurang";
        // } elseif (skor_skill($skills) >= 41 and skor_skill($skills) <= 60) {
        //     echo "Cukup";
        // } elseif (skor_skill($skills) >= 61 and skor_skill($skills) <= 100) {
        //     echo "Baik";
        // } elseif (skor_skill($skills) >= 101 and skor_skill($skills) <= 150) {
        //     echo "Sangat Baik";
        // } else {
        //     echo "Tidak Ada Data Yang Cocok";
        // }
    };
    echo "NIM : $nim <br>";
    echo "Nama : $nama <br>";
    echo "Jenis Kelamin : $gender <br>";
    echo "Programs Studi : $prodi <br>";
    echo "Skill Programming : <br>";
    foreach ($skills as $skill) {
        echo "- $skill <br>";
    }
    echo "Tempat Domisili : $domisili <br>";
    echo "Skor Skill : " . skor_skill($skills);
    $kategori = skor_skill($skills);
    $grade = kategori_skill($kategori);
    echo "<br> Kategori Skill : " . $grade;
} else {
    echo "Error";
}
