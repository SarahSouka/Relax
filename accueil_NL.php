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
        <script src="./JS/hamburgerMenu.js"></script>
        <link rel="stylesheet" href="./fontawesome-free-5.2.0-web/fontawesome-free-5.2.0-web/css/all.css">
</head>
 
<body>

	<header>
         <?php
            include("./head.php");
         ?>
         
          <div>
            <h1><a href="accueil_NL.php"><img src="./assets/logo2.png"  alt="" ></a></h1>
            <button><span class="fas fa-bars fa-2x"></span></button>
        </div>  

	
		<div>
			<nav>
				<ul class="snip1275">
					<li class="active"><a href="#detente">Ontspanning</a>
						<ul class="drop">
							<li class="invisible"><a href="">Spa, Wellness</a></li>
							<li class="invisible"><a href="">Massage</a></li>
							<li class="invisible"><a href="">Atypische plaatsen</a></li>
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
					
					<li class="selftherapie"><a href="#self_therapie">Self-Therapy</a>
						<ul class="drop">
							<li class="invisible"><a href="">Kunst</a></li>
							<li class="invisible"><a href="">Meditatie</a></li>
						</ul>
					</li>
					
					<li id="logo" class="invisible"><a href="accueil_NL.php"><img src="./assets/logo3.png"  alt=""></a>
					</li>
					
					<li class="nature"><a href="#nature">Natuur</a>
						<!-- <ul class="drop">
						    <li class="invisible"><a href="">Lieux en extérieur</a></li>
						</ul>	 -->	
					</li>
					
					<li class="bienetre"><a href="#bien_etre">Welzijn</a>
						<ul class="drop">
							<li class="invisible"><a href="">Tips</a></li>
							<li class="invisible"><a href="">Thee</a></li>
							<li class="invisible"><a href="">Muziek</a></li>
						</ul>
					</li>
					
					<li class="agenda"><a href="agenda.php">Agenda</a>
						<!-- <ul class="drop">
						    <li class="invisible"><a href="">Retraites</a></li>
						    <li class="invisible"><a href="">Evènements</a></li>
						    <li class="invisible"><a href="">Page Facebook</a></li>
						</ul> -->
				    </li>
				</ul>
			</nav>
		</div>
    </header>
	<!--  <img src="assets/fond.svg" alt="pissenlit"  width="700px" /> -->
	        <div id="choix">
                <form id="myForm" name="myForm" method="POST" action="resultat.php">
                
                <h1>Zin in...</h1>
                
                <div id="alentours">
                    <label for="commune" class="custom-select">In de omgeving van...</label>
                    <select name="cp" id="cp">
                        <option value="">Gemeente</option>
                        <option value="1000">1000 - Brussel</option>
                        <option value="1020">1020 - Laeken</option>
                        <option value="1030">1030 - Schaarbeek</option>
                        <option value="1040">1040 - Etterbeek</option>
                        <option value="1050">1050 - Elsene</option>
                        <option value="1060">1060 - Sint-Gillis</option>
                        <option value="1070">1070 - Anderlecht</option>
                        <option value="1080">1080 - Sint-Jans-Molenbeek</option>
                        <option value="1081">1081 - Koekelberg</option>
                        <option value="1082">1082 - Sint-Agatha-Berchem</option>
                        <option value="1083">1083 - Ganshoren</option>
                        <option value="1090">1090 - Jette</option>
                        <option value="1120">1120 - Neder-Over-Heembeek</option>
                        <option value="1130">1130 - Haren</option>
                        <option value="1140">1140 - Evere</option>
                        <option value="1150">1150 - Sint-Pieters-Woluwe</option>
                        <option value="1160">1160 - Ouderghem</option>
                        <option value="1170">1170 - Watermaal-Bosvoorde</option>
                        <option value="1180">1180 - Ukkel</option>
                        <option value="1190">1190 - Vorst</option>
                        <option value="1200">1200 - Sint-Lambrechts-Woluwe</option>
                        <option value="1210">1210 - Sint-Joost-ten-Node</option>
                        <br>
                    </select>
                </div>
                    <div id="checkbox">
                        <label for="Nature"><span></span>Een beetje frisse lucht te halen</label><input type="checkbox" name="choix[]" value="Nature"  /><br /> 
                        <label for="Sport"><span></span>Om stoom af te blazen</label><input type="checkbox" name="choix[]" value="Sport" /><br /> 
                        <label for="Détente"><span></span>Om zich te ontspannen</label><input type="checkbox" name="choix[]" value="Détente" /><br /> 
                        <label for="Self-thérapie"><span></span>Om zichzelf terug te vinden</label><input type="checkbox" name="choix[]" value="Self-thérapie" /><br /> 
                        <label for="Art-Thérapie"><span></span>Zin om iets te creëren</label><input type="checkbox" name="choix[]" value="Art-Thérapie" />
                    </div>
                        <input type="submit" value="Sturen" id="button">
                </form>
            </div>

            
           
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
	


   


	