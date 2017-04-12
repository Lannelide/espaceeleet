<!doctype html>
<html amp lang="en">
  <head>

    <meta charset="utf-8">
    <title>Accueil</title>
  <!--lien page desktop-->
    <link rel="canonical" href="http://example.ampproject.org/article-metadata.html" /> 
    <!--lien page nonAMP-->  
    <link rel="canonical" href="https://www.example.com/url/to/full/document.html">
  <!--lien page AMP à ajouter sur page non AMP--> 
 	  <link rel="amphtml" href="https://www.example.com/url/to/amp/document.html">
  <!--Inclut et charge la bibliothèque MENU SIDEBAR AMP JS-->  
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <!--inclut et charge la blibliothèque CAROUSEL AMP JS-->
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
  <!--inclut et charge la bibliothèque AMP JS-->
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>

<!--contenu indispensable pour AMP-->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
    <noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    
      
<!--CSS de la page AMP // Chaque page AMP peut intégrer une seule feuille de style uniquement-->
	<style amp-custom>
	  body{
	    margin: 0;
	  }

    #global{
      display: flex;
      flex-direction: column;
    }

	  header{
      padding:15px;
      height: 30px;
      text-align: center;
    }

    #typo{
      float: left;
    }
    button{
      float: right;
    }

    #actuPage
    {
      width:auto;
      height: 800px;
      border-radius: 1px solid black;
      background-color: yellow;
    }

    #formPage{
      background-image: url(image/pageForm.png);
      width:auto;
      height: 800px;
      text-align: center;
    }
    footer{
      background-color: rgb(203,199,113);
      display: flex;
      flex-wrap: nowrap;
      height: 60px;

    }
	</style>  
    
  </head>

  <!--Debut Body-->
  <body>
    <!--Debut section global-->
    <div id="global">
      <section id="firstpage">
        <header>
          <!--typo-->
          <amp-img id="typo" src="image/eleetGold1_resize.png" 
              width="30"
              height="30"
              alt="typographie eleet"></amp-img>
          <!--logo-->
          <amp-img id="logo" src="image/Eleet_size.png" 
              width="30"
              height="30"
              alt="logo eleet"></amp-img>
          <!--menu SIDEBAR-->
          <amp-sidebar id="sidebar"
              layout="nodisplay"
              side="right">
            <amp-img class="amp-close-image"
              src="/img/ic_close_black_18dp_2x.png"
              width="20"
              height="20"
              alt="close sidebar"
              on="tap:sidebar.close"
              role="button"
              tabindex="0"></amp-img>
            <ul>
              <li><a href="education.html">Education</a></li>
              <li><a href="environnement.html">Environnement</a></li>
              <li><a href="leadership.html">Leadership</a></li>
              <li><a href="actualite.html">Actus</a></li>
              <li><a href="formulaire.html">Nous rejoindre</a></li>
              <li><a href="contact.html">Nous Contactez</a></li>
            </ul>  
          </amp-sidebar>
          <!--button toggle sidebar amp-->
          <button on="tap:sidebar.toggle"
              class="ampstart-btn caps m2">&#9776;</button>
        </header>

        <!--carousel-->
        <amp-carousel 
          width="480"
          height="800"
          layout="responsive"
          type="slides">
              <amp-img src="image/slide1.png"
                  width="400"
                  height="300"
                  layout="responsive"
                  alt="image éducation"></amp-img>
              <amp-img src="image/slide2.png"
                  width="400"
                  height="300"
                  layout="responsive"
                  alt="image environnement"></amp-img>
              <amp-img src="image/slide3.png"
                  width="400"
                  height="300"
                  layout="responsive"
                  alt="image leadership"></amp-img>
              <amp-img src="image/slide4.png"
                  width="400"
                  height="300"
                  layout="responsive"
                  alt="image formulaire"></amp-img>
        </amp-carousel>
      <!--Fin de la page FirstPage-->
      </section>

      <!--Début page Actu-->
      <section id="ActuPage">
           <amp-img src="image/slide2.png"
                  width="480"
                  height="800"
                  layout="responsive"
                  alt="image environnement"></amp-img>
          <!--Debut Article 1 pour afficher donnée JSON-->
          <article id="articleone">
            <!--lien php pour recuperer donnée JSON-->
            <!--Fin article1-->
          </article>

          <!--Debut Article 2 pour afficher donnée JSON-->
          <article id="articletwo">
            <!--lien php pour recuperer donnée JSON-->
            <!--Fin article2-->
          </article>

     <!--Fin section Actupage-->   
      </section>

      <!--début formPage-->
      <section id="formPage">
        <!--Formulaire-->
          <form method="post" action-xhr="https://blog.niap3d.com/amp/form.php" target="_blank">
            <p><label>Nom :</label><br/><input type="text" name="name" value="" required></p>
            <p><label>Association :</label><br/><input type="text" name="name" value="" required></p>
            <p><label>Email :</label><br/><input type="text" name="name" value="" required></p>
            <p><label>Message:</label><br/><textarea></textarea></p>
            <p><label></label><input type="submit" value="Validez"></p>
            
            <div submit-success>
              <template type="amp-mustache">Le texte renvoyé par PHP : {{name}}</template>
            </div>
            <div submit-error>
              <template type="amp-mustache">Erreur !</template>
            </div>
          </form>

          <!--Footer-->
      <footer>
          <!--footer de gauche-->
          <div id="footerLeft">
            <ul>
              <li><a href=""></a> Haut de page</li>
              <li><a href="">Contactez-nous</a></li>
              <li><a href=""></a>Devenir volontaire</li>
              <li><a href=""></a>Partenaires</li>
            </ul>
            
          </div>

           <!--footer du centre-->
          <div id="footerCenter">
            <ul>
              <!--logo-->
              <li><amp-img id="logo" src="image/Eleet_size.png" 
              width="30"
              height="30"
              alt="logo eleet"></amp-img></li>
              <!--typo eleet noire-->
              <li><amp-img id="typo" src="image/eleetGold1_resize.png" 
              width="30"
              height="30"
              alt="typographie eleet"></amp-img></li>
              <li><li><amp-img id="iconfacebookgold.png" src="image/eleetGold1_resize.png" 
              width="30"
              height="30"
              alt="icon facebook or"></amp-img></li></li>
            </ul>
          </div>

           <!--footer de droite-->
          <div id="footerRight">
            <ul>
              <li><a href="">Accessiblité</a></li>
              <li><a href="">Plan du site</a></li>
              <li><a href="">Cookies</a></li>
              <li><a href=""></a>mentions Légales</li>
            </ul>            
          </div>
      <!--Fin du footer-->    
      </footer>    
        
      <!--Fin formPage-->
      </section>

    <!--Fin div globale-->
    </div>
  <!--Fin du body-->  
  </body>
</html>
