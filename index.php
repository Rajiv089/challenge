<!doctype html>
<html>
<head>
    <title>Day Picker</title>
    <link rel="stylesheet" href="stylesheet.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2>Calendar</h2>
            <div class="brand">
                <img src="images/calenderimg.png">

                <div class="form-group">
                    <div class='input-group date' >
                        <input type='text' class="form-control" id="datetimepicker1" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>


        </div>


        <div class="col-md-8 text-center">

            <?php
            //Load our file
            require 'DayPicker.php';
            $cc = new day(28, 03, 2014);
            $cc->demo();

            ?>

        </div>

        <div class="col-md-1">

        </div>
    </div>
</div>

</body>
</html>