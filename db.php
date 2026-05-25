<?php
$serverName = "localhost";
$user = "fend";
$pass = 'qwerty666';
$dbName = 'newdb';

//create koneksi ke db
$conn = new mysqli($serverName, $user, $pass, $dbName);

//cek koneksi
if($conn->connect_error){
    die("koneksi gagal: " . $conn->connect_error);
}else{
    echo "koneksi berhasil";
}

//create Table di database
// $sql = "create table hewan(
//         id int(6) unsigned auto_increment primary key,
//         nama varchar(30) not null,
//         jenis varchar(30) not null,
//         umur int(3) not null
//         )";
//inbsert table
// $sql = "INSERT INTO hewan values (1, 'singa', 'mamalia', 1)";

//update 
// $sql = "UPDATE hewan SET jenis = 'karnivora' WHERE id = 1";

//delete
$sql ="delete from hewan where id = 1";

if ($conn->query($sql)){
    echo "table berhasil dibuat";
}else{
    echo "table gagal dibuat";

}


?>