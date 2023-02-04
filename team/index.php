<?php

define('TITLE', "Team");
include '../assets/layouts/header.php';
check_verified();

?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div class="clearfix"></div>

        <div class="row">


            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Team</h2>

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#exampleModal">+ Team Member</button>
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">

                                    </p>
                                    <table id="datatable-buttons" class="table table-striped table-bordered"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Last Login</th>
                                                
                                            </tr>
                                        </thead>


                                        <tbody>
                                           <td>User User</td>
                                           <td>user@user.com</td>
                                           <td>+962799982</td>
                                           <td>User</td>
                                           <td>ACTIVE</td>
                                           <td>22-12-2022 13:36:20</td>
                                           

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
</div>
<!-- /page content -->




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Team Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="includes/addProject.php" method="POST">

                    <div class="form-group col-md-6">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Job">Phone</label>
                        <input type="text" class="form-control" id="Job" name="job" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="Job">Role</label>
                       <select id="country" name="country" class="form-control has-feedback-left">
                            
                            <option value="User">User</option>
                            <option value="Aland Islands">Account Administrator</option>
                            <option value="Aland Islands">Project Administrator</option>
                            <option value="Albania">Project Member</option>
                           
                       </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="City">Email</label>
                        <input type="email" class="form-control" id="City" name="city" placeholder="Enter Email">
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

<?php

include '../assets/layouts/footer.php'

    ?>