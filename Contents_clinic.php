<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Treatments</title>
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
$u_id=$_POST['patient_id'];
$query="SELECT * FROM `check_up` WHERE patient_id='$u_id';";
$query1 = "SELECT * FROM `patients` WHERE patient_id='$u_id';";

$result=mysqli_query($conn,$query);
$result1=mysqli_query($conn,$query1);
$row=mysqli_fetch_row($result);
$row1=mysqli_fetch_row($result1);

echo "<h1>"."<center>"."<font color='powderblue'>"."Patient details For The ID Entered"."</font>"."</center>"."</h1>"."<br>";
echo '<div style="text-align:justify";>';
echo "<fieldset>";
echo "<pre>"."<b>"."check_up_id                   :   "."<font color='green'>".$row[0]."</font>"."</b>"."<br>"."<br>";
echo "<b>"."patient_id                     :   "."<font color='green'>".$row[1]."</font>"."</b>"."<br>";
echo "<b>"."First Name                     :   "."<font color='green'>".$row1[1]."</font>"."</b>"."<br>";
echo "<b>"."Last Name                      :   "."<font color='green'>".$row1[2]."</font>"."</b>"."<br>";
echo "<b>"."Age                            :   "."<font color='green'>".$row1[3]."</font>"."</b>"."<br>";
echo "<b>"."Sex                            :   "."<font color='green'>".$row1[4]."</font>"."</b>"."<br>";
echo "<b>"."complaints                     :   "."<font color='green'>".$row[2]."</font>"."</b>"."<br>";
echo "<b>"."findings                       :   "."<font color='blue'>".$row[3]."</font>"."</b>"."<br>";
echo "<b>"."treatment_id                   :   "."<font color='green'>".$row[4]."</font>"."</b>"."<br>";
echo "<b>"."med_id                         :   "."<font color='green'>".$row[5]."</font>"."</b>"."<br>";
echo "<b>"."quantity                       :   "."<font color='green'>".$row[6]."</font>"."</b>"."<br>";
echo "<b>"."date                           :   "."<font color='green'>".$row[7]."</font>"."</b>"."<br>";
echo "<b>".'<div style="text-align:center;">';
echo '<a href="menu.html"><button type="submit" value="submit">Go Back</button></a>';
echo '</div>';
echo "</pre>";
echo "</fieldset>";
echo '</div>';
echo '<div style="text-align:center">';
echo "<fieldset>";
echo "</fieldset>";
echo '</div>';
?>
</body>
</html>
