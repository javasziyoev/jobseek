<?php include ROOT . '/views/layouts/header.php'; ?>

<div>
<h1>
<?php
echo 'Hello ';
if($user['first_name'])echo $user['first_name'];
if($user['contact_first_name'])echo $user['first_name'];
if($user['nick'])echo $user['nick'];

?>
</h1>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>