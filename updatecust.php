<?php 

DEFINE ('DBUSER', 'id8334467_mohamadumam'); 
DEFINE ('DBPW', 'anketloor99OK'); 
DEFINE ('DBHOST', 'localhost'); 
DEFINE ('DBNAME', 'id8334467_aiusers'); 

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
$Street = mysqli_real_escape_string($dbc,$_GET['Street']);
$City = mysqli_real_escape_string($dbc,$_GET['City']);
$State = mysqli_real_escape_string($dbc,$_GET['State']);
$Zip = mysqli_real_escape_string($dbc,$_GET['Zip']);
$Email = mysqli_real_escape_string($dbc,$_GET['Email']);
$Phone = mysqli_real_escape_string($dbc,$_GET['Phone']);

$CustomerId = mysqli_real_escape_string($dbc,$_GET['CustomerId']);

$query = "UPDATE customer SET first_name='$FirstName', last_name='$LastName', street_address='$Street', city='$City', state='$State', zip_code='$Zip', email='$Email', phone_number='$Phone' WHERE cust_id='$CustomerId'";

$result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc)); 

mysqli_close($dbc); 

?>

