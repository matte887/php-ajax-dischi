<?php
require __DIR__ . "/../common-files/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <!-- My style -->
    <link rel="stylesheet" href="../common-files/css/style.css">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header>
        <img src="../common-files/img/spotify.png" alt="">
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 g-5 my-5">
                <?php 
                foreach($database as $album) { ?>
                    <div class="col">
                        <div class="my-card text-center py-4">
                            <img src="<?php echo $album["poster"] ?>" alt="" />
                            <h3 class="py-3 text-uppercase"><?php echo $album["title"] ?></h3>
                            <span class="text-secondary"><?php echo $album["author"] ?></span>
                            <span class="text-secondary"><?php echo $album["year"] ?></span>
                        </div>
                    </div>                    
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>