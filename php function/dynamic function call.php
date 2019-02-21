<?php
 /*
    It is possible to assign function names as strings to variables and then treat these variables
    exactly as you would the function name itself.
 */
?>
<html>

<head>
    <title>Dynamic Function Calls</title>
</head>

<body>

<?php
function sayHello() {
    echo "Hello<br />";
}

$function_holder = "sayHello";
$function_holder();
?>

</body>
</html>
