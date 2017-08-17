<?php

class UserController
{

		//Registration for applicants

		public function actionApplicant()
		{if($_POST){
			$firstname=$_POST['firstname'];
			echo $firstname;
			$secondname=$_POST['secondname'];	
			echo '<br/>'.$secondname;
			$password=$_POST['password'];	
			echo '<br/>'.$password;
			$email=$_POST['email'];	
			echo '<br/>'.$email;
			
		}
			require_once(ROOT . '/views/user/applicant.php'); 
			return true;
		}


		//Registration for employeers
		
		public function actionEmployer()
		{
			return true;
		}



}