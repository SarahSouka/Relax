<?php
require_once('./config.php');

try {
    
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
} catch (PDOException $e) {
    echo $e->getMessage(); 
    $pdo = null;            
    die();            
}
//if ($_POST['nature']==true || $_POST['sport']==true || $_POST['detente']==true || $_POST['self']==true || $_POST['creer']==true){
//    $requete = "SELECT t_relax.nom, t_relax.rue, t_rubrique.activite, t_rubriquerelax.idRelax, t_rubriquerelax.idRubrique FROM t_relax 
//    INNER JOIN t_rubriquerelax
//    ON t_rubriquerelax.idRelax = t_relax.id 
//    INNER JOIN t_rubrique 
//    ON t_rubriquerelax.idRubrique = t_rubrique.id";
//}  

//$statement2 = $pdo->query('SELECT * FROM t_relax WHERE commune = "Ixelles" ');

//$statement2 = $pdo->query('SELECT * FROM t_relax ORDER BY cp ASC');

$statement2 = $pdo->query('SELECT * FROM t_relax INNER JOIN t_rubriquerelax ON t_rubriquerelax.idRelax = t_relax.id INNER JOIN t_rubrique ON t_rubriquerelax.idRubrique = t_rubrique.id WHERE t_rubrique.activite = "Sport" ');

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
        
      
        if ($listeRelax[$i]['activite'] == 'Sport' || 
                 $listeRelax[$i]['activite'] == 'Yoga' || 
                 $listeRelax[$i]['activite'] == 'Aikido' || 
                 $listeRelax[$i]['activite'] == 'Pilate' || 
                 $listeRelax[$i]['activite'] == 'Thai-Chi' || 
                 $listeRelax[$i]['activite'] == 'Qi gong' || 
                 $listeRelax[$i]['activite'] == 'Shiatsu' || 
                 $listeRelax[$i]['activite'] == 'Marche Nordique' ){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
        else {
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            } ;
        
        
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
    
    <div id="pissenlit"><img src="./assets/pissenlitRouge.svg" alt="pissenlit">
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