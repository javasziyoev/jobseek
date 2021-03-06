<?php


class User
{
public static function getUserDetails($id)
{        $db = Db::getConnection();
    $some=[];$i=0;
    $sql='SELECT * FROM `employer` WHERE  employer_id='.$id;
    $result = $db->prepare($sql);
     $result->execute();
   return $result->fetch();
    
}

//registration for applicants
    public static function registera($firstname,$lastname,$password,$email,$cellphone,$cv_c)
    {
        $db = Db::getConnection();
        if($cv_c==1)
        {
            $sql = 'Select max(`employer_id`) from employer';
            $result = $db->prepare($sql);
            $result -> execute();
            $cv = $result->fetch();
            $cv = $cv['max(`employer_id`)'];
            $cv++;
        }
    else $cv = 'None';
       
        $sql = "INSERT INTO employer(first_name,contact_last_name,contact_password,contact_email, contact_cellphone ,applicant,cv) 
                VALUES (:firstname, :lastname, :password, :email, :cellphone, 1,'/template/cv/$cv')";
        $result = $db->prepare($sql);
        $result->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':cellphone', $cellphone, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        

        return $result->execute();
        
    }

//registration for employeers
public static function registere($company_class_id,$company_name,$website,$selectcity,$name,$last_name,
$email_e,$password,$phone_number,$extension_number,$prime)
{
    $db = Db::getConnection();
    
    $sql = 'INSERT INTO employer(company_class_id, company_name, website_url, city_id, first_name, contact_last_name, contact_email, contact_password, contact_cellphone, contact_cellphone_ext,prime) '
            .'VALUES (:company_class_id, :company_name, :website, :selectcity,:name,:last_name,
            :email_e,:password,:phone_number,:extension_number,:prime)';
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
    $result->bindParam(':prime', $prime, PDO::PARAM_STR);
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
        $sql = 'SELECT COUNT(*) FROM employer WHERE email = :email';

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
public static function getFJobId($page,$cubes)
{
    $Arr = [];
    $i = 0; 
    $page = intval($page);
    $per = ($page - 1) * $cubes;
    $db=Db::getConnection();
    $sql = "SELECT * FROM `vacancy` WHERE 1 ORDER BY `vacancy_id` DESC limit 14 OFFSET".' '.$per;
    $result=$db->prepare($sql);
    $result->execute();

    while( $user = $result->fetch()){
        if($user)
        {
           $Arr[$i]= $user;
           $i++;
        }}
        return $Arr;
}

// Sign in
public static function CheckUserData($email,$password)
{
    $db = Db::getConnection();

 
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
    $sql = 'SELECT * FROM gods WHERE first_name = :email AND password = :password';
    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_INT);
    $result->bindParam(':password', $password, PDO::PARAM_INT);
    $result->execute();

    $user = $result->fetch();
    if($user){
        return $user['first_name'];
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
{    return false;
}

public static function getUserByIdAd($id)
{
        $db = Db::getConnection();
        $sql = 'SELECT * FROM gods WHERE first_name=:id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        if ($result){
            return $result->fetch();
        }
        return false;
}
public static function checkAorE($email)
{
    $db = Db::getConnection();
    $sql = 'SELECT `applicant` FROM employer WHERE contact_email =:email';
    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_INT);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute();
    if ($result){
        return $result->fetch();
    }
    return false;
}

public static function checkAorE1($id)
{
    $db = Db::getConnection();
    $sql = 'SELECT `applicant` FROM employer WHERE employer_id =:id';
    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute();
    if ($result){
        $result =  $result->fetch();
        return $result['applicant'];
    }
    return false;
}
public static function checkPremium($id)
{
    $db = Db::getConnection();
    $sql = 'SELECT `premium` FROM employer WHERE employer_id =:id';
    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute();
    if ($result){
        $result =  $result->fetch();
        return $result['premium'];
    }
    return false;
}
}
?>