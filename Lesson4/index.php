<?php

$pdo = new PDO('mysql:host=localhost;dbname=test_goods', 'root', 'root');

include_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

if ($_GET['m'] == null){
    $template = $twig->loadTemplate('index.tmpl');
    echo $template->render(array());

} elseif($_GET['m'] == 'getGoods') {
    $template = $twig->loadTemplate('good.tmpl');
    $stmt = $pdo->prepare('SELECT * FROM goods WHERE id > ? LIMIT 2');
    $goods = $stmt->execute([$_GET['c']]);
    foreach ($stmt as $good)
    {
        echo $template->render(array('good'=>$good));
    }

} else {
    echo "Ошибка GET параметра";
}

