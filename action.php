<?php

$link = mysqli_connect("localhost", "root", "", "form");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$projectlink = mysqli_real_escape_string($link, $_REQUEST['projectlink']);
 
// Attempt insert query execution
$sql = "INSERT INTO part (`first_name`, `last_name`, `projectlink`) VALUES ('$first_name', '$last_name', '$projectlink')";
if(mysqli_query($link, $sql)){
    header("location: participants.php");
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
