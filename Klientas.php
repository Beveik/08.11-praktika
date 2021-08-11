<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // 1.Susikurti klasę "Klientas".
    // Kintamieji:vardas, pavarde, asmens kodas, prisijungimo data, adresas, elpastas.

    // Susikūrus klasę, sukurti masyvą, kuriame turi būti 200 kliento objektų Duomenis užpildyti savo nuožiūra.
    // Visą "Klientai" objektų masyvą atvaizduoti lentelėje <table>.
    class Klientai
    {
        //Klasė - šablonas
        public $vardas;
        public $pavarde;
        public $asmKodas;
        public $prisData;
        public $adresas;
        public $elPastas;


        function __construct($vardas, $pavarde, $asmKodas, $prisData, $adresas, $elPastas)
        {
            $this->vardas = $vardas;
            $this->pavarde = $pavarde;
            $this->asmKodas = $asmKodas;
            $this->prisData = $prisData;
            $this->adresas = $adresas;
            $this->elPastas = $elPastas;
        }
    }
    function sukuriameKlientus()
    {
        $klientai = array();
        for ($i = 0; $i < 200; $i++) {

            $vardas = "vardas" . ($i + 1);
            $pavarde = "pavarde" . ($i + 1);
            $asmKodas = rand(3, 6) . rand(0, 99) . rand(1, 12) . rand(1, 31) . rand(0, 9999);
            $prisData = rand(1950, 2021) . "-" . rand(1, 12) . "-" . rand(1, 31);
            $adresas = "adresas" . ($i + 1);
            $elPastas = $vardas . "@" . $pavarde . ".com";
            $klientuMasyvas = new Klientai($vardas, $pavarde, $asmKodas, $prisData, $adresas, $elPastas);
            array_push($klientai, $klientuMasyvas);
        }
        return $klientai;
    }
    $masyvas = sukuriameKlientus();
    // var_dump();
    function lentele($masyvas)
    {
        echo "<table>";
        foreach ($masyvas as $eilute) {
            echo "<tr>";
            foreach ($eilute as $stulpelis) {
                echo "<td>" . $stulpelis . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    lentele($masyvas);
    // var_dump($klientai);

    ?>
</body>

</html>