<html>
    <head>
        <style>
            .books{
                width:600;
                background-color: #F00;
                padding:10px;
            }
            .book{
                background-color: #00F;
                margin:10px;
                padding:10px;
                color:#FFF;
            }
        </style>
    </head>
</html>
<?php
    /*YAML*/
    require 'vendor/autoload.php';
    use Symfony\Component\Yaml\Yaml;
    $array = Yaml::parse(file_get_contents('views/books.yml'));
	
    /*TWIG*/
    $loader= new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader);
    $a=count($array['books']);
    echo $twig->render('books.html', $array);
?>
