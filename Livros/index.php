<!DOCTYPE html>
<html>
    <head>
        <title>Aula Prática 9</title>
    </head>
    
    <body>
        <pre>
            <?php

            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $pessoa[0] = new Pessoa("Rodrigo",33,"Masculino");
            $pessoa[1] = new Pessoa("Margarete", 60,"Feminino");

            $livro[0] = new Livro("PHP Básico", "José da Silva", 300, $pessoa[0]);
            $livro[1] = new Livro("POO com PHP", "Maria de Souza", 500, $pessoa[0]);
            $livro[2] = new Livro("PHP Avançao", "Ana Paula", 800, $pessoa[1]);

            $livro[0]->avancarPag();
            $livro[1]->abrir();
            $livro[1]->folhear(30);
            $livro[2]->folhear(800);

            $livro[0]->detalhes();
            $livro[1]->detalhes();
            $livro[2]->detalhes();

            ?>
        </pre>
    </body>
</html>