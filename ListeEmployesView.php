<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Wazaa Immo - Liste Employes</title>
</head>
<body>

<body>

<h1>Liste des employés de l'entreprise :</h1>

<div class="row">
<div class="col-12"> 
<h4>Le dirigeant de l'entreprise</h4>   
<?php 
foreach ($liste_employes as $row) 
{if($row->emp_poste == "directeur"){
    echo "<p>".$row->emp_id;
    echo "   ".$row->emp_nom;
    echo "   ".$row->emp_prenom;
    echo "   ".$row->emp_adresse;
    echo "   ".$row->emp_tel;
    echo "   ".$row->emp_mail;
    echo "   ".$row->emp_mdp." </p>";}     
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
    echo "<p>".$row->emp_id;
    echo "   ".$row->emp_nom;
    echo "   ".$row->emp_prenom;
    echo "   ".$row->emp_adresse;
    echo "   ".$row->emp_tel;
    echo "   ".$row->emp_mail;
    echo "   ".$row->emp_mdp." </p>";}     
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
    echo "<p>".$row->emp_id;
    echo "   ".$row->emp_nom;
    echo "   ".$row->emp_prenom;
    echo "   ".$row->emp_adresse;
    echo "   ".$row->emp_tel;
    echo "   ".$row->emp_mail;
    echo "   ".$row->emp_mdp." </p>";}     
}
?>
</div>
</div>


</body>
</html>