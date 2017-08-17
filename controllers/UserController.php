<?php

class UserController
{

		//Registration for applicants



		public function actionSignup()
		{
			if($_POST){
			if(isset($_POST['actionSignup']))
			
			{
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
			else if (isset($_POST['actionEmployer']))
			
			{ echo 'trfgh';
			}
			
		}
			require_once(ROOT . '/views/user/signup.php'); 
			return true;
		}
	


		//Registration for employeers
		
	



}