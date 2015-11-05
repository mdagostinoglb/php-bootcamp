<?php
require 'vendor/autoload.php';

use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Parser;

$yaml = new Parser();

try {
    $array1 = $yaml->parse(file_get_contents('books.yml'));
} catch (ParseException $e) {
    echo ("Unable to parse the YAML string: %s" . $e->getMessage());
}

$loader = new Twig_Loader_Filesystem('templatefolder');
$twig = new Twig_Environment($loader);
echo $twig->render('template.html', $array1);