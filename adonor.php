
<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: black;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat fa-lg"></i> Blood Bank</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin.html"><i class="fa fa-home"></i> Logout</a></li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <h3>Donor Details</h3>
<table>
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Age</th>
<th>Gender</th>
<th>Blood group</th>
<th>Units</th>
<th>Last Donated</th>
<th>City</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "id17703492_root", "Q+_78@xGs!![qQ>k", "id17703492_bloodbank");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT lname,mobnum,age,gender,blood_group,units,l_donated,city FROM donordetails";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["lname"]. "</td><td>" . $row["mobnum"] . "</td><td>" .$row["age"] . "</td><td>".$row["gender"] . "</td><td>".$row["blood_group"] . "</td><td>".$row["units"] . "</td><td>".$row["l_donated"] . "</td><td>". $row["city"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
  
</body>

</html>
