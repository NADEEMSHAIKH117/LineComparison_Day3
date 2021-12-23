<?php

class LineComparison
{

    //creating public variable
    public $pointX1;
    public $pointX2;
    public $pointY1;
    public $pointY2;

    //creating function to get user input
    public function getUserInput()
    {
        $this->pointX1 = readline("Enter line X1 coordinates : ");
        $this->pointX2 = readline("Enter line X2 coordinates : ");
        $this->pointY1 = readline("Enter line Y1 coordinates : ");
        $this->pointY2 = readline("Enter line Y2 coordinates : ");
    }

      /**
	 * lengthOfLine method is used to calculate length of line
	 * @return distance
	 */
    public function lengthOfLine()
    {
        //using pow() and sqrt() in build function
        // formula for distance d = \sqrt{(x_2 - x_1)^2 + (y_2-y_1)^2}
        $distance = sqrt(
            pow(($this->pointX2 - $this->pointX1), 2) +
            pow(($this->pointY2 - $this->pointY1), 2));
        return $distance;
    }

    //creating checkEquality function to compare both line and check lines are equal or not
    public function checkEquality($line1, $line2) {
        if ($line1 == $line2) {
            echo "both line length are equal";
        } else {
            echo "lines length are different";
        }
    }
}

//creating object of LineComparison class
$calculateLength = new LineComparison();
$calculateLength->getUserInput();
$line1 = $calculateLength->lengthOfLine();
echo "Length of line1 is : " . round($line1, 2) . "\n";

$calculateLength->getUserInput();
$line2 = $calculateLength->lengthOfLine();
echo "Length of line2 is :"  . round($line2, 2) . "\n";

$calculateLength->checkEquality($line1, $line2);

?>
