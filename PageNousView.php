<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Wazaa Immo - Nous</title>
</head>
<body>

<body>
<h1>Notre histoire</h1>

<p>Fondé en 1999 à Amiens, Wazaa Immo est une agencie immobilière qui ne cesse de croître au fil des années.
Fondé en 1999 à Amiens, Wazaa Immo est une agencie immobilière qui ne cesse de croître au fil des années.  
Fondé en 1999 à Amiens, Wazaa Immo est une agencie immobilière qui ne cesse de croître au fil des années.
Fondé en 1999 à Amiens, Wazaa Immo est une agencie immobilière qui ne cesse de croître au fil des années.
Fondé en 1999 à Amiens, Wazaa Immo est une agencie immobilière qui ne cesse de croître au fil des années.</p>

<h1>Notre entreprise</h1>

<p>De nos jours, Wazaa Immo est une grande agence immobilière possédant des biens dans tout le pays.
De nos jours, Wazaa Immo est une grande agence immobilière possédant des biens dans tout le pays.
De nos jours, Wazaa Immo est une grande agence immobilière possédant des biens dans tout le pays.
De nos jours, Wazaa Immo est une grande agence immobilière possédant des biens dans tout le pays.
De nos jours, Wazaa Immo est une grande agence immobilière possédant des biens dans tout le pays.</p>


<h1>Notre effectif</h1>

<div class="row">
<div class="col-12"> 
<h4>Le dirigeant de l'entreprise</h4>   
<?php 
foreach ($liste_employes as $row) 
{if($row->emp_poste == "directeur"){
    echo "<p>".$row->emp_nom;
    echo "   ".$row->emp_prenom." </p>";}     
}
?>
</div>
</div>

<div class="row">
<div class="col-12"> 
<h4>Les secretaires de l'entreprise</h4>   
<?php 
foreach ($liste_employes as $row) 
{if($row->emp_poste == "secretaire"){
    echo "<p>".$row->emp_nom;
    echo "   ".$row->emp_prenom." </p>";}    
}
?>
</div>
</div>

<div class="row">
<div class="col-12"> 
<h4>Nos négociateurs</h4>   
<?php 
foreach ($liste_employes as $row) 
{if($row->emp_poste == "negociateur_immobilier"){
    echo "<p>".$row->emp_nom;
    echo "   ".$row->emp_prenom." </p>";}     
}
?>
</div>
</div>


</body>
</html>