<!DOCTYPE html>

<html>
    <head>
        <title>Levasseur Kilian</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include('php/nav.php');
        
        $content=\file_get_contents('data/nav.yaml');
        $data=yaml_parse($content);
        ?>
        <?php
        foreach($data as $cle=>$val){
            echo '<section id="'.$cle.'"class="'.$cle.'">';
            include ('php/'.$cle.'.php');
            include('php/background.php');
            echo'</section>';
        }
        ?>
    </body>
</html>
