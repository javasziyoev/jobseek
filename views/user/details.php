<?php include ROOT . '/views/layouts/header.php'; ?>





<section id="featured-jobs-content">
          <h1 style="margin-bottom: 25px;">User</h1>

<?php

$db=Db::getConnection();
$uri = Router::getURI();
$internalRoute=preg_replace('~user/details/~','',$uri);

echo '<div class="vacancy-post"><ul style="list-style: none;">';

$users=User::getUserDetails($internalRoute);
echo '                        <div class="vacancy-postposted">
';
    echo $users['first_name'].'  '.$users['contact_last_name'].'<br/>';
    echo $users['contact_email'].'<br/>';
    echo $users['contact_cellphone'].'<br/>';
    echo $users['contact_cellphone_ext'].'<br/>';
    echo ' </div></div>';
?>
</section>









<?php include ROOT . '/views/layouts/footer.php'; ?>