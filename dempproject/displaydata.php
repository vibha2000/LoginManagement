<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Display record by student_info</title>
</head>
<body>
	<center><h1><u>Display data of Student</u></h1></center>
	<table align="center" cellspacing="20" border="2">
		<tr>
			<th>Rollnumber</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Password</th>
			<th>ConfirmPassword</th>  
			<th>Gender</th>
			<th>Operation</th>
		</tr>
<?php
include("connection.php");
error_reporting(0);
$query="select * from tbl_login";
$data=mysqli_query($connect,$query);
$total=mysqli_num_rows($data);

//$res=mysqli_fetch_assoc($data);
/*echo $res['Rollnumber']." ".$res['Firstname']." ".$res['Lastname']." ".$res['Email']." ".$res['Password']." ".$res['Confirmpass']." ".$res['Gender'];   */
//echo "$total";

if($total!=0){ 
	//echo "Table has record";
	
	while ($res=mysqli_fetch_assoc($data)) {
		echo "
		<tr>
		<td>".$res['Rollnumber']."</td>
		<td>".$res['Firstname']."</td>
		<td>".$res['Lastname']."</td>
		<td>".$res['Email']."</td>
		<td>".$res['Password']."</td>
		<td>".$res['Confirmpass']."</td>
		<td>".$res['Gender']."</td>
		<td><a href='delete.php?rn=$res[Rollnumber]' onclick='return checkdelete()'>Delete</a></td>
		</tr>";
	}
}
else{
	echo "No record found";
}
?>

	</table>
<script type="text/javascript">
	function checkdelete(){
		return Confirm('Are You Sure You Want To Delete??');
	}
</script>	
</body>
</html>