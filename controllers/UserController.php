<?php

class UserController
{

		//Registration for applicants

		public function actionSignup()
		{if($_POST){
			$firstname=$_POST['firstname'];
			echo $firstname;
			$secondname=$_POST['secondname'];	
			echo '<br/>'.$secondname;
			$password=$_POST['password'];	
			echo '<br/>'.$password;
			$email=$_POST['email'];	
			echo '<br/>'.$email;
			$check=$_POST['a'];
			echo $check;
			
		}
			require_once(ROOT . '/views/user/signup.php'); 
			return true;
		}


		//Registration for employeers
		
		public function actionEmployer()
		{
			return true;
		}
		

		//Login

		public function actionLogin()
		{


		}


}