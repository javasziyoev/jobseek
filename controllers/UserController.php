<?php

class UserController
{

		//Registration for applicants



		public function actionSignup()
		{
			if($_POST){
			if(isset($_POST['actionSignup']))
			
			{//employees
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];	
			$password=$_POST['password'];	
			$email=$_POST['email'];	
			$cellphone=$_POST['cellphone'];}
			else if (isset($_POST['actionEmployer']))
						require_once(ROOT . '/models/User.php');
//$res = 	User::getResult1($firstname,$lastname,$password,$email,$cellphone);
	//	echo $res;
			{  //employer
				$Company_name = $_POST['Company_name'];
				$Website = $_POST['Website'];
				$Name = $_POST['Name'];
				$Last_name = $_POST['Last_name'];
				$Email = $_POST['Email'];
				$password = $_POST['password'];
				$Phone_number = $_POST['Phone_number'];
				$Extension_number = $_POST['Extension_number'];
				$selectCurrency = htmlspecialchars ($_POST['selectCurrency'])	;
				$employees = htmlspecialchars ($_POST['employees'])	;
				$selectCity = htmlspecialchars ($_POST['selectCity']);
				require_once(ROOT . '/models/User.php');
			//	$res = 	User::getResult2($Company_name,$Website,$Name,$Last_name,$Email,$password,$Phone_number,$Phone_number,$Extension_number,	$selectCurrency,$employees,$selectCity);
//echo $res;
} 
			
			
			
		
		}
			require_once(ROOT . '/views/user/signup.php'); 
			return true;
		}
	


		//Registration for employeers
		
	



}