<?php

define('TITLE', "Profile");
include '../assets/layouts/header.php';
check_verified();

?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Profile</h3>
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

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <img class="img-responsive avatar-view" style="width: 10%; height: 10%;"
                                    src="../assets/uploads/users/<?php echo $_SESSION['profile_image'] ?>" alt="Avatar"
                                    title="Change the avatar">
                            </div>
                        </div>
                        <h3><?php echo $_SESSION['first_name'] ?> <?php echo $_SESSION['last_name'] ?></h3>
                        <ul class="list-unstyled user_data">
                            <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                            </li>

                            <li>
                                <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                            </li>

                            <li class="m-top-xs">
                                <i class="fa fa-external-link user-profile-icon"></i>
                                <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                            </li>
                        </ul>

                        <a href="../profile-edit" class="btn btn-success text-white"><i
                                class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                        <br />


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../assets/layouts/footer.php' ?>