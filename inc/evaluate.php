<?php
/*
    Frage 1 'index'

    [index] => Array
        (
            [range-slider] => 4
            [lastPageID] => index
            [range-slider-changed] => 1
    )

    Achtung: Zuerst prüfen, ob ein Schlüssel-Wert überhaupt gesetzt ist,
             sonst reagiert PHP mit einem Fehler.

             Die Funktion dazu: isset()

    Der Range Slider liefert Dezimalwerte von 0 bis 5 - als String, wie
    zum Beispiel "2.5".

    Ich benötige nur ganze Zahlen, also brauche ich die Funktion intval().
*/
$totalPoints = 0;

// --  1. Frage -------------------------------------------------------------------------------------------------------

if (isset($_SESSION['index'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['index'];

    // DEVONLY
    echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['range-slider'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion1 = $post['range-slider']; 

        // DEVONLY
        echo "\$valueQuestion1 = $valueQuestion1<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion1 = intval($valueQuestion1); 

        if ($valueQuestion1 > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}
// --  2. Frage -------------------------------------------------------------------------------------------------------

if (isset($_SESSION['question-2'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-2'];

    // DEVONLY
    echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['single-choice'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion2 = $post['single-choice']; 

        // DEVONLY
        echo "\$valueQuestion2 = $valueQuestion2<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion2 = intval($valueQuestion2); 

        if ($valueQuestion2 == 1) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}

// --  3. Frage -------------------------------------------------------------------------------------------------------

if (isset($_SESSION['question-3'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-3'];

    // DEVONLY
    echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['range-slider'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion3 = $post['range-slider']; 

        // DEVONLY
        echo "\$valueQuestion3 = $valueQuestion3<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion3 = intval($valueQuestion3); 

        if ($valueQuestion3 > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}


// --  4. Frage -------------------------------------------------------------------------------------------------------

if (isset($_SESSION['question-4'])) {
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-4'];

    if (isset($post['checkboxValues'])) {

    // Liste der gewählten Checkboxen als String.
    $checkboxValues = $post['checkboxValues'];

    // Kovertiere String zum Array.
    $array = explode(',', $checkboxValues);
    
   /* if  (in_array('Kampfsport', $array, true)) {
        // DEVONLY 
        echo "Yes ! You are ...<br>";
    }*/
    // DEVONLY 
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    } 
}


// --  5. Frage -------------------------------------------------------------------------------------------------------

if (isset($_SESSION['question-5'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-5'];

    // DEVONLY
    echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['range-slider'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion5 = $post['range-slider']; 

        // DEVONLY
        echo "\$valueQuestion5 = $valueQuestion5<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion5 = intval($valueQuestion5); 

        if ($valueQuestion5 > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}

// --  2. Frage -------------------------------------------------------------------------------------------------------

if (isset($_SESSION['question-6'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-6'];

    // DEVONLY
    echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['number-text'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion6 = $post['number-text']; 

        // DEVONLY
        echo "\$valueQuestion6 = $valueQuestion6<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion6 = intval($valueQuestion6); 

        if ($valueQuestion6  > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}


?>