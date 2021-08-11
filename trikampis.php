<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="trikampis.php" action="get">
        <input type="text" name="krastinea" value="5" />
        <input type="text" name="krastineb" value="3" />
        <input type="text" name="krastinec" value="7" />
        <button type="submit" name="skaiciuoti">Skaičiuoti</button>
    </form>
    <?php

    // 2. Susikurti klasę "Trikampis". Pagal klasę sukurti objektą.
    // Objektas turi priimti du kintamuosius: a, b, c kraštines.
    // Turi būti tikrinama ar trikampį galima sudaryti.
    // Sukurti metodus, kurie skaičiuoja plotą, perimetrą, pusperimetrį, bei kiekvieną iš trikampio kampų.
    // Informaciją išvesti į <p> žymę.
    class Trikampis
    {
        private $krastineA;
        private $krastineB;
        private $krastineC;
        function __construct($a, $b, $c)
        {
            $this->krastineA = $a;
            $this->krastineB = $b;
            $this->krastineC = $c;
            $this->tikrinimas();
        }

        private function tikrinimas()
        {

            if ($this->krastineA + $this->krastineB > $this->krastineC && $this->krastineB + $this->krastineC > $this->krastineA && $this->krastineA + $this->krastineC > $this->krastineB) {

                $this->perimetras();
                $this->pusperimetris();
                $this->plotas();
                $this->kampai();
            } else {
                echo "Tai ne trikampis.";
            }
        }
        private function pusperimetris()
        {


            $this->pusperimetris = (($this->krastineA + $this->krastineB + $this->krastineC) / 2);
            $this->pusperimetris = round($this->pusperimetris * 100) / 100;
            echo "<br>Pusperimetris: " . $this->pusperimetris;
        }
        private function perimetras()
        {

            $this->perimetras = ($this->krastineA + $this->krastineB + $this->krastineC);
            $this->perimetras = round($this->perimetras * 100) / 100;
            echo "<br>Perimetras: " . $this->perimetras;
        }
        private function plotas()
        {

            $this->pusPer = (($this->krastineA + $this->krastineB + $this->krastineC) / 2);
            $this->plotas = sqrt($this->pusPer * ($this->pusPer - $this->krastineA) * ($this->pusPer - $this->krastineB) * ($this->pusPer - $this->krastineC));
            $this->plotas = round($this->plotas * 100) / 100;
            echo "<br>Plotas: " . $this->plotas;
        }
        private function kampai()
        {
            $this->pi = pi();
            $this->kampasAlfa = ((acos((pow($this->krastineB, 2) + pow($this->krastineC, 2) - pow($this->krastineA, 2)) / (2 * $this->krastineB * $this->krastineC))) * (180 / $this->pi));
            $this->kampasAlfa = round($this->kampasAlfa * 100) / 100;
            $this->kampasBeta = (acos((pow($this->krastineA, 2) + pow($this->krastineC, 2) - pow($this->krastineB, 2)) / (2 * $this->krastineA * $this->krastineC))) * (180 / $this->pi);
            $this->kampasBeta = round($this->kampasBeta * 100) / 100;
            $this->kampasGama = (acos((pow($this->krastineA, 2) + pow($this->krastineB, 2) - pow($this->krastineC, 2)) / (2 * $this->krastineA * $this->krastineB))) * (180 / $this->pi);
            $this->kampasGama = round($this->kampasGama * 100) / 100;
            echo "<br>Kampas Alfa: " . $this->kampasAlfa . "<br>Kampas Beta: " . $this->kampasBeta . "<br>Kampas Gama: " . $this->kampasGama;
        }
    }
    if (isset($_GET["skaiciuoti"])) {

        if (isset($_GET["krastinea"]) && !empty($_GET["krastinea"]) && isset($_GET["krastineb"]) && !empty($_GET["krastineb"]) && isset($_GET["krastinec"]) && !empty($_GET["krastinec"])) {
            $krastineA = $_GET["krastinea"];
            $krastineB = $_GET["krastineb"];
            $krastineC = $_GET["krastinec"];

            $trikampis = new Trikampis($krastineA, $krastineB, $krastineC);
        } else {
            echo "<br>Įvedimo klaida.";
        }
    }


    ?>
</body>

</html>