<?php

class CompanyController
{

    public function actionAllComp($page)
    {
       
        $k = UserVacancs::getCompanyAmount();
        $detail =  UserVacancs::getCompany($page,10);
        $pagination = new Pagination($k,$page,10,'page-');
        
        
        require_once(ROOT . '/views/site/company.php');
        return true;
    }
    public function actionFavorite()
    {
        
    }



}