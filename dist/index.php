<!doctype html>
<html lang=ru>
<head>
    <?php
    require_once "functions/functions.php";
    $title = "Динамический сайт";
    require_once "blocks/head.php";
    $news = getNews(3,0);
    ?>
</head>
<body>
<?php  require_once "blocks/header.php"?>

<main id="wrapper">
    <div id="leftCol">
        <?php
        for ($i = 0;$i < count($news); $i++ ){
            if($i == 0)
                echo "<div class=\"bigArticle\">";
            else
                echo "<div class=\"article\">";
            echo '<img src="../app/img/article'.$news[$i]["id"].'.png" alt="Bugatti'.$news[$i]["id"].'" 
            title="Bugatti'.$news[$i]["id"].'">
            <h2>'.$news[$i]["title"].'</h2>
            <p>'.$news[$i]["intro_text"].'
            </p>
            <a href="article.php?id='.$news[$i]["id"].'"><span>More</span></a>
            </div>';
            if( $i == 0)
                echo "<div class=\"clear\"><br></div>";
        }
        ?>
    </div>
    <?php  require_once "blocks/rightCol.php"?>
</main>
<?php  require_once "blocks/footer.php"?>
</body>
</html>