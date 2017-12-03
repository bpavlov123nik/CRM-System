<?php
include 'config.php';
$area_name = $_POST['area_name'];
$municipal_name = $_POST['municipal_name'];
$land_name = $_POST['land_name'];
$query = "INSERT INTO area (name_area, municipal_area, land_area) VALUES ('$area_name', '$municipal_name', '$land_name')";
$result = mysqli_query($connection, $query);
if($result)
{
    $redirect = $_SERVER['PHP_SELF'];
    header("Refresh: 1; URL=form_fill_land.html?redirect=$redirect");
}
else
{
    echo 'Unable to add row to the table <br>';
}
?>