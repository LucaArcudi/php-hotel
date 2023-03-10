<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
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
    $hotelKeys = array_keys($hotels[0]);

    $userParkingChoice = $_GET["parking-filter"];
    var_dump($userParkingChoice);

    ?>

    <main>
        <!-- <div class="hotel">
            <p>
                <?php
                echo "{$hotelKeys[0]}: {$hotels[0]["name"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[1]}: {$hotels[0]["description"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[2]}: {$hotels[0]["parking"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[3]}: {$hotels[0]["vote"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[4]}: {$hotels[0]["distance_to_center"]}";
                ?>
            </p>
        </div>

        <div class="hotel">
            <p>
                <?php
                echo "{$hotelKeys[0]}: {$hotels[1]["name"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[1]}: {$hotels[1]["description"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[2]}: {$hotels[1]["parking"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[3]}: {$hotels[1]["vote"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[4]}: {$hotels[1]["distance_to_center"]}";
                ?>
            </p>
        </div>

        <div class="hotel">
            <p>
                <?php
                echo "{$hotelKeys[0]}: {$hotels[2]["name"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[1]}: {$hotels[2]["description"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[2]}: {$hotels[2]["parking"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[3]}: {$hotels[2]["vote"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[4]}: {$hotels[2]["distance_to_center"]}";
                ?>
            </p>
        </div>

        <div class="hotel">
            <p>
                <?php
                echo "{$hotelKeys[0]}: {$hotels[3]["name"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[1]}: {$hotels[3]["description"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[2]}: {$hotels[3]["parking"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[3]}: {$hotels[3]["vote"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[4]}: {$hotels[3]["distance_to_center"]}";
                ?>
            </p>
        </div>

        <div class="hotel">
            <p>
                <?php
                echo "{$hotelKeys[0]}: {$hotels[4]["name"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[1]}: {$hotels[4]["description"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[2]}: {$hotels[4]["parking"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[3]}: {$hotels[4]["vote"]}";
                ?>
            </p>
            <p>
                <?php
                echo "{$hotelKeys[4]}: {$hotels[4]["distance_to_center"]}";
                ?>
            </p>
        </div> -->

        <form action="./index.php" method="GET">
            <fieldset>
                <legend>Parking</legend>
                <input type="radio" name="parking-filter" value="Si">
                <label for="css">Si</label><br>
                <input type="radio" name="parking-filter" value="No">
                <label for="javascript">No</label>
            </fieldset>
            <button type="submit">CERCA</button>
        </form>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">
                        <img src="./img/hotel-icon.webp" alt="hotel icon">
                    </th>
                    <th scope="col">
                        <?php echo ucfirst($hotelKeys[0]); ?>
                    </th>
                    <th scope="col">
                        <?php echo ucfirst($hotelKeys[1]); ?>
                    </th>
                    <th scope="col">
                        <?php echo ucfirst($hotelKeys[2]); ?>
                    </th>
                    <th scope="col">
                        <?php echo ucfirst($hotelKeys[3]); ?>
                    </th>
                    <th scope="col">
                        <?php echo ucfirst(str_replace("_", " ", $hotelKeys[4],)); ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <?php echo $hotels[0]["name"]; ?>
                    </td>
                    <td>
                        <?php echo $hotels[0]["description"]; ?>
                    </td>
                    <td>
                        <?php if ($hotels[0]["parking"] == 1) {
                            echo "Si";
                        } else {
                            echo "No";
                        }
                        ?>
                    </td>
                    <td>
                        <?php echo "{$hotels[0]["vote"]}/5"; ?>
                    </td>
                    <td>
                        <?php echo "{$hotels[0]["distance_to_center"]} km"; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>
                        <?php echo $hotels[1]["name"]; ?>
                    </td>
                    <td>
                        <?php echo $hotels[1]["description"]; ?>
                    </td>
                    <td>
                        <?php if ($hotels[1]["parking"] == 1) {
                            echo "Si";
                        } else {
                            echo "No";
                        }
                        ?>
                    </td>
                    <td>
                        <?php echo "{$hotels[1]["vote"]}/5"; ?>
                    </td>
                    <td>
                        <?php echo "{$hotels[1]["distance_to_center"]} km"; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>
                        <?php echo $hotels[2]["name"]; ?>
                    </td>
                    <td>
                        <?php echo $hotels[2]["description"]; ?>
                    </td>
                    <td>
                        <?php if ($hotels[2]["parking"] == 1) {
                            echo "Si";
                        } else {
                            echo "No";
                        }
                        ?>
                    </td>
                    <td>
                        <?php echo "{$hotels[2]["vote"]}/5"; ?>
                    </td>
                    <td>
                        <?php echo "{$hotels[2]["distance_to_center"]} km"; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>
                        <?php echo $hotels[3]["name"]; ?>
                    </td>
                    <td>
                        <?php echo $hotels[3]["description"]; ?>
                    </td>
                    <td>
                        <?php if ($hotels[3]["parking"] == 1) {
                            echo "Si";
                        } else {
                            echo "No";
                        }
                        ?>
                    </td>
                    <td>
                        <?php echo "{$hotels[3]["vote"]}/5"; ?>
                    </td>
                    <td>
                        <?php echo "{$hotels[3]["distance_to_center"]} km"; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>
                        <?php echo $hotels[4]["name"]; ?>
                    </td>
                    <td>
                        <?php echo $hotels[4]["description"]; ?>
                    </td>
                    <td>
                        <?php if ($hotels[4]["parking"] == 1) {
                            echo "Si";
                        } else {
                            echo "No";
                        }
                        ?>
                    </td>
                    <td>
                        <?php echo "{$hotels[4]["vote"]}/5"; ?>
                    </td>
                    <td>
                        <?php echo "{$hotels[4]["distance_to_center"]} km"; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

</body>

</html>