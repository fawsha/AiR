<?php

define('TITLE', "Forms");
include '../assets/layouts/header.php';
check_verified();

?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Plain Page</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Plain Page</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <button class="dropdown-item" data-toggle="modal" data-target="#myModal">Add New
                                        Form</button>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">

                                    </p>
                                    <table id="datatable-buttons" class="table table-striped table-bordered"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Form Name</th>


                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM forms";
                                            $stmt = mysqli_stmt_init($conn);
                                            if (!mysqli_stmt_prepare($stmt, $query)) {
                                                die('ERROR IN CONNECTION');
                                            } else {
                                                mysqli_stmt_execute($stmt);
                                                $result = mysqli_stmt_get_result($stmt);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '
                                                    <tr>
                                                    <td><a href="form.php?id=' . $row['formId'] . '" > ' . $row['formName'] . ' </a> </td>
                                                       
                                                        
                                                    </tr>';
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">New Form </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="includes/addForm.php" method="POST">


                        <div class="col-md-12 col-sm-12  form-group has-feedback">
                            <label for="formName">Form Name</label>
                            <input type="text" class="form-control has-feedback-left" id="formName" name="formName">
                        </div>

                        <hr>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" name='addform' class="btn btn-success">Submit</button>
                        </div>
                    </form>

                </div>

                <!-- Modal footer -->
            </div>


        </div>
    </div>
</div>

<?php include '../assets/layouts/footer.php' ?>