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
if(isset($_POST['save']))
{
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_num = $_POST['mobile_num'];
    // get the post recordsswds
    
    $sql_query = "INSERT INTO user_details(`username`, `email`, `password`, `mobile_num`) 
    VALUES ('$username','$email','$password','$mobile_num')";

    // insert in database 
    $rs = mysqli_query($conn, $sql_query);

    if($rs)
    {
        echo '<script>alert("registration success!!")</script>';
        include 'login.html';
    }
    else{
        echo "error" . $sql ."" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>