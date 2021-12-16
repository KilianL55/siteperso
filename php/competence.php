<?php
 $content=\file_get_contents('data/competence.yaml');
 $data=$data=yaml_parse($content);

echo '<div class="wrappercp">';
foreach($data as $index=>$stage){
    echo'<div class="topc">';
        echo"<div class='competence1'>";
            echo"<div class='buttoncp'><h2>".$index."</h2></div>";
            foreach($stage as $cle=>$valeur){
                if($cle == "html" || $cle == "css" || $cle == "php" || $cle == "lua" || $cle == "sql" || $cle == "linux" || $cle == "bash" || $cle == "dns" || $cle == "dhcp" || $cle == "http" ||  $cle == "fr" || $cle == "en" || $cle == "esp" ){
                    echo "<p>".$valeur."</p>";
                }
                if($cle == "htmlv" || $cle == "cssv" || $cle == "phpv" || $cle == "luav" || $cle == "sqlv" || $cle == "linuxv" || $cle == "bashv" || $cle == "dnsv" || $cle == "dhcpv" || $cle == "httpv" || $cle == "frv" || $cle == "env" || $cle == "espv"){
                    echo'<div class="barre"><div class="skill '.$cle.'">'.$valeur.'</div></div>';
                }   
            }
        echo'</div>';
    echo'</div>';
}
echo '</div>';

?>