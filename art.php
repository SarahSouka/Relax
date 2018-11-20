<?php
require_once('./config.php');

try {
    
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
} catch (PDOException $e) {
    echo $e->getMessage(); 
    $pdo = null;            
    die();            
}

$statement2 = $pdo->query('SELECT * FROM t_relax INNER JOIN t_rubriquerelax ON t_rubriquerelax.idRelax = t_relax.id INNER JOIN t_rubrique ON t_rubriquerelax.idRubrique = t_rubrique.id WHERE t_rubrique.activite = "Art-Thérapie" ');

$listeRelax = $statement2->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relax &amp; Enjoy - Art</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="./css/normalize.css"><!--avant style.css !!!-->
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/footer.css">
 
</head>

<style>
    body{
        background-image: url(assets/pissenlitRose.svg);
        background-repeat: no-repeat;
        background-position: 0px 150px;
        background-size: 15%;
    }
</style>

<body> 
  
   <header>
    <?php
       include("./nav.php");
    ?> 	
  </header>
   
   <div id="boxImages">
   
<?php
    for ($i = 0; $i < count($listeRelax); $i++) 
    {  
        echo '<div class="listeRelax">';
        
        if ($listeRelax[$i]['activite'] == 'Art-Thérapie'){
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
    
    <?php
    include("./footer.php")
    ?>
   
   
</body>

</html>