<?php
// SNACK 1
$partite = [
    [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantu',
        'punti_casa' => 55,
        'punti_ospite' => 60
    ],
    [
        'squadra_casa' => 'Virtus Bologna',
        'squadra_ospite' => 'Fortitudo Bologna',
        'punti_casa' => 72,
        'punti_ospite' => 68
    ],
    [
        'squadra_casa' => 'Reyer Venezia',
        'squadra_ospite' => 'Dinamo Sassari',
        'punti_casa' => 75,
        'punti_ospite' => 80
    ],
    [
        'squadra_casa' => 'Los Angeles Lakers',
        'squadra_ospite' => 'Chicago Bulls',
        'punti_casa' => 93,
        'punti_ospite' => 103
    ],
    [
        'squadra_casa' => 'Boston Celtics',
        'squadra_ospite' => 'Philadelphia 76ers',
        'punti_casa' => 78,
        'punti_ospite' => 98
    ],
];

// SNACK 2
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

// SNACK BONUS
$paragrafo = "Questo è un esempio di paragrafo. Esso contiene diverse frasi che saranno suddivise in paragrafi separati. Ogni punto segna l'inizio di un nuovo paragrafo. Quindi, ci saranno tanti paragrafi quanti sono i punti presenti nel testo.";
$paragrafi = explode(".", $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP SNACKS</title>
</head>
<body>
    <h1 class="text-center text-primary">PHP SNACKS</h1>
    <!-- SNACK 1-->
    <div class="container text-center mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="text-bg-danger p-3">SNACK 1</h2>
                <main>
                    <ul>
                        <?php
                        foreach ($partite as $partita) {
                            echo "<li>{$partita["squadra_casa"]} - {$partita["squadra_ospite"]} | {$partita["punti_casa"]} - {$partita["punti_ospite"]}</li>";
                            ?>
                        <?php } ?>
                    </ul>
                </main>
            </div>
        </div>
    </div>
    <!-- SNACK 2-->
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-bg-success p-3">SNACK 2</h2>
                <main>
                    <form action="index.php" method="GET">
                        <input type="text" name="name">
                        <input type="mail" name="mail">
                        <input type="text" name="age">
                        <button class="btn btn-success">Invia</button>
                    </form>
                    <?php
                    if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
                        if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) { ?>
                            <div class="text-success">
                                Accesso riuscito
                            </div>
                        <?php } else { ?>
                            <div class="text-danger">
                                Accesso negato
                            </div>
                        <?php }
                    } ?>
                </main>
            </div>
        </div>
    </div>
    <!-- SNACK BONUS-->
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-bg-primary p-3">SNACK BONUS</h2>
                <main>
                 <?php
                 foreach ($paragrafi as $paragrafo) {
                    echo "<p>" . trim($paragrafo) . "</p>";
                    ?>
                    <?php } ?>
                </main>
            </div>
        </div>
    </div>
</body>
</html>