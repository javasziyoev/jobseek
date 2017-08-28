<?php

class CompanyController
{

    public function actionAllComp()
    {
        $userId = User::checkLogged();

        //get info about user from DB
        $user = User::getUserById($userId);
        
        
        require_once(ROOT . '/views/site/company.php');
        return true;
    }
    public function actionFavorite()
    {
        
    }



}