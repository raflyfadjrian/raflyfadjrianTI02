<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Siswa</title>
</head>
<body>
    
<?php 

include 'form_nilai(array).php';

$ns1 = ['id'=>1,'nama'=>'Budi','nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nama'=>'Rahmat','nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nama'=>'Asep','nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nama'=>'Pudidi','nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
$ns5 = ['id'=>5,'nama'=>$nama_siswa,'nim'=>$nim_siswa,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];

?>

<center><h3>Daftar Nilai Siswa<hr/></h3></center>

<table border="4px" width="100%">

    <thead>
        <tr>
            <th>No</th><th>NAMA</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php

            $nomer=1;
            foreach($ar_nilai as $ns){
                echo '<tr><td>'.$nomer.'</td>';
                echo '<td>'.$ns['nama'].'</td>';
                echo '<td>'.$ns['nim'].'</td>';
                echo '<td>'.$ns['uts'].'</td>';
                echo '<td>'.$ns['uas'].'</td>';
                echo '<td>'.$ns['tugas'].'</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                echo '<tr/>';
                $nomer++;
            }

        ?>
    </tbody>

</table>

</body>
</html>