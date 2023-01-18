<?php

function showAllProfiles()
{
    $mysqli = new mysqli('localhost', 'root', '', 'memorygame');
    $query = "SELECT DISTINCT name FROM topscorers";
    $result = $mysqli->query($query);
    $result = $result->fetch_all();
    return $result;
}

function showProfileRecords($req) {
    $mysqli = new mysqli('localhost', 'root', '', 'memorygame');
    $query = "SELECT name, score, date FROM topscorers WHERE name = '$req' ORDER BY date DESC";
    $result = $mysqli->query($query);
    $result = $result->fetch_all();
    return $result;
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
    <div class="profiles">
        <div class="profiles-container">
            <div class="profiles-container__btns-block">
                <ul>
                    <?php foreach(showAllProfiles() as $key => $val): ?>
                    <li>
                        <form action="" method="post">
                            <input type="submit" name="user" value="<?=$val[0]?>">
                        </form>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="profiles-container__right-block">
                <div class="profiles-container__content-block">
                        <div class="content-block__container">
                            <h2>All score for <u><?=$_POST['user']?></u>:</h2>
                            <?php foreach (showProfileRecords($_POST['user']) as $val): ?>                                
                                <p><?=$val[1]?> points at</p>
                                <p class="date"><i><?=$val[2]?></i></p>
                            <?php endforeach; ?>
                        </div>
                </div>
                <div class="profiles-container__backwards-block">
                    <form action="./index.php" method="post">
                        <input type="submit" value="BACK TO MAIN PAGE">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>