<!doctype html>
<html lang=ru>
<head>
    <?php
    require_once "functions/functions.php";
    $news = getNews(1, $_GET["id"]);
    $title = $news["title"];
    require_once "blocks/head.php";
    ?>
</head>
<body>
<?php  require_once "blocks/header.php"?>

<main id="wrapper">
    <div id="leftCol">
        <?php
            echo '<div class="bigArticle"><img src="../app/img/article'.$news["id"].'.png" alt="Bugatti'.$news["id"].'"
            title="Bugatti'.$news["id"].'">
            <h2>'.$news["title"].'</h2>
            <p>'.$news["full_text"].'
            </p>
            <a href="article.php"><span>More</span></a>
            </div>';
        ?>

    </div>
    <?php  require_once "blocks/rightCol.php"?>
</main>
<?php  require_once "blocks/footer.php"?>
</body>
</html>