<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

// visualizzo le informazioni dell'array
#var_dump($hotels);


// cilco per stampare informazioni degli array
/*foreach($hotels as $hotel_class) {
   foreach($hotel_class as $hotel) {
    echo $hotel;
   }
}*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1>PHP Hotel</h1>
        <div class="d-flex justify-content-center">
            <table class="table bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Parcheggio</th>
                        <th>Voto</th>
                        <th>Distaza dal centro</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- apro tag php -->
                    <?php
                    // itero attraverso l'arrey per creare contenuto della tabella 
                    foreach ($hotels as $hotel) {
                        echo "<tr>";
                        echo "<td>{$hotel['name']}</td>";
                        echo "<td>{$hotel['description']}</td>";
                        echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
                        echo "<td>{$hotel['vote']}</td>";
                        echo "<td>{$hotel['distance_to_center']} km</td>";
                        echo "</tr>";
                    }
                    ?>
                    <!-- chiusura tag php -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
