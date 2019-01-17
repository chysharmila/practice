
<?php
$servername ="localhost";
$username ="sharmila";
$password ="dell";
$dbname="merosathi";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection problem:".$conn->connect_error);
}
else
{
	if ($_SERVER["REQUEST_METHOD"] =="POST") {
		$name =$_POST["name"];
		$address = $_POST["address"];
		$Email = $_POST["Email"];
		$contact = $_POST["contact"];
		$message = $_POST["message"];
		$password =$_POST["password"];
        $confirmpassword =$_POST["confirmpassword"];
        if (empty($name&&$address&&$Email&&$contact&&$message&&$password&&$confirmpassword)) {
		 		
		 		echo "<h2>FIILS ALL VALUES!</h2>";
		 		
		 	}
		else
		{
			if ($password ==$confirmpassword) {
				echo "<h2>Contact Registered Success!</h2>";
				$sql = "INSERT INTO registers (name,address,Email,contact,message,password,confirmpassword) VALUES('".$name."','".$address."','".$Email."','".$contact."','".$message."' ,'".$password."','".$confirmpassword."')";

			}
			else{
		 			echo "<h2>Re-enter password</h2>";
		 		
		 		}
		}


	}
}
$conn->close();
?>
