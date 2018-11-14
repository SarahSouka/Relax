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

$sql = 
$statement2 = $pdo->prepare($sql);

$statement2->execute();

$listeRelax = $statement2->fetchAll(PDO::FETCH_ASSOC);

//var_dump($sql);


//if ($_POST['nature']==true || $_POST['sport']==true || $_POST['detente']==true || $_POST['self']==true || $_POST['creer']==true){
//    $requete = "SELECT t_relax.nom, t_relax.rue, t_rubrique.activite, t_rubriquerelax.idRelax, t_rubriquerelax.idRubrique FROM t_relax 
//    INNER JOIN t_rubriquerelax
//    ON t_rubriquerelax.idRelax = t_relax.id 
//    INNER JOIN t_rubrique 
//    ON t_rubriquerelax.idRubrique = t_rubrique.id";
//}  

//$statement2 = $pdo->query('SELECT * FROM t_relax WHERE commune = "Ixelles" ');

//$statement2 = $pdo->query('SELECT * FROM t_relax INNER JOIN t_rubriquerelax ON t_rubriquerelax.idRelax = t_relax.id INNER JOIN t_rubrique ON t_rubriquerelax.idRubrique = t_rubrique.id WHERE t_rubrique.activite = "Sport" AND t_relax.commune = "Bruxelles" ');

//var_dump($listeRelax);

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
   <header>
      		<div>
			<nav>
				<ul class="snip1275">
					<li class="detente"><a href="detente.php">Détente</a>
						<ul class="drop">
							<li class="invisible"><a href="">Spa, Wellness</a></li>
							<li class="invisible"><a href="">Massage</a></li>
							<li class="invisible"><a href="">Lieux Insolites</a></li>
						</ul>
                    </li>
					<li class="sport"><a href="#sport">Sport</a>
					<ul class="drop">
							<li class="invisible"><a href="">Yoga</a></li>
							<li class="invisible"><a href="">Pilates</a></li>
							<li class="invisible"><a href="">Tai-Chi</a></li>
							<li class="invisible"><a href="">Qi Gong</a></li>
						</ul>
					</li>
					
					<li class="selftherapie"><a href="#self_therapie">Self-Thérapie</a>
						<ul class="drop">
							<li class="invisible"><a href="">Art-Thérapie</a></li>
							<li class="invisible"><a href="">Méditation</a></li>
						</ul>
					</li>
					
					<li id="logo" class="invisible"><a href="accueil.html"><img src="./assets/logo3.png" width="125px" height="125px"></a>
					</li>
					
					<li class="nature"><a href="nature.php">Nature</a>
<!--
						<ul class="drop">
							<li class="invisible"><a href="">Lieux en extérieur</a></li>
						</ul>		
-->
					</li>
					
					<li class="bienetre"><a href="#bien_etre">Bien-être</a>
						<ul class="drop">
							<li class="invisible"><a href="">Tips</a></li>
							<li class="invisible"><a href="">Thé</a></li>
							<li class="invisible"><a href="">Musique</a></li>
						</ul>
					</li>
					
					<li class="agenda"><a href="#agenda">Agenda</a>
						<ul class="drop">
<!--
							<li class="invisible"><a href="">Retraites</a></li>
							<li class="invisible"><a href="">Evènements</a></li>
							<li class="invisible"><a href="">Page Facebook</a></li>
-->
						</ul>
				    </li>
				</ul>
			</nav>
		</div>
  </header>
   <div id="boxImages">
   
<?php
    for ($i = 0; $i < count($listeRelax); $i++) 
//       while ($listeRelax = $statement2->fetch())
    {  
        echo '<div class="listeRelax">';
        
        if ($listeRelax[$i]['activite'] == 'Détente'){
             echo '<img class="image" src="./assets/image.jpg">' . '<button id="titredetente">' . $listeRelax[$i]['nom'] . '</button>' ;
        }
        else if ($listeRelax[$i]['activite'] == 'Sport'){
             echo '<img class="image" src="./assets/image.jpg">' . '<button id="titresport">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        else if ($listeRelax[$i]['activite'] == 'Self-thérapie'){
             echo '<img class="image" src="./assets/image.jpg">' . '<button id="titretherapie">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        else if ($listeRelax[$i]['activite'] == 'Nature'){
             echo '<img class="image" src="./assets/image.jpg">' . '<button id="titrenature">' . $listeRelax[$i]['nom'] . '</button>' ;
            }
        else {
             echo '<img class="image" src="./assets/image.jpg">' . '<button id="titredivers">' . $listeRelax[$i]['nom'] . '</button>' ;
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
    <div id="pissenlit"><img src="./assets/pissenlitMulti.svg" width="14%" alt="pissenlit">
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