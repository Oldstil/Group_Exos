<?php session_start() ?>

<html>
    <head>
        <title>Exo Formulaire Connexion</title>
    </head>
    <body>
<?php
    if(!isset($_SESSION['use']))
        {
            header("Location:form.php");
        }

        echo $_SESSION['use'];
        echo "Login Réussi<br/>";
        echo "<a href='logout.php'>Logout</a>";
?>
</body>
</html>