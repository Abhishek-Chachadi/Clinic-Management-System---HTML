<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Form validation example</title>
  <style>
    input{display:block; margin-bottom:10px;}
  </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="menu.css" rel="stylesheet">
</head>

<body>
 <header>
            <!--Navigation Starts Here-->
            <nav>
                <div id="menu-wrapper">
                    <a href="menu.html" id = "logo"><h1>LiveLife Clinic</h1></a>
                    <p id = "menu">=\/=</p>
                    <section id="navBar">
                        <a href="Checkup.html">Check Up</a>
                        <a href="Equipments.html">Equipments</a>
                        <a href="Medicines.html">Medicines</a>
                        <a href="Patients.html">Patients</a>
			<a href="Treatments.html">Treatments</a>
                    </section>
                </div>
            </nav>
		<br><br>
            <!--Navigation Ends Here-->
        </header>
<br><br><br>

<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName='clinic management system dbms';
// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);
mysqli_select_db($conn,$dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br><br>";
$med_id=$_POST['med_id'];
$med_name=$_POST['med_name'];
//$quantity = $_POST['quantity'];
$quantity=""; 
$available_qty = $_POST['available_qty'];
$description=$_POST['description'];
$expire_date=$_POST['expiry_date'];
$requested_date=$_POST['requested_date'];

$query="INSERT INTO medicines (`med_id`, `med_name`, `quantity`, `available_qty`, `description`, `expiry_data`, `requested_date`)VALUES('$med_id','$med_name','$quantity','$available_qty','$description','$expire_date','$requested_date');";
$result=mysqli_query($conn,$query);
if($result)
{
echo '<body>';
echo '<div>';
echo "<h3>"."Medicines Data Has Been Succesfully Submitted"."<br>"."</h3>";
echo '<a href="Medicines.html"><button type="submit" value="submit">Go Back</button></a>'."</h3>";
echo '</div>';
echo '</body>';
}
else
echo "Your Data Is Not Submitted,Please Validate And Re-Enter. If problem persists ask officials";
?>

</body>
</html>