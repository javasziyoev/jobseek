<?php include ROOT . '/views/layouts/header.php'; ?>


<?php

$db=Db::getConnection();

$sql = 'SELECT * FROM `vacancy` ';
$result = $db->prepare($sql);
                       $result->execute();
                       echo '<div class="vacancy-post"><ul>';
                       while($count=$result->fetch())
                       {$sql1 = 'SELECT * FROM `employer` WHERE employer_id='.$count['employer_id'];
                        $result1 = $db->prepare($sql1);
                                               $result1->execute();
                        $comp=$result1->fetch();              
                        echo '<li>
                        <div class="vacancy-postposted">
                         <a href  ="'.$count['employer_id'].'" >  '.$comp['company_name'].'</a>
                        </div></li>
                    ';
            }echo '</ul></div>'

?>
<?php include ROOT . '/views/layouts/footer.php'; ?>