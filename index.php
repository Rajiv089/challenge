<!doctype html>
<html>
<head>
    <title>Day Picker</title>
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
            <h2 class="page-header">Calendar</h2>
            <div class="brand">
                <img src="images/calenderimg.png">
            </div>
                    <div class="input-group">
                        <input type="date" class="form-control" placeholder="yyyy/mm/dd">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div><!-- /input-group -->
        </div>


        <div class="col-md-8 text-center">
            <?php
            require 'DayPicker.php';
            $cc = new day(28, 03, 2014);
            $cc->viewCal();
            ?>
        </div>

        <div class="col-md-1"></div>
    </div>
</div>

</body>
</html>