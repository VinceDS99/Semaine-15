<?php

//page NOUS employés(poste + nom) + admin infos perso

defined('BASEPATH') OR exit('No direct script access allowed');


class EmployesController extends CI_Controller 

{

public function PageNous()
{
//afficher aide au debug
$this->output->enable_profiler(TRUE);

// Chargement de la librairie 'database'
$this->load->database(); 

$results = $this->db->query("SELECT * FROM waz_employes");  

// Récupération des résultats    
$aListe = $results->result();   

// Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
$aView["liste_employes"] = $aListe;

$this->load->view('PageNousView', $aView);

}

public function ListeEmployes()
{
//afficher aide au debug
$this->output->enable_profiler(TRUE);

// Chargement de la librairie 'database'
$this->load->database(); 

$results = $this->db->query("SELECT * FROM waz_employes");  

// Récupération des résultats    
$aListe = $results->result();   

// Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
$aView["liste_employes"] = $aListe;

$this->load->view('ListeEmployesView', $aView);

}










}


?>