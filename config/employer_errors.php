<?php
 require_once(ROOT . '/models/User.php');  
 
             $errors = [];
 
             //checking fields for errors
             if (!User::checkName($company_name)) {
                 $errors[] = 'Company Name must be longer then 2 chars';
             }
             if (!User::checkName($name)) {
                $errors[] = 'First name must be longer then 2 chars';
             }
             if (!User::checkName($last_name)) {
                 $errors[] = 'Last name must be longer then 2 chars';
             }
             if (User::checkEmailExists($email_e)){
                 $errors[] = 'This email has already been taken';
             }
             if (User::checkEmailExists($password)){
                $errors[] = 'Password must have at least 6 chars';
            }
            if ($errors == true){
                $i = 1;
            }
?>