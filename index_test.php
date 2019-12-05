<!DOCTYPE html>
<html>
    <head>
    <title>CV Babacar</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
        
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="60">

      
    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
        <a class="navbar-brand" href="#"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <i class="fas fa-bars fa-lg"></i>
        </button>
        
        <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
            <ul class="nav nav-pills navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#about">Moi</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Compétences</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Expérience</a></li>
                <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#recommandations">Recommandations</a></li>
            </ul>
        </div>
    </nav>

    <section id="about" class="container-fluid">
        <div class="col-8 col-lg-4 profile-picture">
            <img src="images/me.jpg" alt="John" class="rounded-circle">
        </div>
        <div class="heading">
                <h1>Hello, c'est moi John</h1>
                <h3>Développeur Web</h3>
                <a href="docs/CV_JOHN.pdf" class="button1">Télécharger CV</a>
        </div>
    </section>

          <section id="skills">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Compétences</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <h5>HTML 85%</h5>
                            </div>
                        </div>
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <h5>CSS 85%</h5>
                            </div>
                        </div>
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <h5>JAVASCRIPT 90%</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <h5>JQUERY 85%</h5>
                            </div>
                        </div>
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <h5>BOOTSTRAP 80%</h5>
                            </div>
                        </div>
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                <h5>ANGULAR 75%</h5>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>

        <section id="experience">
        
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Expérience Professionelle</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>GOOGLE</h3>
                                    <h4>Développeur Web Sénior</h4>
                                    <p class="text-muted"><small class="fas fa-clock"></small> 2013-2015</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Ajout de la possibilité d'écouter une traduction dans Google Translate</p>
                                    <p>Développement de Google Suggest en mode Offline</p>
                                    <p>Nouveau design du player de Youtube adapté au mobile</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>FACEBOOK</h3>
                                    <h4>Développeur Web</h4>
                                    <p class="text-muted"><small class="fas fa-clock"></small> 2010-2013</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Développement du bouton Share pour les applis Web mobile</p>
                                    <p>Lancement automatique des vidéos en mode Mute depuis la Timeline</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>TWITTER</h3>
                                    <h4>Développeur Web Junior</h4>
                                    <p class="text-muted"><small class="fas fa-clock"></small> 2007-2010</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Création et Développement du Retweet pour l'appli Web</p>
                                    <p>Intégration des vidéos sur les applis web mobile</p>
                                </div>
                            </div>
                        </div>
                    </li>
                
                </ul>
            </div>
            
        </section>
      
      <section id="education">
            <div class="container">
                 <div class="red-divider"></div>
                <div class="heading">
                    <h2>Education</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="education-block">
                            <h5>2002 - 2006</h5>
                            <span class="fas fa-graduation-cap"></span>
                            <h3>École Polytechnique - Paris</h3>
                            <h4>Diplôme d'ingénieur informatique</h4>
                            <div class="red-divider"></div>
                            <p>Intelligence Artificielle</p>
                            <p>Système d'informations</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                         <div class="education-block">
                            <h5>2007</h5>
                            <span class="fas fa-graduation-cap"></span>
                            <h3>Apprendre-a-coder.com</h3>
                            <h4>Formation online "Développeur Web"</h4>
                            <div class="red-divider"></div>
                            <p>HTML/CSS, Javascript, JQuery</p>
                            <p>Responsive Design</p>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        
      
        <section id="portfolio">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="http://www.facebook.com" target="_blank">
                            <img class="img-thumbnail" src="images/facebook_share.png" alt="facebook share">
                        </a>
                    </div>
                     <div class="col-md-4">
                        <a href="http://www.google.com" target="_blank">
                            <img class="img-thumbnail" src="images/google_translate.png" alt="google translate">
                        </a>
                    </div>
                     <div class="col-md-4">
                        <a href="http://www.twitter.com" target="_blank">
                            <img class="img-thumbnail" src="images/twitter_video.png" alt="twitter video">
                        </a>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-4">
                        <a href="http://www.google.com" target="_blank">
                            <img class="img-thumbnail" 
                           src="images/youtube.png" alt="youtube">
                        </a>
                    </div>
                     <div class="col-md-4">
                        <a href="http://www.twitter.com" target="_blank">
                            <img class="img-thumbnail" src="images/twitter_retweet.png" alt="twitter retweet">
                        </a>
                    </div>
                     <div class="col-md-4">
                        <a href="http://www.facebook.com" target="_blank">
                            <img class="img-thumbnail" src="images/facebook_video.png" alt="facebook video">
                        </a>
                    </div>
                </div>
            
            </div>
            
        </section>
      
      
       <section id="recommandations">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>Recommandations</h2>
                </div>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <ol class="carousel-indicators">
                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                         <li data-target="#myCarousel" data-slide-to="1"></li>
                         <li data-target="#myCarousel" data-slide-to="2"></li>  
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <h3>"John t'es le meilleur! Merci pour tout..."</h3>
                            <h4>Larry Page, Google Co-Founder</h4>       
                        </div>
                          <div class="carousel-item">
                            <h3>"L'esprit le plus créatif que j'ai vu de toute ma vie..."</h3>
                            <h4>Jack Dorsey, Twitter Founder and CEO</h4>       
                        </div>
                          <div class="carousel-item">
                            <h3>"Merci John de m'avoir appris à coder... Tout ça c'est grâce à toi!"</h3>
                            <h4>Mark Zuckerberg, Facebook Founder and CEO</h4>       
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev" role="button">
                        <span class="fas fa-chevron-left fa-2x"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next" role="button">
                        <span class="fas fa-chevron-right fa-2x"></span>
                    </a>
                
                </div>
            
            </div>
        
        
        </section>

    
        <footer class="text-center">
            <a href="#about">
                <span class="fas fa-chevron-up"></span>
            </a>
            <h5>© APPRENDRE-A-CODER.COM</h5>
        </footer>
      
  </body>
    
</html> 