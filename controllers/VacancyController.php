<?php


class VacancyController {
    public function actionVacancy() {
        
			 if($_POST){
                if (isset($_POST['submit'])) {
                    $position = $_POST['position'];
                    $salary = $_POST['salary'];	
                    $curency = $_POST['curency'];	
                    $required_experience = $_POST['required_experience'];	
                   $industry = $_POST['industry'];
                   $employment_type = $_POST['employment_type'];
                    $city = $_POST['city'];
                   $address = $_POST['address'];
                   $info = $_POST['info'];
                   $short = $_POST['short'];
                   $db=Db::getConnection();
                   $sql = 'INSERT INTO `vacancy`(`industry_id`, `position`, `salary`, `salary_currency_id`, `required_experience`, `city_id`, `info`, `short_descr`, `employment_type_id`, `address`,`published`) 
                   
                   VALUES (:industry,:position,:salary,:curency,:required_experience,:city,:info,:short,:employment_type,:address,0)';
    $result = $db->prepare($sql);
    $result->bindParam(':industry', $industry, PDO::PARAM_STR);
    $result->bindParam(':position', $position, PDO::PARAM_STR);
    $result->bindParam(':salary', $salary, PDO::PARAM_STR);
    $result->bindParam(':curency', $curency, PDO::PARAM_STR);
    $result->bindParam(':required_experience', $required_experience, PDO::PARAM_STR);
    $result->bindParam(':city', $city, PDO::PARAM_STR);
    $result->bindParam(':info', $info, PDO::PARAM_STR);
    $result->bindParam(':short', $short, PDO::PARAM_STR);
    $result->bindParam(':employment_type', $employment_type, PDO::PARAM_STR);
    $result->bindParam(':address', $adress, PDO::PARAM_STR);
    
                     $result->execute();
                              
                }
                    
            } 
            
        require_once(ROOT.'/views/employer/post_a_vacancy.php');
    }

    public function actionDetails() {
        require_once(ROOT. '/views/vacancy/details.php');
    }


}




?>