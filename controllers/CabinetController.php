<?php

class CabinetController
{

    public function actionIndex()
    {
        $userId = User::checkLogged();

        //get info about user from DB
        $user = User::getUserById($userId);
        echo $_FILES['cv'];
        
        
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }
    public function actionFavorite()
    {
        
    }



}