<?php
// 例：言語のプレースホルダ機能を使う
$pdo = new PDO('mysql:host=mysql;dbname=seminar', 'root', 'root');
$stmt = $pdo->prepare('SELECT * FROM users WHERE id=:id');
$stmt->execute(['id' => $_GET['id']]);
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($arr);
