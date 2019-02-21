<?php
/***
 *  The PHP $_REQUEST variable contains the contents of both $_GET, $_POST, and $_COOKIE.
 * The PHP $_REQUEST variable can be used to get the result from form data sent with both the GET and POST methods.
 * $_PHP_SELF variable contains the name of self script in which it is being called.
 */


if( isset($_REQUEST["name"]) || isset($_REQUEST["age"]) ) {
    echo "Welcome ". $_REQUEST['name']. "<br />";
    echo "You are ". $_REQUEST['age']. " years old.";
    exit();
}
?>
<html>
<body>

<form action = "<?php $_PHP_SELF ?>" method = "POST">
    Name: <input type = "text" name = "name" />
    Age: <input type = "text" name = "age" />
    <input type = "submit" />
</form>

</body>
</html>