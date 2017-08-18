<?php

class UserController
{

		//Registration for applicants


        
		public function actionSignup()
		{
            $i = 0;
            $k = 0;
            //applicant variables
            require_once(ROOT. '/config/applicant_variables.php');
            /////
            //employer variables
            require_once(ROOT. '/config/employer_variables.php');
            
            if (isset($_POST['post_a_vacancy']))
            {
                $k = 1;
            }

            $result = false;
            

     if($_POST){
            if (isset($_POST['submit1'])) {
			    $firstname = $_POST['firstname'];
			    $lastname = $_POST['lastname'];	
                $password = $_POST['password'];	
			    $email = $_POST['email'];	
                $cellphone = $_POST['cellphone'];
                require_once(ROOT. '/config/applicant_errors.php');
                if ($errors == false){
                    $result = User::registera($firstname,$lastname,$password,$email,$cellphone);
                    echo $result;
                    
                }

            }
            //employer

            if (isset($_POST['submit2'])){
                $company_class_id = $_POST['selectclass'];
                $company_name = $_POST['Company_name'];
                
                $website = $_POST['Website'];
                
                $selectcity = $_POST['selectCity'];
                
                $name = $_POST['Name'];
                
                $last_name = $_POST['Last_name'];
                
                $email_e = $_POST['Email_e'];
                
                $password = $_POST['password_e'];
                
                $phone_number = $_POST['Phone_number'];

                
                $extension_number = $_POST['Extension_number'];
                                require_once(ROOT . '/models/User.php');  

                require_once(ROOT. '/config/employer_errors.php');
                require_once(ROOT. '/config/applicant_errors.php');
                
                    $result = registere($company_class_id,$company_name,$website,$employees,$selectcity,$name,$last_name,
                    $email_e,$password,$phone_number,$extension_number);
                    $i = 1;
                    print_r($result);
                    
                
                
            }
            ///////
            
                
        } 
            require_once(ROOT. '/views/user/signup.php');
            return true;
        
            

	
 }

		
}	



