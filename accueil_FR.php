<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relax-Formulaire</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./css/screen.css">
        <link rel="stylesheet" href="./css/form.css">

</head>
<body>
	<header>
    <?php
       include("./nav.php");
    ?> 
	</header>
	<!--  <img src="assets/fond.svg" alt="pissenlit"  width="700px" /> -->
	        <div id="choix">
                <form id="myForm" name="myForm" method="POST" action="resultat.php">
                
                <h1>Envies du moment...</h1>
                
                <div id="alentours">
                    <label for="commune" class="custom-select">Aux alentours de...</label>
                    <select name="cp" id="cp">
                        <option value="">Commune</option>
                        <option value="1000">1000 - Bruxelles</option>
                        <option value="1020">1020 - Laeken</option>
                        <option value="1030">1030 - Schaerbeek</option>
                        <option value="1040">1040 - Etterbeek</option>
                        <option value="1050">1050 - Ixelles</option>
                        <option value="1060">1060 - Saint-Gilles</option>
                        <option value="1070">1070 - Anderlecht</option>
                        <option value="1080">1080 - Molenbeek</option>
                        <option value="1081">1081 - Koekelberg</option>
                        <option value="1082">1082 - Berchem-Sainte-Agathe</option>
                        <option value="1083">1083 - Ganshoren</option>
                        <option value="1090">1090 - Jette</option>
                        <option value="1120">1120 - Neder-Over-Heembeek</option>
                        <option value="1130">1130 - Haren</option>
                        <option value="1140">1140 - Evere</option>
                        <option value="1150">1150 - Woluwe-Saint-Pierre</option>
                        <option value="1160">1160 - Auderghem</option>
                        <option value="1170">1170 - Watermael-Boitsfort</option>
                        <option value="1180">1180 - Uccle</option>
                        <option value="1190">1190 - Forest</option>
                        <option value="1200">1200 - Woluwe-Saint-Lambert</option>
                        <option value="1210">1210 - Saint-Josse-Ten-Noode</option>
                        <br>
                    </select>
                </div>
                    <div id="checkbox">
                        <label for="Nature"><span></span>Bol d'air frais</label><input type="checkbox" name="choix[]" value="Nature"  /><br /> 
                        <label for="Sport"><span></span>Se défouler</label><input type="checkbox" name="choix[]"  value="Sport" /><br /> 
                        <label for="Détente"><span></span>Se relaxer</label><input type="checkbox" name="choix[]"  value="Détente"  /><br /> 
                        <label for="Méditation"><span></span>Se retrouver avec soi-même</label><input type="checkbox" name="choix[]" value="Méditation" /><br /> 
                        <label for="Art-Thérapie"><span></span>Envie de créer</label><input type="checkbox" name="choix[]" value="Art-Thérapie" />
                    </div>
                        <input type="submit" value="envoyer" id="button">
                </form>
            </div>

            <script>
                //var valuetwo = checkbox.getAttribute("data-valuetwo");
                var valueTwo = $( "input" ).attr( "data-valuetwo" ); 
                //alert(valueTwo);
            </script>
           
<!--             
            height="581px" -->
            <!-- <script>
            document.getElementById ("envoyer").addEventListener ("click", 
            function (evenement){
                // éviter le comportement de submit du bouton
                evenement.preventDefault();
                // créer un objet FormData
                let FormData = new FormData();
                formData.append('Nature', true);
                formData.append('sport', true);
                formData.append('detente', true);
                formData.append('self-therapie', true);
                formData.append('creer', true);
                
                let myForm = document.getElementById('myForm');
                formData = new FormData(myForm);
                
                let xhr = new XMLHttpRequest();
            
                xhr.onreadystatechange = function (){
                    if(xhr.readyState == 4){
                        if (xhr.status == 200){
                           console.log (xhr.responseText); 
                        }
                        else{
                            console.log ("Erreur dans AJAX");
                        }
                    }
                }
                //envoyer le formulaire par POST
                xhr.open ("POST","./essai2.php");
                xhr.send (formulaire);
            });
            
            
            </script> -->

	
	<footer>
	    <p> &copy; Bénédicte Regnier, Floriane Jacques, Sarah Gueye, Cindy Colin - Interface 3</p>
	    <nav>
	        <ul>
	            <li><a href="accueil_FR.php"> FR |</a></li>
	            <li><a href="accueil_NL.php"> NL |</a></li>
	            <li><a href="accueil_EN.php"> EN </a></li>
	        </ul>
	    </nav>
    </footer>
</body>