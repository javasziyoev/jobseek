<?php include ROOT . '/views/layouts/header.php'; ?>

<div>
<h1>
<?php
$k = '';
if($user['nick'] == true){ $k = $user['nick']; }
if($user['first_name'] == true){ $k = $user['first_name']; }
if($user['contact_first_name'] == true){ $k = $user['contact_first_name']; }

echo 'Hello '.$k;
?>
</h1>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>