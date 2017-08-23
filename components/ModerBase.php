<?php

abstract class ModerBase 
{


    public static function checkModer()
    {
        //checking user for auth
        $userId = User::checkLogged();

        //info about user
        $user = User::getUserByIdAd($userId);


        //if admin let him enter
        if ($user['role'] == 'moder') {
            return true;
        }

        //else go out

        die('Access denied');
    }
     
} 


?>