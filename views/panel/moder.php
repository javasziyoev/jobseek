
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Mjolnir</title>
    <link rel="stylesheet" href="/template/css/style.css" />   
  <link rel="stylesheet" media="screen and (min-device-width: 1440px)" href="/template/css/desktop.css" /> 
  <link rel='stylesheet' media='screen and (min-width: 800px) and (max-width: 1440px)' href='/template/css/medium-style.css' />
  <link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 799px)' href='/template/css/mobile-style.css' />

    <link rel="stylesheet" href="/template/css/mjolnir.css" />   
</head>

<?php 
require_once('/models/Panels.php');
require_once('/models/User.php');?>



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
 User::getAllFJobs();
?>
</section>
</div>
