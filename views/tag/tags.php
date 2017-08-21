<?php include ROOT . '/views/layouts/header.php'; ?>


<div id="wrapper">
    <section id="vacancy-catalog-content">
        <a href="">All industries</a>
    </section>
    <section id="vacancy-catalog-content">
        <div class="catalog-side-panel">
            <div>Found <?php $i=0;           
              $db=Db::getConnection();
        $uri = Router::getURI();
        $internalRoute=preg_replace('~tag/~','',$uri);

        $sql = 'SELECT * FROM `vacancy` WHERE industry_id='.$internalRoute;
        $result = $db->prepare($sql);
                               $result->execute();
                               while($count=$result->fetch())
                               {$i++;}
                               echo $i;
             ?> vacancies</div>
            <div></div>

        </div>

        <div class="catalog-main">
                <?php 
			 require_once(ROOT.'/models/Tags.php');
             $tags =  Tags::tagSearch();
             $db=Db::getConnection();
             $som=""; $som2="";
                foreach($tags as $tag)
                {echo '  <div class="vacancy-post">
                    <a href="" class="vacancy-title">'.$tag['position'].'</a>';
                   echo ' <div class="salary">  <label>'.$tag['salary'].'</label><label>';
                   $sql = 'SELECT * FROM `currency` WHERE currency_id ='.$tag['salary_currency_id'];
                   $result = $db->prepare($sql);
                   $result->execute();
                   $job=$result->fetch();
                   echo $job['currency_code'].' </label></div>';
                        echo '                <div class="short-description">
                        '.$tag['short_descr'].'                </div>';
                        $sql = 'SELECT * FROM `employer` WHERE employer_id ='.$tag['employer_id'];
                        $result = $db->prepare($sql);
                        $result->execute();
                        $job=$result->fetch();
       
                        echo '<a href="" class="company-name">'.$job['company_name'].'</a>';
                        $sql = 'SELECT * FROM `city` WHERE city_id ='.$tag['city_id'];
                        $result = $db->prepare($sql);
                        $result->execute();
                        $job=$result->fetch();
       $som=$job['city_name'];
       $som2=$tag['vacancy_id'];
       
                        echo '                <div> <span><label class="city">'.$som.' · </label>';
                        echo '<label class="post-date">'.$tag['post_date'].'</label> </span> </div></div>';
                        echo '<form method = "POST"><button name = "favor" value = '.$som2.'>Add to favorites</button></form>';
                        
                        if(isset($_POST['favor']))
                        {
                            $sql = 'INSERT INTO `favors`(`applicant_id`,`vacancy_id`) VALUES ('.$userId.','.$som2.')';
                            $result = $db->prepare($sql);
                            $result->execute();
         break; 
                        }
                        }
                
                ?>
                    
                                       
               
            
        </div>
    </section>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>