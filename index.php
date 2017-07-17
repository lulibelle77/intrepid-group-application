<?php
use IntrepidGroup\SampleApplication\Repository\StaticBookRepository;

require_once __DIR__.'/vendor/autoload.php';

// Fetch the collection of books
$bookRepository = new StaticBookRepository();
$books = $bookRepository->fetchAll();

// Render the homepage
$twig = new Twig_Environment(new Twig_Loader_Filesystem(__DIR__.'/src/templates'));
$lexer = new Twig_Lexer($twig, array(
    'tag_variable' => array('${', '}') //to render twig data do ${ book.title }
));
$twig->setLexer($lexer);

$twig->display('homepage.twig');