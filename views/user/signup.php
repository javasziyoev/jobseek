<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="wrapper">
      <section id="sign-up-content">
        <div class="tabs">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1" title="Sign up 1">Job seeker registration</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2" title="Sign up 2">Employer registration</label>

            <section id="content-tab1">
                <form action="#" method="POST">
                <input type="hidden" name="actionSignup" value = "1">

                <div>
                    <div>
                        <label>First name</label>
                    </div>
                    <div>
                        <input type="text" name = "firstname">
                    </div>
                </div>
                <div>
                    <div>
                        <label>Last name</label>
                    </div>
                    <div>
                        <input type="text" name = "lastname">
                    </div>
                </div>
                
                <div>
                    <div>
                        <label>Email</label>
                    </div>
                    <div>
                        <input type="text" name = "email">
                    </div>
                </div>
                <div>
                    <div>
                        <label>Password</label>
                    </div>
                    <div>
                        <input type="text" name = "password">
                    </div>
                </div>
                <div>
                    <div>
                        <label>Phone number</label>
                    </div>
                    <div>
                    <input type="text" name = "cellphone">
                    </div>
                </div>

                <input type="submit" value="Register">
            </form>
            </section>

            <section id="content-tab2">
                    <form action="" method = "POST">
                    <input type="hidden" name="actionEmployer"  value = "2">

                        <div>
                            <div>
                                <select class="select-category">
                                    <option value="cny" selected="">LLC</option>
                                    <option value="usd">ХУЙ</option>
                                    <option value="rub">PIZDA</option>
                                </select>
                            </div>
                            <div>
                                <div>
                                    <input type="text" placeholder="Company name">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input type="text" placeholder="Website">
                                </div>
                            </div>
                            <div>
                                <select class="select-category">
                                    <option value="1" selected="">Less than 50 employees</option>
                                    <option value="2" selected="">From 51 to 100 employees</option>
                                    <option value="3" selected="">From 101 to 250 employees</option>
                                    <option value="4" selected="">From 251 to 500 employees</option>
                                    <option value="5" selected="">More than 500 employees</option>
                                </select>
                            </div>
                            <div>
                                <select class="select-category">
                                    <option value="1" selected="">Beijin</option>
                                    <option value="2" selected="">Moscow</option>
                                    <option value="3" selected="">Dushanbe</option>
                                </select>
                            </div>
                            <label><strong>Contact person</strong> (confidential)</label>
                            <div>
                                <div>
                                    <input type="text" placeholder="Name">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input type="text" placeholder="Last name">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input type="text" placeholder="Phone number">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input type="text" placeholder="Extension number">
                                </div>
                            </div>
                            <small>By clicking "register a company", you acknowledge that you read and fully agree
                                with the terms of use if the website.
                            </small><br>
                            <input type="submit" value="Register company">
                        </form>
            </section>
        </div>
      </section>

    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>