<h1>Meine Website</h1>

<h2>Kontakt</h2>

<?php
    if (false) {
        echo '<p>Vielen Dank für Ihre Nachricht!</p>';
    }
?>

<form action="kontakt.php" method="post">
    <label for="absender_adresse">Ihre E-Mail-Adresse:</label>
    <input type="text" name="absender_adresse" id="absender_adresse"/>
    <br>

    <label for="absender_name">Ihr Name:</label>
    <input type="text" name="absender_name" id="absender_name"/>
    <br>

    <label for="message">Ihre Nachricht an uns:</label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <br>

    <input type="submit"/>
</form>
