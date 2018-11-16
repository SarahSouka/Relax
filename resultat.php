<?php
require_once('./config.php');

try {
    
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
} catch (PDOException $e) {
    echo $e->getMessage(); 
    $pdo = null;            
    die();            
}

/*
$noms = ['Flo','Ben','Cindy'];
var_dump (implode ($noms," OR "));
die();
*/
//var_dump($_POST);


$sql = 'SELECT * FROM t_relax INNER JOIN t_rubriquerelax ON t_relax.id = t_rubriquerelax.idRelax 
                              INNER JOIN t_rubrique ON t_rubriquerelax.idRubrique = t_rubrique.id';

if (isset($_POST['choix'])){
        $arrChoix = $_POST['choix'];
        for ($i=0; $i<count($arrChoix);$i++){
            $arrChoix[$i] = "'".$arrChoix[$i]."'";
        }

        $sql = $sql. " WHERE activite IN (";
        $sql = $sql . implode ($arrChoix, ","); 
        $sql = $sql. ")";
  if (isset($_POST['cp']) && $_POST['cp'] != '') {
      $sql = $sql. " AND cp = " . $_POST['cp'];
  }
};

//var_dump($sql);

$sql = 
$statement2 = $pdo->prepare($sql);

$statement2->execute();

$listeRelax = $statement2->fetchAll(PDO::FETCH_ASSOC);

/*
$sql2 ='SELECT id FROM t_rubriquerelax';
$sql2 = 
$statement3 = $pdo->prepare($sql);

$statement3->execute();

$listerubrique = $statement3->fetchAll(PDO::FETCH_ASSOC);
*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Essai cases (R-E)</title>
    <link rel="stylesheet" href="./css/normalize.css"><!--avant style.css !!!-->
    <link rel="stylesheet" href="./css/screen.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
</head>

<body>
   <?php
        include("./nav.php");
    ?>
   <div id="boxImages">
   
<?php
    for ($i = 0; $i < count($listeRelax); $i++) 
//       while ($listeRelax = $statement2->fetch())
    {  
        echo '<div class="listeRelax">';
        
<<<<<<< HEAD
       // if ($listeRelax[$i]['activite'] == 'Détente'){
        //     echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titredetente">' . $listeRelax[$i]['nom'] . '</button>' ;
        //} 
       if ($listeRelax[$i]['activite'] == 'Spa'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
        else if ($listeRelax[$i]['activite'] == 'Massage'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
        else if ($listeRelax[$i]['activite'] == 'Lieu Insolite'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
        else if ($listeRelax[$i]['activite'] == 'Nature'){
             echo '<img class="image" src="./assets/image.jpg">' . '<button id="titrenature">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
        else if ($listeRelax[$i]['activite'] == 'Art-Thérapie'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titretherapie">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
        else if ($listeRelax[$i]['activite'] == 'Méditation'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titretherapie">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        else if ($listeRelax[$i]['activite'] == 'Yoga'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
           else if ($listeRelax[$i]['activite'] == 'Pilate'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
         else if ($listeRelax[$i]['activite'] == 'Thai-Chi'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
           else if ($listeRelax[$i]['activite'] == 'Qi gong'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
         else if ($listeRelax[$i]['activite'] == 'Shiatsu'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
 else if ($listeRelax[$i]['activite'] == 'Aikido'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
   else if ($listeRelax[$i]['activite'] == 'Marche Nordique'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
=======
        if ($listeRelax[$i]['activite'] == 'Détente' || 
            $listeRelax[$i]['activite'] == 'Massage' || 
            $listeRelax[$i]['activite'] == 'Spa' || 
            $listeRelax[$i]['activite'] == 'Lieu Insolite' ){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titredetente">' . $listeRelax[$i]['nom'] . '</button>' ;
        }
        /*else if ($listeRelax[$i]['activite'] == 'Massage'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titredetente">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        else if ($listeRelax[$i]['activite'] == 'Spa'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titredetente">' . $listeRelax[$i]['nom'] . '</button>' ;
            }*/
        /*else if ($listeRelax[$i]['activite'] == 'Lieu Insolite'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titredetente">' . $listeRelax[$i]['nom'] . '</button>' ;
            }*/
        else if ($listeRelax[$i]['activite'] == 'Sport' || 
                 $listeRelax[$i]['activite'] == 'Yoga' || 
                 $listeRelax[$i]['activite'] == 'Aikido' || 
                 $listeRelax[$i]['activite'] == 'Pilate' || 
                 $listeRelax[$i]['activite'] == 'Thai-Chi' || 
                 $listeRelax[$i]['activite'] == 'Qi gong' || 
                 $listeRelax[$i]['activite'] == 'Shiatsu' || 
                 $listeRelax[$i]['activite'] == 'Marche Nordique' ){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
       
        else if ($listeRelax[$i]['activite'] == 'Self-thérapie' || 
                 $listeRelax[$i]['activite'] == 'Art-Thérapie' || 
                 $listeRelax[$i]['activite'] == 'Méditation'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titretherapie">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        
        else if ($listeRelax[$i]['activite'] == 'Nature'){
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titrenature">' . $listeRelax[$i]['nom'] . '</button>' ;
>>>>>>> fd5b33ef4f86a331a87ba09d0b93b2c3d615c099
            }
       // else if ($listeRelax[$i]['activite'] == 'Sport'){
       //      echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
        //    }
        else if ($listeRelax[$i]['activite'] 
        
     
        
       
      
        else {
             echo '<img class="image" src="./photos/'.$listeRelax[$i]['idRR'] .'.jpg">' . '<button id="titredivers">' . $listeRelax[$i]['nom'] . '</button>' ;
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
    
    <div id="pissenlit"><img src="./assets/pissenlitMulti.svg" alt="pissenlit">
    </div>
<!--    TEST -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<!--    <script src="./js/low-script.js"></script>-->
    <script>
//    $('#titre').hover(function(){
//    $(this).append($('.texte'))
//   }); 
    </script>
</body>
</html>