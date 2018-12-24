<?php 
define('USER','root');
define('LOCAL','localhost');
define('PASS','');
define('DBNAME','databaseaau');
class database
{
	//thanh vien
	//sql, pdo,statement
	var $sql,$pdo,$statement;
	
	//phuong thuc
	//khoi tao : khong tham so: __construct
	function __construct()
	{
		try{
			//hiển thị lỗi câu truy vấn
			$option = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES=>false);
			$this->pdo =  new PDO('mysql:host='.LOCAL.';dbname='.DBNAME,USER,PASS,$option);
			$this->pdo->query('set names utf8');
		}catch(PDOException $e)
		{
			exit('server error '.$e->getMessage());
		}
	}
	//cai dat cau truy van (sap lam gi)
	function setquery($sql)
	{
		$this->sql = $sql;
	}
	//tra ve 1 dong (obj)
	function loadrow($param = array(),$type = PDO::FETCH_OBJ)
	{
		try{
			//tao statment
			$this->statement = $this->pdo->prepare($this->sql);
			//bind param
			$this->statement->execute($param);
			//lay ve 1 dong (obj)
			return $this->statement->fetch($type);
		}catch(PDOException $e)
		{
			exit('sql error '.$e->getMessage());
		}
	}
	//tra ve nhieu dong(obj)
	function loadrows($param = array(),$type = PDO::FETCH_OBJ)
	{
		try{
			//tao statment
			$this->statement = $this->pdo->prepare($this->sql);
			//bind param
			$this->statement->execute($param);
			//lay ve 1 dong (obj)
			return $this->statement->fetchAll($type);
		}catch(PDOException $e)
		{
			exit('sql error '.$e->getMessage());
		}
	}
	function change($param = array())
	{
		try{
			//tao statment
			$this->statement = $this->pdo->prepare($this->sql);
			//bind param
			return $this->statement->execute($param);
		}catch(PDOException $e)
		{
			exit('sql error '.$e->getMessage());
		}
	}
	//dong ket noi
	function disconnect()
	{
		$this->pdo = NULL;
		$this->sql = '';
		$this->statement = NULL;
	}
	
}

?>