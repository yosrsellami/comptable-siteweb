<?php
 include('contactdb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="try.css"/>
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap-grid.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.js"></script>

</head>
<body>
<!-- Topbar Start -->
        <div class="container-fluid py-2 border-bottom d-none d-lg-block">
            <div class="container">
                <div class="projet">
                    <div class="col-md-9 text-center text-lg-start mb-2 mb-lg-0">
                        <div class="d-inline-flex align-items-center">
                            <h3 >vous avez un projet </h3>
                            <a class="text-decoration-none text-body pe-3" href="" style="margin-left: 10px;"><i class="bi bi-telephone me-2"></i>+216 97 467 144</a>
                            <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i> imenmestiri2020rne@gmail.com</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><br>
        <!-- Topbar End -->
        <header class="container-fluid">
        
         <style>
        .navbar {
  background-color: #f2f2f2;

}

.logo img {
  display: inline-block;
    margin-right: 5px;
    width: 170px;
    height: 80px;
}

.navbar-span {
  font-weight: bold;
  margin: 0 10px;
  margin-top: 25px;
  font-size: 19px;
  
}
.links {
  margin-left: 475px;
  font-size: 20px;
  padding-block: 10px;
  
  margin-top: 15px;
  z-index: 1;
  text-decoration: none;
  padding: 10px;
  
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropbtn {
  background-color: #f2f2f2;
  color: #0077b6;
  font-size: 20px;
  border: none;
  cursor: pointer;
  padding: 10px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
 
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}



.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #ddd;
}
</style>

<nav class="navbar">
  <div class="logo">
    <img src="img/logo cim.png" alt="Logo">
  </div>
  <span class="navbar-span">Cabinet Imen Mestiri</span>
  <div class="links">
  <a  style="color: #0077b6;"     href="index.php">accueil</a>
  <a   style="color: #0077b6"    href="service1.html">services</a>
  <a    style="color: #0077b6"    href="contact.html">contact</a>
  <div class="dropdown">
    <a class="dropbtn">s'inscrie</a>
    <div class="dropdown-content">
      <a href="signup.php">Utilisateur</a>
      <a href="signupA.php">Comptable</a>
     
    </div>
  </div>
  <div class="dropdown">
    <a class="dropbtn">connecter</a>
    <div class="dropdown-content">
      <a href="connecterU.php">Utilisateur</a>
      <a href="connecter.php">Comptable</a>
     
    </div>
  </div>
</div>
</nav>

        
    </header><br><br><br>
      <div class="container">
        <div id="slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item ">
              <div class="row" style="margin-left: 25px;">
                <div class="col-sm-4  " style="margin-top: 90px;">
                  <div style="margin-left: 2px;margin-top: -75px; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                    <h1 style="color:#FE6E00 "  >Cabinet Imen Mestiri</h1><br>
                    <p style="font-size: 25px; width:450px; margin-right: 275px;" >Imen Mestiri est un cabinet de commissariat aux comptes spécialisé dans l'audit financier et la certification des comptes <br> une commissaire aux comptes expérimentée et passionnée par son métier<br> le cabinet s'engage à offrir des services d'audit de haute qualité et à accompagner ses clients dans la sécurisation de leurs informations financières</p>
                  </div>
                </div>
                <div class="col-sm-8  "  >
                  <img class="rounded" src="img/ta imen.jpg" alt="Cabinet Imen Mestiri Image" style="width: 690px ; height: 450px; margin-left: 75px;">
                </div>
              </div>
            </div>
      
            
            
        </div>
     </div>
     </div><br><br>
    <section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="img/img1.jpg"/>
                </div><br>
                <div class="f-text">
                    <h4>déclaration fiscales et sociales  </h4><br>
                    <p>  assurer le respect des obligations légales  <br>et réglementaires d'une entreprise en matière de fiscalité et de sécurité sociale</p>
                    
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="img/audit.jpg"/>
                </div><br>
                <div class="f-text">
                    <h4>accompagnement aux investisseurs</h4><br>
                    <p>réalise un audit légal des comptes pour s'assurer de leur conformité  <br>aux dispositions légales et réglementaires</p>
                    
                </div>
            </div>
            <div class="feature-box" style="height: 350px; width: 300px;">
                <div class="f-img">
                    <img src="img/img3.webp"/>
                </div><br>
                <div class="f-text">
                    <h4>commissariat aux comptes</h4><br>
                    <p>évalue l'efficacité des systèmes de contrôle interne de l'entité <br>et peut recommander des améliorations</p>
                   
                </div>
            </div>
        </div>
        
      <div class="feature-container">
            <div class="feature-box">
              <div class="f-img">
                  <img src="img/apports.webp"/>
              </div><br>
              <div class="f-text">
                  <h4>commissariat aux apports</h4><br>
                  <p>évalue l'efficacité des systèmes de contrôle interne de l'entité <br>et peut recommander des améliorations</p>
                 
              </div>
            </div>
          
          <div class="feature-box">
            <div class="f-img">
                <img src="img/tenue comptable.jpg"/>
            </div><br>
            <div class="f-text">
                <h4>tenue comptable</h4><br>
                <p>évalue l'efficacité des systèmes de contrôle interne de l'entité <br>et peut recommander des améliorations</p>
               
            </div>
        </div>
        <div class="feature-box">
          <div class="f-img">
              <img src="img/societe.jpg"/>
          </div><br>
          <div class="f-text">
              <h4>constitution des sociétés</h4><br>
              <p>évalue l'efficacité des systèmes de contrôle interne de l'entité <br>et peut recommander des améliorations</p>
             
          </div>
      </div><br><br>
           
        </div>
         
    </div>
  </div>
  </section>
    
    <section class="about" style="margin-top: -200px;">
        <div class="about-img">
            <img src="img/ctt2.jpg">
        </div>
      
        <div class="about-text" style="margin-right: 50px;">
            <h2> l'expert comptable Imen Mestiri est un memebre de la  Compagnie des comptables de tunisie </h2>
            <p style="margin-top:15px">la compagnie des comptables de tunisie administrer la compagnie et assurer la gestion de son patrimoine ainsi que le fonctionnement normal des instances instituées auprès d’elle<br>
              représenter la compagnie auprès des pouvoirs publics et des diverses structures en relation avec la profession<br>
              assurer la défense des intérêts moraux, de l’honneur et de l’indépendance de la profession</p><br>
              <button type="button" class="btn btn-danger">
              <h3><a href="https://www.cct.tn/">Voir</a></h3>
            </button>
            
        </div>
    </section>

      <div class="blog-section" >
        <div class="section-content-blog">
          <div class="title">
            <h2>actualités</h2>
          </div>
          <div class="cards">
            <div class="card">
              <div class="image-section">
                <img src="img/loi finace.jpg">
              </div>
              <div class="article">
                <h4>la loi de finanace 2023</h4>
                <p>La Loi de Finances pour 2023 vient d’être promulguée et il est essentiel pour toute entreprise de connaître les grandes lignes</p>
              </div>
               <div class="blog-view">
                <a href="https://paie-tunisie.com/412/fr/319/publications/projet-de-la-loi-de-finances-2023-en-tunisie" class="button">voir</a>
               </div>
            </div>
            <div class="card">
              <div class="image-section">
                <img src="img/invess.jpg" >
              </div>
              <div class="article">
                <h4>la loi de l'investissement 2023</h4>
                <p>L'investisseur doit respecter la législation en vigueur relative notamment à la concurrence, la transparence, la santé, le travail, la sécurité sociale</p>
              </div>
               <div class="blog-view">
                <a href="http://www.tunisieindustrie.nat.tn/fr/doc.asp?mcat=12&mrub=212" class="button">voir</a>
               </div>
            </div>
            <div class="card">
              <div class="image-section">
                <img src="img/droit.jpg" >
              </div>
              <div class="article">
                <h4>les droits juridiques</h4>
                <p>revues droits & sciences juridiques</p>
              </div>
               <div class="blog-view">
                <a href="https://www.jurisitetunisie.com/" class="button">voir</a>
               </div>
            </div>
            <div class="card">
              <div class="image-section">
                <img src="img/declaration.jpg" >
              </div>
              <div class="article">
                <h4>les principales déclarations fiscales en tunisie</h4>
                <p>Chaque personne physique ou entreprise contribuable doit faire des déclarations fiscales en Tunisie</p>
              </div>
               <div class="blog-view">
                <a href="https://www.cap.com.tn/quelles-sont-les-principales-declarations-fiscales-en-tunisie/" class="button">voir</a>
               </div>
            </div>
            <div class="card">
              <div class="image-section">
                <img src="img/constitution.webp" >
              </div>
              <div class="article">
                <h4>constitution des sociétés</h4>
                <p>Constitution juridique des sociétés · Documents utiles à la création d'entreprise <br> Attestations de dépôt de déclaration d'un projet</p>
              </div>
               <div class="blog-view">
                <a href="http://www.tunisieindustrie.nat.tn/fr/doc.asp?mcat=16&mrub=186&msrub=269" class="button">voir</a>
               </div>
            </div>
            <div class="card">
              <div class="image-section">
                <img src="img/bct.png" >
              </div>
              <div class="article">
                <h4>BCT:etat financier</h4>
                <p>Etats financiers de la BCT · Etats financiers de la Banque Centrale de Tunisie</p>
              </div>
               <div class="blog-view">
                <a href="https://www.bct.gov.tn/bct/siteprod/page.jsp?id=209" class="button">voir</a>
               </div>
            </div>
          </div>
        </div>
      </div>
     
       



    <footer class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
           
        </div>
        <form action="contactdb.php" method="post">
            <input type="text" name="name" placeholder="votre nom"/>
            <input type="email" name="email" placeholder="votre email"/>
            <textarea name="message" placeholder="ecrire votre message ici "></textarea>
            <button class="main-btn contact-btn" type="submit" name="submit">Continue</button>
        </form>
    </footer>
    <!-- Footer Start -->
    <footer>
        <div class="content-footer">
          <div class="bloc footer-services">
            <h3>Services</h3>
            <ul class="services-list">
              <li><a >constitution des sociétés</a></li>
              <li><a >tenue comptable</a></li>
              <li><a >elaboration des états financiers</a></li>
              <li><a >déclaration fiscales et sociales</a></li>
              <li><a >accompagnement aux investisseurs </a></li>
              <li><a >commissariat aux comptes </a></li>
              <li><a >commissariat aux apports² </a></li>
            </ul>
          </div>
  
          <div class="bloc footer-contact">
            <h3>contact </h3>
            <p>+216 97 467 144</p>
            <p>73 273 534</p>
            <p>imenmestiri2020rne@gmail.com</p>
            <p>avenue la perle du sahel immeuble gahbiche khzema est sousse</p>
          </div>
  
          <div class="bloc footer-schedule">
            <h3>horaire</h3>
            <ul class="schedule-list">
              <li>✔️ lun 8:30->13/14->17.30</li>
              <li>✔️ mar 8:30->13/14->17.30</li>
              <li>✔️ mer 8:30->13/14->17.30</li>
              <li>✔️ jeu 8:30->13/14->17.30</li>
              <li>✔️ ven 8:30->13/14->17.30</li>
              <li>✔️ sam 8:30->14</li>
              <li>❌  dim fermée</li>
            </ul>
          </div>
          <div class=" container-fluid  d-flex justify-content-center"  >
        <h1 style="color: #6EB1D6;  font-size: 25px;" >des liens utils</h1><br>
         <ul style="margin-left: -150px; margin-top:25px"><br><br><br>
          <li><a href="http://www.tunisieindustrie.nat.tn/fr/home.asp">APII</a></li><br>
          <li><a href="http://www.finances.gov.tn/fr">ministere des finances</a></li><br>
          <li><a href="https://www.douane.gov.tn/">la douane tunisienne</a></li><br>
          <li><a href="http://www.cepex.nat.tn/content/accueil">CEPEX</a></li><br>
          <li><a href="https://www.ontt.tn/ar">ONTT</a></li><br>
         </ul>
      </div><br><br>
      </footer>
    <!-- Footer End -->
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   
 
</body>
</html>