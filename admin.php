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
    if (isset($_POST['user']) && isset($_POST['pass'])) 
	{
		$user= $_POST['user'];
		$pass = $_POST['pass'];
        if(mysqli_num_rows(mysqli_query($conn,"select * from admin where user='$user'")))
		{
			if(mysqli_num_rows(mysqli_query($conn,"select * from admin where user='$user' AND pass='$pass'")))
            {
                include 'admin1.html';
            }
            else
            {
                echo '<script>alert(" Either Username or Password is Incorrect")</script>';
                include 'admin.html';
            }
        }
    }
}
?>