<?php
$server_name="localhost";
$username="id17703492_root";
$password="Q+_78@xGs!![qQ>k";
$database_name="id17703492_bloodbank";

$conn = mysqli_connect($server_name,$username ,$password,$database_name);
if(!$conn)
{
    die("connection failed" . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    if (isset($_POST['email']) && isset($_POST['password'])) 
	{
		$email= $_POST['email'];
		$password = $_POST['password'];
        if(mysqli_num_rows(mysqli_query($conn,"select * from user_details where email='$email'")))
		{
			if(mysqli_num_rows(mysqli_query($conn,"select * from user_details where email='$email' AND password='$password'")))
            {
                include 'index1.html';
            }
            else
            {
                echo '<script>alert(" Either Email or Password is Incorrect")</script>';
                include 'login.html';
            }
        }
    }
}
?>