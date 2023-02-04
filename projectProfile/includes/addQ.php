<?php
require '../../assets/setup/db.inc.php';
if (isset($_POST['add'])) {

    $text = $_POST['text'];
    $category = $_POST['category'];
   
    $sql = "INSERT INTO question (questionText, questionCategory) VALUES ('$text', '$category')";

    $addProject = mysqli_query($conn, $sql);

    echo $sql;

    if ($addProject) {
        header("Location: ../");
    } else {
        header("Location: ../");
    }
} else {
    header("Location: ../");
}