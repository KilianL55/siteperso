<?php

$content=\file_get_contents('data/nav.yaml');
$data=yaml_parse($content);


echo "<nav>";
    foreach($data as $cle=>$val){
        echo '<a href="#'.$cle.'">'.$val.'</a>';
    }


echo"</nav>";

?>