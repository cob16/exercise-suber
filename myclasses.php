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

    <!-- jQuwery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom stylesheets -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">

<?php require("header.html"); ?>

        <div id="le-alert" class="alert alert-success alert-block fade">
            <button href="#" type="button" class="close">&times;</button>
            <!--        <h4>Alert title</h4>-->
            <p>Unsubscribe/s sucessfull...</p>
        </div>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Courses you run</div>

        <!-- Table -->
        <table class="table table-striped table-hover">
            <tr>
                <th>Course</th>
                <th>Attendance</th>

            </tr>
            <tr>
                <td><a href="classInfo.php">Adult Beginners swimming</a></td>
                <td><div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="width: 10%%">
                            <span class="sr-only">60% Complete</span
                        </div>
                    </div></td>
            </tr>
            <tr>
                <td><a href="classInfo.php">Adult Beginners swimming</a></td>
                <td>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="width: 10%%">
                            <span class="sr-only">60% Complete</span
                        </div>
                    </div>
                </td>
            </tr>

        </table>
    </div>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Your currently subscribed courses</div>

            <!-- Table -->
            <table class="table table-striped table-hover">
                <tr>
                    <th>Course</th>
                    <th>Type</th>
                    <th><button type="button" onclick="confirmBox()" class="btn btn-danger" id="the-thing-that-opens-your-alert">Unsubcribe</button></th>

                </tr>
                <tr>
                    <td>Adult Beginners swimming</td>
                    <td>Swimming</td>
                    <td>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""></label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="test" >another course</td>
                    <td>wired</td>
                    <td>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""></label>
                        </div>
                    </td>

                </tr>

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
                        if (confirm("Are you shure you wish to unsubscribe!") == true) {
                            x = "You pressed OK!";
                            $('#le-alert').addClass('in');
                        }

                        document.getElementById("demo").innerHTML = x;
                        $('#the-thing-that-opens-your-alert').click(function () {
                            $('#le-alert').addClass('in'); // shows alert with Bootstrap CSS3 implem
                        });
                    }
                    </script>

            </table>
        </div>

</div> <!-- container -->
</body>
</html>
