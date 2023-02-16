<?php
session_start();
?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">  
        <title>Super strona</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="container"> 
        <div id="header">
            <div id="menu">
            <div class="button"><br><a href="login.php">Zaloguj się</a></div>
            <div class="button"><br><a href="signup.php">zarejestruj się</a></div>
</div>
        </div>
        <div id="main">
            <div id="form">
                
            <form action="includes/signup.inc.php" method="post"><br>
            <h1>Załóż konto </h1><br>
                <input type="text" name="name" placeholder="Imię..."><br>
                <input type="text" name="LastName" placeholder="Nazwisko..."><br>
                <input type="text" name="UserName" placeholder="UserName..."><br>
                <input type="text" name="email" placeholder="Email"><br>
                <input type="password" name="password" placeholder="hasło"><br>
                <input type="password" name="RepeatPwd" placeholder="Powtórz hasło"><br>
                <button type="submit" name="submit" id="przycisk">zarejestruj się</button>
            </form>
</div>
            <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"]=="emptyinput") {
            echo "<p> Wypełnij wszystkie pola! </p>";
        }
        else if ($_GET["error"]=="InvalidUid") {
            echo "<p> Niepoprawny nick </p>";
        }
        else if ($_GET["error"]=="InvalidEmail") {
            echo "<p> Niepoprawny email </p>";
        }
        else if ($_GET["error"]=="PasswordsDontMatch") {
            echo "<p> Hasło się nie zgadza </p>";
        }
        else if ($_GET["error"]=="UsernameTaken") {
            echo "<p> Nazwa jest już zajęta </p>";
        }
        elseif ($_GET["error"]=="none") {
            echo "<p>udało ci się zarejestrować</p>";
        }
    }
    
    ?>


    </body>
</html>