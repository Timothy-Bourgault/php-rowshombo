<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Roshambo.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    session_start();

    if (empty($_SESSION['games_won'])) {
        $_SESSION['games_won'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.pat' => __DIR__.'/../views'));

    $app->get("/")
    return
?>
