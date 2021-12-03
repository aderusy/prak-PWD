<?php 
//fungsi untuk menghubungkan ke server database
$host="localhost"; 
//untuk user login ke database (username default)
$username="root"; 
//password server database (kosong)
$password="";
//memanggil database akademik 
$databasename="akademik"; 
//mengkoneksikan fungsi-fungsi database
$con=@mysqli_connect($host,$username,$password,$databasename); 
 //perulangan jika tidak sama maa hasilnya error
if (!$con) { 
    echo "Error: " . mysqli_connect_error(); 
 exit(); 
} 
?>