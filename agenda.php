
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relax &amp; Enjoy - Agenda</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- JQUERY -->
        <link rel="stylesheet" href="./jquery-ui-1.12.1.custom/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        
        <!-- CSS -->
        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./css/agenda.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <link rel="stylesheet" href="./fontawesome-free-5.2.0-web/fontawesome-free-5.2.0-web/css/all.css">
          
</head>
<!--
<style>
    body{
        background-image: url(assets/pissenlitJaune2.svg);
        background-repeat: no-repeat;
        background-position: 0px 150px;
        background-size: 15%;
    }
</style>
-->

<body>
   <header>
    <!-- NAV -->
   <?php
       include("./nav.php");
    ?>   
	</header>	
	
    
  <div id="box">
      <div id="boxreponses">
   
    
<?php
   require_once ('./config.php');

try {
    
    $pdo = new PDO (MYSQL_DSN, DB_USER, DB_PWD);
} catch (PDOExeption $e) {
    echo $e->getMessage (); 
    $pdo = null; 
    die(); 
}

if (isset($_POST['date'])){
$statement = $pdo->prepare('SELECT *, DATE_FORMAT(date,"%d") as jour, DATE_FORMAT(date, "%m") as mois
                            FROM t_agenda
                            WHERE date = :datepick');

$statement->bindValue(':datepick', $_POST['date'], PDO::PARAM_STR); 


$statement->execute();

$reponse = $statement->fetchAll(PDO::FETCH_ASSOC);

for($i = 0; $i < count($reponse); $i++){
    echo 
        
        '<div id="reponse"> ' . 
        '<div id="dateimg">' .
        '<div id="divdate">' .
        '<h3>' . $reponse[$i]['jour'] . '</h3>' .
        '<h3>' . $reponse[$i]['mois'] . '</h3>' .
        
        '</div>' .
        
        '<img id="imgbox" src="./images/' .$reponse[$i]['id'] . '.jpg">' .
        '</div>' .
        
        '<div id="blocinfos">' .
        '<h4>' . $reponse[$i]['nom'] . '</h4>' .
        '<p id="plieu">' . $reponse[$i]['lieu'] . '</p>' .
        '<ul id="ulreponse">' .
        
        '<li class="lireponse">' . '<img class="icones" src="./icones/map-marker-alt-solid.svg">'. $reponse[$i]['rue'] . '</li>' .
        
        '<li class="lireponse">' . $reponse[$i]['cp'] . ' ' . $reponse[$i]['commune'] . '</li>' ;
    
    if ($reponse[$i]['mail'] > ' '){
       echo '<li class="lireponse">' . '<img class="icones" src="./icones/envelope-solid.svg">'. $reponse[$i]['mail'] . '</li>' ;
    };
    
    if ($reponse[$i]['telephone'] > ' '){
        echo '<li class="lireponse">' . '<img class="icones" src="./icones/phone-solid.svg">'. $reponse[$i]['telephone'] . '</li>' ;
    }
        
        
        echo
        
        '</ul>' ;
    
    if ($reponse[$i]['web'] > ' '){
        echo '<img id="iconeweb" src="./icones/laptop-solid.svg">' .
            '<a id="aweb" href="http://' . $reponse[$i]['web'] . '">' . $reponse[$i]['web'] . '</a>';
    }
        
         echo
        
        '<br>' .
        
        '<a id="lien" href="' . $reponse[$i]['lien'] . '">' .'<img id="fleche" src="./icones/fleche.png">' . '</a>'.
        
        '</div>' .
        
        ' </div>';  
}    

}    
    
?>
   
    </div>
        
        <div>
        <div id="divform">
            <form action="" method="post">
                <div id="datepicker"></div>
                <input type="hidden" name="date" value="">
                <button id="btncalendrier">Go</button>
            </form> 
        </div>
        
         <div class="fb-page" 
              data-href="https://www.facebook.com/RelaxEnjoy-354269051988875/"
              data-width="380" 
              data-hide-cover="false"
              data-show-facepile="true">
              
        </div>
        </div>
   
    </div>
    
        <!-- DATEPICKER -->
         <script>
          $(document).ready(function() {
            $( "#datepicker" ).datepicker({
                firstDay: 1,
                dayNamesMin: [ "Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa" ], 
                minDate: new Date(),
                dateFormat: "yy-mm-dd",
                onSelect: function(dateText) {
                    $('input[type="hidden"]').val(dateText)
                }
            });
          });
        </script>
        
        <!-- PLUG IN FACEBOOK -->
        <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

   <?php
    include("./footer.php")
    ?>
</body>
</html>