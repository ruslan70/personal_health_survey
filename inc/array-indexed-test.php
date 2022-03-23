<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>Indexierte Array</h5>
        <?php
        // Array setzen
        $people = array("Petra", " Maria", "Nina", "Julia");

        // Einzelne Werte abrufen
        $name = $people[2]; // Nina
        echo "An dritter Position ist $name.<br>";
            // oder
        $i = 2;
        $name2 =$people[$i];
        echo "An dritter Position ist $name2.";

        // Array in Seite ausgeben
        echo "<pre>";
        print_r($people);
        echo "</pre>";

        // Alle Werte im Array auflisten
        for ($i = 0; $i < count($people); $i++) {    //  i++ ist daselbe wie $i = $i + 1
            $name = $people[$i];
            echo "An $i-ter Position ist $name.<br>";
        }

        // Finde heraus, ob sich "Peter" auf der People iste befindet.
        $name = "Petra";

       
        for ($i = 0; $i < count($people); $i++) {    
            if ($people[$i] === $name) {
            echo "Ja, $name ist dabei.<br>";
            }
        
        }
        ?>
</body>
</html>                
         
