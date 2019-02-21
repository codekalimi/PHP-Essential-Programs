<html>

<head>
    <title>Writing PHP Function</title>
</head>

<body>

<?php
echo "<h4>Simple Function:</h4> <br>";
/* Defining a PHP Function */
function writeMessage() {
    echo "You are really a nice person, Have a nice time!";
}
/* Calling a PHP Function */
writeMessage();

echo "<h4>Function with Parameters: </h4><br>";

//Function with Parameters
function addFunction($num1, $num2) {
    $sum = $num1 + $num2;
    echo "Sum of the two numbers is : $sum";
}
addFunction(10, 20);

echo  "<h4>Function with default parameter value:</h4><br>";
//Function with default parameter value
function printMe($param = "PHP") {
    print $param;
}
printMe("This is test <br>");  //function with argument
printMe(); //function with default argument

echo "<h4>Function returning value</h4><br>";
/*
 ***********You can return more than one value from a function using return array(1,2,3,4).
*/
 function addFunctionReturn($num1, $num2) {
     $sum = $num1 + $num2;
     return $sum;
 }
         $return_value = addFunctionReturn(10, 20);

         echo "Returned value from the function : $return_value";
?>

</body>
</html>