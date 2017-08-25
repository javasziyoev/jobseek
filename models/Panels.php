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

    public static function getPublUsers(){
        echo 'Search users by name,id,email <br/>';
        echo '<form action="#" method = "POST">
        <input type = "text" name = "searchuser" placeholder="write something">
        <select name ="typeuser"><option value = "1">Applicant</option>
        <option value = "2">Employer</option>
        </select>
        <input type ="submit" value = "search" name ="usersubmit">
        </form>'; 
        
        if($_POST)
        {
            if(isset($_POST['usersubmit']))
            {
                if(($_POST['searchuser']))
                {  if( $_POST['typeuser']==1){
                   $username= Panels:: getUsersForSearchA($_POST['searchuser']);
                   if(($username)){
                    echo '<form action ="" method = "POST"> <table>
                    <tr>
                    <th>
                    applicant_id
                    </th>
                        <th>
                        first_name  </th>
                    <th>
                    last_name
                    </th>
                    <th>
                    email
                    </th>
                    <th>
                    cellphone
                    </th>
                   
                    </tr>';$some=[];$i=0;
                    foreach ($username as $vacans)
                    { echo ' <tr>
                        <td>  <input name = "applicant_id'. $vacans['applicant_id'].'" type = "text" value ='. $vacans['applicant_id'].'>
                        </td>
                        <td>  <input name = "first_name'. $vacans['applicant_id'].'" type = "text" value ='. $vacans['first_name'].'>
                        </td>
                        <td>  <input name = "last_name'. $vacans['applicant_id'].'" type = "text" value ='. $vacans['last_name'].'>
                        </td>
                        <td>  <input name = "email'. $vacans['applicant_id'].'" type = "text" value ='. $vacans['email'].'>
                        </td>
                        <td>  <input name = "cellphone'. $vacans['applicant_id'].'" type = "text" value ='. $vacans['cellphone'].'>
                        </td>
                    
                    
                       
                    
                        </tr>';
                      
                         } echo ' </table></form>';
                        
                      
                        }
                    
                }
            
            else    if( $_POST['typeuser']==2){
                    $username= Panels:: getUsersForSearchE($_POST['searchuser']);
                    if(($username)){
                     echo '<form action ="" method = "POST"> <table>
                     <tr>
                     <th>
                     employer_id
                     </th>
                         <th>
                         company_name  </th>
                     <th>
                     website_url
                     </th>
                     <th>
                     first_name
                     </th>
                     <th>
                     contact_last_name
                     </th>
                     <th>
                     contact_email
                     </th> 
                     <th>
                     contact_cellphone
                     </th>
                     <th>
                     contact_cellphone_ext
                     </th>
                     <th>
                     city
                     </th>
                     </tr>';$some=[];$i=0;
                     foreach ($username as $vacans)
                     { echo ' <tr>
                         <td>  <input name = "employer_id'. $vacans['employer_id'].'" type = "text" value ='. $vacans['employer_id'].'>
                         </td>
                         <td>  <input name = "company_name'. $vacans['employer_id'].'" type = "text" value ='. $vacans['company_name'].'>
                         </td>
                         <td>  <input name = "website_url'. $vacans['employer_id'].'" type = "text" value ='. $vacans['website_url'].'>
                         </td>
                         <td>  <input name = "first_name'. $vacans['employer_id'].'" type = "text" value ='. $vacans['first_name'].'>
                         </td>
                         <td>  <input name = "contact_last_name'. $vacans['employer_id'].'" type = "text" value ='. $vacans['contact_last_name'].'>
                         </td>
                         <td>  <input name = "contact_email'. $vacans['employer_id'].'" type = "text" value ='. $vacans['contact_email'].'>
                         </td>
                         <td>  <input name = "contact_cellphone'. $vacans['employer_id'].'" type = "text" value ='. $vacans['contact_cellphone'].'>
                         </td>
                         <td>  <input name = "contact_cellphone_ext'. $vacans['employer_id'].'" type = "text" value ='. $vacans['contact_cellphone_ext'].'>
                         </td>
                         <td>  <input name = "city_id'. $vacans['employer_id'].'" type = "text" value ='. $vacans['city_id'].'>
                         </td>
                     
                         
                     
                         </tr>';
                         
                          } echo ' </table></form>';
                         
                       
                         }
                     
                 }
            }
            }
        }
    }
    public static function getUsersForSearchA($argument)
    {                  echo 'Looking for applicant'; 
        $someArr=[];$i=0; 
    $db=Db::getConnection();
        
        $sql='SELECT * FROM `applicant` WHERE applicant_id LIKE "'.$argument.'%" OR first_name LIKE "'.$argument.'%" or email LIKE "'.$argument.'%"';
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
    public static function getUsersForSearchE($argument)
    {                $someArr=[];$i=0; 
    $db=Db::getConnection();
        
        $sql='SELECT * FROM `employer` WHERE employer_id LIKE "'.$argument.'%" OR company_name LIKE "'.$argument.'%" or contact_email LIKE "'.$argument.'%" OR first_name LIKE "'.$argument.'%"';
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
    public static function getVacansies1($id)
    {
          $someArr=[];$i=0; 
            $db=Db::getConnection();
            $sql = 'Select * from `vacancy` where published = 1 and vacancy_id='.$id;
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
    public static function getVacansies2($position)
    {
          $someArr=[];$i=0; 
            $db=Db::getConnection();
            $sql = 'Select * from `vacancy` where published = 1 AND position="'.$position.'"';
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
    public static function getPublVac(){
        
        $db = Db::getConnection();
        $id=0;$position='';
        $fucker='';
      echo '  <form action ="#" method = "POST"><input type = "text" name = "search" placeholder="write vacancyes id for search">
      <input type="text" name ="possearch" placeholder="search by vacancies name">
      <input type = "submit" name = "searchsubmit" value = "submit">
        </form>';
        if(isset($_POST['searchsubmit'])){
        if(($_POST['search']!=''))
        {$id=$_POST['search'];
$fucker = Panels::getVacansies1($id);
}
else if (($_POST['possearch']!=''))
{$position=$_POST['possearch'];
    $fucker = Panels::getVacansies2($position); 
}
else if(($_POST['search']!='')&&(($_POST['possearch']!='')))
{echo 'You have selected both name and id. Its inacceptable and i searched by id<br/>';
    $fucker=Panels::getVacansies1($id);
}
}
if(($fucker)){
echo '<form action ="" method = "POST"> <table>
<tr>
<th>
vacancy_id
</th>
    <th>
employer_id  </th>
<th>
 industry_id
</th>
<th>
position
</th>
<th>
salary
</th>
<th>
salary_currency_id
</th> <th>
required_experience
</th> 
<th>
city_id
</th> <th>
post_date
</th> <th>
info
</th> <th>
short_descr
</th> <th>
employment_type_id
</th> <th>
address
</th>
<th>published</th>
</tr>';$some=[];$i=0;
foreach ($fucker as $vacans)
{ echo ' <tr>
    <td>  <input disabled name = "vacancy_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['vacancy_id'].'>
    </td>
    <td>  <input disabled  name = "employer_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['employer_id'].'>
    </td>
    <td>  <input disabled name = "industry_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['industry_id'].'>
    </td>
    <td>  <input disabled name = "position'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['position'].'>
    </td>
    <td>  <input  disabled name = "salary'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['salary'].'>
    </td>
    <td>  <input disabled name = "salary_currency_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['salary_currency_id'].'>
    </td>
    <td>  <input disabled name = "required_experience'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['required_experience'].'>
    </td>
    <td>  <input disabled name = "city_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['city_id'].'>
    </td>
    <td>  <input disabled name = "post_date'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['post_date'].'>
    </td>
    <td>  <textarea disabled name = "infos'. $vacans['vacancy_id'].'">'. $vacans['info'].'</textarea>
    </td>
    <td>  <textarea disabled name = "short_descr'. $vacans['vacancy_id'].'" >'. $vacans['short_descr'].'></textarea>
    </td>
    <td>  <input disabled name = "employment_type_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['employment_type_id'].'>
    </td>
    <td>  <input disabled name = "address'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['address'].'>
    </td>
    <td>  <input disabled name = "published'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['published'].'>
    </td>

    <td>  <input disabled name = "submit'.$vacans['vacancy_id'].'" type = "submit" value = "prove">
    </td>

    </tr>';
    if(isset($_POST['submit'. $vacans['vacancy_id']]))
    
    
    {$sql = 'UPDATE `vacancy` SET `vacancy_id`=:vacancy_id,`employer_id`=:employer_id,`industry_id`=:industry_id,
    `position`=:position,`salary`=:salary,`salary_currency_id`=:salary_currency_id,
    `required_experience`=:required_experience,`city_id`=:city_id,`post_date`=:post_date,
    `info`=:info,`short_descr`=:short_descr,`employment_type_id`=:employment_type_id,
    `address`=:addres,`published`=:published WHERE `vacancy_id` = :vacancy_id';
$result = $db->prepare($sql);
$result->bindParam(':vacancy_id',$_POST['vacancy_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':employer_id', $_POST['employer_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':industry_id', $_POST['industry_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':position', $_POST['position'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':salary', $_POST['salary'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':salary_currency_id', $_POST['salary_currency_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':required_experience', $_POST['required_experience'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':city_id', $_POST['city_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':post_date', $_POST['post_date'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':info', $_POST['infos'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':short_descr', $_POST['short_descr'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':employment_type_id', $_POST['employment_type_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':addres', $_POST['address'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':published', $_POST['published'. $vacans['vacancy_id']], PDO::PARAM_STR);

return $result->execute();
continue;

 }
     } echo ' </table></form>';
    
  
    }
     
    
    


echo '____________________________________________________________________________________________________________<br/>';

      }
    public static function actionModer(){
        
        $db = Db::getConnection();
        
        
$fucker = Panels::getVacansies();
echo '<form action ="" method = "POST"> <table>
<tr>
<th>
vacancy_id
</th>
    <th>
employer_id  </th>
<th>
 industry_id
</th>
<th>
position
</th>
<th>
salary
</th>
<th>
salary_currency_id
</th> <th>
required_experience
</th> 
<th>
city_id
</th> <th>
post_date
</th> <th>
info
</th> <th>
short_descr
</th> <th>
employment_type_id
</th> <th>
address
</th>
<th>published</th>
</tr>';$some=[];$i=0;
foreach ($fucker as $vacans)
{ echo ' <tr>
    <td>  <input name = "vacancy_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['vacancy_id'].'>
    </td>
    <td>  <input name = "employer_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['employer_id'].'>
    </td>
    <td>  <input name = "industry_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['industry_id'].'>
    </td>
    <td>  <input name = "position'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['position'].'>
    </td>
    <td>  <input name = "salary'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['salary'].'>
    </td>
    <td>  <input name = "salary_currency_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['salary_currency_id'].'>
    </td>
    <td>  <input name = "required_experience'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['required_experience'].'>
    </td>
    <td>  <input name = "city_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['city_id'].'>
    </td>
    <td>  <input name = "post_date'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['post_date'].'>
    </td>
    <td>  <textarea name = "infos'. $vacans['vacancy_id'].'">'. $vacans['info'].'</textarea>
    </td>
    <td>  <textarea name = "short_descr'. $vacans['vacancy_id'].'" >'. $vacans['short_descr'].'></textarea>
    </td>
    <td>  <input name = "employment_type_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['employment_type_id'].'>
    </td>
    <td>  <input name = "address'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['address'].'>
    </td>
    <td>  <input name = "published'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['published'].'>
    </td>

    <td>  <input name = "submit'.$vacans['vacancy_id'].'" type = "submit" value = "prove">
    </td>

    </tr>';
    if(isset($_POST['submit'. $vacans['vacancy_id']]))
    
    
    {$sql = 'UPDATE `vacancy` SET `vacancy_id`=:vacancy_id,`employer_id`=:employer_id,`industry_id`=:industry_id,
    `position`=:position,`salary`=:salary,`salary_currency_id`=:salary_currency_id,
    `required_experience`=:required_experience,`city_id`=:city_id,`post_date`=:post_date,
    `info`=:info,`short_descr`=:short_descr,`employment_type_id`=:employment_type_id,
    `address`=:addres,`published`=:published WHERE `vacancy_id` = :vacancy_id';
$result = $db->prepare($sql);
$result->bindParam(':vacancy_id',$_POST['vacancy_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':employer_id', $_POST['employer_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':industry_id', $_POST['industry_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':position', $_POST['position'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':salary', $_POST['salary'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':salary_currency_id', $_POST['salary_currency_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':required_experience', $_POST['required_experience'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':city_id', $_POST['city_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':post_date', $_POST['post_date'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':info', $_POST['infos'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':short_descr', $_POST['short_descr'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':employment_type_id', $_POST['employment_type_id'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':addres', $_POST['address'. $vacans['vacancy_id']], PDO::PARAM_STR);
$result->bindParam(':published', $_POST['published'. $vacans['vacancy_id']], PDO::PARAM_STR);

return $result->execute();
echo "<script>window.location.href=''</script>"
continue;

 }
     } echo ' </table></form>';

  

     
    
    


echo '____________________________________________________________________________________________________________<br/>';

      }
  
    
////moder name
    public static function getPersonalName()
    {   $Arr1=[];
        $Arr2=[];
        $Arr3=[];
        $i=0; 
        $db=Db::getConnection();
        $sql = 'SELECT `first_name`,`role`,`id` FROM `gods` order by `id`';
        $result=$db->prepare($sql);
        $result->execute();
    
        while( $user = $result->fetch()){
            if($user)
            {
               $Arr1[$i] = $user['first_name'];
               $Arr2[$i] = $user['role'];
               $Arr3[$i] = $user['id'];
               
               $i++;
            }}
            return Array($Arr1,$Arr2,$Arr3);
            
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
       
        $sql = 'INSERT INTO gods(first_name, password, role) '
                . 'VALUES (:name, :password, :role)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':role', $role, PDO::PARAM_STR);
      

        return $result->execute();
        echo "<script>window.location.href=''</script>"
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

        public static function selectAdd($id){
            $db = Db::getConnection();
            $sql = 'INSERT INTO `industry`(`industry_name`) VALUES (:name)';
            $result = $db->prepare($sql);
            $result->bindParam(':name', $id, PDO::PARAM_STR);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
            if ($result){
                return $result->fetch();
                echo "<script>window.location.href=''</script>"
                }
                    
            return false;
        

        }

        public static function selectDelete($id){
            $db = Db::getConnection();
            $sql = 'DELETE FROM `industry` WHERE `industry_id` = :id';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_STR);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
            if ($result){
                return $result->fetch();
                }
                    
            return false;
        

        }
        public static function addNews($title,$date1,$short,$content,$last){
            $db = Db::getConnection();
            $sql = 'INSERT INTO `news`(`title`, `date`, `short_content`, `content`, `preview`) VALUES 
            (:title,:date1,:short,:content,:last:type)';           
            $result = $db->prepare($sql);
            $result->bindParam(':title', $title, PDO::PARAM_STR);
            $result->bindParam(':date1', $date1, PDO::PARAM_STR);
            $result->bindParam(':short', $short, PDO::PARAM_STR);
            $result->bindParam(':content', $content, PDO::PARAM_STR);
            $result->bindParam(':last', $last['COUNT(*)'], PDO::PARAM_STR);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
     
            if ($result){
                return true;
                }
                    
            return false;
        

        }
        
    }
    
    
    

?>