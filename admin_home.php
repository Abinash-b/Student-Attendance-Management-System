<?php 
session_start();
 foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'aid')
                     {

                         unset($_SESSION[$key]);

                     }

                }
 header("Location:Admin_Homepage.php");