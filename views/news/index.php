<?php include ROOT . '/views/layouts/header.php'; ?>
<!DOCTYPE HTML>
<head>
    <link href="/template/css/style.css" type="text/css" rel="stylesheet">
 </head>
<body>


<div id="wrapper" style="margin-top: 25px;">
    <h1 style="margin-bottom: 25px;">News</h1>
    <ul style="display: inline-block;">
 <?php
        $k = 0;  
        while($k < $cubes){
            if ($res[$k][0] == 1)break;
            echo
            '<a href=/news/view/'.$res[$k][0].'><div style="display: inline-block; margin: 1em;">
            <div style="display: block; margin-left: 10px;"><a>
                <a href="#">'.$res[$k][1].'</a>
                <h6>'.$res[$k][2].'</h6>
                <p>'.$res[$k][3].'</p>
            </div>
        </div>';
    
            $k++;
            }
    ?>
   </ul>
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