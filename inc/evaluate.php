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
function evaluateQ1() {
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
      //  echo "\$valueQuestion1 = $valueQuestion1<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion1 = intval($valueQuestion1); 

        if ($valueQuestion1 > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
       // echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}
}
// --  2. Frage -------------------------------------------------------------------------------------------------------
function evaluateQ2() {
if (isset($_SESSION['question-2'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-2'];

    // DEVONLY
   // echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['single-choice'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion2 = $post['single-choice']; 

        // DEVONLY
        //echo "\$val include "inc/evaluate.php";eQuestion2 = $valueQuestion2<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion2 = intval($valueQuestion2); 

        if ($valueQuestion2 == 1) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
       // echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}
}
// --  3. Frage -------------------------------------------------------------------------------------------------------
function evaluateQ3() {
if (isset($_SESSION['question-3'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-3'];

    // DEVONLY
   // echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['range-slider'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion3 = $post['range-slider']; 

        // DEVONLY
       // echo "\$valueQuestion3 = $valueQuestion3<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion3 = intval($valueQuestion3); 

        if ($valueQuestion3 > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
       // echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}
}

// --  4. Frage -------------------------------------------------------------------------------------------------------
function evaluateQ4() {
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
   /* echo "<pre>";
    print_r($array);
    echo "</pre>";*/
    } 
}
}

// --  5. Frage -------------------------------------------------------------------------------------------------------
function evaluateQ5() {
if (isset($_SESSION['question-5'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-5'];

    // DEVONLY
   // echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['range-slider'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion5 = $post['range-slider']; 

        // DEVONLY
       // echo "\$valueQuestion5 = $valueQuestion5<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion5 = intval($valueQuestion5); 

        if ($valueQuestion5 > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
       // echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}
}
// --  6. Frage -------------------------------------------------------------------------------------------------------
function evaluateQ6() {
if (isset($_SESSION['question-6'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-6'];

    // DEVONLY
  // echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['number-text'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion6 = $post['number-text']; 

        // DEVONLY
       // echo "\$valueQuestion6 = $valueQuestion6<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion6 = intval($valueQuestion6); 

        if ($valueQuestion6  > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
       // echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}
}
// --  7. Frage -------------------------------------------------------------------------------------------------------
function evaluateQ7() {
if (isset($_SESSION['question-7'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-7'];

    // DEVONLY
   // echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['number-text'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion7 = $post['number-text']; 

        // DEVONLY
      //  echo "\$valueQuestion7 = $valueQuestion7<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion7 = intval($valueQuestion7); 

        if ($valueQuestion7  > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
        //echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}
}
// --  8. Frage -------------------------------------------------------------------------------------------------------
function evaluateQ8() {
if (isset($_SESSION['question-8'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-8'];

    // DEVONLY
  //  echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['number-text'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion8 = $post['number-text']; 

        // DEVONLY
      //  echo "\$valueQuestion8 = $valueQuestion8<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion8 = intval($valueQuestion8); 

        if ($valueQuestion8  > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
       // echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}
}
// --  9. Frage -------------------------------------------------------------------------------------------------------
function evaluateQ9() {
if (isset($_SESSION['question-9'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-9'];

    // DEVONLY
  //  echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['number-text'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion9 = $post['number-text']; 

        // DEVONLY
      //  echo "\$valueQuestion9 = $valueQuestion9<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion9 = intval($valueQuestion9); 

        if ($valueQuestion9  > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
      //  echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}
}
// --  10. Frage -------------------------------------------------------------------------------------------------------
function evaluateQ10() {

if (isset($_SESSION['question-10'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-10'];

    // DEVONLY
   // echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset()sollst deine Lebesweise überdenken, um deine Gesundheit zu verbessern. den Schlüssel 'range-slider' in $post.
    if (isset($post['number-text'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion10 = $post['number-text']; 

        // DEVONLY
     //   echo "\$valueQuestion10 = $valueQuestion10<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion10 = intval($valueQuestion10); 

        if ($valueQuestion10  > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
      //  echo "\$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

    }
}

function printResult() {
    
    evaluateQ1();
    evaluateQ2();
    evaluateQ3();
    evaluateQ4();
    evaluateQ5();
    evaluateQ6();
    evaluateQ7();
    evaluateQ8();
    evaluateQ9();
    evaluateQ10();
   

    if ($totalPoints > 5) {
        echo "<h3>" . "Deine Gesundheit ist im guten Zustand. Weiter so." ."</h3>";

    }
    else {
        echo "<h3>" . "Du sollst deine Lebesweise überdenken, um deine Gesundheit zu verbessern." ."</3>";
 
    }

}
?>