<?php
   session_start();
   if(isset($_SESSION['username']))
   {
       session_destroy();
       header("Location:home.html");
   }
   else{
       echo "Logout failed";
       header("Location:home.html");
   }
   ?>