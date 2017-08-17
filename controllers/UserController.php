<?php


class UserController
{

		//Registration for applicants

		public function actionApplicant()
		{
			require_once(ROOT . '/views/user/applicant.php'); 
			return true;
		}


		//Registration for employeers
		
		public function actionEmployer()
		{
			return true;
		}

}