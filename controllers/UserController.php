<?php

class UserController
{

		//Registration for applicants

		public function actionSignup()
<<<<<<< HEAD
		{
			if($_POST){
				if($_POST['actionSignup']==1){
=======
		{if($_POST){
>>>>>>> 5fa6a9e908add7e020249ad0fb35875384b81cf9
			$firstname=$_POST['firstname'];
			echo $firstname;
			$secondname=$_POST['secondname'];	
			echo '<br/>'.$secondname;
			$password=$_POST['password'];	
			echo '<br/>'.$password;
			$email=$_POST['email'];	
			echo '<br/>'.$email;
<<<<<<< HEAD
			$cellphone=$_POST['cellphone'];
			echo $cellphone;}
			else if ($_POST['actionEmployer']==2)
			
			{ echo 'trfgh';
			}
=======
			$check=$_POST['a'];
			echo $check;
>>>>>>> 5fa6a9e908add7e020249ad0fb35875384b81cf9
			
		}
			require_once(ROOT . '/views/user/signup.php'); 
			return true;
		}


		//Registration for employeers
		
<<<<<<< HEAD
	
=======
		public function actionEmployer()
		{
			return true;
		}
		
>>>>>>> 5fa6a9e908add7e020249ad0fb35875384b81cf9

		//Login

		public function actionLogin()
		{


		}


}