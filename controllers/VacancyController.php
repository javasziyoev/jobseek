<?php


class VacancyController {
    public function actionVacancy() {
        if (isset($_POST['submit'])) {
            echo 'submit';
        }

        require_once(ROOT.'/views/employer/post_a_vacancy.php');
    }

    public function actionDetails() {
        require_once(ROOT. '/views/vacancy/details.php');
    }


}




?>