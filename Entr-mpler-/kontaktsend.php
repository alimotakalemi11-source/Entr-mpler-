<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $telefon = $_POST["number"];
    $email = $_POST["email"];
    $strasse = $_POST["strasse"];
    $ort = $_POST["location"];
    $art = $_POST["art"];
    $groesse = $_POST["groesse"];
    $stockwerk = $_POST["stockwerk"];
    $termin = $_POST["wunschtermin"];
    $nachricht = $_POST["nachricht"];

    $empfaenger = "info@xn--entrmpler-profis-mzb.de";
    $betreff = "Neue Anfrage über das Kontaktformular";

    $text = "
Name: $name

Telefon: $telefon

E-Mail: $email

Straße: $strasse

PLZ & Ort: $ort

Art: $art

Objektgröße: $groesse

Stockwerk: $stockwerk

Wunschtermin: $termin

Nachricht:
$nachricht
";

    $header = "From: info@xn--entrmpler-profis-mzb.de\r\n";
    $header .= "Reply-To: $email\r\n";

    /*if (mail($empfaenger, $betreff, $text, $header)) {
        echo "Nachricht erfolgreich gesendet.";
    } else {
        echo "Fehler beim Senden.";
    }*/
    if (mail($empfaenger, $betreff, $text, $header)) {
    header("Location: danke.html");
    exit;
} else {
    echo "Fehler beim Senden. Bitte versuchen Sie es später erneut.";
}
}
?>