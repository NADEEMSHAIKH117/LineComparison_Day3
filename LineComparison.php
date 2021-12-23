<?php

class LineComparison {

    //creating public variable
    public $pointX1;
    public $pointX2;
    public $pointY1;
    public $pointY2;

    //creating function to get user input
    public function getUserInput() {
        $this->pointX1 = readline("Enter line X1 coordinates : ");
        $this->pointX2 = readline("Enter line X2 coordinates : ");
        $this->pointY1 = readline("Enter line Y1 coordinates : ");
        $this->pointY2 = readline("Enter line Y2 coordinates : ");
    }

    //creating function to store the values of points in distance and returning the distance
    public function lengthOfLine() {
        //using pow() and sqrt() in build function
        // formula for distance d = \sqrt{(x_2 - x_1)^2 + (y_2-y_1)^2}
        $distance = sqrt(
            pow(($this->pointX2 - $this->pointX1), 2) +
            pow(($this->pointY2 - $this->pointY1), 2)
        );
        return $distance;
    }
}

//creating object of LineComparison class
$calculateLength = new LineComparison();
$calculateLength->getUserInput();
echo "Length of line is : " .$calculateLength->lengthOfLine();
?>