<?php
header("Content-type:application/json");
// koneksi
$connection = mysqli_connect("localhost", "root", "mysql", "db_belajar") or die("error".mysqli_error($connection));
//nampilin data dari database
$sql = "select * from tb_anggota";
$result = mysqli_query($connection, $sql) or die("error".mysqli_error($connection));

while ($row = mysqli_fetch_assoc($result)){
    $ArrAnggota[] = $row;
}
echo json_encode($ArrAnggota, JSON_PRETTY_PRINT);

mysqli_close($connection);
?>