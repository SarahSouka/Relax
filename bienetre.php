<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/bienetre.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>
    <header>
    <!-- NAV -->
   <?php
       include("./nav.php");
    ?>   
	</header>
   
   <main>
      <div>
          <nav id="navbienetre">
              <a class="liensBE" href="#titretips">Tips</a>
              <a class="liensBE" href="#titrethe">Thé</a>
              <a class="liensBE" href="#titremusique">Musique</a>
          </nav>
      </div>
      
      <div id="divsections">
      <section id="sectiontips">
          <h2 id="titretips">Tips</h2>
          
          <div id="divfigures">
             
              <figure class="figure">
                  <img src="./imagesBienEtre/1journeePositive.jpeg" alt="">
                  <figcaption>Une journée positive</figcaption>
                  <a href="https://www.youtube.com/watch?v=kn6G1QKNjrs">Voir la vidéo</a>
              </figure>
              
              <figure class="figure">
                  <img src="./imagesBienEtre/2antiStress.jpg" alt="">
                  <figcaption>Méditation anti stress</figcaption>
                  <a href="https://www.youtube.com/watch?v=L3-RmjFdL8o">Voir la vidéo</a>
              </figure>
              
              <figure class="figure">
                  <img src="./imagesBienEtre/3Bienveillance.jpg" alt="">
                  <figcaption>Méditation de la bienveillance</figcaption>
                  <a href="https://www.youtube.com/watch?v=NDNF_DmepJ8">Voir la vidéo</a>
              </figure>
              
              <figure class="figure">
                  <img src="./imagesBienEtre/4rompreLiensToxiques.jpg" alt="">
                  <figcaption>Rompre les liens toxiques</figcaption>
                  <a href="https://www.youtube.com/watch?v=Y2yDk4wqEtc">Voir la vidéo</a>
              </figure>
              
              <figure class="figure">
                  <img src="./imagesBienEtre/5LacherPrise.jpg" alt="">
                  <figcaption>Lacher prise</figcaption>
                  <a href="https://www.youtube.com/watch?v=5bxBcbkSrtY">Voir la vidéo</a>
              </figure>
              
              <figure class="figure">
                  <img src="./imagesBienEtre/6compassionSoiMeme.jpg" alt="">
                  <figcaption>Compassion envers soi-même</figcaption>
                  <a href="https://www.youtube.com/watch?v=pQA-k1J6cJ4">Voir la vidéo</a>
              </figure>
              
              <figure class="figure">
                  <img src="./imagesBienEtre/7peur-liberer.jpg" alt="">
                  <figcaption>Faire face à ses peurs</figcaption>
                  <a href="https://www.youtube.com/watch?v=hU6hNVB2sP4">Voir la vidéo</a>
              </figure>
              
              <figure class="figure">
                  <img src="./imagesBienEtre/8huilesEssentielles.jpg" alt="">
                  <figcaption>8 huiles essentielles</figcaption>
                  <a href="https://www.eona-lab.com/blog/detente-et-huiles-essentielles/">Lire l'article</a>
              </figure>
              
              <figure class="figure">
                  <img src="./imagesBienEtre/9Ayurveda.jpeg" alt="">
                  <figcaption>Ayurveda</figcaption>
                  <a href="http://bouddhisme-universite.org/ayurveda/">Lire l'article</a>
              </figure>
              
              <figure class="figure">
                  <img src="./imagesBienEtre/10massage-main.jpg" alt="">
                  <figcaption>Auto-massage</figcaption>
                  <a href="https://www.elle.be/fr/18311-auto-massage-10-gestes-pour-etre-zen.html">Lire l'article</a>
              </figure>
          </div>
      </section>
      
      <section id="sectionthé">
          <h2 id="titrethe">Thé</h2>
          
          <div id="divsectionthe">
             <div class="flexthe">
                  <div class="divthe">
                    <img class="imagethe" src="./imagesBienEtre/the1.jpg" alt="">
                    <div class="overlaythe">
                        <div class="textethe">
                            <h5>Digestion</h5>
                            <p>cardamome, fenouil, coriandre, malt d'orge, réglisse, menthe poivrée, gingembre, cannelle, poivre noir, girofle </p>
                        </div>
                    </div>
                  </div>
                    <button>Acheter</button>
                </div>
                
                 <div class="flexthe">
                  <div class="divthe">
                    <img class="imagethe" src="./imagesBienEtre/the2.jpg" alt="">
                    <div class="overlaythe">
                        <div class="textethe">
                            <h5>Detox</h5>
                            <p>citronnelle, pissenlit, cannelle, gingembre, réglisse, zeste de citron, mélisse, menthe poivrée</p>
                        </div>
                    </div>
                  </div>
                    <button>Acheter</button>
                </div>
                
                <div class="flexthe">
                  <div class="divthe">
                    <img class="imagethe" src="./imagesBienEtre/the3.jpg" alt="">
                    <div class="overlaythe">
                        <div class="textethe">
                            <h5>Respiration</h5>
                            <p>eucalyptus, réglisse, gingembre, basilic, cardamome, cannelle, molène bouillon-blanc, luzerne, fenouil, thym, clous de girofle, poivre noir, vanille </p>
                        </div>
                    </div>
                  </div>
                    <button>Acheter</button>
                </div>
                
                <div class="flexthe">
                  <div class="divthe">
                    <img class="imagethe" src="./imagesBienEtre/the4.jpg" alt="">
                    <div class="overlaythe">
                        <div class="textethe">
                            <h5>Réconfort</h5>
                            <p>cannelle, zeste d'orange, gingembre, thym, molène bouillon-blanc, citron, cardamome, poivre noir, clous de girofle, curcuma</p>
                        </div>
                    </div>
                  </div>
                    <button>Acheter</button>
                </div>
                
                <div class="flexthe">
                  <div class="divthe">
                    <img class="imagethe" src="./imagesBienEtre/the5.jpg" alt="">
                    <div class="overlaythe">
                        <div class="textethe">
                            <h5>Joie</h5>
                            <p>basilic, réglisse, jus de citron séché, zeste d'orange, cannelle, gingembre, piment, cardamome, girofle*, poivre noir </p>
                        </div>
                    </div>
                  </div>
                    <button>Acheter</button>
                </div>
                
                <div class="flexthe">
                  <div class="divthe">
                    <img class="imagethe" src="./imagesBienEtre/the6.jpg" alt="">
                    <div class="overlaythe">
                        <div class="textethe">
                            <h5>Nuit</h5>
                            <p>fenouil, camomille, menthe poivrée, cardamome, mélisse, citronnelle, valériane, sauge, fleurs de lavande</p>
                        </div>
                    </div>
                  </div>
                    <button>Acheter</button>
                </div>
                
                <div class="flexthe">
                  <div class="divthe">
                    <img class="imagethe" src="./imagesBienEtre/the7.jpg" alt="">
                    <div class="overlaythe">
                        <div class="textethe">
                            <h5>Harmonie</h5>
                            <p>mélisse, rooibos, cannelle, écorces de cacao, basilic, menthe poivrée, camomille, romarin, poivre noir, fenouil, lavande </p>
                        </div>
                    </div>
                  </div>
                    <button>Acheter</button>
                </div>
                
                <div class="flexthe">
                  <div class="divthe">
                    <img class="imagethe" src="./imagesBienEtre/the8.jpg" alt="">
                    <div class="overlaythe">
                        <div class="textethe">
                            <h5>Equilibre</h5>
                            <p>citronnelle, mélisse, pissenlit, ortie, menthe, feuilles de framboisier, lavande, fenouil, carrote,tilleul</p>
                        </div>
                    </div>
                  </div>
                    <button>Acheter</button>
                </div>
                
                <div class="flexthe">
                  <div class="divthe">
                    <img class="imagethe" src="./imagesBienEtre/the9.jpg" alt="">
                    <div class="overlaythe">
                        <div class="textethe">
                            <h5>Energie</h5>
                            <p>thé vert, citronnelle, guarana, menthe poivrée, gingembre, fleurs de sureau, kombucha, bergamote, verveine </p>
                        </div>
                    </div>
                  </div>
                    <button>Acheter</button>
                </div>
                
                <div class="flexthe">
                  <div class="divthe">
                    <img class="imagethe" src="./imagesBienEtre/the10.jpg" alt="">
                    <div class="overlaythe">
                        <div class="textethe">
                            <h5>Eclat</h5>
                            <p>cannelle, sauge, origan, cardamome, citronnelle, gingembre, girofle, verveine, fenugrec, coriandre </p>
                        </div>
                    </div>
                  </div>
                    <button>Acheter</button>
                </div>







                


              
          </div>
      </section>
       
       <section id="sectionmusique">
          <h2 id="titremusique">Musique</h2>
          
          <div>
              <img class="imgmusique" src="./imagesBienEtre/musique1.png" alt="">
              <img class="imgmusique" src="./imagesBienEtre/musique2.png" alt="">
              <img class="imgmusique" src="./imagesBienEtre/musique3.png" alt="">
              <img class="imgmusique" src="./imagesBienEtre/musique4.png" alt="">
              <img class="imgmusique" src="./imagesBienEtre/musique5.png" alt="">
          </div>
      </section>
      </div>
   </main>
   
   
   <div id="pissenlit"><img src="./assets/pissenlitMauve.svg" alt="pissenlit">
    </div>
    
</body>
</html>