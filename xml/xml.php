<?php
 
Header('Content-type: text/xml');
//koneksi
$connection = mysqli_connect("localhost", "root", "mysql", "db_belajar") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//nampilin data dari database
$sql = "select * from tb_anggota";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
 
//membuat array
while ($row = mysqli_fetch_assoc($result)) {
 
    $track = $xml->addChild('anggota');
    $track->addChild('id_anggota', $row['id_anggota']);
    $track->addChild('nama', $row['nama']);
    $track->addChild('email', $row['email']);
    $track->addChild('alamat', $row['alamat']);
    $track->addChild('umur', $row['umur']);
}
 
print($xml->asXML());
//tutup koneksi
mysqli_close($connection);
?>