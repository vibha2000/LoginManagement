<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup Form</title>
	<style type="text/css">
	body{
		
		background: lightblue;
	}
	table{
		margin-top: 50px;
		background: black;
		color: white;
		border-radius: 25px;
	}
	#btn{
		background: green;
		color: white;
		height: 45px;
		width:130px ;
		border-radius: 25px;
		font-size: 18px;
	}
	.txt{
		border-radius: 25px;
		height: 30px;
		width: 250px;
		
	}
	td{
		font-size: 20px;
	}
	</style>
</head>
<body>
	<form action=" " method="POST">
		<table align="center" cellspacing="15" >
			<tr>
				<td>Roll No.</td>
				<td><input type="text" name="roll" class="txt" placeholder="Enter your roll no.." required></td>
			</tr>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="fname" class="txt" placeholder="Enter your first name.." required></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lname" class="txt" placeholder="Enter your last name.." ></td>
			</tr>
			<tr>
				<td>Email Address:</td>
				<td><input type="email" name="email" class="txt" placeholder="Enter your email.." required ></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass" class="txt" placeholder="Enter your password.." required ></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="cpass" class="txt" placeholder="Confirm your password.." required="must be filled"></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
				<input type="radio" name="rd" value="male" required>Male
				<input type="radio" name="rd" value="female">Female
				</td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" id="btn"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
	// code...
	$rn=$_POST['roll'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pass=$_POST['pass']; 
	$cpass=$_POST['cpass'];
	$rd=$_POST['rd'];

	if($rn!="" && $fname!="" && $lname!="" && $email!="" && $pass!="" && $cpass!="" && $rd!="")
	{

		//insertion query
		$query="INSERT INTO tbl_login values('$rn','$fname','$lname','$email','$pass','$cpass','$rd')";
		$data=mysqli_query($connect,$query);//exceution of query

		if($data){
			echo "data inserted into database";
		}	
	}
	else{
	echo "failed to  insert data into database";
	}
}

/*echo "$rn";
echo "$fname";
echo "$lname";
echo "$email";
echo "$pass";
echo "$cpass";*/



?>