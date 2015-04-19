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

<div class="container">

    <?php require("header.html"); ?>

    <div class="page-header">
        <h1>Example page header

            <div class="btn-group navbar-right">
                <div class="btn-group">
                    <a class="btn btn-primary" href="classInfo.php">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        Save and Return
                    </a>
                </div>
            </div>
        </h1>
    </div>

    <div class="row">

        <div class="col-md-3 col-sm-12">
            <div class="btn-group ">
                <button type="button" class="btn btn-primary">All Attended</button>
                <button type="button" class="btn btn-primary">None Attened</button>
            </div>
        </div>

        <div class="col-md-9 col-sm-12">

            <div class="panel panel-default">
                <div class="btn-group btn-group-justified" role="group" aria-label="...">

                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">MON 23</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary ">WED 30</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary ">FRI 2</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary ">SAT 3</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="panel panel-default">

                        <!-- Table -->
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Attendance</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>

                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <label><input type="checkbox" value=""></label>
                            </div>
                        </td>
                        <td>Cormac</td>
                        <td>Brady</td>
                        <td>cob16@aber.ac.uk</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <label><input type="checkbox" value=""></label>
                            </div>
                        </td>
                        <td>Lorem</td>
                        <td>ipsum</td>
                        <td>Lorem@ipsum</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <label><input type="checkbox" value=""></label>
                            </div>
                        </td>
                        <td>Lorem</td>
                        <td>ipsum</td>
                        <td>Lorem@ipsum</td>
                    </tr>

                </table>
            </div>
        </div>
</div>
</div>

</div> <!-- container -->
</body>
</html>