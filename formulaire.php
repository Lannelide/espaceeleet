<?php
// on définit les entêtes HTTP
// Le retour doit être fait au format JSON.
header('Content-Type: application/json');
// Vous devez préciser la source du fichier.
header('Access-Control-Allow-Origin: https://'.$_SERVER['HTTP_HOST']);
// Vous devez préciser s'il faut donner une réponse si le tag credentials est vrai.
header('Access-Control-Allow-Credentials: true');
// Vous devez définir une liste blanche d'entêtes autorisées. Ici une entête exigée par AMP.
header('Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin');
// Vous devez préciser la source du fichier pour l'entête AMP.
header('AMP-Access-Control-Allow-Source-Origin: https://'.$_SERVER['HTTP_HOST']);

// on peut traiter les données $_POST
$data = array();
$data['name'] = $_POST['name'];

// pour finir on renvoi le résultat au format JSON
echo json_encode($data);



?><!doctype html>
<html amp lang="fr">
<head>
    <title>Test formulaire AMP</title>
  <meta charset="utf-8" />
  <!--inclut et charge la bibliothèque AMP JS-->
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <link rel="canonical" href="/test_amp.html">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
  <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js"></script>
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
</head>
<body>
<form method="post" action-xhr="https://blog.niap3d.com/amp/form.php" target="_blank">
  <p><label for="email">Un texte : </label><input type="text" name="name" value="" required></p>
  <p><label> </label><input type="submit" value="Envoyer"></p>
  
  <div submit-success>
    <template type="amp-mustache">Le texte renvoyé par PHP : {{name}}</template>
  </div>
  <div submit-error>
    <template type="amp-mustache">Erreur !</template>
  </div>
</form>
</body>
</html>