<?php

define('TITLE', "Edit Profile");
include '../assets/layouts/header.php';
check_verified();

//XSS filter for session variables
function xss_filter($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Settings</h3>
            </div>


        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">

                    <div class="x_content">
                        <div class="col-md-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Edit Profile Data</h2>
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
                                    <br />
                                    <form class="form-label-left input_mask" action="includes/profile-edit.inc.php"
                                        method="post" enctype="multipart/form-data" autocomplete="off">
                                        <?php insert_csrf_token(); ?>

                                        <div class="picCard text-center">
                                            <div class="avatar-upload">
                                                <div class="avatar-preview text-center">
                                                    <div id="imagePreview"
                                                        style="background-image: url( ../assets/uploads/users/<?php echo $_SESSION['profile_image'] ?> );">
                                                    </div>
                                                </div>
                                                <div class="avatar-edit">
                                                    <input name='avatar' id="avatar" class="fas fa-pencil"
                                                        type='file' />
                                                    <label for="avatar"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <sub class="text-danger">
                                                <?php
                                                if (isset($_SESSION['ERRORS']['imageerror']))
                                                    echo $_SESSION['ERRORS']['imageerror'];

                                                ?>
                                            </sub>
                                        </div>

                                        <div class="text-center">
                                            <small class="text-success font-weight-bold">
                                                <?php
                                                if (isset($_SESSION['STATUS']['editstatus']))
                                                    echo $_SESSION['STATUS']['editstatus'];

                                                ?>
                                            </small>
                                        </div>
                                        <br>
                                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="first_name"
                                                name="first_name" placeholder="First Name"
                                                value="<?php echo xss_filter($_SESSION['first_name']); ?>">
                                            <span class="fa fa-user form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                placeholder="First Name"
                                                value="<?php echo xss_filter($_SESSION['last_name']); ?>">
                                            <span class="fa fa-user form-control-feedback right"
                                                aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="email" class="form-control has-feedback-left"
                                                id="inputSuccess4" id="email" name="email" placeholder="Email address"
                                                value="<?php echo xss_filter($_SESSION['email']); ?>">
                                            <span class="fa fa-envelope form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess5"
                                                placeholder="Phone" id="phone" name="phone"
                                                value="<?php echo xss_filter($_SESSION['phone']); ?>">
                                            <span class="fa fa-phone form-control-feedback right"
                                                aria-hidden="true"></span>
                                        </div>


                                        <!-- password -->
                                        <div class="x_title">
                                            <h2>Change Password <small>(*) is required</small></h2>
                                            <ul class="nav navbar-right panel_toolbox">

                                                <br>
                                                <sub class="text-danger mb-4">
                                                    <?php
                                                    if (isset($_SESSION['ERRORS']['passworderror']))
                                                        echo $_SESSION['ERRORS']['passworderror'];

                                                    ?>
                                                </sub>
                                                <br><br>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">Enter your current
                                                password*</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input class="form-control" type="password" id="password"
                                                    name="password" placeholder="Current Password" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">New Password*</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input class="form-control" type="password" id="newpassword"
                                                    name="newpassword" class="form-control" placeholder="New Password"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">Confirm Password*</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input class="form-control" type="password" id="confirmpassword"
                                                    name="confirmpassword" class="form-control"
                                                    placeholder="Confirm Password" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">Username </label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" id="username" name="username" class="form-control"
                                                    placeholder="Username"
                                                    value="<?php echo xss_filter($_SESSION['username']); ?>"
                                                    autocomplete="off" placeholder="Disabled Input">
                                            </div>
                                            <sub class="text-danger">
                                                <?php
                                                if (isset($_SESSION['ERRORS']['usernameerror']))
                                                    echo $_SESSION['ERRORS']['usernameerror'];

                                                ?>
                                            </sub>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group row">
                                            <div class="col-md-9 col-sm-9  offset-md-3">
                                                <a href="../profile" type="button" class="btn btn-primary">Cancel</a>
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button type="submit" name='update-profile'
                                                    class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

include '../assets/layouts/footer.php'

?>

<script type="text/javascript">
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);

        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#avatar").change(function() {
    console.log("here");
    readURL(this);
});
</script>