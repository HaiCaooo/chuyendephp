<?php 
class taikhoandangki extends database
{
	
	//xay dung nhung xu ly danh rieng cho san pham
	function listproduct($vitri,$soluong)
	{
		$sql = 'select * from taikhoandangki where id limit ?,?';
		$this->setquery($sql);
		return  $this->loadrows(array($vitri,$soluong));
	}
	
	function total()
	{
		$sql = 'select count(id) tong from taikhoandangki';
		$this->setquery($sql);
		return $this->loadrow()->tong;
	}
	
	function them($param=array())
	{
		$sql ='INSERT INTO taikhoandangki ( `hoten`, `email`, `phone`, `adress`, `note`, `fileinput`) VALUES ( ?, ?, ?, ?, ?, ?);';
		$this->setquery($sql);
		$this->statement = $this->pdo->prepare($this->sql);
		$this->statement->execute($param);
	}
	
	function sua($param1=array())
	{
		$sql = "UPDATE `taikhoandangki` SET hoten = ?, email = ?, phone = ?, adress = ?, note = ? WHERE `taikhoandangki`.`id` = ?";
		$this->setquery($sql);
		$this->statement = $this->pdo->prepare($this->sql);
		$this->statement->execute($param1);	
	}
	
	function xoa($param2=array())
	{
		$sql= 'delete from taikhoandangki where id=?';
		$this->setquery($sql);
		$this->statement = $this->pdo->prepare($this->sql);
		$this->statement->execute($param2);	
	}
	
}
?>