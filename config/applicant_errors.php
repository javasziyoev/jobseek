<?php
 
 
             $a_errors = [];
 
             //checking fields for errors
            
             
             
             if (User::checkEmailExists($email)){
                 $a_errors[] = 'This email has already been taken';
             }
?>