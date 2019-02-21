<?php
/**
     Sessions without cookies
  There may be a case when a user does not allow to store cookies on their machine.
  So there is another method to send session ID to the browser.
 Alternatively, you can use the constant SID which is defined if the session started.
 If the client did not send an appropriate session cookie, it has the form session_name=session_id. Otherwise, it expands to an empty string.
 Thus, you can embed it unconditionally into URLs.
The following example demonstrates how to register a variable, and how to link correctly to another page using SID.
 */

   session_start();

   if (isset($_SESSION['counter'])) {
      $_SESSION['counter'] = 1;
   }else {
      $_SESSION['counter']++;
   }

   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";

   echo ( $msg );
?>

<p>
   To continue  click following link <br />

   <a  href = "nextpage.php?<?php echo htmlspecialchars(SID); ?>">
</p>