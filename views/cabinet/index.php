<?php include ROOT . '/views/layouts/header.php'; ?>



<div id="wrapper" style="margin-top: 25px">
    <section id="main-content news" style="padding: .5% 2%; background-color: #fafafa;">
    <h3 class="dark-gray-text" style="margin-bottom: 1em;">Hello, %USERNAME%</h3>
    
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
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Name:</strong></label>
                        <span>%USERNAME</span>
                        <span style="color: rgb(29, 152, 220); margin-left: 1em;"><strong>edit</strong></span>
                    </div>
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Last Name:</strong></label>
                        <span>%USERLASTNAME</span>
                        <span style="color: rgb(29, 152, 220); margin-left: 1em;"><strong>edit</strong></span>
                    </div>
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Email:</strong></label>
                        <span>%USEREMAIL</span>
                        <span style="color: rgb(29, 152, 220); margin-left: 1em;"><strong>edit</strong></span>
                    </div>
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Cellphone:</strong></label>
                        <span>%CELLPHONE</span>
                        <span style="color: rgb(29, 152, 220); margin-left: 1em;"><strong>edit</strong></span>
                    </div>
                </div>


            <div style="margin-top: 1em;">  
                <h3>Change password:</h3>

                <div><input type="password" name = "password" class="input-text" placeholder="Current Password"></div>
                <div><input type="password" name = "password" class="input-text" placeholder="New Password"></div>
                <div><input type="password" name = "password" class="input-text" placeholder="Confirm New Password"></div>

                <input type="submit" value="Change" name="submit1" class="post-button" disabled>
                </div>
        </section>
    </div>

</section>
</div>




















<div>
<h1>






<?php
print_r($user);
if($user['first_name'])echo $user['first_name'];
if($user['contact_first_name'])echo $user['first_name'];
if($user['nick'])echo $user['nick'];

?>


</h1>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>