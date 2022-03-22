# personal_health_survey
// Eine Demo-Online-Umfrage, die Fragen zur persönlichen Gesundheit des aktuellen Besuchers stellt und schließlich Feedback oder Empfehlungen zu den gegebenen Informationen gibt.
// Mehrere VS Code Projekte nebeneinander im Browser anzeigen
Wichtig: Jedes VS Code Projekt mit PHP muss unter unterschiedlicher Port-Nummer laufen! Jeweils Einstellung in VS Code vornehmen unter “Settings > Workspace > Phpserver:Port”
Layout der Startseite in PHP Includes zerlegen
Submit  => Validierung mit JavaScript //(function validateQuestion(inputID, radioName) {
    // MUSS FÜR VERSCHIEDENE TYPEN VON INPUT FELDERN FUNKTIONIEREN.
    let inputElement = document.getElementById(inputID);)
    Für den Slider: //(if (inputElement.type === 'range') {
        // Prüfe, ob der Range Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Position des Sliders.");
            return false;
        })
    Für Checkboxen: // Validierung Checkboxen (// sammeln alle werte der ausgewählten (checked) Checkboxen.
    // (Bento-Box) CSS Selector !!! // Falls keine Checkbox gewält wurde sit array === []. // Checkbox wurde(n) gewählt: Setzte Liste in ein 'hidden' Inputfeld
    // value muss ein String sein, also muss array in einen String konveriert werden.)
Submit => Warnung mit JavaScript (kein Alert, sondern generierter Text in <p> Tag)
Namen der aktuellen Seite in verstecktem Formularfeld eintragen
// Benutzer-Antworten zwischenspeichern mit PHP
mit $_POST, $_SESSION, assoziativen Arrays : Achtung: Zuerst prüfen, ob ein Schlüssel-Wert überhaupt gesetzt ist,
             sonst reagiert PHP mit einem Fehler.

             Die Funktion dazu: isset()

    Der Range Slider liefert Dezimalwerte von 0 bis 5 - als String, wie
    zum Beispiel "2.5".

    Ich benötige nur ganze Zahlen, also brauche ich die Funktion intval(). // Hole die POST-Werte aus der $_SESSION.
  
