<?php
$title='comment';

$header = 'belajar membuat comment';
/*
 
menyimpan gambar 

*/
$gambar ='https://images.unsplash.com/photo-1582426750875-13465457b9ce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1375&q=80';


$video =' https://www.youtube.com/watch?v=ThpGY6kSP5c';

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title?> </title>
</head>
<body>
    <h1><?= $header ?></h1>
    <br>
    <img src="<?= $gambar?>" width="200" >
    <br>
    <?= $video /*video bersumber dari youtub*/ ?>
</body>
</html>