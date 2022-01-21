<?php

include_once ('User.php');
include_once ('Article.php');

$dsn = "mysql:host=localhost;dbname=backend-avance-pdo";
$user = "root";
$pwd = "";
$pdo = new PDO($dsn, $user, $pwd);

$stm = $pdo->prepare('
    SELECT article.title, article.posted_at, article.content, user.lastname, user.firstname
    FROM article
    INNER JOIN user on user.id = article.author'
);
$stm->execute();
$articles = $stm->fetchAll(PDO::FETCH_CLASS, Article::class);

foreach ($articles as $article) {
    echo $article.'<br><hr><br>';
}


