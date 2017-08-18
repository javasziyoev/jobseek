<?php include ROOT . '/views/layouts/header.php'; 
?>

<div id="wrapper">
      <section id="sign-up-content">
        <div class="tabs">
            <input id="tab1" type="radio" name="tabs" <?php if($i == 0)echo 'checked' ?> >
            <label for="tab1" title="Sign up 1">Job seeker registration</label>

            <input id="tab2" type="radio" name="tabs" <?php if($i == 1)echo 'checked' ?> >
            <label for="tab2" title="Sign up 2">Employer registration</label>
            
            <section id="content-tab1">
                <form action="#" method="POST">

                <div>
                    <input type="text" name = "firstname" value="<?php echo $firstname; ?>" class="input-text" placeholder="Name">
                </div>
                <div>
                    <input type="text" name = "lastname" value="<?php echo $lastname; ?>" class="input-text" placeholder="Last name">
                </div>
                
                <div>
                    <input type="email" name = "email" value="<?php echo $email; ?>" class="input-text" placeholder="Email">
                </div>
                <div>
                    <input type="password" name = "password" value="<?php echo $password; ?>" class="input-text" placeholder="Password">
                </div>
                <div>
                    <input type="text" name = "cellphone" value="<?php echo $cellphone; ?>" class="input-text" placeholder="Phone number">
                </div>

                <input type="submit" value="Register" name="submit1" class="post-button">
            </form>
            <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
            <?php endif; ?>
            </section>

            <section id="content-tab2">
                    <form action="#" method = "POST">

                        <div>
                            <div>
                                <select name = "selectclass" class="select-category">
                                    <?php
                                    require_once(ROOT . '/models/User.php');
                                     $fuck = User::getCompanyId();       
                                    $fuck1 = User::getCompanyName();  $i=0;         
                                            foreach($fuck as $Duck)
                                            {
                                             echo '<option value = '.$Duck.'>';
   

                                              echo ''.$fuck1[$i].'</option>';
                                              $i++;
                                            }

 

                                    ?>
                                </select>
                            </div>
                            <div>
                                <div>
                                    <input name="Company_name" type="text" placeholder="Company name" value="<?php echo $company_name; ?>">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input name="Website" type="text" placeholder="Website" value="<?php echo $website; ?>">
                                </div>
                            </div>
                           
                            <div>
                                <select name = "selectCity" class="select-category">
                                <?php
                                require_once(ROOT . '/models/User.php');
                                 $fuck = User::getcityId();       
                                $fuck1 = User::getcityName();  $i=0;         
                                        foreach($fuck as $Duck)
                                        {
                                         echo '<option value = '.$Duck.'>';


                                          echo ''.$fuck1[$i].'</option>';
                                          $i++;
                                        }



                                ?>                                </select>
                            </div>
                            <label><strong>Contact person</strong> (confidential)</label>
                            <div>
                                <div>
                                    <input name ="Name" type="text" placeholder="Name" value="<?php echo $name; ?>">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input  name = "Last_name"type="text" placeholder="Last name" value = "<?php echo $last_name; ?>">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input name ="Email_e" type="email" placeholder="Email" value="<?php echo $email_e; ?>">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input name ="password_e" type="password" placeholder="password">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input name="Phone_number" type="text" placeholder="Phone number" <?php echo $phone_number; ?>>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input name="Extension_number" type="text" placeholder="Extension number" value="<?php echo $extension_number; ?>">
                                </div>
                            </div>
                            <small>By clicking "register a company", you acknowledge that you read and fully agree
                                with the terms of use if the website.
                            </small><br>
                            <input type="submit" name="submit2" value="Register company">
                        </form>
            </section>
        </div>
      </section>

    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>