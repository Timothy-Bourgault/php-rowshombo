<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Rowshombo.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.pat' => __DIR__.'/../views'));
?>
