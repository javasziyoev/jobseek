<?php include ROOT . '/views/layouts/header.php'; ?>

<div>
<h1>
<?php

echo 'Hello '.ucfirst($user['first_name']).'!';
?>
</h1>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>