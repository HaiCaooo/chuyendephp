<?php 
define('USER','root');
define('LOCAL','localhost');
define('PASS','');
define('DBNAME','databaseaau');
class database
{
	var $sql,$pdo,$statement;
	
	function __construct()
	{
		try{
		$host='localhost';
		$dbname='databaseaau';
		$user='root';
		$pass='';
		$db=new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
		$db->query('set names utf8');
		}catch(PDOException $e)
		{
			exit('server error '.$e->getMessage());
		}
	}
	function setquery($sql)
	{
		$this->sql = $sql;
	}
	function loadrow($param = array(),$type = PDO::FETCH_OBJ)
	{
		try{
			$this->statement = $this->pdo->prepare($this->sql);
			$this->statement->execute($param);
			return $this->statement->fetch($type);
		}catch(PDOException $e)
		{
			exit('sql error '.$e->getMessage());
		}
	}
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
	//tra 1 gia tri cu the (tuy theo kieu du lieu)
	
	//thuc thi truy van cap nhat (true /fasle)
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