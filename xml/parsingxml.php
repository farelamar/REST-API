<?php
 
$file = simplexml_load_file("bahan.xml");
 
echo 'Data Anggota baru :<br />';
foreach ($file as $key => $value) {
    echo $i . "<br />";
    echo "nama : " . $value->nama . "<br />";
    echo "email : " . $value->email . "<br />";
    echo "alamat : " . $value->alamat . "<br />";
    echo "umur : " . $value->umur . "<br /><br />";
   
}
?>