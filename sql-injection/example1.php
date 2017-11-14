<?php
$pdo = new PDO('mysql:host=mysql;dbname=seminar', 'root', 'root');
$stmt = $pdo->query('SELECT * FROM users WHERE id='.$_GET['id']);
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($arr);
