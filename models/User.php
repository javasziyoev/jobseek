<?php


class User
{

//registration for applicants
    public static function registera($firstname,$lastname,$password,$email,$cellphone)
    {
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO applicant(first_name, last_name, password, email, cellphone) '
                . 'VALUES (:firstname, :lastname, :password, :email, :cellphone)';
        $result = $db->prepare($sql);
        $result->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':cellphone', $cellphone, PDO::PARAM_STR);

        return $result->execute();
    }

//registration for employeers
public static function registere($company_class_id,$company_name,$website,$selectcity,$name,$last_name,
$email_e,$password,$phone_number,$extension_number)
{
    $db = Db::getConnection();
    
    $sql = 'INSERT INTO employer(`company_class_id`, `company_name`, `website_url`, `city_id`, `contact_first_name`, `contact_last_name`, `contact_email`, `contact_password`, `contact_cellphone`, `contact_cellphone_ext`) '
            .'VALUES (:company_class_id, :company_name, :website, :employees, :selectcity,:name,:last_name,
            :email_e,:password,:phone_number,:extension_number)';
    $result = $db->prepare($sql);
    $result->bindParam(':company_class_id', $company_class_id, PDO::PARAM_STR);
    $result->bindParam(':company_name', $company_name, PDO::PARAM_STR);
    $result->bindParam(':website', $website, PDO::PARAM_STR);
    $result->bindParam(':selectcity', $selectcity, PDO::PARAM_STR);
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':last_name', $last_name, PDO::PARAM_STR);
    $result->bindParam(':email_e', $email_e, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_STR);
    $result->bindParam(':phone_number', $phone_number, PDO::PARAM_STR);
    $result->bindParam(':extension_number', $extension_number, PDO::PARAM_STR);
    print_r($result);

    return $result->execute();
}



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
    
    /**
     * Запоминаем пользователя
     * @param integer $userId <p>id пользователя</p>
     */
    public static function auth($userId)
    {
        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;
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

    //Checking firstname and lastname for errors;
    public static function checkName($name)
    {
        if (strlen($name) >= 2){
            return true;
        }
        return false;
    }

    //Checking password whether it is longer then 6
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6){
            return true;
        }
        return false;
    }

    //Checking Email
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            return  true;
        }
        return false;
    }

    public static function checkEmailExists($email){

        $db = Db::getConnection();
        $sql = 'SELECT COUNT(*) FROM applicant WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email,PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
    }
    public static function getSectorsName()
    {$someArr=[];$i=0; 
        $db=Db::getConnection();
        $sql = 'SELECT * FROM `industry`';
        $result=$db->prepare($sql);
        $result->execute();

        while( $user = $result->fetch()){
            if($user)
            {
               $someArr[$i]= $user['industry_name'];
               $i++;
            }}
            return $someArr;
}
public static function getSectorsId()
{$someArr=[];$i=0; 
    $db=Db::getConnection();
    $sql = 'SELECT * FROM `industry`';
    $result=$db->prepare($sql);
    $result->execute();

    while( $user = $result->fetch()){
        if($user)
        {
           $someArr[$i]= $user['industry_id'];
           $i++;
        }}
        return $someArr;
}


}
?>