<?php
/**
 * Destroy a PHP Session
   To remove all global session variables and destroy the session, use session_unset() and session_destroy():
 */

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

//If you want to destroy a single session variable then you can use unset() function to unset a session variable.
unset($_SESSION['']);
?>

</body>
</html>