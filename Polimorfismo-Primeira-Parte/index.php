<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Aula de Polimorfismo 1</title>
</head>
<body>

<pre>
    <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Cachorro.php';
        require_once 'Canguru.php';
        require_once 'Tartaruga.php';

        $mamifero = new Mamifero();
        $cachorro = new Cachorro();
        $canguru = new Canguru();
        $tartaruga = new Tartaruga();
        
        $mamifero->setPeso(50.0);
        $mamifero->setIdade(20);
        $mamifero->setMembros('Patas');
        
        $mamifero->locomover();
        $canguru->locomover();
        $cachorro->locomover();
        $tartaruga->locomover();

        //$mamifero->alimentar();
        //$mamifero->emitirSom();

        $cachorro->emitirSom();

    ?>
</pre>

</body>
</html>