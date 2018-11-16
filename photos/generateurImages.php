<?php

// generer les noms de fichiers pour 800 images 
$noms = [];
for ($i=1;$i<800;$i++){
    $noms [] = $i.".jpg";
}

// obtenir tous les fichiers qui existent
$fichiers = scandir("./");

for ($i=0; $i<count($noms);$i++){
    if (!in_array($noms[$i],$fichiers)){
        echo $noms[$i] . " n'es pas la<br>";
        copy ("./image.jpg",$noms[$i]);
    }
    
}

?>