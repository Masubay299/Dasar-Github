<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="" method="POST">
            Masukkan bintang <input type="text" name="bintang">
            <input type="submit" name="submit" value="submit">
            <?php
            echo "<br>";
            ?>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
    $bin = $_POST['bintang'];
    echo "<br>";
    echo "Program segitiga bintang siku-siku <br>";
    for($a = 1; $a <= $bin; $a++){
        for($b = 1; $b <= $a; $b++){
            echo "*";
        }
        echo "<br>";
    }
}
if(isset($_POST['submit'])){
    $bin = $_POST['bintang'];
    echo "<br>";
    echo "Program Ganjil Genap dengan menggunakan For <br>";
    for($a = 1; $a <= $bin; $a++){
        if($a%2==0){
            echo $a . "<br>";
        }
    }
}