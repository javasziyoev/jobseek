<?php include ROOT . '/views/layouts/header.php'; ?>
<!DOCTYPE HTML>
<head>
    <link href="/template/css/style.css" type="text/css" rel="stylesheet">
 </head>
<body>


<div style="width:100%">
<div style="width:600px;border:solid;">
 <?php
        $k = 0;  
        while($k < $cubes){
            if ($res[$k][0] == 1)break;
            echo
            '<div style="width:500px;">
            <div><img src="https://hhcdn.ru/icms/10116446.jpeg"></div>
            <div style="display: block;">
                <a href="#">'.$res[$k][1].'</a>
                <h6>'.$res[$k][2].'</h6>
                <p>'.$res[$k][3].'</p>
            </div>
        </div>';
    
            $k++;
            }
    ?>
    
</div>
</div>

<div class="page">
    <?php 
    $i = 1;
    while($i < $e + 1){
        echo '<a href="/news/page-'.$i.'" >'.$i.'</a>';
        if ($i == 10)break;
        
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