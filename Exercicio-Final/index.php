<!DOCTYPE html>
<html>
    <head>
        <title>Exercício Final PHP</title>
    </head>
    
    <body>
        <pre>
            <?php
                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                require_once 'Visualizacao.php';

                $video[0] = new Video ("Aula 1 de POO");
                //$video[1] = new Video ("Aula 100 de Python");

                $gafanhoto[0] = new Gafanhoto("Aderbal", 60, "M", "ade");
                //$gafanhoto[1] = new Gafanhoto("Antonieta", 50, "F", "nita");

                $visualizacao[0] = new Visualizacao($gafanhoto[0], $video[0]);
                $visualizacao[1] = new Visualizacao($gafanhoto[0], $video[0]);

                $visualizacao[0]->avaliar();
                $visualizacao[0]->avaliarPorcentagem(80);

                print_r($visualizacao);
            ?>
        </pre>
    </body>
</html>