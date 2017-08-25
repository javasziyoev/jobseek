<?php include ROOT . '/views/layouts/header.php'; ?>


<div id="wrapper">
    <div class="mobwrapper">
    <section id="sign-in-content" >
        <h1 style="margin-bottom: 1em; text-align: center;">Sign in to Job Seeker</h1>
        <form action="#" method="POST" style="width: 100%;">
           <input type="text" placeholder="Email" name="loginemail" class="input-text mob-button-100" ><br>
           <input type="password" placeholder="Password" name="loginpassword" class="input-text mob-button-100" ><br><br>
           <input type="submit" name="loginsubmit" value="Sign in" class="sign-in-button mob-button-100" style="width: 100%;">
        </form>
    </section>
  <div style="text-align: center;"> Dont have an account? <a href = "/user/signup" >Create one </a></div>
</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>