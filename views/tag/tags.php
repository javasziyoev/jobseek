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
            
            <div>
                <label>City</label><br>
                <select name = "selectCity" class="select-category select-city">
                    <?php
                    require_once(ROOT . '/models/User.php');
                    $fuck = User::getcity();       
                            foreach($fuck as $Duck)
                            {
                            echo '<option value = '.$Duck['city_id'].'>';


                            echo ''.$Duck['city_name'].'</option>';
                            $i++;
                            }
                    ?>
                </select>
            </div>

            <div>Salary</div>
            <div>
                <label>Employment type</label>

            <select name ="employment_type" class="select-category">
            <?php
            
            require_once('/models/User.php');
             $curr=User::getEmployment_type();
             foreach($curr as $current)
             {
echo'<option value='.$current['employment_type_id'].'>'.$current['employment_type_name'].'</option>';
             }
             ?>
            </select>


            </div>

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