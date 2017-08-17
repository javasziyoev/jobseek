<?php

class UserController
{

		//Registration for applicants

		public function actionSignup()
		{
			if($_POST){
				if($_POST['actionSignup']==1){
			$firstname=$_POST['firstname'];
			echo $firstname;
			$lastname=$_POST['lastname'];	
			echo '<br/>'.$lastname;
			$password=$_POST['password'];	
			echo '<br/>'.$password;
			$email=$_POST['email'];	
			echo '<br/>'.$email;
			$cellphone=$_POST['cellphone'];
			echo $cellphone;}
			else if ($_POST['actionEmployer']==2)
			
			{ echo 'trfgh';
			}
			
		}
			require_once(ROOT . '/views/user/signup.php'); 
			return true;
		}


		//Registration for employeers
		
	



}