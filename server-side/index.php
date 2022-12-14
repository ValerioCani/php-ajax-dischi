<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>php-ajax-dischi</title>
</head>
<body>
    <header>
        <img src="../img/logo-small.svg" alt="">
    </header>
    <main>
        <section>
            <?php
                include __DIR__ . '/../database.php';
                foreach($database as $album){
                    echo    "<div class='card'>".
                                "<img src='".$album['poster']."' alt='".$album['genre']."'>".
                                "<h2>".$album['title']."</h2>".
                                "<p>".$album['author']."</p>".
                                "<p>".$album['year']."</p>".
                            "</div>";
                }
            ?>
        </section>
    </main>
</body>
</html>