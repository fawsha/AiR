<?php

define('TITLE', "Project Profile");
include '../assets/layouts/header.php';
check_verified();

?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div class="clearfix"></div>

        <div class="row">


            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-plug"></i> Project Dashboard</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Daily Logs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Production</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Safty & QC</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <!-- start accordion -->
                                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel">
                                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <h4 class="panel-title">Work Log</h4>
                                        </a>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Username</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a class="panel-heading collapsed" role="tab" id="headingTwo"
                                            data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <h4 class="panel-title">Notes</h4>
                                        </a>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p><strong>Collapsible Item 2 data</strong>
                                                </p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                Brunch 3 wolf moon tempor,
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a class="panel-heading collapsed" role="tab" id="headingThree"
                                            data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <h4 class="panel-title">Attachments</h4>
                                        </a>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingThree">
                                            <div class="panel-body">

                                                <div class="x_content">
                                                    <div class="row">
                                                        <button type="button" class="btn btn-success ml-2 pt-2"
                                                            data-toggle="modal" data-target="#exampleModal2">+ Add
                                                            Attachments</button>
                                                        <div class="col-sm-12">
                                                            <div class="card-box table-responsive">
                                                                <p class="text-muted font-13 m-b-30">

                                                                </p>
                                                                <table id="datatable-buttons"
                                                                    class="table table-striped table-bordered"
                                                                    style="width:100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Question</th>
                                                                            <th>Category</th>
                                                                            <th>Answer</th>
                                                                            <th>Description</th>
                                                                            <th>Attachments</th>
                                                                            <th>Action</th>

                                                                        </tr>
                                                                    </thead>


                                                                    <tbody>
                                                                        <?php

                                                                        $query = "SELECT * FROM question";
                                                                        $stmt = mysqli_stmt_init($conn);
                                                                        if (!mysqli_stmt_prepare($stmt, $query)) {
                                                                            die('ERROR IN CONNECTION');
                                                                        } else {
                                                                            mysqli_stmt_execute($stmt);
                                                                            $result = mysqli_stmt_get_result($stmt);
                                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                                echo '
                                                                                    <tr>
                                                                                        
                                                                                        
                                                                                        <td>' . $row['questionText'] . '</td>
                                                                                        <td>' . $row['questionCategory'] . '</td>
                                                                                        <td></td>
                                                                                        <td></td>  
                                                                                        <td></td>  
                                                                                        <td></td>  
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
                                    <div class="panel">
                                        <a class="panel-heading collapsed" role="tab" id="heading4"
                                            data-toggle="collapse" data-parent="#accordion" href="#collapse4"
                                            aria-expanded="false" aria-controls="collapse4">
                                            <h4 class="panel-title">Survey</h4>
                                        </a>
                                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading4">
                                            <div class="panel-body">
                                                <div class="x_content">
                                                    <div class="row">
                                                        <button type="button" class="btn btn-success ml-2 pt-2"
                                                            data-toggle="modal" data-target="#exampleModal">+ New
                                                            Question</button>
                                                        <div class="col-sm-12">
                                                            <div class="card-box table-responsive">
                                                                <p class="text-muted font-13 m-b-30">

                                                                </p>
                                                                <table id="datatable-buttons"
                                                                    class="table table-striped table-bordered"
                                                                    style="width:100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Question</th>
                                                                            <th>Category</th>
                                                                            <th>Answer</th>
                                                                            <th>Description</th>
                                                                            <th>Attachments</th>
                                                                            <th>Action</th>

                                                                        </tr>
                                                                    </thead>


                                                                    <tbody>
                                                                        <?php

                                                                        $query = "SELECT * FROM question";
                                                                        $stmt = mysqli_stmt_init($conn);
                                                                        if (!mysqli_stmt_prepare($stmt, $query)) {
                                                                            die('ERROR IN CONNECTION');
                                                                        } else {
                                                                            mysqli_stmt_execute($stmt);
                                                                            $result = mysqli_stmt_get_result($stmt);
                                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                                echo '
                                                    <tr>
                                                        
                                                        
                                                        <td>' . $row['questionText'] . '</td>
                                                        <td>' . $row['questionCategory'] . '</td>
                                                        <td></td>
                                                        <td></td>  
                                                        <td></td>  
                                                        <td></td>  
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
                                <!-- end of accordion -->
                            </div>


                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                                Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                artisan four loko farm-to-table craft beer twee. Qui photo
                                booth letterpress, commodo enim craft beer mlkshk aliquip
                            </div>


                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                artisan four loko farm-to-table craft beer twee. Qui photo
                                booth letterpress, commodo enim craft beer mlkshk
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /page content -->




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="includes/addQ.php" method="POST">

                    <div class="form-group col-md-12">
                        <label for="Name">Question</label>
                        <input type="text" class="form-control" id="Name" name="text" placeholder="Enter Question">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="cat">Category</label>
                        <select class="form-control" id="cat" name="category" type="text" data-qa="select_category"
                            class="Select-sc-1o1p08a-0 cMzRCc">
                            <option value="" default=""></option>
                            <option value="GENERAL">General Site Conditions</option>
                            <option value="DELAYS">Schedule Delays</option>
                            <option value="DELAYS WEATHER">Weather Delays</option>
                            <option value="SAFETY">Site Safety</option>
                            <option value="INSPECTION">Inspection</option>
                            <option value="VISITORS">Site Visitors</option>
                            <option value="EQUIPMENT">Equipment &amp; Deliveries</option>
                            <option value="ENVIRONMENTAL">Environmental Concerns</option>
                        </select>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="add" class="btn btn-success">Submit</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>




<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Attachment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="includes/addAttachment.php" method="POST"  enctype="multipart/form-data">

                    <div class="form-group col-md-12">
                        <label for="Name">Select File</label>
                        <input type="file" class="form-control" id="avatar" name="avatar" required>
                    </div>

                    


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="addA" class="btn btn-success">Submit</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<?php

include '../assets/layouts/footer.php'

    ?>