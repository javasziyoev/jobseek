<?php include ROOT . '/views/layouts/header.php'; ?>


<div id="wrapper">
    <section id="sign-up-content">
        <p>Sign in to Job Seeker</p>
        <form action="#" method="POST">
           <input type="text" placeholder="Email" name="loginemail" class="input-text" ><br>
           <input type="password" placeholder="Password" name="loginpassword" class="input-text" ><br><br>
           <input type="submit" name="loginsubmit" value="Sign in" class="sign-in-button">
        </form>
    </section>
  <div> Dont have an account? <a href = "/user/signup" >Create one </a></div>

</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>