<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relax &amp; Enjoy - Accueil (NL)</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./css/screen.css">
        <link rel="stylesheet" href="./css/form.css">
        <script src="./JS/hamburgerMenu.js"></script>
        <link rel="stylesheet" href="./fontawesome-free-5.2.0-web/fontawesome-free-5.2.0-web/css/all.css">
        <link rel="stylesheet" href="./css/footer.css">

</head>
 
<body>

	<header>
         <?php
            include("./head.php");
         ?>
         
          <div>
            <h1><a href="accueil_NL.php"><img src="./assets/logo3.png"  alt="" ></a></h1>
            <button><span class="fas fa-bars fa-2x"></span></button>
        </div>  

	
		<div>
			<nav>
				<ul class="snip1275">
					<li class="active"><a href="detente.php">Ontspanning</a>
						<ul class="drop">
							<li class="invisible"><a href="spa.php">Spa, Wellness</a></li>
							<li class="invisible"><a href="massage.php">Massage</a></li>
							<li class="invisible"><a href="insolite.php">Atypische plaatsen</a></li>
						</ul>
                    </li>
					<li class="sport"><a href="sport.php">Sport</a>
					<ul class="drop">
							<li class="invisible"><a href="yoga.php">Yoga</a></li>
							<li class="invisible"><a href="pilates.php">Pilates</a></li>
							<li class="invisible"><a href="taichi.php">Tai-Chi</a></li>
							<li class="invisible"><a href="qigong.php">Qi Gong</a></li>
						</ul>
					</li>
					
					<li class="selftherapie"><a href="selftherapie.php">Self-Therapy</a>
						<ul class="drop">
							<li class="invisible"><a href="art.php">Kunst</a></li>
							<li class="invisible"><a href="meditation.php">Meditatie</a></li>
						</ul>
					</li>
					
					<li id="logo" class="invisible"><a href="accueil_NL.php"><img src="./assets/logo3.png"  alt=""></a>
					</li>
					
					<li class="nature"><a href="nature.php">Natuur</a>	
					</li>
					
					<li class="bienetre"><a href="bienetre.php">Welzijn</a>
						<ul class="drop">
							<li class="invisible"><a href="bienetre.php#titretips">Tips</a></li>
							<li class="invisible"><a href="bienetre.php#titrethe">Thee</a></li>
							<li class="invisible"><a href="bienetre.php#titremusique">Muziek</a></li>
						</ul>
					</li>
					
					<li class="agenda"><a href="agenda.php">Agenda</a>
				    </li>
				</ul>
			</nav>
		</div>
    </header>
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

	<?php
    include("./footer.php")
    ?>
</body>
	


   


	