<?php 
class nauan extends database
{
	
	//xay dung nhung xu ly danh rieng cho san pham
	function listproduct($vitri,$soluong)
	{
		$sql = 'select * from nauan where id limit ?,?';
		$this->setquery($sql);
		return  $this->loadrows(array($vitri,$soluong));
	}
	
	function total()
	{
		$sql = 'select count(id) tong from nauan';
		$this->setquery($sql);
		return $this->loadrow()->tong;
	}
	
	function them($param=array())
	{
		$sql ='INSERT INTO nauan ( `tenmon`,`hinhanh` ,`cachlam`) VALUES ( ?, ?,?);';
		$this->setquery($sql);
		$this->statement = $this->pdo->prepare($this->sql);
		$this->statement->execute($param);
	}
	
	function sua($param1=array())
	{
		$sql = "UPDATE `nauan` SET tenmon = ? ,cachlam = ? WHERE `nauan`.`id` = ?";
		$this->setquery($sql);
		$this->statement = $this->pdo->prepare($this->sql);
		$this->statement->execute($param1);	
	}
	
	function xoa($param2=array())
	{
		$sql= 'delete from nauan where id=?';
		$this->setquery($sql);
		$this->statement = $this->pdo->prepare($this->sql);
		$this->statement->execute($param2);	
	}
	
}
?>