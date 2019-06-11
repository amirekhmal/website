<?php
	session_start();
	if(isset($_SESSION['username']))
	  {
    // Storing the name of the user in SESSION variable.
    unset($_SESSION ['username']);
	session_destroy ();
  }
?>