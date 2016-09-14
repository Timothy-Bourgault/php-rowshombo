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

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));



    $app->get("/", function() use ($app) {
        return $app['twig']->render('game.html.twig');
    });

    $app->post("/view_game", function() use($app) {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        $new_game = new Game;
        $new_game->save();

        $match = $new_game->playGame($input1, $input2);

        return $app['twig']->render('game_results.html.twig', array('match' => $match, 'input1' => $input1, 'input2' => $input2));
    });
    return $app
?>
