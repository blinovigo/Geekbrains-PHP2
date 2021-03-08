<?php
if (isset($_GET['img'])) {
    $image = 'data/images/' . $_GET['img'];
} else
    header('Location: index.php');

include_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('full-size.tmpl');
    echo $template->render(array('image'=> $image));

} catch (Exception $e) {
    echo $e->getMessage();
}
