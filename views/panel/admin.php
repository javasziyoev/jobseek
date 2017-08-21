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
    <main id="main-content">
        


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
    </main>
</div>
</body>
</html>