
<?php
/**
 *ThiswillOpens a connection to the database
 */
 
// Turn off all error reporting
error_reporting(0);

// let us define constants here
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'pet_adoption');

// $conn will contain a resource link to the database
// @ keeps the error from showing in the browser

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


?>
