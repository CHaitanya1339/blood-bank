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
    
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Mobile_Number = $_POST['Mobile_Number'];
    $AGE = $_POST['AGE'];
    $d_o_b = $_POST['d_o_b'];
    $Email_Id = $_POST['Email_Id'];
    $GENDER = $_POST['GENDER'];
    $BLOOD_GROUP = $_POST['BLOOD_GROUP'];
    $BODY_WEIGHT=$_POST['BODY_WEIGHT'];
    $ldate = $_POST['ldate'];
    $pin = $_POST['pin'];
    $Adress = $_POST['Adress'];
    $City = $_POST['City'];

    // get the post recordsswds
    
    
    $sql_query = "INSERT INTO donordetails(fname,lname,mobnum,age,dob,email,gender,blood_group,body_weight,l_donated,pin,adress,city)
    VALUES ( '$First_Name', '$Last_Name', '$Mobile_Number','$AGE','$d_o_b','$Email_Id','$GENDER','$BLOOD_GROUP','$BODY_WEIGHT','$ldate','$pin','$Adress','$City')";

    // insert in database 
    $rs = mysqli_query($conn, $sql_query);
    
    $sql_query1="UPDATE donordetails SET units=units+1,l_donated='".$ldate."' WHERE lname='".$Last_Name."' AND fname='".$First_Name."'";
    $rs1=mysqli_query($conn, $sql_query1);
    
    if($rs)
    {
        echo '<script>alert("Register details successful!")</script>';
        include 'services.html';
    }
    else
    {
        echo '<script>alert("Updated")</script>';   //"error" . $sql ."" . mysqli_error($conn);
        include 'donor_reg form.html';
    }
    mysqli_close($conn);
}
?>