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
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjxnPjx0ZXh0IHg9IjMxNy43MzQzNzUiIHk9IjI1MCIgc3R5bGU9ImZpbGw6IzU1NTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTo0MnB0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPkZpcnN0IHNsaWRlPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
                    </div>
                    <div class="item active">
                        <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjxnPjx0ZXh0IHg9IjI3Ny4yODEyNSIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNDQ0O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjQycHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
                    </div>
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#555:#333/text:Third slide" alt="Third slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjxnPjx0ZXh0IHg9IjMwOC40MjE4NzUiIHk9IjI1MCIgc3R5bGU9ImZpbGw6IzMzMztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTo0MnB0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPlRoaXJkIHNsaWRlPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
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

            <table class="table">
<!--                <h4 class="table-heading">Class stats</h4>-->
                <tr>
                    <td>Subscribers:</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only">30% Complete</span>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Course instructor:</td>
                    <td>Jane Doe</td>
                </tr>
                <tr>
                    <td>Started: </td>
                    <td>12/12/14</td>
                </tr>
            </table>

        </div>

        <div class="col-md-4 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Who is it for</h3>
                </div>
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in dictum massa.
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <hr>

        <div class="col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">What to expect</h3>
                </div>
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in dictum massa. Duis bibendum convallis tellus, nec porta enim pulvinar suscipit. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas elit sed est venenatis, eu lacinia orci pulvinar. Aliquam consectetur a massa quis tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas viverra orci eget blandit efficitur. Etiam dignissim, nulla convallis sagittis semper, felis orci vulputate sem, egestas cursus libero nulla egestas sapien. Integer tempor et magna at suscipit. Vivamus ante mi, accumsan sed efficitur non, placerat et libero. In mollis risus ut magna euismod pretium. Quisque porttitor lacus vitae scelerisque cursus. In accumsan arcu lectus, vel pharetra sapien fermentum at. Vestibulum iaculis metus nec porta pulvinar.
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">What to Bring</h3>
                </div>
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in dictum massa. Duis bibendum convallis tellus, nec porta enim pulvinar suscipit. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas elit sed est venenatis, eu lacinia orci pulvinar. Aliquam consectetur a massa quis tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas viverra orci eget blandit efficitur. Etiam dignissim, nulla convallis sagittis semper, felis orci vulputate sem, egestas cursus libero nulla egestas sapien. Integer tempor et magna at suscipit. Vivamus ante mi, accumsan sed efficitur non, placerat et libero. In mollis risus ut magna euismod pretium. Quisque porttitor lacus vitae scelerisque cursus. In accumsan arcu lectus, vel pharetra sapien fermentum at. Vestibulum iaculis metus nec porta pulvinar.
                </div>
            </div>
        </div>

    </div>
</div>
</div>

</div> <!-- container -->
</body>
</html>