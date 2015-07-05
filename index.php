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
        <div class="col-md-3"></div>

        <div class="col-md-6 text-center">
                <div class="brand">
                    <img src="images/calenderimg.png">
                </div>
                    <h2>Calendar</h2>
                    Player 1 - Orange<br/>
                    Player 2 - Navyblue <br/><br><br>

                <?php
                //Load our file
                require 'DayPicker.php';
                ?>


        </div>

        <div class="col-md-3"></div>
    </div>
</div>

</body>
</html>