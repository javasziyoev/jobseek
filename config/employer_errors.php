<?php
               
             $e_errors = [];
 
             //checking fields for errors
            
             if (User::checkEmailExists($password)){
                $e_errors[] = 'Password must have at least 6 chars';
            }
            if ($e_errors == true){
                $i = 1;
            }
            
?>