<?php 
/*$dsn = "mysql:host=localhost;dbname=databaseaau";
$username = "root";
$password = "";
$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try{
$conn = new PDO($dsn,$username,$password,$options);
} catch (PDOException $e){
echo "Server Error!".$e->getMessage();
}*/

try{
	$host='localhost';
	$dbname='databaseaau';
	$user='root';
	$pass='';
	$db=new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
	$db->query('set names utf8');
	//$sql="select* from sanpham";
	//$result=$db->query($sql);
	/*
	foreach($result as $sanpham)
	{
		echo $sanpham['ten'].'<br>';
	}*/
	//$ketqua=$result->fetchAll(PDO::FETCH_ASSOC);
	//echo '<pre>',print_r($ketqua),'</pre>';
	//foreach($ketqua as $sanpham)
//	{
//		echo $sanpham['ten'].'<br>';
//	}
	
	
}catch( PDOException $e)
{
	echo 'Server Error '.$e->getMessage();
}
?>