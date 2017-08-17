<?php


class User{

/*public static function getResult1($firstname,$lastname,$password,$email,$cellphone){
$db = Db::getConnection();
$result = $db->query('');
return $result;
}
public static function getResult2($Company_name,$Website,$Name,$Last_name,$Email,$password,$Phone_number,$Phone_number,$Extension_number,	$selectCurrency,$employees,$selectCity){
    $db = Db::getConnection();
    $result = $db->query('INSERT INTO');
    return $result;
    }*/   

    public static function getCompanyId()
    {   $someArr=[];$i=0; 
        $db=Db::getConnection();
        $sql = 'Select * from `company_class`';
        $result=$db->prepare($sql);
        $result->execute();

        while( $user = $result->fetch()){
            if($user)
            {
               $someArr[$i]= $user['company_class_id'];
               $i++;
            }}
            return $someArr;
            
    }
    public static function getCompanyName()
    {   $someArr1=[];$i=0; 
             $db=Db::getConnection();
        $sql = 'Select * from `company_class`';
        $result=$db->prepare($sql);
        $result->execute();

       while( $user = $result->fetch()){
        if($user)
        {
           $someArr1[$i]= $user['class_name'];
           $i++;
        }}
    return $someArr1;
    }
    
    public static function getcityId()
    {   $someArr=[];$i=0; 
        $db=Db::getConnection();
        $sql = 'Select * from `city`';
        $result=$db->prepare($sql);
        $result->execute();

        while( $user = $result->fetch()){
            if($user)
            {
               $someArr[$i]= $user['city_id'];
               $i++;
            }}
            return $someArr;
            
    }
    public static function getcityName()
    {   $someArr1=[];$i=0; 
             $db=Db::getConnection();
        $sql = 'Select * from `city`';
        $result=$db->prepare($sql);
        $result->execute();

       while( $user = $result->fetch()){
        if($user)
        {
           $someArr1[$i]= $user['city_name'];
           $i++;
        }}
    return $someArr1;
    }

   

}
?>