<?php
require '../../assets/setup/db.inc.php';
if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $job = $_POST['job'];
    $location = $_POST['location'];
    $city = $_POST['city'];
    $streetAddress = $_POST['streetAddress'];
    $country = $_POST['country'];
    $projectStart = $_POST['projectStart'];
    $projectEnd = $_POST['projectEnd'];
    $status = "ACTIVE";
   



    $sql = "INSERT INTO projects (projectName, projectJob, projectLocation, projectCity, projectCountry, projectStreet, projectStart, projectEnd, projectStatus) VALUES ('$name', '$job', '$location', '$city' , '$streetAddress'  , '$country'  , '$projectStart'  , '$projectEnd' , '$status')";

    $addProject = mysqli_query($conn, $sql);

    if ($addProject) {
        header("Location: ../");
    } else {
        header("Location: ../");
    }
} else {
    header("Location: ../");
}