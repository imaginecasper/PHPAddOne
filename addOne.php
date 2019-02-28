<?php
// function to add one to a number $n without using arithmetic operations
function addOne($n) {
    //check if provided integer is valid, bigger values produce wrong results
    if($n < PHP_INT_MAX && $n >= -(PHP_INT_MAX)) {
        //variable to hold bits to be added
        $one = 1;
        //loop until holding variable is 0
        //holding variable will increase in size until there is no more need to carry over a bit
        while($one != 0) {
            //if the holding variable and $n have a similar bit, carry it over to the next iteration
            $carry = $n & $one;
            //XOR to add the holding variable to the provided number 
            $n = $n ^ $one;
            //shift the carry variable and store in holding to preserve binary state through next iteration
            $one = $carry << 1;
        }
        return $n;
    } else {
        //return error message
        return "Provided Integer is Invalid (Too Big)";
    }
}


//test functions
echo addOne(100);
echo("<br>");
echo addOne(1);
echo("<br>");
echo addOne(0);
echo("<br>");
echo addOne(-1);
echo("<br>");
echo addOne(-100);
echo("<br>");
echo addOne(10000000);
echo("<br>");
echo addOne(-10000000);
echo("<br>");
echo addOne(PHP_INT_MAX-1);
echo("<br>");
echo addOne(-(PHP_INT_MAX));
echo("<br>");


?>
