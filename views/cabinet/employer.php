<?php include ROOT . '/views/layouts/header.php'; $i=1;?>



<div id="wrapper" style="margin-top: 25px">
    <section id="sign-up-content">
        <section id="main-content news" style="padding: .5% 2%;">
        <h3 class="dark-gray-text" style="margin-bottom: 1em;">Hello, 
            <?php 
                $userId = User::checkLogged();
                $sql = 'SELECT * FROM `employer` WHERE employer_id='.$userId;
                $result = $db->prepare($sql);
                $result->execute();
                $users = $result->fetch();
                if ($users=='') $koko=$userId;
                else $koko=$users['first_name'];
                echo $koko.'!'; 
            ?>
        </h3>


        <div class="tabs">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1" title="User Data">Posted Vacancies</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2" title="Sign up 2">Post New Vacancy</label>
            
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3" title="Sign up 2">Search CV</label>

            <input id="tab4" type="radio" name="tabs" checked>
            <label for="tab4" title="Sign up 2">Settings</label>

            
            <section id="content-tab1">
                тут все вакансии эмплоера, надо сделать еще кнопку удаления вакансии
            </section>

            <section id="content-tab2">
                <h3 class="dark-gray-text" style="text-align: center; margin-bottom: 1em;">Post a vacancy</h3>
                <div>
                <form action="" method="POST">
                    <input name ="position" type="text" name="position" placeholder="Position" class="input-text mob-button-100 wid-100"><br>
                    <input name ="salary"   type="text" name="salary" placeholder="Salary" class="input-text mob-button-100 wid-100">
                    <select name ='curency'  class="select-category mob-button-100 wid-100">
                        <?php 
                        $curr=User::getCurrent();
                        foreach($curr as $current)
                        {
        echo'<option value='.$current['currency_id'].'>'.$current['currency_code'].'</option>';
                        }
                        ?>
                        
                    </select><br>
                    <input name ="required_experience" type="text" name="salary" placeholder="Required experience" class="input-text mob-button-100 wid-100"><br>
                    <label style="margin-left: .3em;"><strong>Select industry:</strong></label>
                    <select name = 'industry'class="select-category wid-100">
                    
                    <?php
                    
                    
                    $curr=User::getIndustry();
                    foreach($curr as $current)
                    {
        echo'<option value='.$current['industry_id'].'>'.$current['industry_name'].'</option>';
                    }
                    ?>
                    </select>
                    <label style="margin-left: .3em;"><strong>Employment type:</strong></label>
                    <select name ="employment_type" class="select-category mob-button-100 wid-100">
                    <?php
                    
                
                    $curr=User::getEmployment_type();
                    foreach($curr as $current)
                    {
        echo'<option value='.$current['employment_type_id'].'>'.$current['employment_type_name'].'</option>';
                    }
                    ?>
                    </select>
                    <label style="margin-left: .3em;"><strong>City:</strong></label><select name = "city" class="select-category mob-button-100 wid-100">
                    <?php
                    
                    
                    $curr=User::getcity();
                    foreach($curr as $current)
                    {
        echo'<option value='.$current['city_id'].'>'.$current['city_name'].'</option>';
                    }
                    ?>            </select>

                    <input name = "address" type="text" class="input-text mob-button-100 wid-100" placeholder="Address">
                    <textarea name = "short" placeholder="Short Description" class="input-text short-descr mob-button-100 wid-100"></textarea><br>

                    <textarea name = "info" placeholder="Info" class="input-text descr mob-button-100 wid-100"></textarea><br>

                    <input name  = "submit" type="submit" value="Post a vacancy" class="post-button mob-button-100 wid-100" >
                </form>
                </div>
            </section>

            <section id="content-tab3">

            </section>

            <section id="content-tab4">
            </section>

</div>
</section>
</section>
</div>





<?php include ROOT . '/views/layouts/footer.php'; ?>