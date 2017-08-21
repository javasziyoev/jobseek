<!doctype html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Mjolnir</title>
    <link rel="stylesheet" href="/template/css/style.css" />   
  <link rel="stylesheet" media="screen and (min-device-width: 1440px)" href="/template/css/desktop.css" /> 
  <link rel='stylesheet' media='screen and (min-width: 800px) and (max-width: 1440px)' href='/template/css/medium-style.css' />
  <link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 799px)' href='/template/css/mobile-style.css' />

    <link rel="stylesheet" href="/template/css/mjolnir.css" />   
</head>
<body>
<div id="wrapper">
<div class="tabs">
            <input id="tab1" type="radio" name="tabs">
            <label for="tab1" title="Sign up 1">statistics</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2" title="Sign up 2">news</label>
            
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3" title="Sign up 2">users</label>
            <input id="tab4" type="radio" name="tabs">
            <label for="tab4" title="Sign up 2">roles</label>
            <input id="tab5" type="radio" name="tabs">
            <label for="tab5" title="Sign up 2">vacancies</label>
            <input id="tab6" type="radio" name="tabs">
            <label for="tab6" title="Sign up 2">industries</label>
            <input id="tab7" type="radio" name="tabs">
            <label for="tab7" title="Sign up 2">logs</label>
            <input id="tab8" type="radio" name="tabs">
            <label for="tab8" title="Sign up 2">feedbacks</label>
            <input id="tab9" type="radio" name="tabs">
            <label for="tab9" title="Sign up 2"><a href="/user/logout">sign out</a></label>


            <section id="content-tab1">
            <!--<main id="main-content">-->
                <div class="vacancies-of-the-day-item ">
                    <label><?php print_r($r[0][0]); ?> </label><br>
                    <label>users</label>
                </div>

                <div class="vacancies-of-the-day-item ">
                    <label><?php print_r($r[1][0]); ?></label><br>
                    <label>cv</label>
                </div>

                <div class="vacancies-of-the-day-item ">
                    <label><?php print_r($r[2][0]); ?></label><br>
                    <label>vacancies</label>
                </div>

                <div class="vacancies-of-the-day-item ">
                    <label><?php print_r($r[3][0]); ?></label><br>
                    <label>employers</label>
                </div>
            <!--</main>-->
            </section>

            <section id="content-tab2">
                хуй2
            </section>
            <section id="content-tab3">
                хуй3
            </section>
            <section id="content-tab4">
                хуй4
            </section>
            <section id="content-tab5">
                хуй5
            </section>
            <section id="content-tab6">
                хуй6
            </section>
            <section id="content-tab7">
                хуй7
            </section>
            <section id="content-tab8">
                хуй8
            </section>
            <section id="content-tab9">
                хуй9
            </section>




<!--
        <nav id="nav-menu">
            <h1>Admin Panel</h1>
            <ul>
                <li class="active"><a href="">statistics</a></li>
                <li><a href="">news</a></li>
                <li><a href="">users</a></li>
                <li><a href="">roles</a></li>
                <li><a href="">vacancies</a></li>
                <li><a href="">industries</a></li>
                <li><a href="">logs</a></li>
                <li><a href="">feedbacks</a></li>
                <li><a href="/user/logout">sign out</a></li>
            </ul>
        </nav>
-->

    
            

</div>
</body>
</html>