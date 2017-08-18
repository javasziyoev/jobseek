<?php include ROOT . '/views/layouts/header.php'; ?>


<div id="wrapper">
    <section id="vacancy-catalog-content">
        <a href="">All industries</a>
    </section>
    <section id="vacancy-catalog-content">
        <div class="catalog-side-panel">
            <div>Found 100500 vacancies</div>
            <div></div>

        </div>

        <div class="catalog-main">
                <?php 
			 require_once(ROOT.'/models/Tags.php');
             $tags =  Tags::tagSearch();
             $db=Db::getConnection();
             
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
       
                        echo '                <div> <span><label class="city">'.$job['city_name'].' · </label>';
                        echo '<label class="post-date">'.$tag['post_date'].'</label> </span> </div></div>';
                }
                ?>
                    
                                       
               
            
        </div>
    </section>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>