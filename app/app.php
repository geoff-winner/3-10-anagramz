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
        $user_input3 = new Anagram;
        $user_input4 = new Anagram;
        $user_matches = $user_input->findAnagram($_GET['input_anagram'], $_GET['input_2']);
        $user_matches3 = $user_input3->findAnagram($_GET['input_anagram'], $_GET['input_3']);
        $user_matches4 = $user_input4->findAnagram($_GET['input_anagram'], $_GET['input_4']);
        $matches = array($user_matches, $user_matches3, $user_matches4);
        return $app['twig']->render('view_results.twig', array('anagram' => $matches));
    });

    return $app;

?>
