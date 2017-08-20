<?php
include_once(ROOT. '/models/user.php');
abstract class AdminBase
{


    public static function checkAdmin()
    {
        //checking user for auth
        $userId = User::checkLogged();

        //info about user
        $user = User::getUserByIdAd($userId);


        //if admin let him enter
        if ($user['role'] == 'admin') {
            return true;
        }

        //else go out

        die('Access denied');
    } 
} 


?>