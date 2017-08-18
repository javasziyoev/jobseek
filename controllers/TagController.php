<?php

class TagController
{


		public function actionIndex()
		{ 
			$uri = Router::getURI();
			$internalRoute=preg_replace('~tag/~','',$uri);
			echo $internalRoute;
 			require_once (ROOT. '/views/tag/tags.php');
		}
	


}
?>