<?php include ROOT . '/views/layouts/header.php'; ?>


<table border="1px" bordercolor="gray" cellspacing="4px">
<?php
$i = 0;
while ($i < sizeof($q)){

echo '<tr>'.
  
  '<td>'.$q[$i]['applicant_id'].'</td>'.
  '<td>'.$q[$i]['first_name'].'</td>'.
  '<td>'.$q[$i]['last_name'].'</td>'.
  '<td>'.$q[$i]['password'].'</td>'.
  '<td>'.$q[$i]['email'].'</td>'.
  '<td>'.$q[$i]['cellphone'].'</td>'.
  '<td>'.$q[$i]['cv_id'].'</td>'.
'</tr>';
$i++;
}
?>
</table>

