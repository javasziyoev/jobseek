<?php


class Panels
{

    public static function actionModerator()
    {
       echo 'huy';
    }
    public static function getVacansies()
    {
          $someArr=[];$i=0; 
            $db=Db::getConnection();
            $sql = 'Select * from `vacancy` where published = 0';
            $result=$db->prepare($sql);
            $result->execute();
    
            while( $user = $result->fetch()){
                if($user)
                {
                   $someArr[$i]= $user;
                   $i++;
                }}
                return $someArr;
    }
////moder name
    public static function getPersonalName()
    {   $Arr1=[];
        $Arr2=[];
        $i=0; 
        $db=Db::getConnection();
        $sql = 'SELECT `nick`,`role` FROM `gods` order by `id`';
        $result=$db->prepare($sql);
        $result->execute();
    
        while( $user = $result->fetch()){
            if($user)
            {
               $Arr1[$i] = $user['nick'];
               $Arr2[$i] = $user['role'];
               $i++;
            }}
            return Array($Arr1,$Arr2);
            
    }

    public static function DeletePersonal($id){
        $db = Db::getConnection();
        $sql = 'DELETE FROM `gods` WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        if($result){
            return true;
        }
        return false;

    }
    public static function registerPersonal($name,$password,$role)
    {
        $db = Db::getConnection();
       
        $sql = 'INSERT INTO gods(nick, password, role) '
                . 'VALUES (:name, :password, :role)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':role', $role, PDO::PARAM_STR);
      

        return $result->execute();
    }
    public static function show_applicants()
    { 
        $arr = [];
        $i = 0;
        $db = Db::getConnection();
        $sql = 'SELECT * FROM applicant';
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        while( $user = $result->fetch()){
            if($user)
            {
               $arr[$i]= $user;
               $i++;
            }}
                
        return $arr;
    }

    public static function show_employeers()
    { 
        $db = Db::getConnection();
        $sql = 'SELECT * FROM employers';
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        if ($result){
            return $result->fetch();
            }
                
        return false;
    }
    public static function adminStats()
    {   $arr = [];
        $sql = [];
        $i = 0;
        $db = Db::getConnection();

        $sql[0] = 'SELECT (SELECT COUNT(*) FROM applicant ) + 
        (SELECT COUNT(*) FROM employer) + (SELECT COUNT(*) FROM gods ) as t2';
        $sql[1] = 'SELECT COUNT(*) FROM cv';
        $sql[2] = 'SELECT COUNT(*) FROM vacancy';
        $sql[3] = 'SELECT COUNT(*) FROM employer';
        while ($i<4){
        $result = $db->prepare($sql[$i]);
        $result->execute();
            $arr[$i] = $result->fetch();
            $i++;
        }
        if($arr){
            return $arr;
        }
        return false;
        }

    }
    
    
    

?>