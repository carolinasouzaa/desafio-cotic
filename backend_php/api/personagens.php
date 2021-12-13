<?php
require "../classes/Personagem.php";

header("Content-type: application/json");
echo json_encode(Personagem::obterTodos());
?>