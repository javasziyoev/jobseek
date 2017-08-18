<?php

echo $email,$password;
require_once(ROOT. '/models/user.php');
//Fields Validation
if (!User::checkEmail($email)) {
 $errors[] = 'Invalid email';
}
if (!User::checkPassword($password))  {
 $errors = "Password must be longer than 6 chars";
}


//Check whether user is on database
$userId = User::checkUserData($email, $password);
print($userId);
if ($userId == false){
 $errors[] = "Incorrect user data";
} else{
 User::auth($userId);
 //User in Cabinet
 header("Location: /cabinet/");
}
}

?>