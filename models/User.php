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

        return $result->sql;
    }

//registration for employeers
public static function registere($company_class_id,$company_name,$website,$selectcity,$name,$last_name,
$email_e,$password,$phone_number,$extension_number)
{
    $db = Db::getConnection();
    
    $sql = 'INSERT INTO employer(company_class_id, company_name, website_url, city_id, contact_first_name, contact_last_name, contact_email, contact_password, contact_cellphone, contact_cellphone_ext) '
            .'VALUES (:company_class_id, :company_name, :website, :selectcity,:name,:last_name,
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

    return $result->execute();
}

public static  function getFJob()
{$someArr=[];$i=0; 

    $db=Db::getConnection();
    $sql = 'SELECT * FROM `featured_job`';
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
 public  static function getAllFJobs()
 {
$getFJobId = User::getFJob();
$db = Db::getConnection();
echo '<form action ="" method = "POST"> <table>
   <tr>
   <th>
   featured_job_id
   </th>
       <th>
       vacancy_id  </th>
   <th>
   actuality
   </th>
</tr>';
foreach($getFJobId as $getJobs)
{

echo '<tr><td>';
echo '<input type = "text" name = "featured_job_id'. $getJobs['featured_job_id'].'" value  ='.$getJobs['featured_job_id'].'></td><td>';
 echo '<input type = "text" name = "vacancy_id'. $getJobs['featured_job_id'].'" value  ='.$getJobs['vacancy_id'].'></td><td>';
 
echo '<input type = "text" name = "actuality'. $getJobs['featured_job_id'].'" value  ='.$getJobs['actuality'].'></td><td>';
echo '<input type = "submit" name = "submit1'. $getJobs['featured_job_id'].'" value  ="prove"></td></tr>';

if(isset($_POST['submit1'. $getJobs['featured_job_id']]))
{$sql = 'UPDATE `featured_job` SET
`featured_job_id`=:featured_job_id,`vacancy_id`=:vacancy_id,`actuality`=:actuality WHERE `featured_job_id`=:featured_job_id';
$result = $db->prepare($sql);
$result->bindParam(':featured_job_id',$_POST['featured_job_id'. $getJobs['featured_job_id']], PDO::PARAM_STR);
$result->bindParam(':vacancy_id', $_POST['vacancy_id'. $getJobs['featured_job_id']], PDO::PARAM_STR);
$result->bindParam(':actuality', $_POST['actuality'. $getJobs['featured_job_id']], PDO::PARAM_STR);

return $result->execute();


} 
} 
echo ' </table></form>';


}

public static function getCurrent()
{
      $someArr=[];$i=0; 
        $db=Db::getConnection();
        $sql = 'Select * from `currency`';
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
public static function getIndustry()
{
      $someArr=[];$i=0; 
        $db=Db::getConnection();
        $sql = 'Select * from `industry`';
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
public static function getEmployment_type()
{
      $someArr=[];$i=0; 
        $db=Db::getConnection();
        $sql = 'Select * from `employment_type`';
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


    public static function getCompany()
    {   $someArr=[];$i=0; 
        $db=Db::getConnection();
        $sql = 'Select * from `company_class`';
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
   


    public static function getcity()
    {   $someArr=[];$i=0; 
        $db=Db::getConnection();
        $sql = 'Select * from `city`';
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
           $someArr[$i]= $user;
           $i++;
        }}
        return $someArr;
}
public static function getFJobId()
{$someArr=[];$i=0; 
    $someArr2=[];
    $db=Db::getConnection();
    $sql = 'SELECT * FROM `featured_job`';
    $result=$db->prepare($sql);
    $result->execute();

    while( $user = $result->fetch()){
        if($user['actuality']==1)
        {
           $someArr[$i]= $user['vacancy_id'];
           $i++;
        }}
$k=0;

        for($j=0;$j<$i;$j++)
        {    $sql = 'SELECT * FROM `vacancy` WHERE vacancy_id ='.$someArr[$j];
            $result = $db->prepare($sql);
            $result->execute();
              while($user = $result->fetch())     
              { 
                $someArr2[$k]=$user;
                $k++;
              }       
        }
        return $someArr2;
}

// Sign in
public static function CheckUserData($email,$password)
{
    $db = Db::getConnection();

    $sql = 'SELECT * FROM applicant WHERE email = :email AND password = :password';
    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_INT);
    $result->bindParam(':password', $password, PDO::PARAM_INT);
    $result->execute();

    $user = $result->fetch();
    if($user){
        return $user['applicant_id'];
    }
    $sql = '';
    $sql = 'SELECT * FROM employer WHERE contact_email = :email AND contact_password = :password';
    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_INT);
    $result->bindParam(':password', $password, PDO::PARAM_INT);
    $result->execute();

    $user = $result->fetch();
    if($user){
        return $user['employer_id'];
    }
    //admin
    $sql = '';
    $sql = 'SELECT * FROM gods WHERE nick = :email AND password = :password';
    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_INT);
    $result->bindParam(':password', $password, PDO::PARAM_INT);
    $result->execute();

    $user = $result->fetch();
    if($user){
        return $user['nick'];
    }
    return false;
}

public static function auth($userId)
{

    $_SESSION['user'] = $userId;
}

public static function checkLogged()
{

    //If there is a session ,return an id
    if (isset($_SESSION['user'])) {
        return $_SESSION['user'];
    }

    header("Location: /user/signin");
}

public static function isGuest()
{

    if (isset($_SESSION['user'])) {
        return false;
    }
    return true;
}

public static function getUserById($id)
{
    
        $db = Db::getConnection();
        $sql = 'SELECT * FROM applicant WHERE applicant_id=:id';
        $sql1 = 'SELECT * FROM employer WHERE employer_id=:id';
       
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        if ($result){
            return $result->fetch();
        }
        
    return false;
}

public static function getUserByIdAd($id)
{
        $db = Db::getConnection();
        $sql = 'SELECT * FROM gods WHERE nick=:id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        if ($result){
            return $result->fetch();
        }
        return false;
}


}
?>