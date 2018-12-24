<?php
$connect = mysqli_connect("localhost", "root", "", "databaseaau");
$output = '';
mysqli_set_charset($connect, 'UTF8');
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM taikhoandangki
    WHERE hoten LIKE '%".$search."%'
    OR email LIKE '%".$search."%'
    OR phone LIKE '%".$search."%'
    OR adress LIKE '%".$search."%'
    OR note LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM taikhoandangki ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Id</th>
							<th>Họ tên</th>
                            <th>Hình Ảnh</th>
                            <th>Email</th>
							<th>SDT</th>
                            <th>Địa chỉ</th>
                            <th>Ghi chú</th>
                            <th>Tác vụ</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["hoten"].'</td>
				<td>'.$row["fileinput"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["phone"].'</td>
				<td>'.$row["adress"].'</td>
                <td>'.$row["note"].'</td>
                
				<td><a href="..sua.php" class="btn btn-success btn-sm" >Sửa</a>
				<a href="../xoa.php?id='.$row["id"].' " onclick="return confirm(\'sure to delete !\')" " class="btn btn-danger btn-sm" >Xóa</a>
				</td>
                
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>