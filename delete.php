<?php 
include("connection.php");
error_reporting(0);
$rollno=$_GET['rn'];
$query="DELETE from tbl_login where Rollnumber='$rollno'";

$data=mysqli_query($connect,$query);

if($data){
	echo "<script>alert('record deleted from database')</script>";
	?>
	<meta charset="utf-8" http-equiv="Refresh" content="5" URL=
	"http://localhost/dempproject/displaydata.php">

}

else{
	echo "failed to delete record from database";
}
?>
