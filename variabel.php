<?php

// String 
$string = "Tipe data string digunakan untuk menampilkan karakter ";

$namaDepan = 'Naris';
$namaBelakang = 'Birdana';
$alamat = 'Kota raja';


$integer= 'Tipe integer digunakan untuk menyimpan data bilangan bulat';

//  Integer/int
$x = 7;
$y = 9;

$tambah = $x + $y;
$kurang = $x - $y;
$kali = $x * $y;
$bagi = $x / $y;


// Float
$float ='tipe data float digunakan untuk menyimpan bilangan pecahan';
$pecahan= 10.7;
$pecahan_dua= 9.8;

// boolean
$boolean= 'tipe boolean hanya berisi dua nilai yaitu true atau fals';
$satu=true;
$nol=false;

// AND
$and = $satu && $nol;

// OR
$or= $satu || $nol;



// NULL
$null ='tipe null bisa digunakan untuk mengentikan variabel yang kosong';

$r ='';
$r =null;


// ARRAY
$array = 'tipe data array di gunakan untuk menyimpsn banyak data dalam satu variabel';
$nama= ['naris','yohan','chua','bob','mince'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Menampilkan variabel string -->
    <p> <?= $string ?> </p>
    <p> Nama Saya <?= $namaDepan . $namaBelakang?>. saya tinggal di <?= $alamat ?> </p>
    <br>
    <br>
    <p> <?= $integer?>  </p>

    <p> <?= $x ?>  + <?= $y ?>  = <?= $tambah ?>  </p>
    <p> <?= $x ?>  - <?= $y ?>  = <?= $kurang ?>  </p>
    <p> <?= $x ?>  x  <?= $y ?>  = <?= $kali ?>  </p>
    <p> <?= $x ?>  :  <?= $y ?>  = <?= $bagi ?>  </p>

    <br>
    <br>
    <p> <?=$float ?> </p>
    <p> <?= $pecahan?> </p>
    <p> <?= $pecahan_dua?> </p>
    <br>
    <br>
    <p> <?=$boolean?> </p>
    <p> <?php var_dump($and)?> </p>
    <p> <?php var_dump($nol)?> </p>
    <br>
    <br>
    <p> <?=$null?> </p>
    <p> <?php var_dump($r)?> </p>
    <br>
    <br>
    <p> <?= $array?> </p>

    <?php foreach($nama as $n) : ?>
        <p> <?=$n ?> </p>
        <?php endforeach; ?>



</body>
</html>