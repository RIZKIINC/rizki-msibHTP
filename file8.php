<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan pemrosesan form</title>
</head>
<body>
    <form method="POST">

    <p>Form Input Nilai</p>
    <label>Nama</label>
    <input type="text" name="nama" placeholder="Masukkan Nama"><br>
    <labe>Matakuliah</labe>
    <select name="matkul">
        <option>Pilih Matakuliah</option>
        <option value="html">HTML dan CSS</option>
        <option value="js">Javascript</option>
        <option value="UI/UX">UI/UX</option>
        <option value="PHP">PHP</option>
    </select>
    <br>
    <label>Nilai</label>

    <input type="text" name="nilai" placeholder="masukkan Nilai Anda">
    <button name="proses" type="submit">Simpan</button>
    </form>

    <?php 
    $name = $_POST ['nama'];
    $matakuliah = $_POST ['matkul'];
    $nilai = $_POST ['nilai'];
    $tombol = $_POST ['proses'];

    $ket = ($nilai >= 60) ? "Lulus" : "gagal";

    if($nilai >= 85 && $nilai <= 100) $grade = "A";
    else if ($nilai >= 75 && $nilai <= 84) $grade = "B";
    else if ($nilai >= 60 && $nilai <= 74) $grade = "C";
    else if ($nilai >= 30 && $nilai <= 59) $grade = "D";
    else if ($nilai >= 0 && $nilai <= 29) $grade = "E";
    else $grade = "";

    switch ($grade){
        case "A" : $predikat = "memuaskan"; break;
        case "B" : $predikat = "Bagus"; break;
        case "C" : $predikat = "Cukup"; break;
        case "D" : $predikat = "Kurang"; break;
        case "E" : $predikat = "Buruk"; break;
        default: $predikat ="";
    }
    if(isset($tombol)){
    ?>

    Nama Mahasiswa : <?= $name ?> <br>
    Matakuliah : <?= $matakuliah ?> <br>
    Nilai : <?= $nilai ?> <br>
    Keterangan : <?= $ket ?> <br>
    Grade : <?= $grade ?> <br>
    Predikat : <?= $predikat ?>

    <?php } ?>
</body>
</html>