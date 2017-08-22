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
                <select name = "selectCity" class="select-category select-city"  onchange="changing(this)">
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

            <select name ="employment_type" class="select-category"  onchange="changing2(this)" >
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
             $som=""; $som2="";
                foreach($tags as $tag)
                {echo '  <div class="vacancy-post">
                    <a href="/vacancy/details/'.$tag['vacancy_id'].'" class="vacancy-title">'.$tag['position'].'</a>';
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
                        echo '<label class="post-date">'.$tag['post_date'].'</label> <br/>
                        <label class="jobid">';
                        if( $tag['employment_type_id']==1)
                        {echo 'part-time job';}
                        if( $tag['employment_type_id']==2)
                        {echo 'full-time job';}

                         echo ' · </label>
                        </span> </div></div>';
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
<script>
var begining = document.getElementsByClassName('catalog-main')[0].innerHTML;
document.getElementsByClassName('catalog-main')[0].innerHTML=begining;
var cityes=[],some=[],all='',all2='';
var selectedOption=document.getElementsByClassName('select-city')[0].options[0];
cityes = document.getElementsByClassName('vacancy-post');
for(var i =0 ; i<cityes.length;i++)
  {
  if(selectedOption.text==cityes[i].innerHTML.split('<label class="city">')[1].split(' · </label>')[0]){
  all+=(cityes[i].innerHTML);
   }
  }
document.getElementsByClassName('catalog-main')[0].innerHTML=all;
//changing cityes
function changing(select){

document.getElementsByClassName('catalog-main')[0].innerHTML=begining;
          var selectedOption = select.options[select.selectedIndex];
var cityes=[],some=[],all='';
cityes = document.getElementsByClassName('vacancy-post');
for(var i =0 ; i<cityes.length;i++)
  {
  if(selectedOption.text==cityes[i].innerHTML.split('<label class="city">')[1].split(' · </label>')[0]){
  all+=(cityes[i].innerHTML);
   }
  }
document.getElementsByClassName('catalog-main')[0].innerHTML=all;

}function changing2(select){

document.getElementsByClassName('catalog-main')[0].innerHTML=begining;
          var selectedOption = select.options[select.selectedIndex];
var cityes=[],some=[];all2='';
cityes = document.getElementsByClassName('vacancy-post');
for(var i =0 ; i<cityes.length;i++)
  {
  if(selectedOption.text==cityes[i].innerHTML.split('<label class="jobid">')[1].split(' · </label>')[0]){
  all2+=(cityes[i].innerHTML);
   }
  }
document.getElementsByClassName('catalog-main')[0].innerHTML=all2;
}


             

               </script>
<?php include ROOT . '/views/layouts/footer.php'; ?>