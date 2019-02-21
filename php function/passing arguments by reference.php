<?php
  /*
    It is possible to pass arguments to functions by reference.
    This means that a reference to the variable is manipulated by the function rather than a copy of the variable's value.
    Any changes made to an argument in these cases will change the value of the original variable.
    You can pass an argument by reference by adding an ampersand to the variable name in either the function call or the function definition.
  */
?>
<html>

<head>
    <title>Passing Argument by Reference</title>
</head>

<body>

<?php
function addFive($num) {
    $num += 5;
}

function addSix(&$num) {
    $num += 6;
}

$orignum = 10;
addFive( $orignum );

echo "Original Value is $orignum<br />";

addSix( $orignum );
echo "Original Value is $orignum<br />";
?>

</body>
</html>
