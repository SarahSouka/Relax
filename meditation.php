<?php
require_once('./config.php');

try {
    
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
} catch (PDOException $e) {
    echo $e->getMessage(); 
    $pdo = null;            
    die();            
}

$statement2 = $pdo->query('SELECT * FROM t_relax INNER JOIN t_rubriquerelax ON t_rubriquerelax.idRelax = t_relax.id INNER JOIN t_rubrique ON t_rubriquerelax.idRubrique = t_rubrique.id WHERE t_rubrique.activite = "Méditation" ');

$listeRelax = $statement2->fetchAll(PDO::FETCH_ASSOC);
//var_dump($statement2);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Essai cases (R-E)</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="./css/normalize.css"><!--avant style.css !!!-->
    <link rel="stylesheet" href="./css/screen.css">
    <link rel="stylesheet" href="./css/style2.css"> 
</head>

<body> 
  <header>
    <?php
       include("./nav.php");
    ?> 	
  </header>
   <div id="boxImages">
   
<?php
    for ($i = 0; $i < count($listeRelax); $i++) 
//       while ($listeRelax = $statement2->fetch())
    {  
        echo '<div class="listeRelax">';
        
        if ($listeRelax[$i]['activite'] == 'Méditation'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titretherapie">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
       echo '<div class="texte">' 
            .  '<h3>' . $listeRelax[$i]['nom'] . '</h3>' 
            . '<p>' . '<img class="iconeadresse" src="./icones/map-marker-alt-solid.svg">' . $listeRelax[$i]['rue'] . ' à ' . $listeRelax[$i]['cp'] . ' ' . $listeRelax[$i]['commune'] . '<br>';
        if ($listeRelax[$i]['web'] > ' '){
            echo '<img class="iconeweb" src="./icones/laptop-solid.svg">' . '<a id="lien" href="http://' . $listeRelax[$i]['web'] . '"/>' . $listeRelax[$i]['web'] . '</a>';
        };
        if ($listeRelax[$i]['telephone'] > ' '){
            echo '<br>' 
            . '<img class="iconetel" src="./icones/phone-solid.svg">' . $listeRelax[$i]['telephone'] . '<br>';
        };
        if ($listeRelax[$i]['mail'] > ' '){
            echo '<img class="iconemail" src="./icones/envelope-solid.svg">' . $listeRelax[$i]['mail'] . '</p>';
        };
    
        echo '</div>';
        echo '</div>';
    }
      
?>       
 
    </div> 
<!--    TEST -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<!--    <script src="./js/low-script.js"></script>-->
    <script>
//    $('#titre').hover(function(){
//      $(this).append($('.texte'))
//   }); 
    </script>
</body>
</html>