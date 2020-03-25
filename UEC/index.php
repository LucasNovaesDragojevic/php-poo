<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UEC</title>
</head>
<body>
    <?php
        require_once "Lutador.php";
        require_once "Luta.php";

        $lutadores = array();

        $lutadores[0] = new Lutador ("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
        $lutadores[1] = new Lutador ("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $lutadores[2] = new Lutador ("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $lutadores[3] = new Lutador ("Dead code", "Austrália", 28, 1.93,  80.9, 13, 0, 2);
        $lutadores[4] = new Lutador ("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $lutadores[5] = new Lutador ("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

        $uec01 = new Luta();
        $uec01->marcarLuta($lutadores[0], $lutadores[1]);
        $uec01->lutar();

        $lutadores[0]->status();
        $lutadores[1]->status();
    ?>
</body>
</html>