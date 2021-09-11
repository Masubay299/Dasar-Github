<?php
//Perulangan For adalah perulangan yang termasuk dalam counted loop, karena kita bisa menentukan jumlah perulangannya.
for ($i = 0; $i<=10; $i++){
    echo "ini perulangan ke - $i <br>";
}

//Perulangan while adalah perulangan yang termasuk dalam uncounted loop. Karena biasanya digunakan untuk mengulang sesuatu yang belum jelas jumlah pengulangannya.
echo "<br>";
echo "Ini perulangan while <br>";

$ulangi =  0;
while ($ulangi < 10){
    echo "ini perulangan ke - $ulangi <br>";
    $ulangi++;
}

//Perbedaan Do/While dengan while terletak pada cara iya memulai pengulangan.

//Perulangan Do/While akan selalu melakukan pengulangan sebanyak 1 kali, kemudian melakukan pengecekan kondisi.

//Sedangkan perulangan while akan mengecek kondisi terlebih dahulu, baru melakukan pengulangan.
echo "<br>";
// echo "Ini perulangan do-while <br;

$ulangi = 0;
do{
    echo "ini perulangan ke - $ulangi <br>";
    $ulangi++; 
}while($ulangi < 10);

//Perulangan foreach sama seperti perulangan for. Namun, ia lebih khusus digunakan untuk mecetak array.
echo "<br>";
echo "Ini perulangan foreach <br>";
$books = [
    "Panduan Belajar Java untuk Pemula",
    "Membangun Aplikasi Java dengan PHP",
    "Tutorial Java dan MySQL",
    "Membuat Penggajian Desktop dengan Java"
];

echo "<h5>Judul Buku Java:</h5>";
echo "<ol> ";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ol>";
?>