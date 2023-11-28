<?php
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
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP SNACKS</title>
</head>

<body>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text-bg-danger">SNACK 1</h1>
                <main>
                    <ul class="list-group">
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
</body>

</html>