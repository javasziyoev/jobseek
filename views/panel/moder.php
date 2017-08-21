<?php include ROOT . '/views/layouts/header.php'; ?>

<div>
<h1>
You are my Moderator
</h1>
<a href=""><button type="submit" value="Submit" style="background-color:red;" class="sign-in-button">yrtf</a>


</div><button ></button><?php 
require_once('/models/Panels.php');?>

<?php 
Panels::actionModer();?>

<?php 
 Panels::getAllFJobs();
?>





<?php include ROOT . '/views/layouts/footer.php'; ?>