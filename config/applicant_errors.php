<?php
 require_once(ROOT . '/models/User.php');  
 
             $errors = [];
 
             //checking fields for errors
             if (!User::checkName($firstname)) {
                 $errors[] = 'First Name must be longer then 2 chars';
             }
             if (!User::checkName($lastname)) {
                 $errors[] = 'First Name must be longer then 2 chars';
             }
             if (!User::checkEmail($email)) {
                 $errors[] = 'Invalid email';
             }
             if (!User::checkPassword($password)) {
                 $errors[] = 'Password  must have at least 6 chars';
             }
             if (!User::checkPassword($cellphone)) {
                 $errors[] = 'Invalid phone number';
             }
             if (User::checkEmailExists($email)){
                 $errors[] = 'This email has already been taken';
             }
?>