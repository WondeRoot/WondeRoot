<?php

$enigmes = [
1 => 'BA1 - GARROS', 'question' => '', 'reponse' => [],
2 => 'BA2 - BOUCHER', 'question' => '', 'reponse' =>[],
3 => 'BA3 - BASTIE', 'question' => '', 'reponse' =>[],
4 => 'BA4 - ST EXUPERY', 'question' => '', 'reponse' =>[],
5 => 'BA5 - MERMOZ', 'question' => '', 'reponse' => [],
6 => 'BA6 - BLERIOT', 'question' => '', 'reponse' =>[],
7 => 'BA7 - Ancienne loge gardien', 'question' => '', 'reponse' =>[],
8 => 'BA8 - Modulaires', 'question' => '', 'reponse' => [],
];

$id = (int) ($_GET['id'] ?? 0);
$enigme =  $enigmes['id'] ?? null;
