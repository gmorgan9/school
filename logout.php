<!-- WORKING -->
<?php
session_start();
require_once "app/database/connection.php";
require_once "path.php";

$uID = $_SESSION['uID'];
$sql = "UPDATE user SET loggedin='0' WHERE userID='$uID'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

session_unset();
session_destroy();
header('location:' . BASE_URL . '/login.php');

?>