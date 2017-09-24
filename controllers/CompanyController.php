<?php

class CompanyController
{

    public function actionAllComp($page)
    {
        $userId = User::checkLogged();
        $k = UserVacancs::getCompanyAmount();
        $cubes = 8;
        $e = floor($k / $cubes) + 1;
        $detail =  UserVacancs::getCompany($page,$cubes);
        //get info about user from DB
        $user = User::getUserById($userId);
        
        
        require_once(ROOT . '/views/site/company.php');
        return true;
    }
    public function actionFavorite()
    {
        
    }



}