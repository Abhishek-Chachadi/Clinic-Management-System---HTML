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
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$age=$_POST['age'];
$patient_type=$_POST['patient_type'];
$patient_id=$_POST['patient_id'];
$address=$_POST['address'];
$query2="INSERT INTO `patients` (`patient_id`, `Fname`, `Lname`, `patient_type`, `age`, `address`) VALUES ('$patient_id','$Fname','$Lname','$patient_type','$age','$address');";
$result2=mysqli_query($conn,$query2);
if($result2)
{
echo '<body>';
echo '<div class="block">';
echo "<h3>"."Patients Data Has Been Succesfully Submitted"."<br>";
echo "Your Generated Unique Id Is "."<b>"."<font color='green'>".$patient_id."</font>"."</b>"."<br>";
echo "Pease Remember this ID Whenever You Come To Clinic"."<br>";
echo "Thank You"."<br>";
echo '<a href="Patients.html"><button type="submit" value="submit">Go Back</button></a>'."</h3>";
echo '</div>';
echo '</body>';
}
else
echo "Your Data Is Not Submitted,Please Validate And Re-Enter. If problem persists ask officials";
?>

</head>
</html>