<?php
include_once(ROOT. '/models/User.php');
class CabinetController
{

    public function actionIndex()
    {
        $userId = User::checkLogged();
        //get info about user from DB
        $user = User::getUserById($userId);
        
        
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }



}