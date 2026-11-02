<?php

require_once __DIR__ . '/../config/database.php';


$pokemon_id = $_GET['pokemon_id'];

$stmt = $connection->query("SELECT * FROM pokemon WHERE pokemon_id = $pokemon_id");

$pokemons = $stmt->fetchALL(PDO::FETCH_OBJ);
$pokemon = $pokemons[0];

echo "
<h2>{$pokemon->pokemon_nom}</h2>
<img src='{$pokemon->pokemon_img}' width='200' alt='{$pokemon->pokemon_nom}'>
<p>Poids : {$pokemon->pokemon_poids} kg</p>
<p>Taille : {$pokemon->pokemon_taille} m</p>
<p>Description : {$pokemon->pokemon_description}</p>
";