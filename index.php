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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <main class="container">
        <h1 class="fw-bold text-center my-5">PHP HOTELS</h1>

    <!--<ul>
            <?php foreach ( $hotels as $hotel ){?>
                <li>
                    <h2 class="fw-bold fs-4 mb-3"> <?= $hotel["name"]; ?> </h2>
                    <p class="ms-5"> <?= $hotel["description"]; ?> </p>
                    <p class="ms-5"> 
                        <?php  
                            if ($hotel["parking"]){
                                echo "l'hotel HA parcheggio";
                            } else {
                                echo "l'hotel NON HA parcheggio";
                            }
                        ?> 
                    </p>
                    <p class="ms-5"> <?= "l'hotel ha : " . $hotel["vote"] . " stelle su 5" ?> </p>
                    <p class="ms-5"> <?= "l'hotel dista dal centro : " . $hotel["distance_to_center"] . " km"  ?> </p>
                </li>
            <?php }?>
        </ul> -->
        
        <table class="table">

            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance To Center</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ( $hotels as $hotel ){?>
                    <tr>
                        <td class="fw-bold"> <?= $hotel["name"]; ?> </td>
                        <td> <?= $hotel["description"]; ?> </td>
                        <td> 
                            <?php  
                                if ($hotel["parking"]){
                                    echo "l'hotel HA parcheggio";
                                } else {
                                    echo "l'hotel NON HA parcheggio";
                                }
                            ?> 
                        </td>
                        <td> <?= "l'hotel ha : " . $hotel["vote"] . " stelle su 5" ?> </td>
                        <td> <?= "l'hotel dista dal centro : " . $hotel["distance_to_center"] . " km"  ?> </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </main>
</body>
</html>