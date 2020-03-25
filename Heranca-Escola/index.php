<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Aula de Herança 2</title>
</head>
<body>

<pre>
    <?php
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        $visitante = new Visitante();

        $visitante->setNome('Juvenal');
        $visitante->setIdade(30);
        $visitante->setSexo('M');

        $aluno = new Aluno();
        $aluno->setNome('Pedro');
        $aluno->setMatricula(1234);
        $aluno->setIdade(13);
        $aluno->setSexo('M');
        $aluno->setCurso('Informática');
        $aluno->pagarMensalidade();

        $bolsista = new Bolsista();

        $bolsista->setMatricula(1134);
        $bolsista->setNome('Jubileu');
        $bolsista->setBolsa(12.5);
        $bolsista->setCurso('Administracao');
        $bolsista->setIdade(17);
        $bolsista->pagarMensalidade();
        
        print_r ($aluno);
        print_r ($bolsista);
        print_r ($visitante);
    ?>
</pre>

</body>
</html>