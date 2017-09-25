<?php

class TagController
{


		public function actionIndex($internalRoute)
		{	 
			require_once (ROOT. '/views/tag/tags.php');
			 
		}
		
		public function actionAll()
		{
		
			require_once (ROOT. '/views/tag/all.php');

		}


}
?>