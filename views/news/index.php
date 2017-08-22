<?php include ROOT . '/views/layouts/header.php'; ?>
<!DOCTYPE HTML>
<head>
    <link href="/template/css/style.css" type="text/css" rel="stylesheet">
 </head>
<body>
<div>
<div style="height:100px;">
</div>
<div class="cms-announce-tiles" style="width:75%;margin-left:20%;min-width:900px;">
    
 <?php
        $k = 0;  
        while($k < $cubes){
            echo
    '<a href="/news/view/'.$res[$k][0].'" class="cms-announce-tile cms-announce-tile_3-4-5" style="display:inline-block;margin:15px;">
        <div class="cms-announce-tile__image-wrapper" style="border solid;"><img src="https://hhcdn.ru/icms/10116446.jpeg" class="cms-announce-tile__image">
        </div><span class="bloko-link">Еще больше цифр про людей</span>
    </a>';
            $k++;}
    ?>
    
</div>
<div>
<div class="page">
    <?php 
    $i = 1;
    while($i < $e + 1){
        echo '<a href="/news/page-'.$i.'" >'.$i.'</a>';
        if ($i == 10)break;
        if ($res[$k][0] == false)break;
        $i++;
    }
    if($e > 10){
        echo '<a href="" style="width:6%;">...</a>
        <a href>'.$e.'</a>';
    }
        ?>

</div>



<?php include ROOT . '/views/layouts/footer.php'; ?>
</body>

</html>