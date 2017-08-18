<?php
                require_once(ROOT . '/models/User.php');  
             $e_errors = [];
 
             //checking fields for errors
             if (!User::checkName($company_name)) {
                 $e_errors[] = 'Company Name must be longer then 2 chars';
             }
             if (!User::checkName($name)) {
                $e_errors[] = 'First name must be longer then 2 chars';
             }
             if (!User::checkName($last_name)) {
                 $e_errors[] = 'Last name must be longer then 2 chars';
             }
             if($email_e == ''){
                 $e_errors[] = 'an email is empty';
             }
             if($password == ''){
                $e_errors[] = 'insert a password';
            }
             if (User::checkEmailExists($email_e)){
                 $e_errors[] = 'This email has already been taken';
             }
             if (User::checkEmailExists($password)){
                $e_errors[] = 'Password must have at least 6 chars';
            }
            if ($e_errors == true){
                $i = 1;
            }
?>