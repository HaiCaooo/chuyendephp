<?php
$connect = mysqli_connect("localhost", "root", "", "databaseaau");
$output = '';
mysqli_set_charset($connect, 'UTF8');
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM nauan 
	WHERE tenmon LIKE '%".$search."%'
	
	";
}
else
{
	$query = "
	SELECT * FROM nauan ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive" style="width:1200px">
					<table class="table table bordered">
						<tr>
                            
							<th>Id</th>
							<th>Tên món</th>
							<th>Hình ảnh</th>
							<th>Cách làm</th>
						</tr>';
	
	while($row = mysqli_fetch_array($result))
	{
		$getImage ="web/admin1/".$row["hinhanh"];
		$output .= '
			<tr>
                <td>'.$row["id"].'</td>
                <td width="200px">'.$row["tenmon"].'</td>
				<td width="150px" height="150px" ><img src="'.$getImage.'" ></td>
				<td width="600px>'.$row["cachlam"].'</td>
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