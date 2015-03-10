<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Anagram.php';

    $app = new Silex\Application();

    $app['debug']=TRUE;

    $app->register(new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views/'

    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');

    });

    $app->get("/view_results", function() use($app) {
        $user_input = new Anagram;
        $user_matches = $user_input->findAnagram($_GET['input_anagram'], $_GET['input_2']);
        return $app['twig']->render('view_results.twig', array('anagram' => $user_matches));
    });

    return $app;

?>
