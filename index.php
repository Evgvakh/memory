<?php
error_reporting(E_ERROR | E_PARSE);

if(isset($_SESSION)) {
    session_unset();
    session_destroy();
    session_abort();
    session_register_shutdown();    
} else {
    if (isset($_POST['start']) && (int) $_POST['start'] >= 2 && (int) $_POST['start'] <= 12) {
        session_start();
        $_SESSION['pairNmbr'] = (int) $_POST['start'];
        header('Location: jeu.php');    
    } 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="homepage">
        <div class="homepage-container">
            <h1>Memory Game</h1>
            <?php if (isset($_POST['start']) && (gettype($_POST['start']) != 'integer' || $_POST['start'] > 12 || $_POST['start'] < 2)): ?>
            <p><i>Please type a number between 2 and 12</i></p>
            <?php endif;?>
            <h2>Choose a quantity of pairs (12 max.)</h2>
            <form action="" method="post">
                <input type="text" name="start" class="restart">
                <input type="submit" value="START GAME" class="restart">
            </form>
        </div>
    </div>
</body>
</html>
