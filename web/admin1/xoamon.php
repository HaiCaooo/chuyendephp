<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=databaseaau", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql= 'delete from nauan where id= '.$_GET['id'].'';
    $conn->exec($sql);
	header('location: widgets.php');
} 	
catch (PDOException $e) {
    echo 'Lỗi' . "<br>" . $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
?>