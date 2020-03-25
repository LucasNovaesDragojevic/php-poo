<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Aula de Herança 1</title>
</head>
<body>

<pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $pessoa = new Pessoa();
        $aluno = new Aluno();
        $professor = new Professor();
        $funcionario = new Funcionario();

        $pessoa->setNome("Pedro");
        $aluno->setNome("Maria");
        $professor->setNome("Cláudio");
        $funcionario->setNome("Fabiana");

        $pessoa->setSexo("M");
        $funcionario->setSexo("F");

        $aluno->setCurso("Informática");
        $professor->setSalario(2500.75);
        $funcionario->setSetor("Estoque");

        $professor->receberAumento(1000);
        $funcionario->mudarTrabalho();
        $aluno->cancelarMatricula();

        print_r($pessoa);
        print_r($aluno);
        print_r($professor);
        print_r($funcionario);
    ?>
</pre>

</body>
</html>