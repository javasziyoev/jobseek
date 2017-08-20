<?php
include_once(ROOT. '/models/User.php');
class CabinetController
{

    public function actionIndex()
    {
        $userId = User::checkLogged();
        echo $userId;
        //get info about user from DB
        $user = User::getUserById($userId);
        echo $user;
        
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }



}