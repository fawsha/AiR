<?php
require '../../assets/setup/db.inc.php';
if (isset($_POST['addform'])) {

    $formName = $_POST['formName'];




    $sql = "INSERT INTO forms (formName)
        VALUES ('$formName')";

    $addProject = mysqli_query($conn, $sql);

    if ($addProject) {
        header("Location: ../");
    } else {
        header("Location: ../");
    }
} else {
    header("Location: ../");
}