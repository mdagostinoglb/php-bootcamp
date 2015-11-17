
<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Yaml\Parser;

$yaml = new Parser();

try 
{
    $array = $yaml->parse(file_get_contents('books.yml'));
} 
catch (ParseException $e) 
{
    printf("Unable to parse the YAML string: %s", $e->getMessage());
}
$loader= new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, $array);
echo $twig->render('template1.html', $array);

?>