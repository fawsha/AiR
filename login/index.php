<?php

define('TITLE', "Login");
include '../assets/layouts/header.php';
check_logged_out();
?>

 
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="includes/login.inc.php" method="post">
            <?php insert_csrf_token(); ?>
              <h1>Login</h1>
              <div class="text-center mb-3">
                    <small class="text-success font-weight-bold">
                        <?php
                            if (isset($_SESSION['STATUS']['loginstatus']))
                                echo $_SESSION['STATUS']['loginstatus'];

                        ?>
                    </small>
                </div>
              <div>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                <sub class="text-danger">
                        <?php
                            if (isset($_SESSION['ERRORS']['nouser']))
                                echo $_SESSION['ERRORS']['nouser'];
                        ?>
                    </sub>
              </div>
              <div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    <sub class="text-danger">
                        <?php
                            if (isset($_SESSION['ERRORS']['wrongpassword']))
                                echo $_SESSION['ERRORS']['wrongpassword'];
                        ?>
                    </sub>
              </div>
              
              <div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" value="loginsubmit" name="loginsubmit">Login</button>
                <a class="reset_pass" href="#">Lost your password?</a>
                <div class="mt-3">
                            <label>
                              <input type="checkbox" class="flat" id="rememberme" name="rememberme"> Remember me
                            </label>
                          </div>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> AI REVOLUTION</h1>
                  <p>©2023 All Rights Reserved. AI REVOLUTION</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                <div>
                  <h1><i class="fa fa-paw"></i> AI REVOLUTION</h1>
                  <p>©2023 All Rights Reserved. AI REVOLUTION</p>
                </div>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
