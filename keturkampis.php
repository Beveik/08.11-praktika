<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="keturkampis.php" action="get">
        <input type="text" name="krastinea" value="50" />
        <input type="text" name="krastineb" value="30" />
        <button type="submit" name="skaiciuoti">Skaičiuoti</button>
    </form>
    <?php

    // 3. Susikurti klasę "Keturkampis". Pagal klasę sukurti objektą.
    // Objektas turi priimti du kintamuosius: a ir b kraštines.
    // Sukurti metodus, kurie skaičiuoja kvadrato plotą, perimetrą, įstrižainės ilgį.
    // Informaciją išvesti į <p> žymę.

    // Papildoma: nubraižyti kvadratą(pikseliais) pagal a ir b kraštines. Kvadrato nubraižymas turi būti objekto metodas.
    class Keturkampis
    {
        private $krastineA;
        private $krastineB;

        function __construct($a, $b)
        {
            $this->krastineA = $a;
            $this->krastineB = $b; 
            $this->perimetras();
            $this->plotas();
            $this->istrizaine();
            $this->braizymas();
        }

        private function perimetras()
        {

            $this->perimetras = ($this->krastineA + $this->krastineB) * 2;
            echo "<br>Perimetras: " . $this->perimetras;
        }
        private function plotas()
        {


            $this->plotas = $this->krastineA * $this->krastineB;
            $this->plotas = round($this->plotas * 100) / 100;
            echo "<br>Plotas: " . $this->plotas;
        }
        private function istrizaine()
        {
            $this->istrizaine = sqrt($this->krastineA * $this->krastineA + $this->krastineB * $this->krastineB);
            $this->istrizaine = round($this->istrizaine * 100) / 100;
            echo "<br>Įstrižainė: " . $this->istrizaine;
        }
        private function braizymas()
        {
            echo "<br>Jūsų keturkampis atrodo taip:";
            echo "<div class='braizymas' ";
            echo "style='height:" . $this->krastineB . "px; width:" . $this->krastineA . "px;";
            echo "background:green' ></div>";
        }
    }
    if (isset($_GET["skaiciuoti"])) {

        if (isset($_GET["krastinea"]) && !empty($_GET["krastinea"]) && isset($_GET["krastineb"]) && !empty($_GET["krastineb"])) {
            $krastineA = $_GET["krastinea"];
            $krastineB = $_GET["krastineb"];

            $keturkampis = new Keturkampis($krastineA, $krastineB);
        } else {
            echo "<br>Įvedimo klaida.";
        }
    }


    ?>
</body>

</html>