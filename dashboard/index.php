<?php

define('TITLE', "Dashboard");
include '../assets/layouts/header.php';
check_verified();

?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dashboard</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">


            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>All Time Status By Project</h2>
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


                        <!-- top tiles -->
                        <div class="row" style="display: inline-block;">
                            <div class="tile_count">
                                <div class="col-md-2 col-sm-4  tile_stats_count">
                                     <span class="count_top"><i class="fa fa-user"></i> Man Days</span>
                                    <div class="count">2500</div>
                                    <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                                </div>
                                <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-clock-o"></i> Hours</span>
                                    <div class="count">123.50</div>
                                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i>
                                        From last Week</span>
                                </div>
                                <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class=""><i class="fa fa-medkit"></i> Seafty Incidents</span>
                                    <div class="count green">2,500</div>
                                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>
                                        From last Week</span>
                                </div>
                                <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-history"></i> Delays</span>
                                    <div class="count">4,567</div>
                                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i>
                                        From last Week</span>
                                </div>
                                <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-trophy"></i> Compliance</span>
                                    <div class="count">2,315</div>
                                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>
                                        From last Week</span>
                                </div>
                                <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-spinner"></i> Open Tasks</span>
                                    <div class="count">7,325</div>
                                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>
                                        From last Week</span>
                                </div>
                            </div>
                        </div>
                        <!-- /top tiles -->
                        <!-- insights -->
                       
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Recent Activities</h2>
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
                        <div class="dashboard-widget-content">

                            <ul class="list-unstyled timeline widget">
                                <li>
                                    <div class="block">
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                            </h2>
                                            <div class="byline">
                                                <span>13 hours ago</span> by <a>Jane Smith</a>
                                            </div>
                                            <p class="excerpt">Film festivals used to be do-or-die moments for movie
                                                makers. They were where you met the producers that could fund your
                                                project, and if the buyers liked your flick, they’d pay to Fast-forward
                                                and… <a>Read&nbsp;More</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Reports </h2>
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
                        <ul class="list-unstyled timeline">
                            <li>
                                <div class="block">
                                    <div class="tags">
                                        <a href="" class="tag">
                                            <span>Entertainment</span>
                                        </a>
                                    </div>
                                    <div class="block_content">
                                        <h2 class="title">
                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                        </h2>
                                        <div class="byline">
                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers.
                                            They were where you met the producers that could fund your project, and if
                                            the buyers liked your flick, they’d pay to Fast-forward and…
                                            <a>Read&nbsp;More</a>
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

            <!-- line graph -->
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Workers By Project</h2>
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
                    <div class="x_content2">
                        <div id="graph_line" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            <!-- /line graph -->

            <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Open Tasks</h2>
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
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Seafty Incidents</h2>
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
                        <div id="graph_bar" style="width:100%; height:280px;"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php

include '../assets/layouts/footer.php';

?>