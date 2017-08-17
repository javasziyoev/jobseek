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
			$lastname=$_POST['lastname'];	
			$password=$_POST['password'];	
			$email=$_POST['email'];	
			$cellphone=$_POST['cellphone'];
			else if (isset($_POST['actionEmployer']))
			
			{  
				$Company_name = $_POST['Company_name'];
				$Website = $_POST['Website'];
				$Name = $_POST['Name'];
				$Last_name = $_POST['Last_name'];
				$Email = $_POST['Email'];
				$Phone_number = $_POST['Phone_number'];
				$Extension_number = $_POST['Extension_number'];
				$selectCurrency = htmlspecialchars ($_POST['selectCurrency'])	;
				$employees = htmlspecialchars ($_POST['employees'])	;
				$selectCity = htmlspecialchars ($_POST['selectCity']);
} 
			
			
			
			require_once(ROOT . '/models/User.php');
		$res = 	User::getResult();
		echo $res;
		}
			require_once(ROOT . '/views/user/signup.php'); 
			return true;
		}
	


		//Registration for employeers
		
	



}