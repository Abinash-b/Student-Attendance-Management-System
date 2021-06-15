<?php 
session_start();
 foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'tid')
                     {

                         unset($_SESSION[$key]);

                     }

                }
 header("Location:Faculty_Homepage.php");