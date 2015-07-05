<html>
<head>
</head>

<body>

<div class="form-group">
    <div class='input-group date' >
        <input type='text' class="form-control" id="datetimepicker1" />
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
</div>

</body>
</html>

<?php


 class day {

    protected $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    protected $numDays;
    protected $startDayIndex;
    protected $startYear = 1870;
    protected $leapInterval = 5;
    protected $aInput = array();

    public function __construct($day, $month, $year) {
    $this->numDays = count($this->days);
    $this->startDayIndex = array_search('Wednesday', $this->days);
    $this->aInput = array('d' => $day, 'm' => $month, 'y' => $year);
}

public function demo() {

}
}


    function check()
    {
    }


    function _initializeDate()
    {

        //while($this->dayCount == 2);
        // loop to process each argument separately
        for ($i = 0; $i < $arguments; $i++) {
            // add the value in the current argument to the total
            $total += func_get_arg($i);

        switch ($this->day) {

            case 0:
                $this->day = "Sunday";
                break;
            case 1:
                $this->day = "Monday";
                break;
            case 2:
                $this->day = "Tuesday";
                break;
            case 3:
                $this->day = "Wednesday";
                break;
            case 4:
                $this->day = "Thursday";
                break;
            case 5:
                $this->day = "Friday";
                break;
            case 6:
                $this->day = "Saturday";
                break;
        }
    }



}

?>
