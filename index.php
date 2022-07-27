<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ir JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

<!-- Duotas masyvas su žmonių vardais, amžiumi ir profesijomis. Reikia susikurti naują puslapį jau esamame mūsų serveryje ir atlikti šias užduotis:

1. Sukurti lentelę, kuri atvaizduoja žmonių informaciją pagal pavyzdį: https://ibb.co/PrZX3fW . Kaip ID stulpelį galime panaudoti einamojo masyvo elemento indeksą.
* https://getbootstrap.com/docs/5.0/content/tables/
* https://www.php.net/manual/en/control-structures.foreach.php

2. Pagal paskaitos medžiagą, sukurti formą, kuri leistų pridėti naujus žmones.
3. Patobulinti lentelės atvaizdavimą taip, kad būtų rodomi tik žmonės, kurių amžius yra virš 30 metų.
* https://www.php.net/manual/en/control-structures.if.php

4. Pridėti formą, kurioje bus vienas laukas “Amžius nuo”, kurią išsiuntus, lentelėje būtų rodomi žmonės nuo įvesto amžiaus. Pavyzdys: https://ibb.co/xsdMcTp . Atkreipkite dėmesį, kad po formos išsiuntimo, paskutinio įvesto amžiaus reikšmė lieka įvedimo lauke.
* https://www.php.net/manual/en/function.isset.php
* https://tutorials.supunkavinda.blog/php/loop-control-structures

5. BONUS: Pridėti mygtuką “Ištrinti” prie kiekvieno studento.
* https://www.php.net/manual/en/function.array-search.php
* https://www.w3docs.com/snippets/php/how-to-delete-an-element-from-an-array-in-php.html#using-the-unset-function-2 -->


    <div class="container">

    <?php

        $klientas1 = array(
            "nr" => 1,
            "vardas" => "Tadas",
            "amzius" => 23,
            "profesija" => "Studentas"
        );

        $klientas2 = array(
            "nr" => 2,
            "vardas" => "Jonas",
            "amzius" => 33,
            "profesija" => "Mechanikas"
        );
        $klientas3 = array(
            "nr" => 3,
            "vardas" => "Gabija",
            "amzius" => 27,
            "profesija" => "Buhalterė"
        );
        $klientas4 = array(
            "nr" => 4,
            "vardas" => "Tomas",
            "amzius" => 48,
            "profesija" => "Santechnikas"
        );
        $klientas5 = array(
            "nr" => 5,
            "vardas" => "Petras",
            "amzius" => 37,
            "profesija" => "Vadybininkas"
        );
        $klientas6 = array(
            "nr" => 6,
            "vardas" => "Ieva",
            "amzius" => 21,
            "profesija" => "Studentė"
        );
        $klientas7 = array(
            "nr" => 7,
            "vardas" => "Kęstutis",
            "amzius" => 30,
            "profesija" => "Programuotojas"
        );

        $klientai = [$klientas1, $klientas2, $klientas4, $klientas5, $klientas6, $klientas7];

        //$klientai = json_encode($klientai);

        //setcookie("klientai", $klientai, time() + 84600, "/");

       // var_dump($klientai);

       // setcookie("klientai", $klientai, time() + 84600, "/");
    ?>

    <div class="form col-lg-4">
    <form method="POST" action="index.php">
        <div class="mt-5 mb-2">
            <label class="form-label">Numeris</label>
            <input class="form-control col" name="numeris">
        </div>
        <div class="mb-2">
            <label class="form-label">Vardas</label>
            <input class="form-control col" name="vardas">
        </div>
        <div class="mb-2">
            <label class="form-label">Amžius</label>
            <input class="form-control col" name="amzius">
        </div>
        <div class="mb-2">
            <label class="form-label">Profesija</label>
            <input class="form-control col" name="profesija">
        </div>

        <button class="btn btn-primary mb-5" type="submit" name="patvirtinti">Įrašyti</button>
    </form>
    </div>

    <table class="table">
        <tr>
            <th>Nr.</th>
            <th>Vardas</th>
            <th>Amžius</th>
            <th>Profesija</th>
        </tr>
    <?php
    //$klientai = json_decode($_COOKIE["klientai"], true);
    
    foreach($klientai as $klientas) {
        echo "<tr>";
        echo "<td>".$klientas["nr"]."</td>";
        echo "<td>".$klientas["vardas"]."</td>";
        echo "<td>".$klientas["amzius"]."</td>";
        echo "<td>".$klientas["profesija"]."</td>";
        echo "</tr>";
     }
    ?>
    </table>

    </div>
</body>
</html>