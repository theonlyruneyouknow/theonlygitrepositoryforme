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


<!--


$FirstName = mysqli_real_escape_string($dbc, $_GET['FirstName']);
$LastName = mysqli_real_escape_string($dbc,$_GET['LastName']);
$Street = mysqli_real_escape_string($dbc,$_GET['Street']);
$City = mysqli_real_escape_string($dbc,$_GET['City']);
$State = mysqli_real_escape_string($dbc,$_GET['State']);
$Zip = mysqli_real_escape_string($dbc,$_GET['Zip']);
$Email = mysqli_real_escape_string($dbc,$_GET['Email']);
$Phone = mysqli_real_escape_string($dbc,$_GET['Phone']);
$Recorder = mysqli_real_escape_string($dbc,$_GET['Recorder']);

$query = "INSERT INTO customer (first_name, last_name, street_address, city, state, zip_code, email, phone_number, recorder_id) VALUES ('$FirstName', '$LastName', '$Street', '$City', '$State', '$Zip', '$Email', '$Phone', '$Recorder')";
-->


$query = "INSERT into partisipant (first_name, last_name, gender, birthdate, stake, ward,  phone, email, school, grade, username, password VALUEs ('$FirstName', '$LastName', '$Gender', 
'$Birthdate', '$Stake', '$Ward',  '$Phone', '$Email', '$School', '$Grade', '$Username', '$Password')";

$result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc)); 

mysqli_close($dbc); 

?>