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
$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn,$dbName);
// Check connection
echo "<br><br>";
$query="SELECT * FROM `treatments`";

$result=mysqli_query($conn,$query);

echo "<h1>"."<center>"."<font color='powderblue'>"."TREATMENTS AVAILABLE"."</font>"."</center>"."</h1>"."<br>";
echo '<div style="text-align:justify";>';
echo "<fieldset>";
echo "<center>";
echo "<table border = '1px'>";

echo "<tr>";
        echo"<td>"."treat_id"." </td>";
        echo"<td>"."treat_type"." </td>";
    echo "</tr>";

while($row = mysqli_fetch_array($result))
{
    $treat_id = $row[0];
    $treat_type = $row[1];

    echo "<tr>";
        echo"<td> {$treat_id} </td>";
        echo"<td> {$treat_type} </td>";
        
    echo "</tr>";

}
echo "<b>".'<div style="text-align:center;">';
echo '<a href="menu.html"><button type="submit" value="submit">Go Back</button></a>';
echo '</div>';
echo "</pre>";
echo "</fieldset>";
echo '</div>';
echo '<div style="text-align:center">';
?>
</body>
</html>