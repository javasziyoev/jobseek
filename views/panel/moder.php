<?php include ROOT . '/views/layouts/header.php'; ?>

<?php 
require_once('/models/Panels.php');?>



<div id="wrapper" style="margin-top: 25px;">
<div class="tabs">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1" title="Sign up 1">Vacancies</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2" title="Sign up 2">Featured jobs</label>

            <section id="content-tab1">

<?php //для вакансий
Panels::actionModer();?>
    </section>
    <section id="content-tab2">
<?php //для фьючеред джобс стив джобс
 Panels::getAllFJobs();
?>
</section>





<?php include ROOT . '/views/layouts/footer.php'; ?>