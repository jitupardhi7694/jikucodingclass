<?php

include'config.php';

$id = $_GET['id'];

$query = "DELETE FROM `contact` WHERE id = $id";


if (mysqli_query($con, $query)) {
    echo "Record deleted successfully";
    header('location:demo.php');
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>