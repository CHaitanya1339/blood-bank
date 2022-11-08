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
    $no_of_packets = $_POST['no_of_packets'];
    $ref_hosp = $_POST['ref_hosp'];
    $l_recieved = $_POST['l_recieved'];
    $Adress = $_POST['Adress'];
    $City = $_POST['City'];

    // get the post recordsswds
    
    
    $sql_query = "INSERT INTO recepientdetails(fname,lname,mobnum,age,dob,email,gender,blood_group,BUNIT,refhosp,l_recieved,adress,city)
    VALUES ( '$First_Name', '$Last_Name', '$Mobile_Number','$AGE','$d_o_b','$Email_Id','$GENDER','$BLOOD_GROUP','$no_of_packets','$ref_hosp','$l_recieved','$Adress','$City')";

    // insert in database 
    $rs = mysqli_query($conn, $sql_query);
    
    $sql_query1="UPDATE records SET count=count-$no_of_packets WHERE count>='".$no_of_packets."' AND city='".$City."' AND blood_group='".$BLOOD_GROUP."'";
    $rs1=mysqli_query($conn,$sql_query1);
    if($rs)
    {
        echo '<script>alert("register details sucessful")</script>';
        include 'index.html';
        if($rs1){
            echo '<script>alert("Blood available")</script>';
            include 'index.html';
        }
        else{
            echo '<script>alert("not available")</script>';
        }
    }
    else{
       echo '<script>alert("register unsuccesful")</script>';
        include 'services.html';
    }
    mysqli_close($conn);
}
?>