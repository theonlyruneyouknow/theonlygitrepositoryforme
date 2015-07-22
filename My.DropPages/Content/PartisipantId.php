<?php 

DEFINE ('DBUSER', 'sql384080'); 
DEFINE ('DBPW', 'iS3*iU9%'); 
DEFINE ('DBHOST', 'sql3.freemysqlhosting.net');
DEFINE ('DBNAME', 'sql384080'); 

$dbc = mysqli_connect(DBHOST,DBUSER,DBPW);
if (!$dbc) {
    die("Database connection failed: " . mysqli_error($dbc));
    exit();
}

$dbs = mysqli_select_db($dbc, DBNAME);
if (!$dbs) {
    die("Database selection failed: " . mysqli_error($dbc));
    exit(); 
}

$FirstName = mysqli_real_escape_string($dbc, $_GET['FirstName']);
$LastName = mysqli_real_escape_string($dbc,$_GET['LastName']);
$Gender = mysqli_real_escape_string($dbc,$_GET['Gender']);
$Birthdate = mysqli_real_escape_string($dbc,$_GET['Birthdate']);
$Stake = mysqli_real_escape_string($dbc,$_GET['Stake']);
$Ward = mysqli_real_escape_string($dbc,$_GET['Ward']);
$Phone = mysqli_real_escape_string($dbc,$_GET['Phone']);
$Email = mysqli_real_escape_string($dbc,$_GET['Email']);
$School = mysqli_real_escape_string($dbc,$_GET['School']);
$Grade = mysqli_real_escape_string($dbc,$_GET['Grade']);
$Username = mysqli_real_escape_string($dbc,$_GET['Username']);
$Password = mysqli_real_escape_string($dbc,$_GET['Password']);
$PartisipantId = mysqli_real_escape_string($dbc,$_GET['PartisipantId']);

$query = "UPDATE customer SET first_name='$FirstName', last_name='$LastName', gender='$Gender', birthdate='$Birthdate', stake='$Stake', ward='$Ward',  phone='$Phone', email='$Email', school='$School', grade='$Grade', username='$Username', password='$Password' WHERE partisipant_id='$PartisipantId'";

$result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc)); 

mysqli_close($dbc); 

?>

<!-- http://newjustin.com/updatecust.php?FirstName=Sue&LastName=Banas&Street=123&City=Pittsburgh&State=PA&Zip=15222&Email=derek@aol.com&Phone=4125551212&CustomerId=14
-->