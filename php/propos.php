<?php
 $content=\file_get_contents('data/propos.yaml');
 $data=yaml_parse($content);

 echo "<main class='ac3'>";
    echo "<div class='ac'>";
        echo '<h1>'.$data['nom'].'</h1>';
    echo "</div>";
    echo "<div class='ac1'>";
        echo '<img src='.$data['photo'].'>';
    echo "</div>";
    echo "<div class='ac1'>";
        echo '<h1>'.$data['presentation'].'</h1>';
    echo "</div>";
    echo "<div class='ac1'>";
        echo '<h1>'.$data['activite'].'</h1>';
    echo "</div>";
echo "</main>";