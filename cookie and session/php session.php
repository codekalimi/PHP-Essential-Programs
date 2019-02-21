<?php
/*
   A PHP session is easily started by making a call to the session_start() function.
   This function first checks if a session is already started and if none is started then it starts one.
   It is recommended to put the call to session_start() at the beginning of the page.

 ****Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
 * To change a session variable, just overwrite it.
*/
session_start();

if( isset( $_SESSION['counter'] ) ) {
    $_SESSION['counter'] += 1;
}else {
    $_SESSION['counter'] = 1;
}

$msg = "You have visited this page ".  $_SESSION['counter'];
$msg .= "in this session.";
?>

<html>

<head>
    <title>Setting up a PHP session</title>
</head>

<body>
<?php  echo ( $msg ); ?>
</body>

</html>