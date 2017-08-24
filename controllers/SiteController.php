<?php

class SiteController
{


		public function actionIndex()
		{
			require_once(ROOT. "/views/site/index.php");  
			return true;
			
		}
	
		public function actionView()
		{
			require_once(ROOT. "/views/site/index.php");  
			
			
		}
		public function actionAgreement()
		{
			
			require_once(ROOT. "/views/site/agreement.php");  
			
		}

}
?>