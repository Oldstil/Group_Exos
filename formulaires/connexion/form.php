<?php session_start() ?>

<?php
    if (isset($_SESSION['use'])) {
        header("Location:index.php");
    }

    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pwd = $_POST['pwd'];

        if ($user == "Oldstil" && $pwd == "kornel")
        {
            $_SESSION['use']="Bonjour maître $user.<br/>";

            echo '<script type="text/javascript">window.open("index.php","_self");</script>';
        } else {
            echo "Mot de passe ou login erroné";
        }
    }
?>

<html>

<head>
    <title>Title</title>
</head>

<body>

    <form action="" method="post">
    Login : <input type="text" name="user"><br/>
    Password : <input type="password" name="pwd"><br/>
    <input type="submit" name="login" value="Submit">
    </form>

</body>

</html>
