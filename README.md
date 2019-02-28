# PHPAddOne
This code contains a PHP function that adds 1 to an integer n without using arithmetic operations

The Code works by first checking if the integer provided is valid. If integer is to big the function will fail and display respective message.

The function first creates a holding variable to hold the value to be added, initially 1.
It then enters a while loop that breaks when the value to be added is 0.
Within the while loop the code checks for similar bits between the provided interger and the one to be added.
If there is a similar bit, it means that more work is neccessary to add the number and the additional carry bit is stored.
The holding variable is then added to the provided integer using an XOR operation.
The holding variable is then assigned the shifted value of the carry bit to be added in the next iteration.
The process continues until the bits of the provided number equal to the provided number+1; when carry bits are no longer needed.

The code contains test functions that assign different n values and echo the respective responses.




This code is in response to a coding question prompted by a potential employer.
