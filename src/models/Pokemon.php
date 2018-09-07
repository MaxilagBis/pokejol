<?php
include __DIR__."/../../config/parameters.php";

function getPokemon()
{
  // Connection à la base de données
  try
  {
    $bdd = new PDO("mysql:host=".HOST.";dbname=".DATABASE.";charset=utf8", LOGIN, PASS); // constantes définies dans config/parameters.php
  }
  catch (Exception $e)
  {
    die("Erreur : ".$e->getMessage());
  }
  
  $req = $bdd->query("SELECT name FROM pokemon_species_names WHERE local_language_id = 5");

  return $req;
}
?>
