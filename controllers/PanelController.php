<?php
include_once(ROOT. '/components/AdminBase.php');
class PanelController extends AdminBase{

    public function actionAdmin(){
    
        //checking admin
        self::checkAdmin();

        //show moders
        
        //view
        require_once(ROOT . '/views/panel/admin.php');
        return true;
        }

    


    public function actionModer(){
        $db = Db::getConnection();
        
        require_once('/models/Panels.php');
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
    <td>  <input name = "short_descr'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['short_descr'].'>
    </td>
    <td>  <input name = "employment_type_id'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['employment_type_id'].'>
    </td>
    <td>  <input name = "address'. $vacans['vacancy_id'].'" type = "text" value ='. $vacans['address'].'>
    </td>
    <td>  <input name = "submit'.$vacans['vacancy_id'].'" type = "submit" value = "prove">
    </td>

    </tr>';
    if(isset($_POST['submit'. $vacans['vacancy_id']]))
     
     
     {$sql = 'UPDATE `vacancy` SET `vacancy_id`=:vacancy_id,`employer_id`=:employer_id,`industry_id`=:industry_id,
     `position`=:position,`salary`=:salary,`salary_currency_id`=:salary_currency_id,
     `required_experience`=:required_experience,`city_id`=:city_id,`post_date`=:post_date,
     `info`=:info,`short_descr`=:short_descr,`employment_type_id`=:employment_type_id,
     `address`=:addres,`published`=1 WHERE `vacancy_id` = :vacancy_id';
 $result = $db->prepare($sql);
 echo $_POST['vacancy_id'. $vacans['vacancy_id']];
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
 
 return $result->execute();
 
 
  }
     } echo ' </table></form>';

     
    
    



}

}



?>