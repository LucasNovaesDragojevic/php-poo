<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Aula de Polimorfismo 2</title>
</head>
<body>

<pre>
    <?php
        require_once 'Cachorro.php';

        $cachorro = new Cachorro();

        $cachorro->emitirSom();

        $cachorro->reagirFrase("Olá");
        $cachorro->reagirFrase("Vai apanhar");
        $cachorro->reagirHora(11);
        $cachorro->reagirHora(21);
        $cachorro->reagirDono(true);
        $cachorro->reagirDono(false);
        $cachorro->reagirIdadePeso(2, 12.5);
        $cachorro->reagirIdadePeso(17, 4.5);
    ?>
</pre>

</body>
</html>