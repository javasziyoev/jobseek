<?php

class UserController
{
    
		//Registration for applicants


        
		public function actionSignup()
		{

            
            if (!User::isGuest()){
                header("Location: /index");
            }
      
            if(isset($_POST['logsign'])){
                $aa = $_POST['logemail'];
            }
            $e = '';
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
                if ($a_errors == false){
                    $password =  md5($password);
                    $result = User::registera($firstname,$lastname,$password,$email,$cellphone);
                    
                    header("Location: /user/signin");
                   
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
                
                


                require_once(ROOT. '/config/employer_errors.php');
                if ($e_errors == false){
                    $password =  md5($password);
                    $result = User::registere($company_class_id,$company_name,$website,$selectcity,$name,$last_name,$email_e,$password,$phone_number,$extension_number);
                    if($result)header("Location: /user/signin");
                    
                }
                

                    
                
                
            }
            ///////
            
                
        } 
            require_once(ROOT. '/views/user/signup.php');
            return true;
            
            

	
 }
//Sign In
 public function actionSignin()
 {
 
    if (!User::isGuest()){
        header("Location: /index");
    }

    
     $email = '';
     $password = '';

     $errors = false;
    if (isset($_POST['loginsubmit'])){
        $email = $_POST['loginemail'];
        $password = $_POST['loginpassword'];
     //Fields Validation
     if (!User::checkEmail($email)) {
         $errors[] = 'Invalid email';
     }
     if (!User::checkPassword($password))  {
         $errors = "Password must be longer than 6 chars";
     }


     //Check whether user is in database
     $password = md5($password);
     $userId = User::checkUserData($email, $password);
     
     if ($userId == false){
         //Employer sign in
         $errors = "Incorrect user data";
     } else{
        
         User::auth($userId);
         //User in Cabinet
         header("Location: /cabinet/");
        
        }
     }
    require_once(ROOT. '/views/user/signin.php');

     return true;
 }

 //Log out
 public function actionLogout()
 {
     session_start();
     unset($_SESSION["user"]);
     header("Location: /index");
 }
		
}	




