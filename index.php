<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>

<body>

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

    <main>
        <div class="hotel">
            <p>
                <?php
                echo $hotels[0]["name"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[0]["description"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[0]["parking"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[0]["vote"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[0]["distance_to_center"];
                ?>
            </p>
        </div>

        <div class="hotel">
            <p>
                <?php
                echo $hotels[1]["name"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[1]["description"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[1]["parking"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[1]["vote"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[1]["distance_to_center"];
                ?>
            </p>
        </div>

        <div class="hotel">
            <p>
                <?php
                echo $hotels[2]["name"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[2]["description"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[2]["parking"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[2]["vote"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[2]["distance_to_center"];
                ?>
            </p>
        </div>

        <div class="hotel">
            <p>
                <?php
                echo $hotels[3]["name"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[3]["description"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[3]["parking"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[3]["vote"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[3]["distance_to_center"];
                ?>
            </p>
        </div>

        <div class="hotel">
            <p>
                <?php
                echo $hotels[4]["name"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[4]["description"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[4]["parking"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[4]["vote"];
                ?>
            </p>
            <p>
                <?php
                echo $hotels[4]["distance_to_center"];
                ?>
            </p>
        </div>
    </main>

</body>

</html>