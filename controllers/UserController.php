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

		public function actionLogin()
    {
        // Переменные для формы
        $email = false;
        $password = false;
        
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Флаг ошибок
            $errors = false;
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /cabinet");
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

	


		//Registration for employeers
		
	



}