<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>Multidimensionale Array</h5>
        <?php
        // Array setzen
        $people = array(
            array("firstName" => "Maria", "lastName" => "Müller", "age" => 42),
            array("firstName" => "Julia", "lastName" => "Meier", "age" => 16),
            array("firstName" => "Nina", "lastName" => "Freiman", "age" => 22),
        );
        // Einzelne Werte abrufen

        // Was ist der "lastName" vom 2. Personen-Datensatz
       $personData = $people[1];
        echo "Als 2.Person auf der Liste ist:<br>";
        print_r($personData);
        echo "<br>";

        $lastName = $personData['lastName'];
        echo "Als zwete Person auf der Liste ist Frau $lastName.<br>";

        // oder in Einem Schritt:
        $lastName = $people[1]['lastName'];
        echo "Als zwete Person auf der Liste ist Frau $lastName.<br>";
        /*
        $name = $people[1]['firstName']['lastName']; 
        echo "Als zwete Person auf der Liste ist Frau $name.<br>"; // funktioniert NICHT!
        */ 

        // Achtung! Prüfen, ob ein Schlüssel überhaupt existiert: isset().
        $x = 0;
        $y = 'lastName';
        if (isset($people[$x]) && isset($people[$x][$y])) {
            $lastName = $people[$x][$y];
            echo "'lastName' aus x und y ist $lastName.<br>";
        }
        else {
            // Schlüssel $x oder $y ist NICHT $people.
        }
       
        

        // Array in Seite ausgeben
        echo "<pre>";
        print_r($people);
        echo "</pre>";

        // Alle Werte im Array auflisten
        for ($i = 0; $i < count($people); $i++) {
            $personData = $people[$i];

            $firstName = $personData['firstName'];
            $lastName = $personData['lastName'];
            $age = $personData['age'];

            echo "$firstName $lastName ist $age Jahre alt.<br>";

        }
        
       

        // Finde heraus, ob sich "Petra" auf der People iste befindet.
       
       

        ?>
</body>
</html>   