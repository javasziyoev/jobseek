<?php

class CabinetController
{

    public function actionIndex($id)
    {
        $userId = User::checkLogged();
        //get info about user from DB
        $user = User::getUserById($userId);
        
 
        
        if($id == 1) require_once(ROOT . '/views/cabinet/applicant.php');
        else require_once(ROOT . '/views/cabinet/employer.php');
        return true;
        
    }
    public function actionFavorite()
    {
        
    }



}