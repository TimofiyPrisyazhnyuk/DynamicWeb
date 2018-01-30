<!doctype html>
<html lang=ru>
<head>
    <?php
    $title = "Динамический сайт";
    require_once "../blocks/head.php";
//    $news = getNews(3);
    ?>
</head>
<body>
<?php  require_once "../blocks/header.php"?>

<main id="wrapper">
    <div id="leftCol">

        <?php

       /* ini_set("display_errors",1);
        error_reporting(E_ALL);*/
        $news = getNews(3);
        for ($i = 0;$i < count($news); $i++ ){
            if($i == 0){
                echo "<div class=\"bigArticle\">";
            } else {
                echo "<div class=\"article\">";
            }
            echo '<img src="../app/img/article1.png" alt="Bugatti" title="Bugatti">
            <h2>Cnfnmz 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate, ea, eum id illo impedit,
                incidunt libero mollitia nihil ratione recusandae repudiandae saepe similique tenetur voluptatum.
                Atque cum, dolorem eos facere hic inventore ipsam iste laboriosam minus modi nam nesciunt numquam
                odit omnis perspiciatis sit sunt tempore voluptas. Laborum, minima!
            </p>
            <a href=""><span>More</span></a>';
            if( $i == 0){
                echo "<div class=\"clear\"><br></div>";
            }
        }
        ?>
       <!-- <div class="bigArticle">
            <img src="../app/img/article1.png" alt="Bugatti" title="Bugatti">
            <h2>Cnfnmz 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate, ea, eum id illo impedit,
                incidunt libero mollitia nihil ratione recusandae repudiandae saepe similique tenetur voluptatum.
                Atque cum, dolorem eos facere hic inventore ipsam iste laboriosam minus modi nam nesciunt numquam
                odit omnis perspiciatis sit sunt tempore voluptas. Laborum, minima!
            </p>
            <a href=""><span>More</span></a>
        </div>
        <div class="clear"><br></div>
        <div class="article">
            <img src="../app/img/article2.png" alt="Bugatti2" title="Bugatti2">
            <h2>Cnfnmz 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate, ea, eum id illo impedit,
                incidunt libero mollitia nihil ratione.
            </p>
            <a href=""><span>More</span></a>
        </div>
        <div class="article">
            <img src="../app/img/article3.png" alt="Bugatti3" title="Bugatti3">
            <h2>Cnfnmz 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate, ea, eum id illo impedit,
                incidunt libero mollitia nihil ratione.
            </p>
            <a href=""><span>More</span></a>
        </div>-->
    </div>
    <?php  require_once "../blocks/rightCol.php"?>
</main>
<?php  require_once "../blocks/footer.php"?>


</body>
</html>