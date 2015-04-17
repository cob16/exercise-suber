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
            <a class="btn btn-danger" href="#" style="margin-left: 10px;">Subscribe</a>
            <div class="btn-group navbar-right">
                <a class="btn btn-primary" href="#">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    Edit
                </a>
                <a class="btn btn-primary" href="#">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    View class list</a>
            </div>
        </h1>
    </div>

    <div class="row">


        <div class="col-md-8 col-sm-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://placehold.it/1200x315" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption Text</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://placehold.it/1200x315" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption Text</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://placehold.it/1200x315" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption Text</h3>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div> <!-- Carousel -->
        </div>


        <div class="col-md-4 col-sm-12">
            <!-- Table -->
            <table class="table">
                <h4 class="table-heading">Class Times</h4>
                <div class="table-body">
                    <td>Day</td>
                    <td>Location</td>
                    <td>Time</td>

                    <tr>
                        <td>Mon</td>
                        <td>Main gym</td>
                        <td>06:00</td>
                    </tr>
            </table>
        </div>

    </div>

    <div class="row">

        <div class="col-md-8 col-sm-12">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <h4 class="panel-heading">Times</h4>
                <div class="panel-body">
                    <p>some words</p>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    Basic panel example
                </div>
            </div>
        </div>

    </div>

</div>
</div>

</div> <!-- container -->
</body>
</html>