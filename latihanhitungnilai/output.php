<?php
$nama = $_POST['nama'];
$makul = $_POST['makul'];
$absen = $_POST['absen'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

$nilai_absen = $absen * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts = $uts * 0.3;
$nilai_uas = $uas * 0.4;

$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

if ($nilai_akhir >= 80) {
    $grade = "A";
} else if ($nilai_akhir >= 70) {
    $grade = "B"; 
} else if ($nilai_akhir >= 50) {
    $grade = "C";
} else if ($nilai_akhir >= 40) {
    $grade = "D";
} else {
    $grade = "E";
}

echo "
<h1>Hitung Nilai Akhir Mahasiswa</h1>
 Nama Mahasiswa : $nama <br>
 Mata Kuliah : $makul <br>
 Nilai Absen : $nilai_absen <br>
 Nilai Tugas : $nilai_tugas <br>
 Nilai UTS : $nilai_uts <br>
 Nilai UAS : $nilai_uas <br>

 <h4>Nilai Akhir : $nilai_akhir</h4>
 <h4>Grade : $grade</h4>
";
?>
