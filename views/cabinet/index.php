<?php include ROOT . '/views/layouts/header.php'; ?>



<div id="wrapper" style="margin-top: 25px">
    <section id="main-content news" style="padding: .5% 2%; background-color: #fafafa;">
    <h3 class="dark-gray-text" style="margin-bottom: 1em;">Hello, <?php $userId = User::checkLogged();
                            $sql = 'SELECT * FROM `employer` WHERE employer_id='.$userId;
                            $result = $db->prepare($sql);
                            $result->execute();
                            $users = $result->fetch();
                            if($users=='') $koko=$userId; else $koko=$users['first_name'];
    
    echo $koko.'!'; ?></h3>
    
    <div class="tabs">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1" title="User Data">CV</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2" title="Sign up 2">Favorites</label>
            
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3" title="Sign up 2">Settings</label>

            
            <section id="content-tab1">
                Заполнение CV
            </section>
            <section id="content-tab2">
                Your favorites:
            </section>
            <section id="content-tab3">
                <div>
                    <h3>Account information:</h3>
                    <br>
                    <div><form action="#" method ="POST">
                        <label class="info-contact-label block-email margin-right"><strong>Name:</strong></label>
                        <span>%USERNAME</span>
                        <input type="button" value="edit" id='editButton' />
                    </div>
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Last Name:</strong></label>
                        <span>%USERLASTNAME</span>
                        <input type="button" value="edit" id='editButton' />
                    </div>
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Email:</strong></label>
                        <span>%USEREMAIL</span>
                        <input type="button" value="edit" id='editButton' />
                    </div>
                 
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Cellphone:</strong></label>
                        <span>%CELLPHONE</span>
                        <input type="button" value="edit" id='editButton' />
                    </div>
                    </form>
                </div>


            <div style="margin-top: 1em;">  
                <h3>Change password:</h3>
<form action="#" method ="POST">
                <div><input type="password" name = "passwordold" class="input-text" placeholder="Current Password"></div>
                <div><input type="password" name = "passwordnew" class="input-text" placeholder="New Password"></div>
                <div><input type="password" name = "passwordconf" class="input-text" placeholder="Confirm New Password"></div>

                <input type="submit" value="Change" name="submit1" class="post-button" >  
                 </form>
                 
                    <?php if(isset($_POST['submit1']))
                    {     if($_POST['passwordold']){
                        $password=$_POST['passwordold'];
                         $password = md5($password);
                         $userId=User::checkLogged();
              $user=User::getUserById($userId);
              print_r($user);
                        // $user=User::checkUserData(,$password);
                      //   $sql="select"
                    }
                    }    
                    ?>
                </div>
        </section>
    </div>

</section>
</div>




















<div>
<h1>









</h1>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>