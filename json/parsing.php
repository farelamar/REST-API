<?php
$data = file_get_contents("bahan.json");
$json = json_decode($data, true);

// untuk memanggil json seluruhnya
// foreach($json as $key){
//     if (is_array($key)){
//         foreach($key as $key => $value){
//             echo $key . ':'. $value. '<br/>';
//         }
//     }
// }

//untuk memanggil yang lebih spesifik
echo 'nama ke 1 :' . $json['0']["nama"].'<br/>';
echo 'nama ke 2 :' . $json['1']['nama'];
?>