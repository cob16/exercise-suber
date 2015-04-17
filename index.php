<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>North Ceredigion Fitness</title>

    <!-- Bootstrap core CSS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Custom stylesheets -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- jplist core -->
    <script src="jplist-core.min.js"></script>

    <!-- jplist bootstrap filter dropdown control -->
    <script src="jplist.boot-filter-dropdown.min.js"></script>

    <script>
        $('document').ready(function(){

            $('#demo').jplist({
                itemsBox: '.list'
                ,itemPath: '.list-item'
                ,panelPath: '.jplist-panel'
            });

        });
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php require("model-login.html"); ?>

<div class="container">

    <?php require("header-login.html"); ?>

    <div class="row">
        <div class="col-md-8 col-sm-12">

            <!-- Table -->
            <table class="table table-striped table-hover" id="classes">
                <tr>
                    <th>Course</th>
                    <th><div
                            class="dropdown pull-left"
                            data-control-type="boot-filter-drop-down"
                            data-control-name="category-filter"
                            data-control-action="filter">

                            <button
                                class="btn btn-primary dropdown-toggle"
                                type="button"
                                data-toggle="dropdown"
                                id="dropdown-menu-1"
                                aria-expanded="true">
                                <span data-type="selected-text">Type</span>
                                <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-menu-1">

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">Swimming</a>
                                </li>

                                <li role="presentation" class="divider"></li>

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#" data-path=".other">Other</a>
                                </li>
                            </ul>
                        </div>
                    </th>
                    <th>
                        <div
                            class="dropdown pull-left"
                            data-control-type="boot-filter-drop-down"
                            data-control-name="category-filter"
                            data-control-action="filter">

                            <button
                                class="btn btn-primary dropdown-toggle"
                                type="button"
                                data-toggle="dropdown"
                                id="dropdown-menu-1"
                                aria-expanded="true">
                                <span data-type="selected-text">Difficulty</span>
                                <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-menu-1">

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">Beginners</a>
                                </li>

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#" data-path=".christmas" data-default="true">Intermediate</a>
                                </li>

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#" data-path=".food">Advanced</a>
                                </li>

                                <li role="presentation" class="divider"></li>

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#" data-path=".nature">Expert</a>
                                </li>

                            </ul>
                        </div>
                    </th>
                    <th><div
                            class="dropdown pull-left"
                            data-control-type="boot-filter-drop-down"
                            data-control-name="category-filter"
                            data-control-action="filter">

                            <button
                                class="btn btn-primary dropdown-toggle"
                                type="button"
                                data-toggle="dropdown"
                                id="dropdown-menu-1"
                                aria-expanded="true">
                                <span data-type="selected-text">Attendants</span>
                                <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-menu-1">

                                <li>
                                    <a role="menuitem" tabindex="-1" href="#">Hide Full <input type="checkbox" value="" style="margin-right: 10px;" title="Hide full"></a>
                                </li>

                                <li role="presentation" class="divider"></li>

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">90%</a>
                                </li>

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">50%</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">25%</a>
                                </li>

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">0%</a>
                                </li>

                                <li role="presentation" class="divider"></li>

                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#" data-path=".other">Other</a>
                                </li>
                            </ul>
                        </div>
                    </th>
                </tr>
                <tr>
                    <td><a href="classInfo.php">Adult Beginners swimminge</a></td>
                    <td>Swimming</td>
                    <td><div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="width: 10%%">
                                <span class="sr-only">60% Complete</span
                            </div>
                        </div></td>
                    <td>4/10</td>
                </tr>
                <tr>
                    <td><a href="classInfo.php">Adult Exercise Swimming</a></td>
                    <td>Swimming</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="10" aria-valuemax="100" style="width: 50%">
                                <span class="sr-only">60% Complete</span
                            </div>
                        </div>
                    </td>
                    <td>4/10</td>
                </tr>
                <tr>
                    <td><a href="classInfo.php">Adult Advanced Skills Swimming</a></td>
                    <td>Swimming</td>
                    <td><div class="progress">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="width: 100%">
                                <span class="sr-only">60% Complete</span
                            </div>
                        </div></td>
                    <td>4/10</td>
                </tr>
                <tr>
                    <td><a href="classInfo.php">tempor ante ut mattis</a></td>
                    <td>tellus</td>
                    <td><div class="progress">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="width: 50%">
                                <span class="sr-only">60% Complete</span
                            </div>
                        </div></td>
                    <td>4/10</td>
                </tr>
                <tr>
                    <td><a href="classInfo.php">Adult Advanced Exercise Swimming</a></td>
                    <td>Swimming</td>
                    <td><div class="progress">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="width: 100%">
                                <span class="sr-only">60% Complete</span
                            </div>
                        </div></td>
                    <td>4/10</td>
                </tr>
                <tr>
                    <td><a href="classInfo.php">tempor ante ut mattis</a></td>
                    <td>tellus</td>
                    <td><div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="width: 10%%">
                                <span class="sr-only">60% Complete</span
                            </div>
                        </div></td>
                    <td>4/10</td>
                </tr>

            </table>

            <nav>
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

        <div class="col-md-4 col-sm-12">
            <div class="list-group">
                <a class="list-group-item active" href="#">
                    <h4 class="list-group-item-heading">Featured Courses</h4>
                </a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Adult Beginners swimming</h4>
                    <p class="list-group-item-text">For total beginners ready to get there foot in the door!</p>
                </a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Adult Beginners swimming</h4>
                    <p class="list-group-item-text">For total beginners ready to get there foot in the door!</p>
                </a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Adult Beginners swimming</h4>
                    <p class="list-group-item-text">For total beginners ready to get there foot in the door!</p>
                </a>
            </div>

        </div>
    </div>
</div>
</div>

</div> <!-- container -->
</body>
</html>