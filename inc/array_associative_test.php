<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>Assoziative Array</h5>
        <?php
        // Array setzen (Namen - Alter)
        $persons = array(
            "Petra" => 34, 
            "Maria" => 42, 
            "Nina" => 18, 
            "Julia" => 16
        );

        $persons["Olga"] = 22; // Man kann danach weitere person hinzufügen

        // Einzelne Werte abrufen
        $age = $persons["Nina"]; 
        echo "Nina ist $age Jahre alt.<br>";

            // oder zusammen mit dem Alter
       
        $name = "Maria";
        $age = $persons[$name];
        echo "$name ist $age Jahre alt.<br>";

        // Array in Seite ausgeben
        echo "<pre>";
        print_r($persons);
        echo "</pre>";

        // Alle Werte im Array auflisten: foreach()
        // 1. Variable für den Array ($person)
        // 2. Variable für einen Schlüssel ($name)
        // 3. Variable für einen Wert, der zum Schlüssel gehört ($age)
        foreach ($persons as $name => $age) {     
            echo "$name ist $age Jahre alt.<br>";
            
        }    
     
       // Liste aller Personen auf, die jünger als 20 Jahre alt sind.

        foreach ($persons as $name => $age) { 
            if($age < 20) {  
            echo "<br>$name ist  $age Jahre alt und jünger als 20 Jahre.<br>";
            }    
    }  

       

        ?>
</body>
</html>                
         