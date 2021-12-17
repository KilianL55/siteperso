<?php
 $content=\file_get_contents('data/propos.yaml');
 $data=yaml_parse($content);


 echo "<main class='prop3'>";
    echo "<div class='prop1'>";
        echo '<h1>'.$data['nom'].'</h1>';
    echo "</div>";
    echo "<div class='prop1'>";
        echo '<img src='.$data['photo'].'>';
    echo "</div>";
    echo "<div class='prop1'>";
        echo '<p>'.$data['presentation'].'</p>';
    echo "</div>";
    echo "<div class='prop1'>";
        echo '<p>'.$data['activite'].'</p>';
    echo "</div>";
    echo "<div class='prop1'>";
        echo '<p>'.$data['passion'].'</p>';
    echo "</div>";
    echo '<a href="data/CV.pdf">Mon CV</a>';
echo "</main>";
