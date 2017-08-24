<?php
 
 
             $a_errors = [];
 
             //checking fields for errors
             if (!User::checkName($firstname)) {
                 $a_errors[] = 'First Name must be longer then 2 chars';
             }
             if (!User::checkName($lastname)) {
                 $a_errors[] = 'First Name must be longer then 2 chars';
             }
             if (!User::checkEmail($email)) {
                 $a_errors[] = 'Invalid email';
             }
             if (!User::checkPassword($password)) {
                 $a_errors[] = 'Password  must have at least 6 chars';
             }
             if (!User::checkPassword($cellphone)) {
                 $a_errors[] = 'Invalid phone number';
             }
             if (User::checkEmailExists($email)){
                 $a_errors[] = 'This email has already been taken';
             }
?>