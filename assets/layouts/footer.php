
<?php if (isset($_SESSION['auth'])) { ?>

</body>

    <!-- <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo">
                        <a href="../home/" target="_blank"> 
                            <img src="../assets/images/logowhite.png" alt="" width="200" height="200" class="">
                        </a>
                    </h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="../welcome/" target="_blank">Welcome</a></li>
                        <li><a href="../login/" target="_blank">Log in</a></li>
                        <li><a href="../register/" target="_blank">Sign up</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Features</h5>
                    <ul>
                        <li><a href="../home/" target="_blank">Home</a></li>
                        <li><a href="../dashboard/" target="_blank">Dashboard</a></li>
                        <li><a href="../profile/" target="_blank">Profile</a></li>
                        <li><a href="../profile-edit/" target="_blank">Edit Profile</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="../contact/" target="_blank">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="social-networks">
                        <a href="https://github.com/msaad1999" class="twitter" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/muhammadsaadhussaini/" class="facebook" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                    <a class="btn btn-default" href="mailto:saad01.1999@gmail.com" target="_blank">Email Me</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>
                <a href="https://github.com/msaad1999/PHP-Login-System" target="_blank">PHP Login System</a> |  
                <a href="https://github.com/msaad1999" target="_blank">msaad1999</a> | 
                <a href="https://github.com/msaad1999/PHP-Login-System/blob/master/LICENSE" target="_blank">MIT License</a>
            </p>
        </div>
    </footer> -->
    <!-- footer content -->
    <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

<?php } ?>


<script src="../assets/vendor/js/jquery-3.4.1.min.js"></script>
<script src="../assets/vendor/js/popper.min.js"></script>
<script src="../assets/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>


<?php if(isset($_SESSION['auth'])) { ?> 

<script src="../assets/js/check_inactive.js"></script>
  <!-- jQuery -->
  <script src="../assets/theme/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../assets/theme/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/theme/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../assets/theme/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../assets/theme/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../assets/theme/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../assets/theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../assets/theme/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../assets/theme/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../assets/theme/vendors/Flot/jquery.flot.js"></script>
    <script src="../assets/theme/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../assets/theme/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../assets/theme/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../assets/theme/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../assets/theme/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../assets/theme/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../assets/theme/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../assets/theme/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../assets/theme/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../assets/theme/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../assets/theme/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../assets/theme/vendors/moment/min/moment.min.js"></script>
    <script src="../assets/theme/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../assets/build/js/custom.min.js"></script>
    
<?php } ?>


</body>

</html>

<?php

if (isset($_SESSION['ERRORS']))
    $_SESSION['ERRORS'] = NULL;
if (isset($_SESSION['STATUS']))
    $_SESSION['STATUS'] = NULL;

?>