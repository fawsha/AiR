<?php

define('TITLE', "Form Data");
include '../assets/layouts/header.php';
check_verified();
if (isset($_GET['id'])) {
    $formid = $_GET['id'];
} else {
    header("Location: show.php");
}
$sql = "SELECT * FROM forms WHERE formId ='$formid'";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('SQL ERROR');
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $form = mysqli_fetch_assoc($result);
}

?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    <?php echo $form['formName']; ?>
                </h3>
            </div>


        </div>

        <div class="clearfix"></div>

        <div class="x_content">

            <a class="btn btn-app">
                <i class="fa fa-edit"></i> Edit
            </a>
            <a class="btn btn-app">
                <i class="fa fa-play"></i> Play
            </a>
            <a class="btn btn-app">
                <i class="fa fa-pause"></i> Pause
            </a>
            <a class="btn btn-app">
                <i class="fa fa-save"></i> Save
            </a>
            <a class="btn btn-app">
                <span class="badge bg-red">6</span>
                <i class="fa fa-bullhorn"></i> Notifications
            </a>
            <a class="btn btn-app">
                <i class="fa fa-repeat"></i> Repeat
            </a>
            <a class="btn btn-app">
                <span class="badge bg-green">211</span>
                <i class="fa fa-users"></i> Users
            </a>
            <a class="btn btn-app">
                <span class="badge bg-orange">32</span>
                <i class="fa fa-inbox"></i> Orders
            </a>
            <a class="btn btn-app">
                <span class="badge bg-orange">12</span>
                <i class="fa fa-envelope"></i> Inbox
            </a>
            <a class="btn btn-app">
                <span class="badge bg-blue">102</span>
                <i class="fa fa-heart-o"></i> Likes
            </a>
        </div>



    </div>
</div>


<?php

include '../assets/layouts/footer.php'

    ?>