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
    $this->startDayIndex = array_search('Tuesday', $this->days);
    $this->aInput = array('d' => $day, 'm' => $month, 'y' => $year);
    }

public function demo()
    {
        $demoYear = $this->startYear;
        $totalDays = -1;

        while ($demoYear < 2015) {

            echo "<h2>$demoYear</h2>

            <table align='center' border='6'>";
            $demoMonth = 1;
            while ($demoMonth < 12) {
                echo "<tr><td colspan='7'><b>Month $demoMonth</b></td></tr>";
                echo "<tr><td>Monday</td><td>Tuesday</td><td>Wednesday</td><td>Thursday</td><td>Friday</td><td>Saturday</td><td>Sunday</td></tr>";

                $dayCount = ($demoMonth % 2 == 1) ? 33 : 32;
                $dayCount = ($demoMonth == 11 && $demoYear % 5 == 0) ? 32 : $dayCount;

                $demoDay = 1;

                echo "<tr>";
                while ($demoDay <= $dayCount) {
                    $index = ++$totalDays % 7;
                    if ($demoDay == 1) {
                        for ($i = 0; $i < $index - 1; $i++) {
                            echo "<td></td>";
                        }
                        if ($index == 0 || $index == 7) {
                            $i = 6;
                            while ($i--) {
                                echo "<td></td>";
                            }
                        }
                    }
                    echo "<td>$demoDay</td>";
                    if ($index == 0) {
                        echo "</tr><tr>";
                    }
                    $demoDay++;
                }
                echo "</tr>";
                $demoMonth++;
            }
            echo "
            </table><hr />";
            $demoYear++;
        }
    }


}

?>
