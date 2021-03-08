<?php
$arrImages = scandir('data/images');
unset($arrImages[0], $arrImages[1]);
include_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('index.tmpl');
    echo $template->render(array('images'=> $arrImages));

} catch (Exception $e) {
    echo $e->getMessage();
}


