


<?php include ROOT . '/views/layouts/header.php'; ?>


<div id="wrapper">
      <section id="top-jobs-content">
          
          <section id="jobs-at-content">
            <div style="text-align: center; width: 90%; height: 200px; background-color: orange; margin-left: 3%; margin-right: 3%; margin-bottom: 1em;">
              For small add
            </div>
            <?php include ROOT . '/views/site/jobsat.php'; ?>
          </section>
           
          <section id="featured-jobs-content">
          <h1 style="margin-bottom: 25px;">Companies</h1>
    
            
<?php
$i = 0;
$db=Db::getConnection();

$sql = 'SELECT MIN(`employer_id`) AS id, `company_name` FROM employer GROUP BY `company_name` ';
$result = $db->prepare($sql);
                       $result->execute();
                       echo '<div class="vacancy-post"><ul style="list-style: none;">';
                       while($i < sizeof($detail))
                       {$sql1 = 'SELECT * FROM `employer` WHERE employer_id='.$detail[$i]['employer_id'];
                        $result1 = $db->prepare($sql1);
                                               $result1->execute();
                        $comp=$result1->fetch();              
                        echo '<li>
                        <div class="vacancy-postposted">
                         <a href  =/vacancy/all/'.$detail[$i]['employer_id'].' >  '.$detail[$i]['company_name'].'</a>
                        </div></li>
                    ';
                    $i++;
            }echo '</ul></div>';

?>


          </section>


          <section id="reklama-bleat">
          Отключите блокировщик рекламы плес.
          </section>
      </section>


</div>



<div class="page">
    
    <?php 
   echo $pagination->get();
        ?>

</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>