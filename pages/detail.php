<?php

require_once __DIR__ . '/../config/database.php';


$pokemon_id = $_GET['pokemon_id'] ?? 1;
$stmt = $connection->query("SELECT * FROM pokemon WHERE pokemon_id = $pokemon_id");
$pokemons = $stmt->fetchALL(PDO::FETCH_OBJ);

var_dump($pokemons);