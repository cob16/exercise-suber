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
</head
<body>
<div class="container">

<?php require("header.html"); ?>

        <div id="le-alert" class="alert alert-success alert-block fade">
            <button href="#" type="button" class="close">&times;</button>
            <!--        <h4>Alert title</h4>-->
            <p>Success</p>
        </div>

        <div class="panel panel-default">

            <!-- Table -->
            <table class="table table-striped table-hover">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                    <th>
                        <div class="btn-group">
                            <button type="button" onclick="confirmBox()" class="btn btn-default" id="the-thing-that-opens-your-alert">Make Instructor</button>
                            <button type="button" onclick="confirmBox()" class="btn btn-warning" id="the-thing-that-opens-your-alert">Make Instructor</button>
                            <button type="button" onclick="confirmBox()" class="btn btn-warning" id="the-thing-that-opens-your-alert">Make regular user</button>
                        </div>
                    </th>
                </tr>
                <tr>
                    <td>Cormac</td>
                    <td>Brady</td>
                    <td>cob16@aber.ac.uk</td>
                    <td>
                        <div class="checkbox">
                           <label><input type="checkbox" value=""></label></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cormac</td>
                    <td>Brady</td>
                    <td>cob16@aber.ac.uk</td>
                    <td>
                        <div class="checkbox">
                           <label><input type="checkbox" value=""></label></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cormac</td>
                    <td>Brady</td>
                    <td>cob16@aber.ac.uk</td>
                    <td>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""></label></div>
                        </div>
                    </td>
                </tr>
            </table>

                <script>
                    $('#the-thing-that-opens-your-alert').click(function () {
                        $('#le-alert').addClass('in'); // shows alert with Bootstrap CSS3 implem
                    });

                    $('.close').click(function () {
                        $(this).parent().removeClass('in'); // hides alert with Bootstrap CSS3 implem
                    });
                </script>

                <script>
                    function confirmBox() {
                        var x;
                        if (confirm("Are you shure?") == true) {
                            x = "You pressed OK!";
                            $('#le-alert').addClass('in');
                        }

                        document.getElementById("demo").innerHTML = x;
                        $('#the-thing-that-opens-your-alert').click(f ction () {
                            $('#le-alert').addClass('in'); // shows alert with Bootstrap CSS3 implem
                        });
                    }
                    </script>

            </table>
        </div>

</div> <!-- container -->
</body>
</html>
